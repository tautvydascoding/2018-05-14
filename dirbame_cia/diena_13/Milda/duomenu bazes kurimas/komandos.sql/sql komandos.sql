
-- duomenu bazes kurimas
CREATE DATABASE hospital5;

-- pasitikrinimas msql duomenu bazeje
SHOW databases;

-- issirenkame duomenu bazeje, kurioje dirbsime
USE hospital5;
-- JEIGU GERAI veikia ISMETA Database changed




-- doctors yra lenteles pavadinimas
CREATE TABLE doctors(
        id INT(6)   AUTO_INCREMENT      PRIMARY KEY,
        name VARCHAR(30),
        lname VARCHAR(30)
);
-- PASITIKRINIMAS YRA SHOW tables;

INSERT INTO doctors VALUES ('',"Tim", "Logan");
INSERT INTO doctors VALUES ('',"Paul", "Leo");
INSERT INTO doctors VALUES ('',"Ona", "Onute");
INSERT INTO doctors VALUES ('',"Lita", "Ono");
INSERT INTO doctors VALUES ('',"Koris", "Pitas");


/testavimas

SELECT * FROM doctors;






CREATE TABLE PATIENTS(
        id INT(6)   AUTO_INCREMENT      PRIMARY KEY,
        name VARCHAR(30),
        lname VARCHAR(30),
        doctor_id INT (6)
);

INSERT INTO PATIENTS VALUES ('',"Mark", "John",2 );
INSERT INTO PATIENTS VALUES ('',"Tom", "Karlos", 2);
INSERT INTO PATIENTS VALUES ('',"Aris", "Tido", 1);
INSERT INTO PATIENTS VALUES ('',"Tom", "Kitas", 3);
INSERT INTO PATIENTS VALUES ('',"Tom", "Nano", 1);
INSERT INTO PATIENTS VALUES ('',"Tom", "Joso", 5);
INSERT INTO PATIENTS VALUES ('',"Co", "Jato", 4);

CREATE TABLE IMG (
        id INT(6)   AUTO_INCREMENT      PRIMARY KEY,
        name VARCHAR(100),
        doctor_id INT (6)
);



INSERT INTO IMG VALUES ('',"foto.jpg", 3);
INSERT INTO IMG VALUES ('',"2.png",1);
INSERT INTO IMG VALUES ('',"1.gif",1);
INSERT INTO IMG VALUES ('',"1.jpg",2);
INSERT INTO IMG VALUES ('',"0.png",4);

SELECT name FROM DOCTORS;
SELECT name,lname FROM DOCTORS;
SELECT id, lname FROM DOCTORS;
SELECT * FROM DOCTORS;


SELECT * FROM doctors WHERE id='4';

-- isvseti 4 ir penkta gydytoja

SELECT * FROM doctors WHERE id='4'OR id='5';

-- ISVESTI VISUS GYDYTOJUS, KURIU 'TIM' ARBA PAVARDE 'LEO'
SELECT * FROM doctors WHERE name='Tim'OR lname='Leo';

-- ISVESTI VISUS GYDYTOJUS, KURIU id mazesnis uz 4'TIM' ARBA

SELECT * FROM doctors WHERE id<'4';

-- ISVESTI VISUS GYDYTOJUS,bet ne Ona
SELECT * FROM doctors ORDER BY name;


-- KOKIU TIPU RIKIUOTI, MAZEJANCIA AR DIDEJANCIA, //DESC MAZEJANCIA.SURIKIUOTA PAGAL VARDA
SELECT * FROM PATIENTS
ORDER BY name, lname ASC;


-- pERVADINTI gydytoja 'Lita'I 'LITAS'
UPDATE DOCTORS
SET NAME = 'LITAS'
-- VISADA NURODYTI SALYGA WHERE
WHERE id = 4
LIMIT 1;
-- LIMIT APSAUGA, KAD PAKEISTUMETE TIK VIENA

DELETE FROM table_name
WHERE id = 'xx'
LIMIT 1;
