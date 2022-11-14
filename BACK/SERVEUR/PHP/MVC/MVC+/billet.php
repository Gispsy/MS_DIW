<?php

require 'Model_2.php';

try 
{
if (isset($_GET['id'])) {
    // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
    $id = intval($_GET['id']);
    if ($id != 0) 
    {
    $billet = getBillet($id);
    $comments = getComments($id);
    require 'vueBillet.php';
    }
    else
    throw new Exception("Identifiant de billet incorrect");
}
    else
        throw new Exception("Aucun identifiant de billet");
}
catch (Exception $e) 
{
    $msgErreur = $e->getMessage();
    require 'vueErreur.php';
};
?>