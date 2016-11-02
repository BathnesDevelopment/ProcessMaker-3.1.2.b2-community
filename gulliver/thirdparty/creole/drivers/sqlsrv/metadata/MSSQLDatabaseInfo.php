<?php
/*
 *  $Id: MSSQLDatabaseInfo.php,v 1.11 2006/01/17 19:44:39 hlellelid Exp $
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

require_once 'creole/metadata/DatabaseInfo.php';

/**
 * SQLSRV impementation of DatabaseInfo.
 *
 * @author    Andrew Brown
 * @author    Hans Lellelid
 * @version   $Revision: 1.11 $
 * @package   creole.drivers.mssql.metadata
 */ 
class SQLSRVDatabaseInfo extends DatabaseInfo {
    /* Andrew Brown TODO - this class is not done */
	
    /**
     * @throws SQLException
     * @return void
     */
    protected function initTables()
    {
        include_once 'creole/drivers/sqlsrv/metadata/SQLSRVTableInfo.php';
        
        $dsn = $this->conn->getDSN();
        
        
        if (!$this->conn->database) {
            throw new SQLException('No database selected');
        }
             
        $result = @sqlsrv_query("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_NAME <> 'dtproperties'", $this->conn->getResource());
    
        if (!$result) {
            throw new SQLException("Could not list tables", $this->sqlsrv_get_last_message());            
        }
        
        while ($row = sqlsrv_fetch_array($result)) {
            $this->tables[strtoupper($row[0])] = new SQLSRVTableInfo($this, $row[0]);            
        }
    }            
    
    /**
     * 
     * @return void 
     * @throws SQLException
     */
    protected function initSequences()
    {
        // there are no sequences -- afaik -- in MSSQL.
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
