DROP DATABASE IF EXISTS `of`;

CREATE DATABASE `of`;

USE `of`;

CREATE TABLE Stagiaires(
        sta_id          INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        sta_nom         VARCHAR(50) NOT NULL,
        sta_prenom      VARCHAR(50) NOT NULL,
        sta_matricule   CHAR(10) NOT NULL UNIQUE CHECK (sta_matricule RLIKE '^[A-Z]{2}[0-9]{6}[a-z]{2}$'),
        sta_adresse     VARCHAR(50),
        sta_tel         VARCHAR(30)
);

CREATE TABLE Formations(
        form_id           INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        form_duree_heures INT NOT NULL,
        form_libelle      VARCHAR(50) NOT NULL,
        form_description  VARCHAR(50)
);

CREATE TABLE Formation_Stagiaire(
        sta_id          INT NOT NULL,
        form_id         INT NOT NULL,
        date_debut      DATE NOT NULL,
        date_fin        DATE NOT NULL,
        FOREIGN KEY (form_id) REFERENCES Formations (form_id),
        FOREIGN KEY (sta_id) REFERENCES Stagiaires (sta_id),
        PRIMARY KEY (sta_id, form_id)
);