<?php 
    session_start();
    session_regenerate_id();
    var_dump($_POST['log']);
    var_dump($_POST['mdp']);

    if (isset($_POST['log']) && $_POST['log'] != "") {
        $login = $_POST['log'];
    }
    else {
        $login = Null;
    }
    var_dump($login);

    $mdp = isset($_POST["mdp"]);
    var_dump($mdp);

    $_SESSION["log"] = $login;
    $_SESSION["mdp"] = $mdp;

    echo$_SESSION["log"];
    echo$_SESSION["mdp"];
    var_dump($_SESSION);

    // echo session_id();
    if(isset($_SESSION["log"]) && (isset($_SESSION["mdp"]))){

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