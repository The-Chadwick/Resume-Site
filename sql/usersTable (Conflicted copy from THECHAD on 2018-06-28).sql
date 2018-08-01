CREATE TABLE `blog`.`users` ( 
	`id` BIGINT(20) NOT NULL AUTO_INCREMENT ,
	`username` VARCHAR(20) NOT NULL ,
	`email` VARCHAR(254) NOT NULL ,
	`password` VARCHAR(255) NOT NULL ,
	`lastLogDate` DATETIME NOT NULL ,
	`joinDate` TIMESTAMP NOT NULL ,
	PRIMARY KEY (`id`), UNIQUE (`username`), UNIQUE (`email`)) ENGINE = InnoDB;
	
/* randomly generated default admin password: 'y2GgBvRuYL*2%p-E' */

INSERT INTO `users` (`id`, `username`, `email`, `password`, `lastLogDate`, `joinDate`) VALUES (NULL, 'admin', 'admin@localhost.com', 'y2GgBvRuYL*2%p-E', '', CURRENT_TIMESTAMP);