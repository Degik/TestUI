CREATE TABLE `admin_user` (
	`adminId` INT NOT NULL AUTO_INCREMENT,
	`adminUsername` VARCHAR(50) NOT NULL UNIQUE,
	`adminPassword` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`adminId`)
);

CREATE TABLE `program_list` (
	`programId` INT NOT NULL AUTO_INCREMENT,
	`programName` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`programId`)
);

CREATE TABLE `program_scanner` (
	`scannerId` INT NOT NULL AUTO_INCREMENT,
	`scannerProperty` VARCHAR(255) NOT NULL,
	`scannerStatus` BOOLEAN NOT NULL,
	`scannerLicense` VARCHAR(255) NOT NULL UNIQUE,
	`scannerLastTime` DATETIME NOT NULL,
	`programId` INT NOT NULL,
	`scannerUserId` INT NOT NULL UNIQUE,
	PRIMARY KEY (`scannerId`)
);

CREATE TABLE `scanner_user` (
	`scannerUserId` INT NOT NULL AUTO_INCREMENT,
	`scannerUsername` VARCHAR(255) NOT NULL UNIQUE,
	`scannerPassword` VARCHAR(255) NOT NULL,
	`scannerId` INT NOT NULL,
	PRIMARY KEY (`scannerUserId`)
);

CREATE TABLE `program_adminControlPanel` (
	`adminControlPanelId` INT NOT NULL AUTO_INCREMENT,
	`adminControlPanelProperty` VARCHAR(255) NOT NULL,
	`adminControlPanelStatus` BOOLEAN NOT NULL,
	`adminControlPanelLicense` VARCHAR(255) NOT NULL,
	`programId` INT NOT NULL,
	`adminControlPanelUserId` INT NOT NULL,
	PRIMARY KEY (`adminControlPanelId`)
);

CREATE TABLE `adminControlPanel_user` (
	`acpUserId` INT NOT NULL AUTO_INCREMENT,
	`acpUsername` VARCHAR(255) NOT NULL UNIQUE,
	`acpPassword` VARCHAR(255) NOT NULL,
	`acpId` INT(0) NOT NULL,
	PRIMARY KEY (`acpUserId`)
);

ALTER TABLE `program_scanner` ADD CONSTRAINT `program_scanner_fk0` FOREIGN KEY (`programId`) REFERENCES `program_list`(`programId`);

ALTER TABLE `program_scanner` ADD CONSTRAINT `program_scanner_fk1` FOREIGN KEY (`scannerUserId`) REFERENCES `scanner_user`(`scannerUserId`);

ALTER TABLE `scanner_user` ADD CONSTRAINT `scanner_user_fk0` FOREIGN KEY (`scannerId`) REFERENCES `program_scanner`(`scannerId`);

ALTER TABLE `program_adminControlPanel` ADD CONSTRAINT `program_adminControlPanel_fk0` FOREIGN KEY (`programId`) REFERENCES `program_list`(`programId`);

ALTER TABLE `program_adminControlPanel` ADD CONSTRAINT `program_adminControlPanel_fk1` FOREIGN KEY (`adminControlPanelUserId`) REFERENCES `adminControlPanel_user`(`acpUserId`);

ALTER TABLE `adminControlPanel_user` ADD CONSTRAINT `adminControlPanel_user_fk0` FOREIGN KEY (`acpId`) REFERENCES `program_adminControlPanel`(`adminControlPanelId`);