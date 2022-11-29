<?php  

    include "db.php";                                   //Inclu la base de donnée de db.php

    $db = ConnexionBase();                            //Connexion a la base de donnée

    $requete = $db->query("SELECT*FROM disc 
                                INNER JOIN artist 
                                    ON disc.artist_id = artist.artist_id
                                    WHERE disc.disc_id");        //Requete pour trouver les discs
    $tableau = $requete-> fetchall(PDO::FETCH_OBJ);     //Recupere les valeurs dans une variable

    $requete->closeCursor();                            //Ferme inclusion de db.php

?>