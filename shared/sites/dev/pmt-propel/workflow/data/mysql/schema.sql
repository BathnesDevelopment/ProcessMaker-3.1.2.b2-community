
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- PMT_PMT_AB_TEST
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `PMT_PMT_AB_TEST`;


CREATE TABLE `PMT_PMT_AB_TEST`
(
	`APP_UID` VARCHAR(32)  NOT NULL,
	`APP_NUMBER` INTEGER(11)  NOT NULL,
	`APP_STATUS` VARCHAR(10)  NOT NULL,
	`RADIOMANAGERAPPROVED` VARCHAR(255),
	`CHECKBOXALLROLES` INTEGER(1),
	`TEXTAREAMANAGERCOMMENTS` VARCHAR(255),
	`TXTMANAGERUID01` VARCHAR(255),
	`TXTPOSREF01` VARCHAR(255),
	`TXTROLES` VARCHAR(255),
	PRIMARY KEY (`APP_UID`),
	KEY `indexTable`(`APP_UID`)
)ENGINE=InnoDB  DEFAULT CHARSET='utf8';
# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
