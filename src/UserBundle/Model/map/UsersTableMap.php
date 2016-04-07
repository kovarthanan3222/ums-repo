<?php

namespace UserBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'users' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.src.UserBundle.Model.map
 */
class UsersTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.UserBundle.Model.map.UsersTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('users');
        $this->setPhpName('Users');
        $this->setClassname('UserBundle\\Model\\Users');
        $this->setPackage('src.UserBundle.Model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('first_name', 'FirstName', 'VARCHAR', true, 100, null);
        $this->addColumn('last_name', 'LastName', 'VARCHAR', true, 100, null);
        $this->addColumn('school_name', 'SchoolName', 'VARCHAR', true, 100, null);
        $this->addColumn('college_name', 'CollegeName', 'VARCHAR', true, 100, null);
        $this->addColumn('blood_group', 'BloodGroup', 'VARCHAR', true, 10, null);
        $this->addColumn('gender', 'Gender', 'VARCHAR', true, 15, null);
        $this->addColumn('date_of_birth', 'DateOfBirth', 'DATE', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Userdetails', 'UserBundle\\Model\\Userdetails', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), null, null, 'Userdetailss');
    } // buildRelations()

} // UsersTableMap
