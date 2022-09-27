<?php
        //exemple pour la connexion a la base de données 

        $db = new PDO('mysql:host=localhost;dbname=record;charset=utf8', 'admin', 'votremotdepasse');




        try 
        {
        $db = new PDO("mysql:host=localhost;charset=utf8;dbname=record", "admin", "votremotdepasse");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        catch (Exception $e) 
        {
        echo 'Erreur : ' . $e->getMessage() . '<br />';
        echo 'N° : ' . $e->getCode();
        die('Fin du script');
        }
?>