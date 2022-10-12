<?php  

    require "db.php";                                   //Inclu la base de donnée de db.php

    $db = ConnexionDeBase();                            //Connexion a la base de donnée
    $id = $_GET["id"];                                  //récupére l'id
    $requete = $db->prepare("SELECT*FROM disc 
                                    INNER JOIN artist 
                                    ON disc.artist_id = artist.artist_id
                                    WHERE disc_id=?");                    //Requete pour trouver les discs avec id

    $requete->execute(array($id));
    $myArtist = $requete-> fetch(PDO::FETCH_OBJ);     //Recupere les valeurs dans une variable

    $requete->closeCursor();                            //Ferme inclusion de db.php

?>