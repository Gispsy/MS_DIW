<?php session_start();
    session_regenerate_id();

    if (isset($_POST['log']) && $_POST['log'] != "") {
        $login = $_POST['log'];
    }
    else {
        $login = Null;
    }

    if(isset($_SESSION["log"])){

        echo"Bonjour ".$_SESSION["log"];
        $auth = "ok";
        // echo$auth;
        
    }else {

        echo "Entre ton login";
        $auth = "suuu";
        session_unset();
        session_destroy();
    }
?>

