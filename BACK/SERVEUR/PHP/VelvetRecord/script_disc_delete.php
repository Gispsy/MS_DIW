<?php

//Verif de l'id

if (!(isset($_GET['id'])) || intval($_GET['id']) <= 0) GOTO TrtRedirection;

//Connexion base de données 

require "db.php";
$db = connexionBase();

//Requete pour supprimer de la liste

try {

    $requete = $db->prepare("DELETE FROM disc WHERE artist_id = ?");

    $requete->execute(array($_GET["id"]));

    $requete->closeCursor();

}
catch (Exception $e) {

    echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
    die("Fin du script (script_artist_modif.php)");

}


TrtRedirection:
header("Location: discs.php");
exit;
?>