-- MySQL dump 10.11
--
-- to install this database, from a terminal, type:
-- mysql -u USERNAME -p -h SERVERNAME simpsons < simpsons.sql
--
-- Host: localhost    Database: simpsons
-- ------------------------------------------------------
-- Server version   5.0.45-log

/*DROP DATABASE IF EXISTS chepomail;
CREATE DATABASE chepomail;
USE chepomail;*/

DROP TABLE IF EXISTS users;
CREATE TABLE users (
id INT UNSIGNED NOT NULL AUTO_INCREMENT,
first_name VARCHAR(32) DEFAULT NULL,
last_name VARCHAR(32) DEFAULT NULL, 
password VARCHAR(32) DEFAULT NULL,
username VARCHAR(32) DEFAULT NULL,
PRIMARY KEY (id)
);

INSERT INTO users VALUES
(1,'jeremy-dane', 'ferguson', 'Passwor9','admin'),
(2,'jordanne', 'elliott', '1Passwor','admin');

DROP TABLE IF EXISTS messages;
CREATE TABLE messages (
id INT UNSIGNED NOT NULL PRIMARY KEY, 
body TEXT DEFAULT NULL, 
subject VARCHAR(255) DEFAULT NULL,
user_id INT UNSIGNED NOT NULL,
recipient_ids INT UNSIGNED NOT NULL
);

DROP TABLE IF EXISTS message_read;
CREATE TABLE message_read (
id INT UNSIGNED NOT NULL PRIMARY KEY,
message_id INT UNSIGNED NOT NULL,
reader_id INT UNSIGNED NOT NULL,
date DATE NOT NULL

);


-- debug output to just show the contents of all tables
/*SHOW TABLES;
SELECT * FROM users;
SELECT * FROM messages;
SELECT * FROM message_read;
*/
