<?php 

    $log = $_POST["login"];

    $_SESSION["login"] = $log;
    $_SESSION["mdp"] = "webmaster";

    echo$_SESSION["login"];
    echo$_SESSION["mdp"];
    var_dump($_SESSION);

    // echo session_id();
    if(isset($_SESSION["login"]) && (isset($_SESSION["mdp"]))){

        echo"ton identifiant est : ".$_SESSION["login"];
    }else {

        echo "Entre ton login";
        session_unset();
        session_destroy();
    }

    ?>