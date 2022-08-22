DROP DATABASE IF EXISTS garage; 

CREATE DATABASE garage;  

USE garage; 

CREATE TABLE voiture ( 
    voit_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    voit_marque VARCHAR(50) NOT NULL, 
    voit_prix INT 
); 

INSERT INTO voiture (voit_id, voit_marque, voit_prix) VALUES (1, 'Audi', 29990); 
INSERT INTO voiture (voit_id, voit_marque, voit_prix) VALUES (2, 'BMW', 8500); 
INSERT INTO voiture (voit_id, voit_marque, voit_prix) VALUES (3, 'Ford', 15550); 