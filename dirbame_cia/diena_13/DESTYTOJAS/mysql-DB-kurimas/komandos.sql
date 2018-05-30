
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
CREATE TABLE doctors(
        id  INT(6)    AUTO_INCREMENT    PRIMARY KEY,
        name  VARCHAR(30),
        lname  VARCHAR(30)
);

-- pasitikrinimnas
SHOW tables;

-- idedame i 'doctors' lentele duomenis
-- '' -skaicius (id) dideja automatiskai
INSERT INTO doctors VALUES ('', "Tim", "Logan");
--test
SELECT * FROM doctors;

--                         id     name   lname
INSERT INTO doctors VALUES ('', "Paul", "Leo");
INSERT INTO doctors VALUES ('', "Ona", "Onute");
INSERT INTO doctors VALUES ('', "Lita", "Ono");
INSERT INTO doctors VALUES ('', "Koris", "Pitas");

-- kuriame pacientu  lentele
CREATE TABLE patients(
        id  INT(6)   AUTO_INCREMENT    PRIMARY KEY,
        name  VARCHAR(30),
        lname  VARCHAR(30),
        doctor_id  INT(6)
);

INSERT INTO patients VALUES ("", "Mark", "John", 2);
INSERT INTO patients VALUES ("", "Tom", "karlos", 2 );
INSERT INTO patients VALUES ("", "Aris", "Tiedo", 1 );
INSERT INTO patients VALUES ("", "Tom", "Kori", 3 );
INSERT INTO patients VALUES ("", "Co", "Jo", 1 );
INSERT INTO patients VALUES ("", "Tom", "Naro", 5 );
INSERT INTO patients VALUES ("", "Jili", "Joli", 4 );
--pasitikrinti
SELECT * FROM patients;




-- SQL add colum
-- istrinti visa lentele
-- DROP TABLE patients;
--

SELECT  name FROM doctors;
SELECT  name, lname FROM doctors;
SELECT  id, lname FROM doctors;
SELECT  *  FROM doctors;

SELECT * FROM doctors WHERE id='4' ;
-- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja
-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'
-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'
-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
--1.1
SELECT * FROM doctors WHERE id = '4' OR id = '5';
-- 1.2
SELECT * FROM doctors WHERE name= 'Tim' OR lname='Leo';
-- 1.3
SELECT * FROM doctors WHERE id < '4';

SELECT * FROM patients
         ORDER BY name, lname ASC; -- DESC (mazejancia)

--===========================
-- // UZDUOTIS: pervadinti gydytoja 'Lita' i 'Litas'
UPDATE doctors
    SET name = 'Litas'
    WHERE id = 4
    LIMIT 1;     -- APSAUGA, kad pakeistuem tik viena!!!
    -- !!!! WHERE - visada nurodyti salyga
    -- WHERE name = 'Lita'; -- BLOGAS BUDAS ;

DELETE FROM doctors
    WHERE id='xx'
    LIMIT 1;
--
