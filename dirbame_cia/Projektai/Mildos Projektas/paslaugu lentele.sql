CREATE DATABASE MildosProjektas;

SHOW databases;

USE MildosProjektas;

CREATE TABLE paslaugos (
        id INT(6)   AUTO_INCREMENT      PRIMARY KEY,
        paslaugos VARCHAR(50),
        kainos VARCHAR(50)
);

INSERT INTO paslaugos VALUES ('',  'Asmeninė fotosesija', '100 - 250 Eur');

INSERT INTO paslaugos VALUES ('',  'Draugų fotosesija', '80 - 150 Eur');

INSERT INTO paslaugos VALUES ('',  'Krikštynų fotosesija', '80 - 150 Eur');

INSERT INTO paslaugos VALUES ('',  'Šeimos fotosesija', '80 - 200 Eur');

INSERT INTO paslaugos VALUES ('',  'Vestuvių fotosesija', 'Kaina sutartinė');

INSERT INTO paslaugos VALUES ('',  'Draugų fotosesija', 'Kaina sutartinė');

INSERT INTO paslaugos VALUES ('',  'Priešvestuvinė fotosesija', '80 - 200 Eur');

INSERT INTO paslaugos VALUES ('',  'Gražiausių nuotraukų foto filmas', '50 - 100 Eur');

INSERT INTO paslaugos VALUES ('',  'Šventės fotosesija', '50 - 150 Eur');

INSERT INTO paslaugos VALUES ('',  'Foto knygos', '100 - 150 Eur');



SELECT * FROM paslaugos;
