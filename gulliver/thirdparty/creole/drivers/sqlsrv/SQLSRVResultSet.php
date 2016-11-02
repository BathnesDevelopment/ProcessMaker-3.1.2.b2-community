<?php
/*
 *  $Id: MSSQLResultSet.php 2016-10-17 
 *	Bespoke Creole extension to use sqlsrv.dll
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the LGPL. For more information please see
 * <http://creole.phpdb.org>.
 */

require_once 'creole/drivers/mssql/MSSQLResultSet.php';

/**
 * MSSQL implementation of ResultSet.
 *
 * MS SQL does not support LIMIT or OFFSET natively so the methods
 * in here need to perform some adjustments and extra checking to make sure
 * that this behaves the same as RDBMS drivers using native OFFSET/LIMIT.
 *
 * @author     Andrew Brown 
 * @author    Hans Lellelid <hans@xmpl.org>
 * @version   $Revision: 1.21 $
 * @package   creole.drivers.sqlsrv
 */
class SQLSRVResultSet extends MSSQLResultSet {    
    /**
     * Offset at which to start reading rows.
     * @var int
     */
    private $offset = 0;
    
    /**
     * Maximum rows to retrieve, or 0 if all.
     * @var int
     */
    private $limit = 0;   
    
    /**
     * Index result set by field name.
     */
    const FETCHMODE_ASSOC = SQLSRV_FETCH_ASSOC;

    /**
     * Index result set numerically.
     */
    const FETCHMODE_NUM = SQLSRV_FETCH_NUMERIC;
    /**
     * @see ResultSet::seek()
     */ 
    function seek($rownum)
    {
        // support emulated OFFSET
        $actual = $rownum + $this->offset;
        
        if (($this->limit > 0 && $rownum >= $this->limit) || $rownum < 0) {
                    // have to check for rownum < 0, because mssql_seek() won't
                    // complain if the $actual is valid.
            return false;
        }
                
        // MSSQL rows start w/ 0, but this works, because we are
        // looking to move the position _before_ the next desired position
         if (!@sqlsrv_fetch_array($this->result, $this->fetchmode, $actual)) {
                return false;
        }

        $this->cursorPos = $rownum;
        return true;
    }
	
	/**
     * @see ResultSet::next()
     */
    function next()
    {
        // support emulated LIMIT
        if ( $this->limit > 0 && ($this->cursorPos >= $this->limit) ) {
            $this->afterLast();
            return false;
        }
        if ($this->result === true ) {
        	return false;
        }
        
        $this->fields = sqlsrv_fetch_array($this->result, $this->fetchmode);        
                
        if (!$this->fields) {
            if (is_array($this->sqlsrv_get_last_message())) {
                throw new SQLException("Error fetching result", $this->sqlsrv_get_last_message());
             } else {
                // We've advanced beyond end of recordset.
                $this->afterLast();
                return false;
             }          
        }
        
        if ($this->fetchmode === ResultSet::FETCHMODE_ASSOC && $this->lowerAssocCase) {
            $this->fields = array_change_key_case($this->fields, CASE_LOWER);
        }
        
        // Advance cursor position
        $this->cursorPos++;
        return true;
    }
    
    /**
     * @see ResultSet::getRecordCount()
     */
    function getRecordCount()
    {
        $rows = @sqlsrv_num_rows($this->result);
        if ($rows === null) {
            throw new SQLException('Error getting record count', $this->sqlsrv_get_last_message());
        }
        // adjust count based on emulated LIMIT/OFFSET
        $rows -= $this->offset;
        return ($this->limit > 0 && $rows > $this->limit ? $this->limit : $rows);
    }

    /**
     * @see ResultSet::close()
     */ 
    function close()
    {
        $ret = @sqlsrv_free_stmt($this->result);
        $this->result = false;
        $this->fields = array();
        $this->limit = 0;
        $this->offset = 0;        
    }
    /**
     * Gets first error message from sqlsrv_errors.
     * 
     * @return string
     */
    function sqlsrv_get_last_message()
    {
        $ret = "";
        $errors = sqlsrv_errors();
        if(is_array($errors)) {
            $ret = $errors[0]['message'];
        }
        return $ret;
    }
}
