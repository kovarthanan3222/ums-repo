<?php

namespace UserBundle\Model\om;

use \BaseObject;
use \BasePeer;
use \Criteria;
use \DateTime;
use \Exception;
use \PDO;
use \Persistent;
use \Propel;
use \PropelCollection;
use \PropelDateTime;
use \PropelException;
use \PropelObjectCollection;
use \PropelPDO;
use UserBundle\Model\Users;
use UserBundle\Model\UsersPeer;
use UserBundle\Model\UsersQuery;
use UserBundle\Model\userEmail;
use UserBundle\Model\userEmailQuery;
use UserBundle\Model\userMobile;
use UserBundle\Model\userMobileQuery;

abstract class BaseUsers extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'UserBundle\\Model\\UsersPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        UsersPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the first_name field.
     * @var        string
     */
    protected $first_name;

    /**
     * The value for the last_name field.
     * @var        string
     */
    protected $last_name;

    /**
     * The value for the school_name field.
     * @var        string
     */
    protected $school_name;

    /**
     * The value for the college_name field.
     * @var        string
     */
    protected $college_name;

    /**
     * The value for the blood_group field.
     * @var        string
     */
    protected $blood_group;

    /**
     * The value for the gender field.
     * @var        string
     */
    protected $gender;

    /**
     * The value for the date_of_birth field.
     * @var        string
     */
    protected $date_of_birth;

    /**
     * @var        PropelObjectCollection|userEmail[] Collection to store aggregation of userEmail objects.
     */
    protected $colluserEmails;
    protected $colluserEmailsPartial;

    /**
     * @var        PropelObjectCollection|userMobile[] Collection to store aggregation of userMobile objects.
     */
    protected $colluserMobiles;
    protected $colluserMobilesPartial;

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
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $userEmailsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $userMobilesScheduledForDeletion = null;

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [first_name] column value.
     *
     * @return string
     */
    public function getFirstName()
    {

        return $this->first_name;
    }

    /**
     * Get the [last_name] column value.
     *
     * @return string
     */
    public function getLastName()
    {

        return $this->last_name;
    }

    /**
     * Get the [school_name] column value.
     *
     * @return string
     */
    public function getSchoolName()
    {

        return $this->school_name;
    }

    /**
     * Get the [college_name] column value.
     *
     * @return string
     */
    public function getCollegeName()
    {

        return $this->college_name;
    }

    /**
     * Get the [blood_group] column value.
     *
     * @return string
     */
    public function getBloodGroup()
    {

        return $this->blood_group;
    }

    /**
     * Get the [gender] column value.
     *
     * @return string
     */
    public function getGender()
    {

        return $this->gender;
    }

    /**
     * Get the [optionally formatted] temporal [date_of_birth] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateOfBirth($format = null)
    {
        if ($this->date_of_birth === null) {
            return null;
        }

        if ($this->date_of_birth === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_of_birth);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_of_birth, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return Users The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = UsersPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [first_name] column.
     *
     * @param  string $v new value
     * @return Users The current object (for fluent API support)
     */
    public function setFirstName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->first_name !== $v) {
            $this->first_name = $v;
            $this->modifiedColumns[] = UsersPeer::FIRST_NAME;
        }


        return $this;
    } // setFirstName()

    /**
     * Set the value of [last_name] column.
     *
     * @param  string $v new value
     * @return Users The current object (for fluent API support)
     */
    public function setLastName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->last_name !== $v) {
            $this->last_name = $v;
            $this->modifiedColumns[] = UsersPeer::LAST_NAME;
        }


        return $this;
    } // setLastName()

    /**
     * Set the value of [school_name] column.
     *
     * @param  string $v new value
     * @return Users The current object (for fluent API support)
     */
    public function setSchoolName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->school_name !== $v) {
            $this->school_name = $v;
            $this->modifiedColumns[] = UsersPeer::SCHOOL_NAME;
        }


        return $this;
    } // setSchoolName()

    /**
     * Set the value of [college_name] column.
     *
     * @param  string $v new value
     * @return Users The current object (for fluent API support)
     */
    public function setCollegeName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->college_name !== $v) {
            $this->college_name = $v;
            $this->modifiedColumns[] = UsersPeer::COLLEGE_NAME;
        }


        return $this;
    } // setCollegeName()

    /**
     * Set the value of [blood_group] column.
     *
     * @param  string $v new value
     * @return Users The current object (for fluent API support)
     */
    public function setBloodGroup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->blood_group !== $v) {
            $this->blood_group = $v;
            $this->modifiedColumns[] = UsersPeer::BLOOD_GROUP;
        }


        return $this;
    } // setBloodGroup()

    /**
     * Set the value of [gender] column.
     *
     * @param  string $v new value
     * @return Users The current object (for fluent API support)
     */
    public function setGender($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gender !== $v) {
            $this->gender = $v;
            $this->modifiedColumns[] = UsersPeer::GENDER;
        }


        return $this;
    } // setGender()

    /**
     * Sets the value of [date_of_birth] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Users The current object (for fluent API support)
     */
    public function setDateOfBirth($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_of_birth !== null || $dt !== null) {
            $currentDateAsString = ($this->date_of_birth !== null && $tmpDt = new DateTime($this->date_of_birth)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_of_birth = $newDateAsString;
                $this->modifiedColumns[] = UsersPeer::DATE_OF_BIRTH;
            }
        } // if either are not null


        return $this;
    } // setDateOfBirth()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->first_name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->last_name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->school_name = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->college_name = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->blood_group = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->gender = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->date_of_birth = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = UsersPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Users object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(UsersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = UsersPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->colluserEmails = null;

            $this->colluserMobiles = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(UsersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = UsersQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(UsersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                UsersPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->userEmailsScheduledForDeletion !== null) {
                if (!$this->userEmailsScheduledForDeletion->isEmpty()) {
                    foreach ($this->userEmailsScheduledForDeletion as $userEmail) {
                        // need to save related object because we set the relation to null
                        $userEmail->save($con);
                    }
                    $this->userEmailsScheduledForDeletion = null;
                }
            }

            if ($this->colluserEmails !== null) {
                foreach ($this->colluserEmails as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->userMobilesScheduledForDeletion !== null) {
                if (!$this->userMobilesScheduledForDeletion->isEmpty()) {
                    foreach ($this->userMobilesScheduledForDeletion as $userMobile) {
                        // need to save related object because we set the relation to null
                        $userMobile->save($con);
                    }
                    $this->userMobilesScheduledForDeletion = null;
                }
            }

            if ($this->colluserMobiles !== null) {
                foreach ($this->colluserMobiles as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = UsersPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . UsersPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(UsersPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(UsersPeer::FIRST_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`first_name`';
        }
        if ($this->isColumnModified(UsersPeer::LAST_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`last_name`';
        }
        if ($this->isColumnModified(UsersPeer::SCHOOL_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`school_name`';
        }
        if ($this->isColumnModified(UsersPeer::COLLEGE_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`college_name`';
        }
        if ($this->isColumnModified(UsersPeer::BLOOD_GROUP)) {
            $modifiedColumns[':p' . $index++]  = '`blood_group`';
        }
        if ($this->isColumnModified(UsersPeer::GENDER)) {
            $modifiedColumns[':p' . $index++]  = '`gender`';
        }
        if ($this->isColumnModified(UsersPeer::DATE_OF_BIRTH)) {
            $modifiedColumns[':p' . $index++]  = '`date_of_birth`';
        }

        $sql = sprintf(
            'INSERT INTO `users` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`first_name`':
                        $stmt->bindValue($identifier, $this->first_name, PDO::PARAM_STR);
                        break;
                    case '`last_name`':
                        $stmt->bindValue($identifier, $this->last_name, PDO::PARAM_STR);
                        break;
                    case '`school_name`':
                        $stmt->bindValue($identifier, $this->school_name, PDO::PARAM_STR);
                        break;
                    case '`college_name`':
                        $stmt->bindValue($identifier, $this->college_name, PDO::PARAM_STR);
                        break;
                    case '`blood_group`':
                        $stmt->bindValue($identifier, $this->blood_group, PDO::PARAM_STR);
                        break;
                    case '`gender`':
                        $stmt->bindValue($identifier, $this->gender, PDO::PARAM_STR);
                        break;
                    case '`date_of_birth`':
                        $stmt->bindValue($identifier, $this->date_of_birth, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
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
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = UsersPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->colluserEmails !== null) {
                    foreach ($this->colluserEmails as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->colluserMobiles !== null) {
                    foreach ($this->colluserMobiles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = UsersPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getFirstName();
                break;
            case 2:
                return $this->getLastName();
                break;
            case 3:
                return $this->getSchoolName();
                break;
            case 4:
                return $this->getCollegeName();
                break;
            case 5:
                return $this->getBloodGroup();
                break;
            case 6:
                return $this->getGender();
                break;
            case 7:
                return $this->getDateOfBirth();
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
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Users'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Users'][$this->getPrimaryKey()] = true;
        $keys = UsersPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getFirstName(),
            $keys[2] => $this->getLastName(),
            $keys[3] => $this->getSchoolName(),
            $keys[4] => $this->getCollegeName(),
            $keys[5] => $this->getBloodGroup(),
            $keys[6] => $this->getGender(),
            $keys[7] => $this->getDateOfBirth(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->colluserEmails) {
                $result['userEmails'] = $this->colluserEmails->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->colluserMobiles) {
                $result['userMobiles'] = $this->colluserMobiles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = UsersPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setFirstName($value);
                break;
            case 2:
                $this->setLastName($value);
                break;
            case 3:
                $this->setSchoolName($value);
                break;
            case 4:
                $this->setCollegeName($value);
                break;
            case 5:
                $this->setBloodGroup($value);
                break;
            case 6:
                $this->setGender($value);
                break;
            case 7:
                $this->setDateOfBirth($value);
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
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = UsersPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setFirstName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLastName($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSchoolName($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCollegeName($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setBloodGroup($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setGender($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDateOfBirth($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(UsersPeer::DATABASE_NAME);

        if ($this->isColumnModified(UsersPeer::ID)) $criteria->add(UsersPeer::ID, $this->id);
        if ($this->isColumnModified(UsersPeer::FIRST_NAME)) $criteria->add(UsersPeer::FIRST_NAME, $this->first_name);
        if ($this->isColumnModified(UsersPeer::LAST_NAME)) $criteria->add(UsersPeer::LAST_NAME, $this->last_name);
        if ($this->isColumnModified(UsersPeer::SCHOOL_NAME)) $criteria->add(UsersPeer::SCHOOL_NAME, $this->school_name);
        if ($this->isColumnModified(UsersPeer::COLLEGE_NAME)) $criteria->add(UsersPeer::COLLEGE_NAME, $this->college_name);
        if ($this->isColumnModified(UsersPeer::BLOOD_GROUP)) $criteria->add(UsersPeer::BLOOD_GROUP, $this->blood_group);
        if ($this->isColumnModified(UsersPeer::GENDER)) $criteria->add(UsersPeer::GENDER, $this->gender);
        if ($this->isColumnModified(UsersPeer::DATE_OF_BIRTH)) $criteria->add(UsersPeer::DATE_OF_BIRTH, $this->date_of_birth);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(UsersPeer::DATABASE_NAME);
        $criteria->add(UsersPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Users (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFirstName($this->getFirstName());
        $copyObj->setLastName($this->getLastName());
        $copyObj->setSchoolName($this->getSchoolName());
        $copyObj->setCollegeName($this->getCollegeName());
        $copyObj->setBloodGroup($this->getBloodGroup());
        $copyObj->setGender($this->getGender());
        $copyObj->setDateOfBirth($this->getDateOfBirth());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getuserEmails() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->adduserEmail($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getuserMobiles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->adduserMobile($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Users Clone of current object.
     * @throws PropelException
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
     * @return UsersPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new UsersPeer();
        }

        return self::$peer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('userEmail' == $relationName) {
            $this->inituserEmails();
        }
        if ('userMobile' == $relationName) {
            $this->inituserMobiles();
        }
    }

    /**
     * Clears out the colluserEmails collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Users The current object (for fluent API support)
     * @see        adduserEmails()
     */
    public function clearuserEmails()
    {
        $this->colluserEmails = null; // important to set this to null since that means it is uninitialized
        $this->colluserEmailsPartial = null;

        return $this;
    }

    /**
     * reset is the colluserEmails collection loaded partially
     *
     * @return void
     */
    public function resetPartialuserEmails($v = true)
    {
        $this->colluserEmailsPartial = $v;
    }

    /**
     * Initializes the colluserEmails collection.
     *
     * By default this just sets the colluserEmails collection to an empty array (like clearcolluserEmails());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function inituserEmails($overrideExisting = true)
    {
        if (null !== $this->colluserEmails && !$overrideExisting) {
            return;
        }
        $this->colluserEmails = new PropelObjectCollection();
        $this->colluserEmails->setModel('userEmail');
    }

    /**
     * Gets an array of userEmail objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Users is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|userEmail[] List of userEmail objects
     * @throws PropelException
     */
    public function getuserEmails($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->colluserEmailsPartial && !$this->isNew();
        if (null === $this->colluserEmails || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->colluserEmails) {
                // return empty collection
                $this->inituserEmails();
            } else {
                $colluserEmails = userEmailQuery::create(null, $criteria)
                    ->filterByUsers($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->colluserEmailsPartial && count($colluserEmails)) {
                      $this->inituserEmails(false);

                      foreach ($colluserEmails as $obj) {
                        if (false == $this->colluserEmails->contains($obj)) {
                          $this->colluserEmails->append($obj);
                        }
                      }

                      $this->colluserEmailsPartial = true;
                    }

                    $colluserEmails->getInternalIterator()->rewind();

                    return $colluserEmails;
                }

                if ($partial && $this->colluserEmails) {
                    foreach ($this->colluserEmails as $obj) {
                        if ($obj->isNew()) {
                            $colluserEmails[] = $obj;
                        }
                    }
                }

                $this->colluserEmails = $colluserEmails;
                $this->colluserEmailsPartial = false;
            }
        }

        return $this->colluserEmails;
    }

    /**
     * Sets a collection of userEmail objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $userEmails A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Users The current object (for fluent API support)
     */
    public function setuserEmails(PropelCollection $userEmails, PropelPDO $con = null)
    {
        $userEmailsToDelete = $this->getuserEmails(new Criteria(), $con)->diff($userEmails);


        $this->userEmailsScheduledForDeletion = $userEmailsToDelete;

        foreach ($userEmailsToDelete as $userEmailRemoved) {
            $userEmailRemoved->setUsers(null);
        }

        $this->colluserEmails = null;
        foreach ($userEmails as $userEmail) {
            $this->adduserEmail($userEmail);
        }

        $this->colluserEmails = $userEmails;
        $this->colluserEmailsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related userEmail objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related userEmail objects.
     * @throws PropelException
     */
    public function countuserEmails(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->colluserEmailsPartial && !$this->isNew();
        if (null === $this->colluserEmails || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->colluserEmails) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getuserEmails());
            }
            $query = userEmailQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUsers($this)
                ->count($con);
        }

        return count($this->colluserEmails);
    }

    /**
     * Method called to associate a userEmail object to this object
     * through the userEmail foreign key attribute.
     *
     * @param    userEmail $l userEmail
     * @return Users The current object (for fluent API support)
     */
    public function adduserEmail(userEmail $l)
    {
        if ($this->colluserEmails === null) {
            $this->inituserEmails();
            $this->colluserEmailsPartial = true;
        }

        if (!in_array($l, $this->colluserEmails->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAdduserEmail($l);

            if ($this->userEmailsScheduledForDeletion and $this->userEmailsScheduledForDeletion->contains($l)) {
                $this->userEmailsScheduledForDeletion->remove($this->userEmailsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	userEmail $userEmail The userEmail object to add.
     */
    protected function doAdduserEmail($userEmail)
    {
        $this->colluserEmails[]= $userEmail;
        $userEmail->setUsers($this);
    }

    /**
     * @param	userEmail $userEmail The userEmail object to remove.
     * @return Users The current object (for fluent API support)
     */
    public function removeuserEmail($userEmail)
    {
        if ($this->getuserEmails()->contains($userEmail)) {
            $this->colluserEmails->remove($this->colluserEmails->search($userEmail));
            if (null === $this->userEmailsScheduledForDeletion) {
                $this->userEmailsScheduledForDeletion = clone $this->colluserEmails;
                $this->userEmailsScheduledForDeletion->clear();
            }
            $this->userEmailsScheduledForDeletion[]= $userEmail;
            $userEmail->setUsers(null);
        }

        return $this;
    }

    /**
     * Clears out the colluserMobiles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Users The current object (for fluent API support)
     * @see        adduserMobiles()
     */
    public function clearuserMobiles()
    {
        $this->colluserMobiles = null; // important to set this to null since that means it is uninitialized
        $this->colluserMobilesPartial = null;

        return $this;
    }

    /**
     * reset is the colluserMobiles collection loaded partially
     *
     * @return void
     */
    public function resetPartialuserMobiles($v = true)
    {
        $this->colluserMobilesPartial = $v;
    }

    /**
     * Initializes the colluserMobiles collection.
     *
     * By default this just sets the colluserMobiles collection to an empty array (like clearcolluserMobiles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function inituserMobiles($overrideExisting = true)
    {
        if (null !== $this->colluserMobiles && !$overrideExisting) {
            return;
        }
        $this->colluserMobiles = new PropelObjectCollection();
        $this->colluserMobiles->setModel('userMobile');
    }

    /**
     * Gets an array of userMobile objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Users is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|userMobile[] List of userMobile objects
     * @throws PropelException
     */
    public function getuserMobiles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->colluserMobilesPartial && !$this->isNew();
        if (null === $this->colluserMobiles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->colluserMobiles) {
                // return empty collection
                $this->inituserMobiles();
            } else {
                $colluserMobiles = userMobileQuery::create(null, $criteria)
                    ->filterByUsers($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->colluserMobilesPartial && count($colluserMobiles)) {
                      $this->inituserMobiles(false);

                      foreach ($colluserMobiles as $obj) {
                        if (false == $this->colluserMobiles->contains($obj)) {
                          $this->colluserMobiles->append($obj);
                        }
                      }

                      $this->colluserMobilesPartial = true;
                    }

                    $colluserMobiles->getInternalIterator()->rewind();

                    return $colluserMobiles;
                }

                if ($partial && $this->colluserMobiles) {
                    foreach ($this->colluserMobiles as $obj) {
                        if ($obj->isNew()) {
                            $colluserMobiles[] = $obj;
                        }
                    }
                }

                $this->colluserMobiles = $colluserMobiles;
                $this->colluserMobilesPartial = false;
            }
        }

        return $this->colluserMobiles;
    }

    /**
     * Sets a collection of userMobile objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $userMobiles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Users The current object (for fluent API support)
     */
    public function setuserMobiles(PropelCollection $userMobiles, PropelPDO $con = null)
    {
        $userMobilesToDelete = $this->getuserMobiles(new Criteria(), $con)->diff($userMobiles);


        $this->userMobilesScheduledForDeletion = $userMobilesToDelete;

        foreach ($userMobilesToDelete as $userMobileRemoved) {
            $userMobileRemoved->setUsers(null);
        }

        $this->colluserMobiles = null;
        foreach ($userMobiles as $userMobile) {
            $this->adduserMobile($userMobile);
        }

        $this->colluserMobiles = $userMobiles;
        $this->colluserMobilesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related userMobile objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related userMobile objects.
     * @throws PropelException
     */
    public function countuserMobiles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->colluserMobilesPartial && !$this->isNew();
        if (null === $this->colluserMobiles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->colluserMobiles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getuserMobiles());
            }
            $query = userMobileQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUsers($this)
                ->count($con);
        }

        return count($this->colluserMobiles);
    }

    /**
     * Method called to associate a userMobile object to this object
     * through the userMobile foreign key attribute.
     *
     * @param    userMobile $l userMobile
     * @return Users The current object (for fluent API support)
     */
    public function adduserMobile(userMobile $l)
    {
        if ($this->colluserMobiles === null) {
            $this->inituserMobiles();
            $this->colluserMobilesPartial = true;
        }

        if (!in_array($l, $this->colluserMobiles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAdduserMobile($l);

            if ($this->userMobilesScheduledForDeletion and $this->userMobilesScheduledForDeletion->contains($l)) {
                $this->userMobilesScheduledForDeletion->remove($this->userMobilesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	userMobile $userMobile The userMobile object to add.
     */
    protected function doAdduserMobile($userMobile)
    {
        $this->colluserMobiles[]= $userMobile;
        $userMobile->setUsers($this);
    }

    /**
     * @param	userMobile $userMobile The userMobile object to remove.
     * @return Users The current object (for fluent API support)
     */
    public function removeuserMobile($userMobile)
    {
        if ($this->getuserMobiles()->contains($userMobile)) {
            $this->colluserMobiles->remove($this->colluserMobiles->search($userMobile));
            if (null === $this->userMobilesScheduledForDeletion) {
                $this->userMobilesScheduledForDeletion = clone $this->colluserMobiles;
                $this->userMobilesScheduledForDeletion->clear();
            }
            $this->userMobilesScheduledForDeletion[]= $userMobile;
            $userMobile->setUsers(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->first_name = null;
        $this->last_name = null;
        $this->school_name = null;
        $this->college_name = null;
        $this->blood_group = null;
        $this->gender = null;
        $this->date_of_birth = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->colluserEmails) {
                foreach ($this->colluserEmails as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->colluserMobiles) {
                foreach ($this->colluserMobiles as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->colluserEmails instanceof PropelCollection) {
            $this->colluserEmails->clearIterator();
        }
        $this->colluserEmails = null;
        if ($this->colluserMobiles instanceof PropelCollection) {
            $this->colluserMobiles->clearIterator();
        }
        $this->colluserMobiles = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(UsersPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
