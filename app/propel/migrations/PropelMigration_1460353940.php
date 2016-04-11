<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1460353940.
 * Generated on 2016-04-11 11:22:20 by kovarthanan.murugan
 */
class PropelMigration_1460353940
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

CREATE TABLE `userEmail`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `user_id` INTEGER,
    `email_id` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `userDetails_FI_1` (`user_id`),
    CONSTRAINT `user_email_ibfk_1`
        FOREIGN KEY (`user_id`)
        REFERENCES `users` (`id`)
) ENGINE=InnoDB;

CREATE TABLE `useMobile`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `user_id` INTEGER,
    `mobile_no` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `userDetails_FI_1` (`user_id`),
    CONSTRAINT `user_mobile_ibfk_1`
        FOREIGN KEY (`user_id`)
        REFERENCES `users` (`id`)
) ENGINE=InnoDB;

CREATE TABLE `users`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `first_name` VARCHAR(100) NOT NULL,
    `last_name` VARCHAR(100) NOT NULL,
    `school_name` VARCHAR(100) NOT NULL,
    `college_name` VARCHAR(100) NOT NULL,
    `blood_group` VARCHAR(10) NOT NULL,
    `gender` VARCHAR(15) NOT NULL,
    `date_of_birth` DATE NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

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

DROP TABLE IF EXISTS `userEmail`;

DROP TABLE IF EXISTS `useMobile`;

DROP TABLE IF EXISTS `users`;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

}