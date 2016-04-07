<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1459938063.
 * Generated on 2016-04-06 15:51:03 by kovarthanan.murugan
 */
class PropelMigration_1459938063
{

    public function preUp($manager)
    {
        // add the pre-migration code here
    }

    public function postUp($manager)
    {
        // add the post-migration code here
    }

    public function preDown($manager)
    {
        // add the pre-migration code here
    }

    public function postDown($manager)
    {
        // add the post-migration code here
    }

    /**
     * Get the SQL statements for the Up migration
     *
     * @return array list of the SQL strings to execute for the Up migration
     *               the keys being the datasources
     */
    public function getUpSQL()
    {
        return array (
  'default' => '
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

ALTER TABLE `userDetails` CHANGE `email_id` `email_id` VARCHAR(100) NOT NULL;

ALTER TABLE `userDetails` CHANGE `mobile_no` `mobile_no` VARCHAR(100) NOT NULL;

ALTER TABLE `users` CHANGE `first_name` `first_name` VARCHAR(100) NOT NULL;

ALTER TABLE `users` CHANGE `last_name` `last_name` VARCHAR(100) NOT NULL;

ALTER TABLE `users` CHANGE `school_name` `school_name` VARCHAR(100) NOT NULL;

ALTER TABLE `users` CHANGE `college_name` `college_name` VARCHAR(100) NOT NULL;

ALTER TABLE `users` CHANGE `blood_group` `blood_group` VARCHAR(10) NOT NULL;

ALTER TABLE `users` CHANGE `gender` `gender` VARCHAR(15) NOT NULL;

ALTER TABLE `users` CHANGE `date_of_birth` `date_of_birth` DATE NOT NULL;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

    /**
     * Get the SQL statements for the Down migration
     *
     * @return array list of the SQL strings to execute for the Down migration
     *               the keys being the datasources
     */
    public function getDownSQL()
    {
        return array (
  'default' => '
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

ALTER TABLE `userDetails` CHANGE `email_id` `email_id` VARCHAR(100);

ALTER TABLE `userDetails` CHANGE `mobile_no` `mobile_no` VARCHAR(100);

ALTER TABLE `users` CHANGE `first_name` `first_name` VARCHAR(100);

ALTER TABLE `users` CHANGE `last_name` `last_name` VARCHAR(100);

ALTER TABLE `users` CHANGE `school_name` `school_name` VARCHAR(100);

ALTER TABLE `users` CHANGE `college_name` `college_name` VARCHAR(100);

ALTER TABLE `users` CHANGE `blood_group` `blood_group` VARCHAR(10);

ALTER TABLE `users` CHANGE `gender` `gender` VARCHAR(15);

ALTER TABLE `users` CHANGE `date_of_birth` `date_of_birth` DATE;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

}