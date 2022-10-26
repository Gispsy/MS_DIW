DROP DATABASE  IF EXISTS `jarditout`;

CREATE DATABASE `jarditout`;

USE `jarditout`

--Table client 

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

--Table commande

CREATE TABLE commande (

    ComID               INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Com_Datedecommande  DATE NOT NULL,
    Com_Datedelivraison DATE NOT NULL,
    Com_EtatCommande    VARCHAR(25) NOT NULL,
    Com_EditionFacture  BIT(1),
    Com_client          INT NOT NULL,
    FOREIGN KEY (client) REFERENCES client (CliID)
);

--Table panier

CREATE TABLE panier (

    Pan_QuantiterProduit    INT NOT NULL,
    Pan_PrixVentePar        FLOAT NOT NULL,
    Pan_PrixVentrePro       FLOAT NOT NULL,
    Pan_Produit             CHAR(6) NOT NULL
    Pan_Commande            INT NOT NULL,
    FOREIGN KEY (Pan_Commande) REFERENCES commande (ComID),
    PRIMARY KEY (Pan_Produit,Pan_Commande)
);

--Table fournisseur

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

--Table rubrique

CREATE TABLE rubrique (

    RubID           INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Rub_Libelle     VARCHAR(50) NOT NULL;
)

--Table produit

CREATE TABLE produit (

    Pro_ProCode     CHAR(6) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Pro_Libelle     VARCHAR(100) NOT NULL,
    Pro_Description VARCHAR(250),
    Pro_Photo       VARCHAR(250) NOT NULL,
    Pro_Affichage   BIT(1),
    Pro_PrixAchat   INT NOT NULL,
    Pro_StockAlerte INT NOT NULL,
    Pro_Fournisseur INT NOT NULL,
    Pro_Rubrique    INT NOT NULL,
    FOREIGN KEY (Fournisseur) REFERENCES fournisseur (FouID),
    FOREIGN KEY (Rubrique)  REFERENCES rubrique (RubID)
);

--Index

CREATE UNIQUE INDEX `nom_client` ON client (`cli_Nom`);

CREATE UNIQUE INDEX `date_de_commande` ON commande (`Com_Datedecommande`);

--Peuplement de la BDD

INSERT INTO client (Cli_Genre, Cli_Nom, Cli_Prenom, Cli_Adresse, Cli_CodePostal, Cli_Ville, Cli_Tel, Cli_Mail)
VALUES
('True', 'Moreau', 'Chris', '60 rue delendroitpaumer', '69000', 'Labas', '0655987845', 'moreauC.dev@gmail.com' ),           --1
('True', 'Moreau', 'Simon', '06 rue delautrendroitpaumer', '96000', 'sabal', '0645789855', 'moreauS.dev@gmail.com' ),       --2
('True', 'Doyen', 'Pascal', '90 rue Dutemps', '70000', 'Hybri', '0689901418', 'doyen.pascal@email.com' ),                   --3
('True', 'Pablar', 'Rosario', '10 rue Cesle14', '14000', 'Partout', '0665781239', 'rosario.pablar60@gmail.com' ),           --4
('True', 'Lance', 'Pierre', '55 rue Danslesenvirons', '90000', 'Amiens', '0623514968', 'lancepas.pierre@gmail.com' ),       --5
('False', 'Dame', 'Clementine', '65 rue Desgente', '30000', 'Sudest', '0612368547', 'DameCle@orange.fr' ),                  --6
('True', 'Bomme', 'Kevin', '75 rue Desendroitnul', '75000', 'Nuli', '0965349872', 'bomkev@hotmail.com' ),                   --7
('False', 'Disc', 'Marie', '45 rue Danslesenvirons', '40000', 'lan', '0665239815', 'mariedisc@gmail.com' ),                 --8
('False', 'Elfie', 'Gwen', '00 rue DesBoisElfs', '00000', 'LeBois', '1065987351', 'elfilelfe@boise.bom' ),                  --9
('True', 'Orque', 'Borgue', '02 rue LaCaverne', '20000', 'Caverne', '0064978531', 'borguelorque@cav.com' );                 --10


INSERT INTO fournisseur (Fou_Nom, Fou_Adresse, Fou_CodePostal, Fou_Ville, Fou_Tel, Fou_Mail, Fou_Union)
VALUES
('Lamar' , '98 rue dansamar', '94600', 'Blaze', '0956231564', 'lamarentre@lamar.fr', 'True'),                   --1
('Oscar' , '88 rue trophéedu', '92300', 'Cerem', '0963598745', 'oscarservice@oscar.fr', 'True'),                --2
('Clemento' , '28 rue Format', '89546', 'Afpo', '0955465436', 'clemento@clem.fr', 'True'),                      --3
('King' , '01 rue Trhone', '00001', 'Forhrone', '0911111111', 'kingthro@first.eng', 'False'),                   --4
('RagnarCorp' , '33 rue auroch', '99999', 'Valhalla', '0966554433', 'ragnarcorp@ragnar.vk', 'False'),           --5


INSERT INTO produit (Pro_libelle, Pro_Description, Pro_Photo, Pro_Affichage, Pro_PrixAchat, Pro_StockAlerte, Pro_Fournisseur, Pro_Rubrique)
VALUES
('2015', 'Engrais et composés azotés', 'Engrais.jpeg', 'True', '19.00€', )