
-- duomenu bazes kurimas
CREATE DATABASE pirkejai;

-- pasitikrinimas msql duomenu bazeje
SHOW databases;

-- issirenkame duomenu bazeje, kurioje dirbsime
USE pirkejai;
-- JEIGU GERAI veikia ISMETA Database changed




-- doctors yra lenteles pavadinimas
CREATE TABLE pirkejai(
        id INT(6)   AUTO_INCREMENT      PRIMARY KEY,
        name VARCHAR(30),
        lname VARCHAR(30)
);
-- PASITIKRINIMAS YRA SHOW tables;

INSERT INTO pirkejai VALUES ('',"Tomas", "Tomukas");
INSERT INTO pirkejai VALUES ('',"Rasa", "Rasute");
INSERT INTO pirkejai VALUES ('',"Ona", "Onute");
INSERT INTO pirkejai VALUES ('',"Maryte", "Marytute");
INSERT INTO pirkejai VALUES ('',"Jurgis", "Jurgiukas");


/testavimas

SELECT * FROM pirkejai;






CREATE TABLE pardavejai(
        id INT(6)   AUTO_INCREMENT      PRIMARY KEY,
        name VARCHAR(30),
        lname VARCHAR(30),
        pardavejai_id INT (6)
);

INSERT INTO pardavejai VALUES ('',"Paulius", "Jonutis",2 );
INSERT INTO pardavejai VALUES ('',"Saulius", "Sauliukas", 2);
INSERT INTO pardavejai VALUES ('',"Aiste", "Aistiene", 1);
INSERT INTO pardavejai VALUES ('',"Tomas", "Tomenas", 3);
INSERT INTO pardavejai VALUES ('',"Timas", "Naujelis", 1);
INSERT INTO pardavejai VALUES ('',"Gintare", "Jodyte", 5);
INSERT INTO pardavejai VALUES ('',"Ligita", "Ligituke", 4);




CREATE DATABASE savaite4;

SHOW databases;

USE savaite4;

CREATE TABLE savaite4 (
        id INT(6)   AUTO_INCREMENT      PRIMARY KEY,
        username VARCHAR(30),
        pass VARCHAR(30),
        email VARCHAR(30),
        rights VARCHAR(30),
        savaite_id INT (6)
);


-- PASITIKRINIMAS YRA SHOW tables;

INSERT INTO savaite4 VALUES ('',"Tomas", "Tomukas");
INSERT INTO savaite4 VALUES ('',"Rasa", "Rasute");
