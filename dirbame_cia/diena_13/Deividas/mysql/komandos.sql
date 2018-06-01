  -- DB kurimas
CREATE DATABASE hospital5;

-- pasitikrinimas
SHOW databases;

-- !!!!issirenkame DB kurioje dirbsime

USE hospital5;
 -- JEIGU GERAI DATA BASE: CHANGED

 -- CREATE TABLE table_name (
 --   column1 datatype
 -- );

 CREATE TABLE doctors(
   id INT(6)  AUTO_INCREMENT  PRIMARY KEY,
   name VARCHAR(30),
   lname VARCHAR(30)
 );

 --pasitikrinimas
 SHOW tables;

--idedame i doctors lentele
-- '' - skaicius dideja automatiskai
 INSERT INTO doctors VALUES ('',"Tim","Logan");
 --test
 SELECT * FROM doctors;
 INSERT INTO doctors VALUES ('',"Paul","Leo");
 INSERT INTO doctors VALUES ('',"Ona","Onute");
 INSERT INTO doctors VALUES ('',"Lita","Ono");
 INSERT INTO doctors VALUES ('',"Koris","Pitas");


 CREATE TABLE patients(
   id INT(6)  AUTO_INCREMENT  PRIMARY KEY,
   name VARCHAR(30),
   lname VARCHAR(30),
   doctor_id INT(6)
 );

 SELECT * FROM patients;


 INSERT INTO patients VALUES ('',"Mark","John","2");
 INSERT INTO patients VALUES ('',"Tom","Karlos","2");
 INSERT INTO patients VALUES ('',"Aris","Tido","1");
 INSERT INTO patients VALUES ('',"Tom","Kitas","3");
 INSERT INTO patients VALUES ('',"Co","Joso","1");
 INSERT INTO patients VALUES ('',"Tom","Nano","5");
 INSERT INTO patients VALUES ('',"Jili","Jato","4");

 SELECT * FROM patients;

 CREATE TABLE img(
   id INT(6)  AUTO_INCREMENT  PRIMARY KEY,
   name VARCHAR(30),
   doctor_id INT(6)
 );

 SELECT * FROM img;


 INSERT INTO img VALUES ('',"foto.jpg","2");
 INSERT INTO img VALUES ('',"2.png","2");
 INSERT INTO img VALUES ('',"1.gif","1");
 INSERT INTO img VALUES ('',"1.jpg","3");
 INSERT INTO img VALUES ('',"0.png","1");


 SELECT * FROM img;

 SELECT name FROM doctors;
 SELECT name, lname FROM doctors;
 SELECT id, lname FROM doctors;
 SELECT * FROM doctors;

 SELECT * FROM doctors WHERE id='4';

 --uzduotis isvesti 4 ir 5 gydytoja
 --uzduotis isvesti visus gydytojus, kuriu id mazesnis uz 4
 SELECT * FROM doctors WHERE id='4' OR id='5';

 SELECT * FROM doctors WHERE id>'4';

 SELECT * FROM doctors WHERE name='Tim' OR lname='Leo';

 --pervardinti gydytoja 'Lita' i 'Litas'

 UPDATE doctors
      SET name = 'Litas'
      WHERE id = '4'
      LIMIT 1;   --apsauga kad pakeistum tik viena!!!!!!!!


      DELETE FROM doctors
          WHERE id='xx'
          LIMIT 1;
          
