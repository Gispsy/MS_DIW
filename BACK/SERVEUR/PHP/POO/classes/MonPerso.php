<?php

include ("Personnage.class.php");

$p = new Personnage("Mark", "File", 35, "Homme");

var_dump($p);

$p->presentation();

?>