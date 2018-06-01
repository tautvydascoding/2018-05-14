console.log("Labas ");


-- $('h1').hide(3000);
--
-- $('h1').css('color', 'pink');

-- // UZDUOTIS
-- // Pasikartoti DB kurima
-- // 1. Sukurti DB 'blogas'
-- // 2. sukurti table/lentele 'straipsniai' :
-- // strulpeliai: id (INT), title(varchar(255)), description (text), date (datetime), author(varchar(60))
-- // 3. ideti pora straipnsiu  (ne Lorem)

CREATE DATABASE blog;

SHOW databases;

USE blog;

CREATE TABLE straipsniai (
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  description TEXT,
  date DATETIME,
  author VARCHAR(60)
);

 INSERT INTO straipsniai VALUES ('', '10 things about Photography', 'Click the Execute Query button to execute the above SQL statement and see the result. The panel on the right side displays the current status of the database, and it will reflect the changes you make.', '2018-05-31', 'Susan Sarandon');

INSERT INTO straipsniai VALUES ('', 'Something I need to tell you', 'The database created in your browser using the Web SQL technology, and it contains sample tables that will help you practice with SQL.Feel free to experiment with the tables using any SQL statement. Some statement, however, may not work due to lack of support.', '2018-05-01', 'Tom Thomas');
