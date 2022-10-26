DROP DATABASE  IF EXISTS `creat`;

CREATE DATABASE `creat`;

USE `creat`;

CREATE TABLE client(

        cli_num         INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        cli_nom         VARCHAR(60) NOT NULL,
        cli_adresse     VARCHAR(60) NOT NULL,
        cli_tel         VARCHAR(60) NOT NULL
);


CREATE TABLE commande(

        com_num             INT NOT NULL PRIMARY KEY,
        cli_num             INT NOT NULL,
        com_date            DATE NOT NULL,
        com_obs             VARCHAR(60) NOT NULL,
        FOREIGN KEY (cli_num) REFERENCES client (cli_num)
);


CREATE TABLE produit(

        pro_num         INT NOT NULL PRIMARY KEY,
        pro_libelle     VARCHAR(60) NOT NULL,
        pro_description VARCHAR(60) NOT NULL
);


CREATE TABLE detail(

        com_num        INT NOT NULL,
        pro_num        INT NOT NULL,
        det_qte        INT NOT NULL,
        FOREIGN KEY (com_num) REFERENCES commande (com_num),
        FOREIGN KEY (pro_num) REFERENCES produit (pro_num),
        PRIMARY KEY (com_num,pro_num)
);