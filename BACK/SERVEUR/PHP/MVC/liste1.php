<!DOCTYPE html>
<html lang="fr">
 <head>
 <meta charset="utf-8">
 <title>Atelier PHP - MySQL - simple - MVC</title>
 </head>
 <body>
 <?php
 $db= new PDO('mysql:host=localhost;dbname=sites;charset=utf8', "user","Jarodducamp3011");
 $result = $db->query ("select * from liens");
 ?>

 <h1 >Sommaire</h1>

 <table >
 <tr>
 <th>Titre</th>
 <th>URL</th>
 </tr>
 <?php while ( $lien = $result->fetch(PDO::FETCH_OBJ) ) { ?>
 <tr>
 <td>
 <?php echo $lien->titre; ?>
 </td>
 <td>
 <a href="<?php echo $lien->url; ?>"><?php echo $lien->url;
?></a>
 </td>
 </tr>
 <?php } ?>
 </table>
 
 <?php
 $result->closeCursor();
 ?>

 </body>
</html>