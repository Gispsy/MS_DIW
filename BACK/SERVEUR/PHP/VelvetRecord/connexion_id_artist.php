<?php  

    require "db.php";                                   //Inclu la base de donnée de db.php

    $db = ConnexionBase();                            //Connexion a la base de donnée
    $id = $_GET["id"];                                  //récupére l'id
    $requete = $db->prepare("SELECT*FROM disc 
                                    JOIN artist 
                                    ON artist.artist_id = disc.artist_id
                                    WHERE disc_id=?");                    //Requete pour trouver les discs avec id

    $requete->execute(array($id));
    $mymodif = $requete-> fetch(PDO::FETCH_OBJ);         //Recupere les valeurs dans une variable

    $requete->closeCursor();                            //Ferme inclusion de db.php

    $requete_2 = $db->query("SELECT*FROM artist");
    $tableau = $requete_2-> fetchall(PDO::FETCH_OBJ); 

    $requete_2->closeCursor();

?>