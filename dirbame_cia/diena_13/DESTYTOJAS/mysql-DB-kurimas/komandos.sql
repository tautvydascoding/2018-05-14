
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





--
