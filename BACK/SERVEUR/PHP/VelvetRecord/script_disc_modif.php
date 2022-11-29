<?php

//Recuperation de l'id disc

if (isset($_POST['id']) && $_POST['id'] != "") {
    $id = $_POST['id'];
}
else {
    $id = Null;
};

//Fin recuperation de l'id de disc

//Recuperation du titre

    if (isset($_POST['title']) && $_POST['title'] != "") {
        $title = $_POST['title'];
    }
    else {
        $title = Null;
    };

//Fin de recupertaion du titre

//Recuperation de l'artist

    if (isset($_POST['artist']) && $_POST['artist'] != "") {
        $artist = $_POST['artist'];
    }
    else {
        $artist = Null;
    };

//Fin de recuperation de l'artist

//Debut de recuperation de year

    if (isset($_POST['year']) && $_POST['year'] != "") {
        $year = $_POST['year'];
    }
    else {
        $year = Null;
    };

//Fin de recupertation de year

//Debut de recuperation de genre

    if (isset($_POST['genre']) && $_POST['genre'] != "") {
        $genre = $_POST['genre'];
    }
    else {
        $genre = Null;
    };

//Fin recuperation du genre

//Debut de recuperation du label

    if (isset($_POST['label']) && $_POST['label'] != "") {
        $label = $_POST['label'];
    }
    else {
        $label = Null;
    };

//Fin de recupertaion du label

//Debut recuperation du price

    if (isset($_POST['price']) && $_POST['price'] != "") {
        $price = $_POST['price'];
    }
    else {
        $price = Null;
    };

//Fin recuperation du price

//Debut recuperation de l'image 

    if (isset($_POST['picture']) && $_POST['picture'] != "") {
        $picture = $_POST['picture'];
    }
    else {
        $picture = Null;
    };

//Fin recuperation de l'image


//Connexion a la base de donnée
require "db.php"; 
$db = ConnexionBase();

try{
    //Debut de la requete pour un update 

    $requete = $db->prepare("UPDATE disc SET disc_title = :title, artist_id = :artist, disc_year = :year, disc_label = :label, disc_price = :price, disc_picture = :picture WHERE disc_id = :id;");

    $requete -> bindValue(":title", $title, PDO::PARAM_STR);
    $requete -> bindValue(":artist", $artist, PDO::PARAM_INT);
    $requete -> bindValue(":year", $year, PDO::PARAM_STR);
    $requete -> bindValue(":label", $label, PDO::PARAM_STR);
    $requete -> bindValue(":price", $price, PDO::PARAM_STR);
    $requete -> bindValue(":picture", $picture, PDO::PARAM_STR);
    $requete -> bindValue("id", $id, PDO::PARAM_STR);

    $requete->execute();
    $requete->closeCursor();

    //Fin de la requete update

} catch (Exception $e) {

    echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
    var_dump($e);
    die("Fin du script (script_disc_modif.php)");

}

    // Si tout est bon retour a la liste discs.php
    header("Location: discs.php");
    exit;