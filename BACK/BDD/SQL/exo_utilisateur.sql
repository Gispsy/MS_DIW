--Creation util1

CREATE USER 'util1'@'localhost' IDENTIFIED BY 'U1';

--Creation util2

CREATE USER 'util2'@'localhost' IDENTIFIED BY 'U2';

--Creation util3

CREATE USER 'util3'@'localhost' IDENTIFIED BY 'U3';

--Action des utilisateur

--util1 permet de faire toute les actions

GRANT ALL PRIVILEGES
ON hotel.*
TO 'util1'@'localhost';

--util2 ne peut pas selectionner les informations dans la base 

GRANT SELECT
ON hotel.*
TO 'util2'@'localhost';

--util3 n'a aucun droit sauf afficher la table station

GRANT SELECT
ON hotel.station
TO 'util3'@'localhost';
FLUSH PRIVILEGES;

--Verifier les privilege

SHOW GRANTS FOR 'util1'@'localhost' ;

SHOW GRANTS FOR 'util2'@'localhost' ;

SHOW GRANTS FOR 'util3'@'localhost' ;
