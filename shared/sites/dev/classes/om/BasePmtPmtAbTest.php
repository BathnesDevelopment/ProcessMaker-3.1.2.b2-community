<?php

require_once 'propel/om/BaseObject.php';

require_once 'propel/om/Persistent.php';


include_once 'propel/util/Criteria.php';

include_once 'classes/PmtPmtAbTestPeer.php';

/**
 * Base class that represents a row from the 'PMT_PMT_AB_TEST' table.
 *
 * 
 *
 * @package    workflow.classes.om
 */
abstract class BasePmtPmtAbTest extends BaseObject implements Persistent
{

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PmtPmtAbTestPeer
    */
    protected static $peer;

    /**
     * The value for the app_uid field.
     * @var        string
     */
    protected $app_uid;

    /**
     * The value for the app_number field.
     * @var        int
     */
    protected $app_number;

    /**
     * The value for the app_status field.
     * @var        string
     */
    protected $app_status;

    /**
     * The value for the radiomanagerapproved field.
     * @var        string
     */
    protected $radiomanagerapproved;

    /**
     * The value for the checkboxallroles field.
     * @var        int
     */
    protected $checkboxallroles;

    /**
     * The value for the textareamanagercomments field.
     * @var        string
     */
    protected $textareamanagercomments;

    /**
     * The value for the txtmanageruid01 field.
     * @var        string
     */
    protected $txtmanageruid01;

    /**
     * The value for the txtposref01 field.
     * @var        string
     */
    protected $txtposref01;

    /**
     * The value for the txtroles field.
     * @var        string
     */
    protected $txtroles;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Get the [app_uid] column value.
     * 
     * @return     string
     */
    public function getAppUid()
    {

        return $this->app_uid;
    }

    /**
     * Get the [app_number] column value.
     * 
     * @return     int
     */
    public function getAppNumber()
    {

        return $this->app_number;
    }

    /**
     * Get the [app_status] column value.
     * 
     * @return     string
     */
    public function getAppStatus()
    {

        return $this->app_status;
    }

    /**
     * Get the [radiomanagerapproved] column value.
     * 
     * @return     string
     */
    public function getRadiomanagerapproved()
    {

        return $this->radiomanagerapproved;
    }

    /**
     * Get the [checkboxallroles] column value.
     * 
     * @return     int
     */
    public function getCheckboxallroles()
    {

        return $this->checkboxallroles;
    }

    /**
     * Get the [textareamanagercomments] column value.
     * 
     * @return     string
     */
    public function getTextareamanagercomments()
    {

        return $this->textareamanagercomments;
    }

    /**
     * Get the [txtmanageruid01] column value.
     * 
     * @return     string
     */
    public function getTxtmanageruid01()
    {

        return $this->txtmanageruid01;
    }

    /**
     * Get the [txtposref01] column value.
     * 
     * @return     string
     */
    public function getTxtposref01()
    {

        return $this->txtposref01;
    }

    /**
     * Get the [txtroles] column value.
     * 
     * @return     string
     */
    public function getTxtroles()
    {

        return $this->txtroles;
    }

    /**
     * Set the value of [app_uid] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setAppUid($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->app_uid !== $v) {
            $this->app_uid = $v;
            $this->modifiedColumns[] = PmtPmtAbTestPeer::APP_UID;
        }

    } // setAppUid()

    /**
     * Set the value of [app_number] column.
     * 
     * @param      int $v new value
     * @return     void
     */
    public function setAppNumber($v)
    {

        // Since the native PHP type for this column is integer,
        // we will cast the input value to an int (if it is not).
        if ($v !== null && !is_int($v) && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->app_number !== $v) {
            $this->app_number = $v;
            $this->modifiedColumns[] = PmtPmtAbTestPeer::APP_NUMBER;
        }

    } // setAppNumber()

    /**
     * Set the value of [app_status] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setAppStatus($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->app_status !== $v) {
            $this->app_status = $v;
            $this->modifiedColumns[] = PmtPmtAbTestPeer::APP_STATUS;
        }

    } // setAppStatus()

    /**
     * Set the value of [radiomanagerapproved] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setRadiomanagerapproved($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->radiomanagerapproved !== $v) {
            $this->radiomanagerapproved = $v;
            $this->modifiedColumns[] = PmtPmtAbTestPeer::RADIOMANAGERAPPROVED;
        }

    } // setRadiomanagerapproved()

    /**
     * Set the value of [checkboxallroles] column.
     * 
     * @param      int $v new value
     * @return     void
     */
    public function setCheckboxallroles($v)
    {

        // Since the native PHP type for this column is integer,
        // we will cast the input value to an int (if it is not).
        if ($v !== null && !is_int($v) && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->checkboxallroles !== $v) {
            $this->checkboxallroles = $v;
            $this->modifiedColumns[] = PmtPmtAbTestPeer::CHECKBOXALLROLES;
        }

    } // setCheckboxallroles()

    /**
     * Set the value of [textareamanagercomments] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTextareamanagercomments($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->textareamanagercomments !== $v) {
            $this->textareamanagercomments = $v;
            $this->modifiedColumns[] = PmtPmtAbTestPeer::TEXTAREAMANAGERCOMMENTS;
        }

    } // setTextareamanagercomments()

    /**
     * Set the value of [txtmanageruid01] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTxtmanageruid01($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->txtmanageruid01 !== $v) {
            $this->txtmanageruid01 = $v;
            $this->modifiedColumns[] = PmtPmtAbTestPeer::TXTMANAGERUID01;
        }

    } // setTxtmanageruid01()

    /**
     * Set the value of [txtposref01] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTxtposref01($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->txtposref01 !== $v) {
            $this->txtposref01 = $v;
            $this->modifiedColumns[] = PmtPmtAbTestPeer::TXTPOSREF01;
        }

    } // setTxtposref01()

    /**
     * Set the value of [txtroles] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTxtroles($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->txtroles !== $v) {
            $this->txtroles = $v;
            $this->modifiedColumns[] = PmtPmtAbTestPeer::TXTROLES;
        }

    } // setTxtroles()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (1-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param      ResultSet $rs The ResultSet class with cursor advanced to desired record pos.
     * @param      int $startcol 1-based offset column which indicates which restultset column to start with.
     * @return     int next starting column
     * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate(ResultSet $rs, $startcol = 1)
    {
        try {

            $this->app_uid = $rs->getString($startcol + 0);

            $this->app_number = $rs->getInt($startcol + 1);

            $this->app_status = $rs->getString($startcol + 2);

            $this->radiomanagerapproved = $rs->getString($startcol + 3);

            $this->checkboxallroles = $rs->getInt($startcol + 4);

            $this->textareamanagercomments = $rs->getString($startcol + 5);

            $this->txtmanageruid01 = $rs->getString($startcol + 6);

            $this->txtposref01 = $rs->getString($startcol + 7);

            $this->txtroles = $rs->getString($startcol + 8);

            $this->resetModified();

            $this->setNew(false);

            // FIXME - using NUM_COLUMNS may be clearer.
            return $startcol + 9; // 9 = PmtPmtAbTestPeer::NUM_COLUMNS - PmtPmtAbTestPeer::NUM_LAZY_LOAD_COLUMNS).

        } catch (Exception $e) {
            throw new PropelException("Error populating PmtPmtAbTest object", $e);
        }
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      Connection $con
     * @return     void
     * @throws     PropelException
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete($con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(PmtPmtAbTestPeer::DATABASE_NAME);
        }

        try {
            $con->begin();
            PmtPmtAbTestPeer::doDelete($this, $con);
            $this->setDeleted(true);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollback();
            throw $e;
        }
    }

    /**
     * Stores the object in the database.  If the object is new,
     * it inserts it; otherwise an update is performed.  This method
     * wraps the doSave() worker method in a transaction.
     *
     * @param      Connection $con
     * @return     int The number of rows affected by this insert/update
     * @throws     PropelException
     * @see        doSave()
     */
    public function save($con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(PmtPmtAbTestPeer::DATABASE_NAME);
        }

        try {
            $con->begin();
            $affectedRows = $this->doSave($con);
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollback();
            throw $e;
        }
    }

    /**
     * Stores the object in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param      Connection $con
     * @return     int The number of rows affected by this insert/update and any referring
     * @throws     PropelException
     * @see        save()
     */
    protected function doSave($con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;


            // If this object has been modified, then save it to the database.
            if ($this->isModified()) {
                if ($this->isNew()) {
                    $pk = PmtPmtAbTestPeer::doInsert($this, $con);
                    $affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
                                         // should always be true here (even though technically
                                         // BasePeer::doInsert() can insert multiple rows).

                    $this->setNew(false);
                } else {
                    $affectedRows += PmtPmtAbTestPeer::doUpdate($this, $con);
                }
                $this->resetModified(); // [HL] After being saved an object is no longer 'modified'
            }

            $this->alreadyInSave = false;
        }
        return $affectedRows;
    } // doSave()

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return     array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param      mixed $columns Column name or an array of column names.
     * @return     boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();
            return true;
        } else {
            $this->validationFailures = $res;
            return false;
        }
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param      array $columns Array of column names to validate.
     * @return     mixed <code>true</code> if all validations pass; 
                   array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = PmtPmtAbTestPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param      string $name name
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants TYPE_PHPNAME,
     *                     TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM
     * @return     mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = PmtPmtAbTestPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        return $this->getByPosition($pos);
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @return     mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch($pos) {
            case 0:
                return $this->getAppUid();
                break;
            case 1:
                return $this->getAppNumber();
                break;
            case 2:
                return $this->getAppStatus();
                break;
            case 3:
                return $this->getRadiomanagerapproved();
                break;
            case 4:
                return $this->getCheckboxallroles();
                break;
            case 5:
                return $this->getTextareamanagercomments();
                break;
            case 6:
                return $this->getTxtmanageruid01();
                break;
            case 7:
                return $this->getTxtposref01();
                break;
            case 8:
                return $this->getTxtroles();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param      string $keyType One of the class type constants TYPE_PHPNAME,
     *                        TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM
     * @return     an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = PmtPmtAbTestPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAppUid(),
            $keys[1] => $this->getAppNumber(),
            $keys[2] => $this->getAppStatus(),
            $keys[3] => $this->getRadiomanagerapproved(),
            $keys[4] => $this->getCheckboxallroles(),
            $keys[5] => $this->getTextareamanagercomments(),
            $keys[6] => $this->getTxtmanageruid01(),
            $keys[7] => $this->getTxtposref01(),
            $keys[8] => $this->getTxtroles(),
        );
        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param      string $name peer name
     * @param      mixed $value field value
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants TYPE_PHPNAME,
     *                     TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM
     * @return     void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = PmtPmtAbTestPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @param      mixed $value field value
     * @return     void
     */
    public function setByPosition($pos, $value)
    {
        switch($pos) {
            case 0:
                $this->setAppUid($value);
                break;
            case 1:
                $this->setAppNumber($value);
                break;
            case 2:
                $this->setAppStatus($value);
                break;
            case 3:
                $this->setRadiomanagerapproved($value);
                break;
            case 4:
                $this->setCheckboxallroles($value);
                break;
            case 5:
                $this->setTextareamanagercomments($value);
                break;
            case 6:
                $this->setTxtmanageruid01($value);
                break;
            case 7:
                $this->setTxtposref01($value);
                break;
            case 8:
                $this->setTxtroles($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME,
     * TYPE_NUM. The default key type is the column's phpname (e.g. 'authorId')
     *
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return     void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = PmtPmtAbTestPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setAppUid($arr[$keys[0]]);
        }

        if (array_key_exists($keys[1], $arr)) {
            $this->setAppNumber($arr[$keys[1]]);
        }

        if (array_key_exists($keys[2], $arr)) {
            $this->setAppStatus($arr[$keys[2]]);
        }

        if (array_key_exists($keys[3], $arr)) {
            $this->setRadiomanagerapproved($arr[$keys[3]]);
        }

        if (array_key_exists($keys[4], $arr)) {
            $this->setCheckboxallroles($arr[$keys[4]]);
        }

        if (array_key_exists($keys[5], $arr)) {
            $this->setTextareamanagercomments($arr[$keys[5]]);
        }

        if (array_key_exists($keys[6], $arr)) {
            $this->setTxtmanageruid01($arr[$keys[6]]);
        }

        if (array_key_exists($keys[7], $arr)) {
            $this->setTxtposref01($arr[$keys[7]]);
        }

        if (array_key_exists($keys[8], $arr)) {
            $this->setTxtroles($arr[$keys[8]]);
        }

    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return     Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PmtPmtAbTestPeer::DATABASE_NAME);

        if ($this->isColumnModified(PmtPmtAbTestPeer::APP_UID)) {
            $criteria->add(PmtPmtAbTestPeer::APP_UID, $this->app_uid);
        }

        if ($this->isColumnModified(PmtPmtAbTestPeer::APP_NUMBER)) {
            $criteria->add(PmtPmtAbTestPeer::APP_NUMBER, $this->app_number);
        }

        if ($this->isColumnModified(PmtPmtAbTestPeer::APP_STATUS)) {
            $criteria->add(PmtPmtAbTestPeer::APP_STATUS, $this->app_status);
        }

        if ($this->isColumnModified(PmtPmtAbTestPeer::RADIOMANAGERAPPROVED)) {
            $criteria->add(PmtPmtAbTestPeer::RADIOMANAGERAPPROVED, $this->radiomanagerapproved);
        }

        if ($this->isColumnModified(PmtPmtAbTestPeer::CHECKBOXALLROLES)) {
            $criteria->add(PmtPmtAbTestPeer::CHECKBOXALLROLES, $this->checkboxallroles);
        }

        if ($this->isColumnModified(PmtPmtAbTestPeer::TEXTAREAMANAGERCOMMENTS)) {
            $criteria->add(PmtPmtAbTestPeer::TEXTAREAMANAGERCOMMENTS, $this->textareamanagercomments);
        }

        if ($this->isColumnModified(PmtPmtAbTestPeer::TXTMANAGERUID01)) {
            $criteria->add(PmtPmtAbTestPeer::TXTMANAGERUID01, $this->txtmanageruid01);
        }

        if ($this->isColumnModified(PmtPmtAbTestPeer::TXTPOSREF01)) {
            $criteria->add(PmtPmtAbTestPeer::TXTPOSREF01, $this->txtposref01);
        }

        if ($this->isColumnModified(PmtPmtAbTestPeer::TXTROLES)) {
            $criteria->add(PmtPmtAbTestPeer::TXTROLES, $this->txtroles);
        }


        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return     Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(PmtPmtAbTestPeer::DATABASE_NAME);

        $criteria->add(PmtPmtAbTestPeer::APP_UID, $this->app_uid);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return     string
     */
    public function getPrimaryKey()
    {
        return $this->getAppUid();
    }

    /**
     * Generic method to set the primary key (app_uid column).
     *
     * @param      string $key Primary key.
     * @return     void
     */
    public function setPrimaryKey($key)
    {
        $this->setAppUid($key);
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of PmtPmtAbTest (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @throws     PropelException
     */
    public function copyInto($copyObj, $deepCopy = false)
    {

        $copyObj->setAppNumber($this->app_number);

        $copyObj->setAppStatus($this->app_status);

        $copyObj->setRadiomanagerapproved($this->radiomanagerapproved);

        $copyObj->setCheckboxallroles($this->checkboxallroles);

        $copyObj->setTextareamanagercomments($this->textareamanagercomments);

        $copyObj->setTxtmanageruid01($this->txtmanageruid01);

        $copyObj->setTxtposref01($this->txtposref01);

        $copyObj->setTxtroles($this->txtroles);


        $copyObj->setNew(true);

        $copyObj->setAppUid(NULL); // this is a pkey column, so set to default value

    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return     PmtPmtAbTest Clone of current object.
     * @throws     PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);
        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return     PmtPmtAbTestPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PmtPmtAbTestPeer();
        }
        return self::$peer;
    }
}

