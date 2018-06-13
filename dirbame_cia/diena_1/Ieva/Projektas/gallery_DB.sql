console.log("Labas ");



-- // UZDUOTIS
-- // Pasikartoti DB kurima
-- // 1. Sukurti DB 'blogas'
-- // 2. sukurti table/lentele 'straipsniai' :
-- // strulpeliai: id (INT), title(varchar(255)), description (text), date (datetime), author(varchar(60))
-- // 3. ideti pora straipnsiu  (ne Lorem)

CREATE DATABASE ievaProjektas;

SHOW databases;

USE ievaProjektas;

CREATE TABLE gallery (
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  imageName VARCHAR(50)
);

 INSERT INTO gallery VALUES ('',  'falls-autumn-tree-tree-fall.jpg');

 INSERT INTO gallery VALUES ('',  'impossible.jpg');

 INSERT INTO gallery VALUES ('',  'village-mountain-landscape-sunrise.jpg');

 INSERT INTO gallery VALUES ('',  'skyscrapers-in-cloudy-sky.jpg');

 INSERT INTO gallery VALUES ('',  'clouds.jpg');

 INSERT INTO gallery VALUES ('',  'stones.jpg');
