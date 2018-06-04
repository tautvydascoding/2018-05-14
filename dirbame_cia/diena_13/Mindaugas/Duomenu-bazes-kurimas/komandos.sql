
-- Duomenu bazes kurimas
CREATE DATABASE hospital5;

--pasitikrinimas
SHOW database

--!!!issirenkame kurioje DB dirbsime
use hospital5;

--lenteliu kurimas
CREATE TABLE doctors (
      id INT(6) AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(30),
      lname VARCHAR(30)
);

--pasitikrinimas
SHOW tables;
--skaicius (id) dideja automatiskai
INSERT INTO doctors VALUES ('', "Tim", "Logan");

--test
SELECT * FROM doctors;

INSERT INTO doctors VALUES ('', "Ona", "Onute");
INSERT INTO doctors VALUES ('', "Paul", "Leo");
INSERT INTO doctors VALUES ('', "Lita", "Ono");
INSERT INTO doctors VALUES ('', "Koris", "Pitas");


CREATE TABLE patients (
      id INT(6) AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(30),
      lname VARCHAR(30),
      doc_id INT(6) --int(6) rodo, kad dedamas skaicius, kuriame galima ideti iki 6 skaitmenu
);

INSERT INTO patients VALUES ('', "Mark", "John", 2);
INSERT INTO patients VALUES ('', "Tom", "Karlos", 2);
INSERT INTO patients VALUES ('', "Aris", "Tiedo", 1);
INSERT INTO patients VALUES ('', "Co", "Jo", 3);
INSERT INTO patients VALUES ('', "Tom", "Naro", 1);
INSERT INTO patients VALUES ('', "Tom", "Kori", 5);
INSERT INTO patients VALUES ('', "Jili", "Joli", 4);


CREATE TABLE img (
      id INT(6) AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(30),
      patient_id INT(6)
    );

INSERT INTO img VALUES ('', "foto.jpg", 3);
INSERT INTO img VALUES ('', "2.png", 1);
INSERT INTO img VALUES ('', "1.gif", 1);
INSERT INTO img VALUES ('', "1.jpg", 2);
INSERT INTO img VALUES ('', "0.png", 4);

SELECT name , lname FROM doctors;
SELECT * FROM doctors;


SELECT * FROM doctors ; WHERE id='4' ;
--isvesti gyditojas kuriu id mazesnis uz 4
SELECT * FROM doctors WHERE id < '4';
SELECT * FROM doctors WHERE id='4' OR id='5';
--isvesti visus gyditojus, kuriu vardus tim arba leo
SELECT * FROM doctors WHERE name= 'Leo' OR names= 'Tim'  ;

SELECT * FROM doctors ORDER BY name DESC; --ASC DIDEJANCIA TVARKA

--Updatinimas infomacijos
-- parvadiniti Lita i Litas
UPDATE doctors
    SET name = 'Litas'
    WHERE id= '4';
    LIMIT 1; --apsauga, kad pakeistume tik viena
--su name nepatartina, nes gali dubliuotis

--istrinti galima
DELETE FROM doctors
      WHERE condition
      LIMIT 1;

--nd

-- uzduotis 1: istrinti gydytoja "Koris"
DELETE FROM doctors
      WHERE names = "Koris"; --done


-- uzduotis 2: Pakeisti "Co" varda i "Karolis"
UPDATE patients
      SET name = "Karolis"
      WHERE id = "4"
      LIMIT 1;
-- uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"
UPDATE patients
      SET name = "Tomas"
      WHERE name = "Tom";
--suklydau
UPDATE patients
      SET name = "Karolis"
      WHERE id = 4
      LIMIT 1;

-- uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"
UPDATE patients
      SET doc_id = 4
      WHERE name LIKE 'T%';
-- uzduotis 4: gauti paciento "Mark" daktaro pavarde
SELECT name = "Mark" FROM patients
UNION
SELECT lname FROM doctors;
