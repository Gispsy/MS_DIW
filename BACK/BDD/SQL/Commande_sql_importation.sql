
--Importation en ligne de commandes SQL

-- on indique de charger le fichier voulu :
LOAD DATA LOCAL INFILE 'C:\\_chemin_d_acces_au_fichier_\\fichier.csv'
-- dans la table spécifiée :
INTO TABLE nom_table
-- en précisant le séparateur de champs :
FIELDS TERMINATED BY ';'
-- et le séparateur de lignes :
LINES TERMINATED BY '\n'
-- on ajoutera si nécessaire les lignes à ignorer dans l'import :
IGNORE 1 LINES
-- et on renseignera enfin l'ordre des colonnes dans lesquelles doivent être importées les données, selon comment elles sont ordonnées dans le fichier
(NOM_COLONNE_1,NOM_COLONNE_2,NOM_COLONNE_3,NOM_COLONNE_4);