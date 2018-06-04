console.log("Labas ");


-- $('h1').hide(3000);
--
-- $('h1').css('color', 'pink');


CREATE DATABASE ievaProjektas;

SHOW databases;

USE ievaProjektas;

CREATE TABLE contact (
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  info VARCHAR(255),
  address VARCHAR(100),
  phone VARCHAR(15),
  email VARCHAR(15)
);


INSERT INTO contact VALUES ('', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '10111 Santa Monica Boulevard, LA', '44 000 0008', 'info@Example.com');
