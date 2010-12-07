
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- sf_guard_user_profile
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `sf_guard_user_profile`;


CREATE TABLE `sf_guard_user_profile`
(
	`sf_guard_user_profile_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`community_types_id` INTEGER  NOT NULL,
	`user_id` INTEGER  NOT NULL,
	`name` VARCHAR(250)  NOT NULL,
	`lastname` VARCHAR(250)  NOT NULL,
	`lastname2` VARCHAR(250)  NOT NULL,
	`email` VARCHAR(100) default 'unknown' NOT NULL,
	`twitteruser` VARCHAR(255)  NOT NULL,
	`homepage` VARCHAR(255)  NOT NULL,
	PRIMARY KEY (`sf_guard_user_profile_id`),
	INDEX `sf_guard_user_profile_FI_1` (`community_types_id`),
	CONSTRAINT `sf_guard_user_profile_FK_1`
		FOREIGN KEY (`community_types_id`)
		REFERENCES `community_types` (`community_types_id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	INDEX `sf_guard_user_profile_FI_2` (`user_id`),
	CONSTRAINT `sf_guard_user_profile_FK_2`
		FOREIGN KEY (`user_id`)
		REFERENCES `sf_guard_user` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- community_types
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `community_types`;


CREATE TABLE `community_types`
(
	`community_types_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255),
	`is_default` TINYINT default 0,
	PRIMARY KEY (`community_types_id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- community_items
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `community_items`;


CREATE TABLE `community_items`
(
	`community_items_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER  NOT NULL,
	`name` VARCHAR(255),
	`brief` VARCHAR(255),
	`tags` VARCHAR(255),
	`content` TEXT  NOT NULL,
	`filename` VARCHAR(255),
	`likes` INTEGER default 0,
	`is_default` TINYINT default 0,
	`updated_at` DATE,
	`created_at` DATE,
	PRIMARY KEY (`community_items_id`),
	INDEX `community_items_FI_1` (`user_id`),
	CONSTRAINT `community_items_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `sf_guard_user` (`id`)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
