 <?php

 $db=new PDO('mysql:host=localhost;dbname=sites;charset=utf8', "root","");  //conexion base de donnée

 $result = $db->query ("select * from liens");                              //Demande dans la base de donnée

 $model = Array();                                                          //Model en tableau
 while ( $lien = $result->fetch(PDO::FETCH_OBJ) ) {                         //Boucle pour afficher les liens
 $model[] = $lien;
 }
 $result->closeCursor();                                                    //Fin de la demande
 require("vue2.php");                                                       //Utilise le fichier vue2.php

 ?>