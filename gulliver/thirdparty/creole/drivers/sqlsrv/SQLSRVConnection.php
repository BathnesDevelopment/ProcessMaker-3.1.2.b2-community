<?php

/*
 *  $Id: MSSQLConnection.php 2016-10-17 
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


include_once 'creole/drivers/mssql/MSSQLConnection.php';
include_once 'creole/drivers/sqlsrv/SQLSRVResultSet.php';

/**
 * MS SQL Server implementation of Connection.
 * 
 * If you have trouble with BLOB / CLOB support
 * --------------------------------------------
 * 
 * You may need to change some PHP ini settings.  In particular, the following settings
 * set the text size to maximum which should get around issues with truncated data:
 * <code>
 *  ini_set('mssql.textsize', 2147483647);
 *  ini_set('mssql.textlimit', 2147483647);
 * </code>
 * We do not set these by default (anymore) because they do not apply to cases where MSSQL
 * is being used w/ FreeTDS.
 *
 * @author     Andrew Brown
 * @author    Hans Lellelid <hans@xmpl.org>
 * @author    Stig Bakken <ssb@fast.no> 
 * @author    Lukas Smith
 * @version   $Revision: 1.25 $
 * @package   creole.drivers.mssql
 */ 
class SQLSRVConnection extends MSSQLConnection {        
    
    /** Current database (used in mssql_select_db()). */
    private $database;
    
    /**
     * @see Connection::connect()
     */
    function connect($dsninfo, $flags = 0)
    {                
        if (!extension_loaded('sqlsrv') && !extension_loaded('sybase') && !extension_loaded('sybase_ct')) {
            throw new SQLException('sqlsrv extension not loaded');
        }

        $this->dsn = $dsninfo;
        $this->flags = $flags;
                
        $persistent = ($flags & Creole::PERSISTENT === Creole::PERSISTENT);

        $user = $dsninfo['username'];
        $pw = $dsninfo['password'];
        $dbhost = $dsninfo['hostspec'] ? $dsninfo['hostspec'] : 'localhost';
		
        /**
         * MSSQL (http://php.net/manual/en/intro.mssql.php)
         * These functions allow you to access MS SQL Server database. 
         * This extension is not available anymore on Windows with PHP 5.3 or later. 
         * SQLSRV, an alternative extension for MS SQL connectivity is available from 
         * Microsoft: Â» http://msdn.microsoft.com/en-us/sqlserver/ff657782.aspx.
         * http://blogs.msdn.com/b/brian_swan/archive/2010/03/08/mssql-vs-sqlsrv-what-s-the-difference-part-1.aspx
         * 
         * Alternatively to use the mssql functions in Windows, use php_dblib.dll (FreeTDS) http://www.freetds.org/
         * e.g. php.ini setting
         * extension=php_dblib.dll
         * 
         * php_dblib.dll (FreeTDS) use ':' as the delimiter in all installations.
         */
        /*
		if (PHP_OS == "WINNT" || PHP_OS == "WIN32") {
            $portDelimiter = ",";
        } else {
            $portDelimiter = ":";
        }
        */
        $portDelimiter = ", ";

          if(!empty($dsninfo['port'])) {
                  $dbhost .= $portDelimiter.$dsninfo['port'];
          } else {
            if(!strpos($dbhost, "\\")){
                  $dbhost .= $portDelimiter.'1433';
            }
          }
          if($dsninfo['phptype'] == 'sqlsrv')
          {
              $connect_function = 'sqlsrv_connect';
          }else{
            $connect_function = $persistent ? 'mssql_pconnect' : 'mssql_connect';
          }

        if ($dbhost && $user && $pw && $dsninfo['database']) {
			$params = array("Database" => $dsninfo['database'], "UID" => $user, "PWD" => $pw);
            $conn = @$connect_function($dbhost, $params);
			$this->database = $dsninfo['database'];
        }
        if (!$conn) {
            throw new SQLException('connect failed', $this->sqlsrv_get_last_message());
        }
		
        $this->dblink = $conn;        
    }    
    
    /**
     * @see Connection::getDatabaseInfo()
     */
    public function getDatabaseInfo()
    {
        require_once 'creole/drivers/mssql/metadata/MSSQLDatabaseInfo.php';
        return new MSSQLDatabaseInfo($this);
    }
    
     /**
     * @see Connection::getIdGenerator()
     */
    public function getIdGenerator()
    {
        require_once 'creole/drivers/mssql/MSSQLIdGenerator.php';
        return new MSSQLIdGenerator($this);
    }
    
    /**
     * @see Connection::prepareStatement()
     */
    public function prepareStatement($sql) 
    {
        require_once 'creole/drivers/mssql/MSSQLPreparedStatement.php';
        return new MSSQLPreparedStatement($this, $sql);
    }
    
    /**
     * @see Connection::createStatement()
     */
    public function createStatement()
    {
        require_once 'creole/drivers/mssql/MSSQLStatement.php';
        return new MSSQLStatement($this);
    }
    
    /**
     * Returns false since MSSQL doesn't support this method.
     */
    public function applyLimit(&$sql, $offset, $limit)
    {
        return false;
    }
    
    /**
     * @see Connection::close()
     */
    function close()
    {
        $ret = @sqlsrv_close($this->dblink);
        $this->dblink = null;
        return $ret;
    }
    
    /**
     * @see Connection::executeQuery()
     */
    function executeQuery($sql, $fetchmode = null)
    {            
        $this->lastQuery = $sql;
        if (!$this->dblink) {
            throw new SQLException('No database connection');
        }  
        if (!$this->database) {
            throw new SQLException('No database selected');
        }
        $result = @sqlsrv_query($this->dblink, $sql, array(), array( "Scrollable" => 'static' ));
        if (!$result) {
            throw new SQLException('Could not execute query', $this->sqlsrv_get_last_message());
        }
        if(!is_null($fetchmode)) {
            if($fetchmode === 1)
                $fetchmode = SQLSRV_FETCH_ASSOC;
            elseif($fetchmode == 2)
                $fetchmode = SQLSRV_FETCH_NUMERIC;
            else
                $fetchmode = SQLSRV_FETCH_BOTH;
        }
        return new SQLSRVResultSet($this, $result, $fetchmode);
    }

    /**
     * @see Connection::executeUpdate()
     */
    function executeUpdate($sql)
    {    
        
        $this->lastQuery = $sql;
        if (!$this->dblink) {
            throw new SQLException('No database connection');
        }  
        if (!$this->database) {
            throw new SQLException('No database selected');
        }
        
        $result = @mssql_query($sql, $this->dblink);
        if (!$result) {
            throw new SQLException('Could not execute update', $this->sqlsrv_get_last_message(), $sql);
        }
        
        return (int) mssql_rows_affected($this->dblink);
        // return $this->getUpdateCount();
    }

    /**
     * Start a database transaction.
     * @throws SQLException
     * @return void
     */
    protected function beginTrans()
    {
        $result = @sqlsrv_begin_transaction($this->dblink);
        if (!$result) {
            throw new SQLException('Could not begin transaction', sqlsrv_get_last_message());
        }
    }
    
    /**
     * Commit the current transaction.
     * @throws SQLException
     * @return void
     */
    protected function commitTrans()
    {
        if (!$this->dblink) {
            throw new SQLException('No database connection');
        }  
        if (!$this->database) {
            throw new SQLException('No database selected');
        }
        $result = @sqlsrv_commit($this->dblink);
        if (!$result) {
            throw new SQLException('Could not commit transaction', $this->sqlsrv_get_last_message());
        }
    }

    /**
     * Roll back (undo) the current transaction.
     * @throws SQLException
     * @return void
     */
    protected function rollbackTrans()
    {
        if (!$this->dblink) {
            throw new SQLException('No database connection');
        }  
        if (!$this->database) {
            throw new SQLException('No database selected');
        }
        $result = @sqlsrv_query($this->dblink, 'ROLLBACK TRAN', $this->dblink);
        if (!$result) {
            throw new SQLException('Could not rollback transaction', $this->sqlsrv_get_last_message());
        }
    }

    /**
     * Gets the number of rows affected by the last query.
     * if the last query was a select, returns 0.
     *
     * @return int Number of rows affected by the last query
     * @throws SQLException
     */
    function getUpdateCount()
    {       
        $res = @sqlsrv_query($this->dblink, 'select @@rowcount');
        if (!$res) {
            throw new SQLException('Unable to get affected row count', $this->sqlsrv_get_last_message());
        }
        $ar = @sqlsrv_fetch_array($res);
        if (!$ar) {
            $result = 0;
        } else {
            @sqlsrv_free_stmt($res);
            $result = $ar[0];
        }
        
        return $result;
    }          
    
    
    /**
     * Creates a CallableStatement object for calling database stored procedures.
     * 
     * @param string $sql
     * @return CallableStatement
     * @throws SQLException
     */
    function prepareCall($sql) 
    {             
        error_log("Error: prepareCall not recoded for sqlsrv driver");
        require_once 'creole/drivers/mssql/MSSQLCallableStatement.php';
        $stmt = mssql_init($sql);
        if (!$stmt) {
            throw new SQLException('Unable to prepare statement', $this->sqlsrv_get_last_message(), $sql);
        }
        return new MSSQLCallableStatement($this, $stmt);
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