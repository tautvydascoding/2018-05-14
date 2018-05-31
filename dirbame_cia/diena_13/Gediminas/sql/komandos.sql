

CREATE DATABASE hospital5;

SHOW databases;


use hospital5;

INSERT INTO img VALUES ('', "1.jpg", "3", '');
INSERT INTO img VALUES ('', "2.jpg", "4", '');
INSERT INTO img VALUES ('', "3.jpg", "Pol", '');
INSERT INTO img VALUES ('', "4.jpg", "Pol", '');


CREATE TABLE img(id INT(6) AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30), patient_id INT(6));
