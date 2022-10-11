<?php

//Recuperation du titre

    if (isset($_POST['title']) && $_POST['title'] != "") {
        $title = $_POST['title'];
    }
    else {
        $title = Null;
    };

//Fin de titre

//Recuperation de l'artist

    if (isset($_POST['artist']) && $_POST['artist'] != "") {
        $artist = $_POST['artist'];
    }
    else {
        $artist = Null;
    };

//Fin d'artist

//Recuperation year

    if (isset($_POST['year']) && $_POST['year'] != "") {
        $year = $_POST['year'];
    }
    else {
        $year = Null;
    };

//Fin de year

//Debut de genre

    if (isset($_POST['genre']) && $_POST['genre'] != "") {
        $genre = $_POST['genre'];
    }
    else {
        $genre = Null;
    };

//FIn de genre

//Debut de label

    if (isset($_POST['label']) && $_POST['label'] != "") {
        $label = $_POST['label'];
    }
    else {
        $label = Null;
    };

//Fin de label

//Debut de price

    if (isset($_POST['price']) && $_POST['price'] != "") {
        $price = $_POST['price'];
    }
    else {
        $price = Null;
    };

//Fin de price

//Debut de picture

    if (isset($_POST['picture']) && $_POST['picture'] != "") {
        $picture = $_POST['picture'];
    }
    else {
        $picture = Null;
    };

//Fin picture

//Connexion base de données 

require "db.php";
$db = connexionDeBase();

//Requete de suppression

try{

    $requete = $db -> prepare("DELETE FROM disc WHERE artist_id = ?");



}catch (Exception $e){


}