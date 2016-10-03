ALTER TABLE `amdal` ADD `status_izin` INT(1) NOT NULL AFTER `keterangan`;

ALTER TABLE `sppl` ADD `status_izin` INT(1) NOT NULL AFTER `status_perizinan`;

ALTER TABLE `ukl_upl` ADD `status_izin` INT(1) NOT NULL AFTER `keterangan`;