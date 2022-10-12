<?php

    include "db.php";                                       //Inclue la connexion via db.php

    $db = ConnexionDeBase();                                //J'utilise la fonction ConnexionDeBase pour connecter la base de donnée 
    $requete = $db->query("SELECT*FROM artist");            //J'utilise $requete pour Selection tout de la table artist
    $tableau = $requete-> fetchall(PDO::FETCH_OBJ);         //$tableau me sers a creer des tableau si besoin dans mon php

    $requete->closeCursor();                                 //Je ferme la requete avec la fonction closeCursor()

?>