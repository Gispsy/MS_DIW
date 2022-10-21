CREATE DATABASE IF NOT EXISTS testmdp;

CREATE SCHEMA IF NOT EXISTS testmdp;

USE testmdp;

CREATE TABLE `user` (
    `artist_id`	INT PRIMARY KEY AUTO_INCREMENT,
    `mdp` int NOT NULL,
    `identifiant` int NOT NULL
);