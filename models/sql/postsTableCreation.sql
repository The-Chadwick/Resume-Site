CREATE TABLE `blog`.`posts` ( `id` INT(3) NOT NULL AUTO_INCREMENT , `categoryID` INT(3) NULL , `categoryName` VARCHAR(30) NULL , `title` VARCHAR(30) NOT NULL , `body` VARCHAR(10000) NOT NULL , `author` VARCHAR(20) NOT NULL , `createDate` DATE NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;