CREATE DATABASE lab;

USE lab;

CREATE TABLE users (

id INT AUTO_INCREMENT PRIMARY KEY,

username VARCHAR(50),

password VARCHAR(50),

role VARCHAR(20)

);

INSERT INTO users VALUES
(1,'admin','password','admin'),
(2,'test','1234','user');
