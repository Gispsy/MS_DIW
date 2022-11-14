<?php
require 'Model_2.php';

try
{
    $billets = getBillets();
    require 'vueAccueil_2.php';
}
catch (Exception $e) 
{
    $msgErreur = $e->getMessage();
    require 'vueErreur.php';
}


// accès aux données
$billets = getBillets($idBillet);

// affichage
require 'vueAccueil_2.php'; ?>
