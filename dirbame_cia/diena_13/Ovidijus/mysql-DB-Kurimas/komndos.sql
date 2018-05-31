
-- DB kurimas
CREATE DATABASE hospital5;

-- pasitiktinimas
SHOW databases;

-- !!!! issirenkame DB kurioje dirbsime    l1  o0 ;:  ,.
USE  hospital5;
--  jeigu gerai " Database changed"



-- kuriame seimos gydytoju lentele
-- doctors - lenteles pavadinimas
-- id, name , lname - stulperliu pavadinimai
CREATE TABLE patients(
        id  INT(6)    AUTO_INCREMENT    PRIMARY KEY,
        name  VARCHAR(30),
        lname  VARCHAR(30),
        doctor_id VARCHAR(6)
);

-- pasitikrinimnas
SHOW tables;

-- idedame i 'doctors' lentele duomenis
-- '' -skaicius (id) dideja automatiskai
INSERT INTO doctors VALUES ('', "Tim", "Logan");
--test
SELECT * FROM doctors;
-- duomenu idejimas i tables
INSERT INTO doctors VALUES ('', "Tim", "Logan");
INSERT INTO doctors VALUES ('', "Paul", "Leo");
INSERT INTO doctors VALUES ('', "Ona", "Onute");
INSERT INTO doctors VALUES ('', "Lita", "Ona");
INSERT INTO doctors VALUES ('', "Koris", "Ritas");

INSERT INTO patients VALUES ('', "Mark", "John", "2");
INSERT INTO patients VALUES ('', "Tom", "Karlos", "2");
INSERT INTO patients VALUES ('', "ARIS", "Tido", "1");
INSERT INTO patients VALUES ('', "Tom", "Kitas", "3");
INSERT INTO patients VALUES ('', "Co", "Joso", "1");
INSERT INTO patients VALUES ('', "Tom", "Nano", "5");
INSERT INTO patients VALUES ('', "Jil", "Jato", "4");

SELECT * FROM patients;

CREATE TABLE img(
        id  INT(6)    AUTO_INCREMENT    PRIMARY KEY,
        name  VARCHAR(30),
        patient_id VARCHAR(6)
);

INSERT INTO img VALUES ('', "foto.jpg", "3");
INSERT INTO img VALUES ('', "2.png", "1");
INSERT INTO img VALUES ('', "1.gif", "1");
INSERT INTO img VALUES ('', "1.jpg", "2");
INSERT INTO img VALUES ('', "0.png", "4");

SELECT * FROM img;

-- duomenu paemimas
SELECT name FROM doctors;
SELECT name, lname FROM doctors;
SELECT id, lname FROM doctors;
SELECT * FROM doctors;

--paima pagal id
SELECT * FROM doctors WHERE id="4";

-- uzduotis
4 ir 5
SELECT * FROM doctors WHERE id="4" OR id="4";
-- varda tim arba pavarde leo

SELECT * FROM doctors WHERE name = "Tim" OR lname = "Leo";

--visus maziau uz 4 id
SELECT * FROM doctors WHERE id < "4";

-- pagal abecele

SELECT * FROM patients
ORDER BY name, lname ASC;---desc

--keitimas

UPDATE doctors
      SET name = "Litas"
      --WHERE name = "Lita"-- blogas budas
      WHERE id = "4"
      LIMIT 1; --APSAUGA kad pakeistu tik viena.





--
