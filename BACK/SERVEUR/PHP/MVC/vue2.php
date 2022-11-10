<!DOCTYPE html>
<html lang="fr">
 <head>
 <meta charset="utf-8">
 <title>Atelier PHP - MySQL - simple - MVC</title>
 </head>
 <body>

 <h1 >Sommaire</h1>

 <table >
 <tr>
 <th>Titre</th>
 <th>URL</th>
 </tr>

 <?php foreach ($model as $lien) { ?>                         <!--  boucle pour afficher les url  -->
 <tr>
 <td><?php echo $lien->titre; ?></td>
 <td><a href="<?php echo $lien->url; ?>"><?php echo $lien->url;
?></a></td>
 </tr>
 <?php } ?>

 </table>

 </body>
</html>