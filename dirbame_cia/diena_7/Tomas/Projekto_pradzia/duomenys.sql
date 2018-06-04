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
