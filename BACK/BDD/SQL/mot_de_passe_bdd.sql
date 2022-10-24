CREATE DATABASE IF NOT EXISTS testmdp;

CREATE SCHEMA IF NOT EXISTS testmdp;

USE testmdp;

CREATE TABLE `user` (
    `mdp` varchar(60) NOT NULL,
    `identifiant` varchar(12) NOT NULL,
    `artist_id`	int PRIMARY KEY AUTO_INCREMENT
);