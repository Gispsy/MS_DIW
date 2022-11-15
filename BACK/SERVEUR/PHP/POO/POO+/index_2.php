
<?php
require_once 'class_4.php';

$mobile = new Produit("iphone",900,10); //Instanciation

$imprimante = new Produit("hp",300);

echo $mobile;
echo "<br/><hr>";
echo $imprimante;

$mobile->supprimerProduit(10);

echo "<br/><hr>";

echo $mobile;