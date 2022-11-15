
<?php
require 'class_3.php';

$mobile = new Produit; //Instanciation

$mobile->setNom("iphone");
$mobile->setQuantite(10);
$mobile->setPrix(900);
$mobile->setRupture(false);

echo $mobile;

$mobile->supprimerProduit(10);

echo "<br/><hr>";

echo $mobile;