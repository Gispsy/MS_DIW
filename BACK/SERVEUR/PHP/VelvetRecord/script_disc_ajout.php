<?php   

    //Recuperation du nouveau titre

    if (isset($_POST['title']) && $_POST['title'] != "") {
        $title = $_POST['title'];
    }
    else {
        $title = Null;
    };
    // var_dump($_POST);

    //Fin de recuperation du titre

    //Recuperation du nom de l'artist

    // if (isset($_POST['artist']) && $_POST['artist'] != "") {
    //     $artist = $_POST['artist'];
    // }
    // else {
    //     $artist = Null;
    // };
    // var_dump($_POST);

    //Fin recuperation du nom de l'artist

    //Debut de recuperation de l'année

    if (isset($_POST['year']) && $_POST['year'] != "") {
        $year = $_POST['year'];
    }
    else {
        $year = Null;
    };
    // var_dump($_POST);

    //Fin récuperation de l'année

    //Début recuperation du genre

    if (isset($_POST['genre']) && $_POST['genre'] != "") {
        $genre = $_POST['genre'];
    }
    else {
        $genre = Null;
    };
    // var_dump($_POST);

    //Fin récuperation du genre

    //Début de récupertation du label

    if (isset($_POST['label']) && $_POST['label'] != "") {
        $label = $_POST['label'];
    }
    else {
        $label = Null;
    };
    // var_dump($_POST);
    
    //Fin récuperation du label

    //Début récuperation du prix

    if (isset($_POST['price']) && $_POST['price'] != "") {
        $price = $_POST['price'];
    }
    else {
        $price = Null;
    };
    // var_dump($_POST);

    //Fin récuperation du prix

    //Début récuperation de l'image

    if (isset($_POST['picture']) && $_POST['picture'] != "") {
        $picture = $_POST['picture'];
    }
    else {
        $picture = Null;
    };

    //Début recuperation id

    if (isset($_POST['artist']) && $_POST['artist'] != "") {
        $id = $_POST['artist'];
    }
    else {
        $id = Null;
    };

    //Fin recuperation id

    // var_dump($_POST);

    //Fin de récuperation de l'image

    //Erreur renvoie au formulaire

    if ($title == Null || $year == Null || $genre == NULL || $label == Null || $price == NULL || $picture == Null || $id == Null) {
        header("Location: disc_new.php");
        exit;
    };

    //Connexion a la base de donnée 

    require "db.php"; 
    $db = ConnexionBase();

    //Debut de la requete pour avoir les données dans la BDD

    //Debut pour disc

    try{
        
        $requete = $db -> prepare("INSERT INTO disc (disc_title, disc_year, disc_genre, disc_label, disc_price, disc_picture, artist_id)VALUE (:title, :year, :genre, :label, :price, :picture, :id);");

        $requete->bindValue(":title", $title, PDO::PARAM_STR);
        $requete->bindValue(":year", $year, PDO::PARAM_STR);
        $requete->bindValue(":genre", $genre, PDO::PARAM_STR);
        $requete->bindValue(":label", $label, PDO::PARAM_STR);
        $requete->bindValue(":price", $price, PDO::PARAM_STR);
        $requete->bindValue(":picture", $picture, PDO::PARAM_STR);
        $requete->bindValue(":id", $id, PDO::PARAM_STR);

        $requete -> execute();
        $requete-> closeCursor();
        
        //Fin requete pour disc
        //Debut requete pour artist
        // $requete_2 = $db -> prepare("INSERT INTO artist (artist_name)VALUE (:artist)");

        // $requete_2->bindValue(":artist", $artist, PDO::PARAM_STR);

        // $requete_2 -> execute();
        // $requete_2 -> closeCursor();

        //Fin requete pour artist


    
    }catch(Exception $e){

        echo"Erreur : ".$requete->errorInfo();
        die("Fin du script (script_disc_ajout.php)");
    };

    //Fin de la requete avec erreur ou cas ou il y a une erreur dans l'ajout

        //Retour a la page d'acceuil

        header("Location: discs.php");

        //Sortie du script

        exit;

?>
