console.log("Labas ");


-- // $('h1').hide(3000);


-- // $('h1').css('color', 'pink');


-- duomenu bazes kurimas
CREATE DATABASE hospital5;
-- pasitikrinimas ar veikia
SHOW databases;

--issirenkame DB su kuria dirbame, jeigu gerai parodo "database changed"
USE hospital5;

--kuriama lentele, būtinai panaudoti komandas AUTO_INCREMENT (dides skaiciukai) PRIMARY KEY

CREATE TABLE doctors (
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30),
  lname VARCHAR(30)
);

-- pasitikrinimui ar lentele yra
SHOW tables;

-- idejimas info i lentele

INSERT INTO doctors VALUES ('', 'Tim', 'Logan');

--test
SELECT * FROM doctors;

INSERT INTO doctors VALUES ('', 'Paul', 'Leo');
INSERT INTO doctors VALUES ('', 'Ona', 'Onute');
INSERT INTO doctors VALUES ('', 'Litas', 'Ona');
INSERT INTO doctors VALUES ('', 'Koris', 'Pitas');

CREATE TABLE patients (
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30),
  lname VARCHAR(30),
  doctor_id INT(6)
);
SHOW tables;

INSERT INTO patients VALUES ('', 'Mark', 'John', 2);

--test
SELECT * FROM patients;

INSERT INTO patients VALUES ('', 'Tom', 'Karlos', 2);
INSERT INTO patients VALUES ('', 'Aris', 'Tido', 1);
INSERT INTO patients VALUES ('', 'Tom', 'Kitas', 3);
INSERT INTO patients VALUES ('', 'Co', 'Joso', 1);
INSERT INTO patients VALUES ('', 'Tom', 'Nano', 5);
INSERT INTO patients VALUES ('', 'Jil', 'Jato', 4);


CREATE TABLE img (
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  patient_id INT(6)
);
SHOW tables;
INSERT INTO img VALUES ('', 'foto.jpg', 3);
INSERT INTO img VALUES ('', '2.png', 1);
INSERT INTO img VALUES ('', '1.gif', 1);
INSERT INTO img VALUES ('', '1.jpg', 2);
INSERT INTO img VALUES ('', '0.png', 4);
SELECT * FROM img;

--nurodome stulpeli kas domina, * reiskia visus paimti
SELECT name, lname FROM doctors;

--nori visu vardu kurie prasideda t raide pvz
SELECT * FROM doctors WHERE id = '4';

SELECT * FROM doctors WHERE id = '4' OR id ='5';

SELECT * FROM doctors WHERE name = "Tim" OR lname = "Leo";

--rikiavimas duomenu bazeje
SELECT * FROM doctors ORDER BY name;

SELECT * FROM patients
        ORDER BY name, lname ASC;

-- pervadinti Lita I lITAS geriau naudoti pagal ID salyga
UPDATE doctors
 SET name = 'Litas'
 WHERE id = '4'
 LIMIT 1; -- APSAUGA KAD PAKEISTI TIK VIENĄ
