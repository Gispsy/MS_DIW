DROP DATABASE  IF EXISTS `jarditout`;

CREATE DATABASE `jarditout`;

USE `jarditout`;


CREATE TABLE client (

    CliID           INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Cli_Genre       BIT(1),
    Cli_Nom         VARCHAR(50) NOT NULL,
    Cli_Prenom      VARCHAR(50) NOT NULL,
    Cli_Adresse     VARCHAR(50) NOT NULL,
    Cli_CodePostal  CHAR(5)     NOT NULL,
    Cli_Ville       VARCHAR(50) NOT NULL,
    Cli_Tel         VARCHAR(10) NOT NULL,
    Cli_Mail        VARCHAR(50) NOT NULL
);

CREATE TABLE commande (

    ComID               INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Com_Datedecommande  DATE NOT NULL,
    Com_Datedelivraison DATE NOT NULL,
    Com_EtatCommande    VARCHAR(25) NOT NULL,
    Com_EditionFacture  BIT(1),
    Com_client          INT NOT NULL,
    FOREIGN KEY (Com_client) REFERENCES client (CliID)
);

CREATE TABLE fournisseur (

    FouID           INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Fou_Nom         VARCHAR(50) NOT NULL,
    Fou_Adresse     VARCHAR(50) NOT NULL,
    Fou_CodePostal  CHAR(5) NOT NULL,
    Fou_Ville       VARCHAR(50) NOT NULL,
    Fou_Tel         VARCHAR(10) NOT NULL,
    Fou_Mail        VARCHAR(50) NOT NULL,
    Fou_Union       BIT(1)
);


CREATE TABLE rubrique (

    RubID           INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Rub_Libelle     VARCHAR(50) NOT NULL
);

CREATE TABLE produit (

    Pro_ProCode     CHAR(10) NOT NULL PRIMARY KEY,
    Pro_Libelle     VARCHAR(100) NOT NULL,
    Pro_Description VARCHAR(250),
    Pro_Photo       VARCHAR(250) NOT NULL,
    Pro_Affichage   BIT(1),
    Pro_PrixAchat   INT NOT NULL,
    Pro_StockAlerte INT NOT NULL,
    Pro_Fournisseur INT NOT NULL,
    Pro_Rubrique    INT NOT NULL,
    FOREIGN KEY (Pro_Fournisseur) REFERENCES fournisseur (FouID),
    FOREIGN KEY (Pro_Rubrique)  REFERENCES rubrique (RubID)
);

CREATE TABLE panier (

    Pan_QuantiterProduit    INT NOT NULL,
    Pan_PrixVentePar        FLOAT NOT NULL,
    Pan_PrixVentrePro       FLOAT NOT NULL,
    Pan_Produit             CHAR(10) NOT NULL,
    Pan_Commande            INT NOT NULL,
    FOREIGN KEY (Pan_Commande) REFERENCES commande (ComID),
    FOREIGN KEY (Pan_Produit)	REFERENCES produit (Pro_ProCode),
    PRIMARY KEY (Pan_Produit, Pan_Commande)
);


CREATE UNIQUE INDEX `nom_client` ON client (`cli_Nom`);

CREATE UNIQUE INDEX `date_de_commande` ON commande (`Com_Datedecommande`);


INSERT INTO client (Cli_Genre, Cli_Nom, Cli_Prenom, Cli_Adresse, Cli_CodePostal, Cli_Ville, Cli_Tel, Cli_Mail)
VALUES
(1, 'Moreau', 'Chris', '60 rue delendroitpaumer', '69000', 'Labas', '0655987845', 'moreauC.dev@gmail.com' ),          
(1, 'Moreaus', 'Simon', '06 rue delautrendroitpaumer', '96000', 'sabal', '0645789855', 'moreauS.dev@gmail.com' ),       
(1, 'Doyen', 'Pascal', '90 rue Dutemps', '70000', 'Hybri', '0689901418', 'doyen.pascal@email.com' ),                 
(1, 'Pablar', 'Rosario', '10 rue Cesle14', '14000', 'Partout', '0665781239', 'rosario.pablar60@gmail.com' ),         
(1, 'Lance', 'Pierre', '55 rue Danslesenvirons', '90000', 'Amiens', '0623514968', 'lancepas.pierre@gmail.com' ),  
(0, 'Dame', 'Clementine', '65 rue Desgente', '30000', 'Sudest', '0612368547', 'DameCle@orange.fr' ),               
(1, 'Bomme', 'Kevin', '75 rue Desendroitnul', '75000', 'Nuli', '0965349872', 'bomkev@hotmail.com' ),                
(0, 'Disc', 'Marie', '45 rue Danslesenvirons', '40000', 'lan', '0665239815', 'mariedisc@gmail.com' ),                
(0, 'Elfie', 'Gwen', '00 rue DesBoisElfs', '00000', 'LeBois', '1065987351', 'elfilelfe@boise.bom' ),                  
(1, 'Orque', 'Borgue', '02 rue LaCaverne', '20000', 'Caverne', '0064978531', 'borguelorque@cav.com' );              


INSERT INTO fournisseur (Fou_Nom, Fou_Adresse, Fou_CodePostal, Fou_Ville, Fou_Tel, Fou_Mail, Fou_Union)
VALUES
('Lamar' , '98 rue dansamar', '94600', 'Blaze', '0956231564', 'lamarentre@lamar.fr', 1),                  
('Oscar' , '88 rue trophéedu', '92300', 'Cerem', '0963598745', 'oscarservice@oscar.fr', 1),               
('Clemento' , '28 rue Format', '89546', 'Afpo', '0955465436', 'clemento@clem.fr', 1),                      
('King' , '01 rue Trhone', '00001', 'Forhrone', '0911111111', 'kingthro@first.eng', 0),                 
('RagnarCorp' , '33 rue auroch', '99999', 'Valhalla', '0966554433', 'ragnarcorp@ragnar.vk', 0);          


INSERT INTO rubrique(rub_Libelle)
VALUES
('malo'),                                                                                                 
('stars'),                                                                                                 
('plante'),                                                                                               
('maili'),                                                                                                
('toufu');                                                                                                 


INSERT INTO commande (Com_Datedecommande, Com_Datedelivraison, Com_EtatCommande, Com_EditionFacture, Com_client)
VALUES
('2022-10-14', '2022-10-22', 'Bien', 0, 2),
('2022-10-22', '2022-10-24', 'Bien', 1, 5),
('2022-10-13', '2022-10-25', 'Bien', 0, 4),
('2022-10-10', '2022-10-26', 'Mauvais', 1, 3),
('2022-10-20', '2022-11-10', 'Bien', 1, 5),
('2022-10-16', '2022-10-27', 'Bien', 0, 1),
('2022-10-27', '2022-10-29', 'Mauvais', 1, 5),
('2022-10-25', '2022-10-31', 'Bien', 0, 1),
('2022-10-24', '2022-11-11', 'Bien', 1, 3),
('2022-10-26', '2022-10-28', 'Bien', 1, 4);


INSERT INTO produit (Pro_ProCode, Pro_libelle, Pro_Description, Pro_Photo, Pro_Affichage, Pro_PrixAchat, Pro_StockAlerte, Pro_Fournisseur, Pro_Rubrique)
VALUES
('1', '2015', 'Engrais et composés azotés', 'Engrais.jpeg', 1, 19.00, 1000, 1, 2),                              
('2', '2020', 'Pesticides et autres produits agrochimiques', 'pesticide.jpg', 1, 10.50, 2000, 1, 2),             
('3', '2573', 'Outillage', 'pelle.jpeg', 1, 30, 250, 3, 1),                                                     
('4', '2573', 'Outillage', 'pioche.jpeg', 1, 59.90, 200, 3, 1),                                                  
('5', '2573', 'Outillage', 'rateau.jprg', 1, 20, 400, 3, 1),                                                    
('6', '2573', 'Outillage', 'masse.jpeg', 1, 50, 200, 3, 1),                                                     
('7', '2594', 'Vis et boulons', 'boite_vis.jpeg', 1, 25.85, 2000, 3, 1),                                         
('8', '2594', 'Vis et boulons', 'boite_boulons.jpeg', 1, 24.99, 2100, 3, 1),                                    
('9', '2364', 'Mortiers et bétons secs', 'beton_sec.jpeg', 1, 7.74, 3000, 2, 4),                                
('10', '2599', 'Autres produit métallique', 'barbecue.jpeg', 1, 49.99, 200, 4, 5),                               
('11', '2599', 'Autre produit métallique', 'barbecue2.jpeg', 1, 174.90, 100, 4, 5),                               
('12', '2599', 'Autre produit métallique', 'barbecue3.jpeg', 1, 119.90, 150, 4, 5),                              
('13', '2740', 'Appareils éclairage électrique', 'lampe_exterieur.jpeg', 1, 49.99, 300, 4, 5),                     
('14', '2740', 'Appareils éclairage électrique', 'lampe_exterieur2.jpeg', 1, 85.90, 150, 4, 5),                    
('15', '2740', 'Appareils éclairage électrique', 'lampe_exterieur3.jpeg', 1, 209.85, 100, 4, 5),                   
('16', '0128', 'Plante à épice,aromatique...', 'plante_épice.jpeg', 1, 9.99, 2000, 5, 3),                         
('17', '0128', 'Plante à épice,aromatique...', 'plante_épice.jpeg2', 1, 16.80, 2000, 5, 3),                       
('18', '0119', 'Autre cultures non permanentes', 'plante.jpeg', 1, 19.99, 300, 5, 3),                            
('19', '0119', 'Autre cultures non permanentes', 'plante2.jpeg', 1, 15.99, 250, 5, 3),                            
('20', '0119', 'Autre cultures non permanentes', 'plante3.jpeg', 1, 5.99, 400, 5, 3);                             


INSERT INTO panier (Pan_QuantiterProduit, Pan_PrixVentePar, Pan_PrixVentrePro, Pan_Produit, Pan_Commande)
VALUES
(3, 31.5, 10.50, '2', 1),
(2, 21, 10.50, '2', 2),
(1, 99.98, 49.99, '13', 3),
(2, 171.8, 85.90, '14', 4),
(5, 29.95, 5.99, '16', 5),
(1, 16.80, 16.80, '17', 6),
(10, 19.99,199.9, '19', 7),
(2, 7.74, 15.48, '9', 8),
(1, 50, 50, '6', 9),
(2, 9.99, 19.98, '16', 10);



CREATE USER 'gestionnaire'@'localhost' IDENTIFIED BY 'G12';

CREATE USER 'approvisionneur'@'localhost' IDENTIFIED BY 'A12';

CREATE USER 'administrateur'@'localhost' IDENTIFIED BY 'ADMIN12';

GRANT SELECT
ON jarditout.produit
TO 'gestionnaire'@'localhost';

GRANT SELECT
ON jarditout.commande
TO 'gestionnaire'@'localhost';

GRANT SELECT
ON jarditout.client
TO 'gestionnaire'@'localhost';

GRANT SELECT
ON jarditout.panier
TO 'gestionnaire'@'localhost';

GRANT SELECT, UPDATE
ON jarditout.produit
TO 'approvisionneur'@'localhost';

GRANT ALL PRIVILEGES
ON jarditout.*
TO 'administrateur'@'localhost';

FLUSH PRIVILEGES;