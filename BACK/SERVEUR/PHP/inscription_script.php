<?php

//Recupere les infos dans le formulaire

    if (isset($_POST['identifiant']) && $_POST['identifiant'] != "") {
        $identifiant = $_POST['identifiant'];
    }
    else {
        $identifiant = Null;
    }

    if (isset($_POST['mdp']) && $_POST['mdp'] != "") {
        $mdp = $_POST['mdp'];
    }
    else {
        $mdp = Null;
    }

//Fin de recuperation

 //Erreur renvoie au formulaire

    if ($identifiant == Null || $mdp == Null) {
        header("Location: inscription.php");
        exit;
    };

    $hash = password_hash($mdp, PASSWORD_BCRYPT);

    //Connexion base de donnée

    require "db_ins.php"; 
    $db = ConnexionBase();

        //Debut de la requete pour avoir les données dans la BDD

        try{
        
            $requete = $db -> prepare("INSERT INTO user (mdp, identifiant)VALUE (:mdp, :identifiant);");

            $requete->bindValue(":mdp", $hash, PDO::PARAM_STR);
            $requete->bindValue(":identifiant", $identifiant, PDO::PARAM_STR);

            $requete -> execute();
            $requete-> closeCursor();

        }catch(Exception $e){
            var_dump($requete->errorInfo());
            // var_dump($db);
            // var_dump($requete);
            // var_dump($mdp);
            // var_dump($identifiant);
            echo"Erreur : ".$requete->errorInfo();
            die("Fin du script (inscription_script.php)");
        };

        //Fin de la requete avec erreur ou cas ou il y a une erreur dans l'ajout

        //Retour a la page d'acceuil

        header("Location: login_form.php");

        //Sortie du script

        exit;

?>