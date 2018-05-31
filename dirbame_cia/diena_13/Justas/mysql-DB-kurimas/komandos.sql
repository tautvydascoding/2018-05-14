
-- duomenu bazes kurimas
CREATE DATABASE hospital5;

-- pasitikrinimas
SHOW databases;

-- issirenkame DB kurioje dirbsime
USE hospital5;
-- database changed

CREATE TABLE doctors (
    id INT(6)  AUTO_INCREMENT  PRIMARY KEY,
    name VARCHAR(30),
    lname VARCHAR(30)
);

-- lenteles kurimas
SHOW tables;


--lenteles uzpildymas
--ID DIDES AUTOMATISKAI DEL AUTO_INCREMENT
INSERT INTO doctors VALUES ('', 'Tim', 'Logan');
--test
SELECT * FROM doctors;

INSERT INTO doctors VALUES ('', 'Paul', 'Leon');
INSERT INTO doctors VALUES ('', 'Ona', 'Onute');
INSERT INTO doctors VALUES ('', 'Lita', 'Ono');
INSERT INTO doctors VALUES ('', 'Koris', 'Pitas');



CREATE TABLE patients (
    id INT(6)  AUTO_INCREMENT  PRIMARY KEY,
    name VARCHAR(30),
    lname VARCHAR(30),
    doctor_id INT(6)
);

INSERT INTO patients VALUES ('', 'Mark', 'John', 2);
INSERT INTO patients VALUES ('', 'Tom', 'Karlas', 2);
INSERT INTO patients VALUES ('', 'Aris', 'Tido', 1);
INSERT INTO patients VALUES ('', 'Tom', 'Kitas', 3);
INSERT INTO patients VALUES ('', 'Co', 'Joson', 1);
INSERT INTO patients VALUES ('', 'Tom', 'Nano', 5);
INSERT INTO patients VALUES ('', 'Jili', 'Jato', 4);





CREATE TABLE img (
    id INT(6)  AUTO_INCREMENT  PRIMARY KEY,
    name VARCHAR(30),
    patient_id int(6)
);


INSERT INTO img VALUES ('', 'foto.jpg', 3);
INSERT INTO img VALUES ('', '2.png', 1);
INSERT INTO img VALUES ('', '1.gif', 1);
INSERT INTO img VALUES ('', '1.jpg', 2);
INSERT INTO img VALUES ('', '0.png', 4);









SELECT name FROM doctors;
SELECT name, lname FROM doctors;
SELECT * FROM doctors;


SELECT * FROM doctors WHERE id='4';

SELECT * FROM doctors WHERE name='Tim' OR lname='Leo';

--uzduotis isvesti 4 ir 5 daktarus
SELECT * FROM doctors WHERE id='4' OR id='5';

--isvesti gyd kuriu id mazesnis uz 4
SELECT *FROM doctors WHERE id<4;


SELECT * FROM doctors WHERE NOT name='Lita';


SELECT * FROM patients ORDER BY doctor_id DESC;


SELECT * FROM patients
         ORDER BY name, lname ASC;


UPDATE doctors
    SET name = 'Litas';
    WHERE id=4
    LIMIT 1;--APSAUGA KAD PAKEISTI TIK VIENA


    DELETE FROM doctors
    WHERE name = 'Litas';
    LIMIT 5;


    

    UPDATE doctors SET id = '2' WHERE id=7 LIMIT 1;
    UPDATE doctors SET id = '3' WHERE id=8 LIMIT 1;
    UPDATE doctors SET id = '4' WHERE id=9 LIMIT 1;
    UPDATE doctors SET id = '5' WHERE id=10 LIMIT 1;
