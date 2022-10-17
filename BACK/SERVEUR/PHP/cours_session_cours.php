<?php

//Connexion a une session

session_start();

$_SESSION["login"] = "webmaster";

echo $_SESSION["login"]; ?>

<?php 
    session_start();

    $_SESSION["login"] = "webmaster";
    $_SESSION["role"] = "admin";

    echo"- session ID : ".session_id(); ?>

<?php
 session_start();

 if ($_SESSION["login"]) 
 {
    echo"Vous êtes autorisé à voir cette page.";  
 } 
 else 
 {
    echo"Cette page nécessite une identification.";  
 } ?>

 <?php
     session_start();

     if ( ! isset($_SESSION["login"]) ) 
     {
         header("Location:index.php");
         exit;
     }
 
     // Reste du code (PHP/HTML)
     echo"Bonjour ".$_SESSION["login"]."<br>";  ?>

<?php

//Detruire une session

    unset($_SESSION["login"]);
    unset($_SESSION["role"]);

    if (ini_get("session.use_cookies")) 
    {
        setcookie(session_name(), '', time()-42000);
    }

    session_destroy(); ?>