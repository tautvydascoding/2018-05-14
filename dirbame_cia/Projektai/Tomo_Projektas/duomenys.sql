CREATE DATABASE studija;
show databases;
USE studija;
CREATE TABLE darbuotojai(
 id INT(6) AUTO_INCREMENT PRIMARY KEY,
 vardas VARCHAR(30) NOT NULL,
 pavarde VARCHAR(30) NOT NULL,
 telefonas VARCHAR(30) NOT NULL
);
ALTER TABLE darbuotojai CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;

SHOW tables;
INSERT INTO darbuotojai  VALUES ('', 'Eglė', 'Krivickaitė-Leišienė', '(8-620)97729');
INSERT INTO darbuotojai  VALUES ('', 'Augustė', 'Kunickytė', '+370(672)52502');

CREATE TABLE kainos(
 id INT(6) AUTO_INCREMENT PRIMARY KEY,
 laikotarpis VARCHAR(30) NOT NULL,
 kaina DECIMAL(3)
);
ALTER TABLE kainos CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;

INSERT INTO kainos   VALUES ('', "valanda", "3");
INSERT INTO kainos   VALUES ('', "pusei dienos savaitė", "50");
INSERT INTO kainos  VALUES ('', "pusei dienos mėnuo", "135");



CREATE TABLE IF NOT EXISTS `tikslai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tikslas` VARCHAR(100)  NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

INSERT INTO `tikslai` (`id`, `tikslas`) VALUES
(1, 'Ugdyti vaikučių asmenybę, savarankiškumą ir pasitikėjimą savimi\r\n'),
(2, 'lavinti vaizduotę ir kūrybiškumą\r\n'),
(3, 'skatinti smalsumą ir iniciatyvumą\r\n'),
(4, 'suteikti laisvę reikšti mintis ir mokytis \r\n'),
(5, 'padėti įgyti komunikacinių gebėjimų\r\n'),
(6, 'organizuoti vaikų ir tėvų lavinamuosius ugdomuosius užsiėmimus\r\n');


ALTER DATABASE studija CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE tikslai CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE tikslai MODIFY tikslas VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci;
