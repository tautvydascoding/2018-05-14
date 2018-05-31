CREATE DATABASE hospital5;

show databases;

-- issirenkam DB kurioje dirbsime
USE hospital5;
-- jei gerai data base changed
CREATE TABLE doctors(
 id INT(6) AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(30) NOT NULL,
 lname VARCHAR(30) NOT NULL
);

-- pasitikrinimas
SHOW tables;
-- kurimas
INSERT INTO doctors  VALUES ('', 'Tim', 'Logan');
INSERT INTO doctors  VALUES ('', 'Paul', 'Leo');
INSERT INTO doctors  VALUES ('', 'Ona', 'Onute');
INSERT INTO doctors  VALUES ('', 'Lita', 'Ono');
INSERT INTO doctors  VALUES ('', 'Koris', 'Pitas');

-- pasitikrinimas
SELECT * FROM doctors;


CREATE TABLE patients(
 id INT(6) AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(30) NOT NULL,
 lname VARCHAR(30) NOT NULL,
 doctor_id INT(6)
);

INSERT INTO patients  VALUES ('', 'Mark', 'John', '2');
INSERT INTO patients  VALUES ('', 'Tom', 'Karlos', '2');
INSERT INTO patients  VALUES ('', 'Aris', 'Tido', '1');
INSERT INTO patients  VALUES ('', 'Tom', 'Kitas', '3');
INSERT INTO patients  VALUES ('', 'Co', 'Joso', '1');
INSERT INTO patients  VALUES ('', 'Tom', 'Nano', '3');
INSERT INTO patients  VALUES ('', 'Jili', 'Jato', '2');

CREATE TABLE img(
 id INT(6) AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100) NOT NULL,
 doctor_id INT(6)
);
INSERT INTO img  VALUES ('', 'foto.jpg', '3');
INSERT INTO img  VALUES ('', '2.png', '3');
INSERT INTO img  VALUES ('', '1.gif', '3');
INSERT INTO img  VALUES ('', '1.jpg', '3');
INSERT INTO img  VALUES ('', '0.png', '3');


SELECT * FROM doctors WHERE id='4' OR id='5';
SELECT * FROM doctors WHERE id<'4';
SELECT * FROM doctors WHERE name='Tim' OR lname='Leo';
SELECT * FROM doctors WHERE NOT name='Ona';
SELECT * FROM patients
         ORDER BY name, lname ASC;

UPDATE doctors
 SET name = 'Litas'
 WHERE id= '4'
 LIMIT 1;
-- apsauga, kad pasikeistu tik 1 karta
-- WHERE  - visada nurodyti salyga
