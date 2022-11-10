<!DOCTYPE html>
<html lang="fr">
 <head>
 <meta charset="utf-8">
 <title></title>
 <link rel="stylesheet" href="/style.css">
 <script src="script.js"></script>
 </head>
 <body>
 <?php
 switch ($_GET["action"]) {
 case "liste":
 require("dao3.php");
 $model = Liste_Liens();
 require("vue2.php");
 break;
 case "formulaire_ajout":

 // Code qui permet de gérer l'affichage
 //du formulaire d'ajout

 break;

}
 ?>
 </body>
</html>