<?php

function Liste_Liens() 
{

 $db=new PDO('mysql:host=localhost;dbname=sites;charset=utf8', "root", "");
 $result = $db->query ("select * from liens");
 
 $model = Array();
 while ( $lien = $result->fetch(PDO::FETCH_OBJ) ) {
 $model[] = $lien;
 }
 $result->closeCursor();
 return $model;
}

?>