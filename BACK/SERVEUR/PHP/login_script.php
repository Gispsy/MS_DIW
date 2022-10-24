<?php 
    session_start();
    session_regenerate_id();
    // var_dump($_POST['log']);
    // var_dump($_POST['mdp']);

    if (isset($_POST['log']) && $_POST['log'] != "") {
        $login = $_POST['log'];
    }
    else {
        $login = Null;
    }
    // var_dump($login);

    if (isset($_POST['mdp']) && $_POST['mdp'] != "") {
        $mdp = $_POST['mdp'];
    }
    else {
        $mdp = Null;
    }


    if ($login == Null || $mdp == Null) {
        header("Location: login_form.php");
        exit;
    };
    // var_dump($mdp);



    //Connexion base de donnée 

    require "db_ins.php"; 
    $db = ConnexionBase();
    /*$requete = $db->prepare('SELECT * FROM `user`');
            $requete->execute();
            $coco = $requete->fetchAll();*/
    try{
        if(!empty($_POST['log']) && !empty($_POST['mdp'])){
            $requete = $db->prepare('SELECT * FROM `user` WHERE identifiant = :identifiant ');
            $requete->execute(['identifiant' => $login]);
            $coco =  $requete->fetch(PDO::FETCH_OBJ);
            $requete->closeCursor();
            $mdphash = $coco->mdp;

        }if(password_verify($mdp, $mdphash)){

            header("Location: page_connexion.php");

        }else{

            header("Location: login_form.php");
            die;
        }
    }catch (Exception $e){

        echo"Erreur : ".$requete->errorInfo();
        die("Fin du script (inscription_script.php)");

    };


    $_SESSION["log"] = $login;
    // $_SESSION["mdp"] = $mdp;

    // echo$_SESSION["log"];
    // echo$_SESSION["mdp"];
    // var_dump($_SESSION);

    // echo session_id();
    if(isset($_SESSION["log"])){

        echo"ton identifiant est : ".$_SESSION["log"];
        $auth = "ok";
        echo$auth;

    }else {

        echo "Entre ton login";
        $auth = "suuu";
        session_unset();
        session_destroy();
    }

    ?>