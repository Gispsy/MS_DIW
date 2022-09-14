
<?php

//------------------------------------------------------Déclarer tableau----------------------------------//

$facture = array(
   "Janvier" => 500, 
   "Février" => 620, 
   "Mars" => 300, 
   "Avril" => 130, 
   "Mai" => 560, 
   "Juin" => 350
   ); 

$facture_sixmois = 0; 

foreach ($facture as $mois => $montant) 
{ 
   echo "Facture du mois de $mois : $montant Euros<br>"; 
   $facture_sixmois += $valeur; 
} 


$nom = array("franck","laurent","caroline","magali","veronique");

// on effectue un TRI CROISSANT DES VALEURS
sort($nom);

for ($i = 0 ; $i < count($nom) ;  $i++) 
{
   echo "$nom[$i]<br>";
}

// Résultat :  
//    caroline  
//    franck  
//    laurent  
//    magali  
//    veronique

//---------------------------------arsort()-----------------------------------------------------------//

$tableau = array(
    "a" => "Lundi",
    "b" => "Jeudi",
    "c" => "Vendredi",
    "d" => "Mardi",
    "e" => "Mercredi"
 ); 
 
 // on effectue un TRI DECROISSANT DES VALEURS
 arsort($tableau);
 
 foreach($tableau as $cle => $valeur) 
 { 
    echo $cle ." : ".$valeur."<br>"; 
 }
 
 // Résultat :  
 //    c : Vendredi
 //    e : Mercredi
 //    d : Mardi
 //    a : Lundi
 //    b : Jeudi

//----------------------------------------ksort()-----------------------------------------------------//

 $tableau = array(
    "a" => "Lundi",
    "b" => "Jeudi",
    "c" => "Vendredi",
    "d" => "Mardi",
    "e" => "Mercredi"
 ); 
 
 // on effectue un TRI CROISSANT DES CLES
 ksort($tableau);
 
 foreach($tableau as $cle => $valeur) 
 { 
    echo $cle ." : ".$valeur."<br>"; 
 }
 
 // Résultat :  
 //    a : Lundi
 //    b : Jeudi
 //    c : Vendredi
 //    d : Mardi
 //    e : Mercredi

//------------------------------------------count()------------------------------------------------------//

 $tableau = array("Lundi","Mardi","Mercredi", "Jeudi", "Vendredi");

$nb = count($tableau);

echo"Le tableau contient ".$nb." éléments."; 

// Résultat :
//    Le tableau contient 5 éléments.

//-------------------------------------------array_unshift / array_push---------------------------------//

$tableau = array("Mercredi","Jeudi"); 

array_unshift($tableau, "Lundi", "Mardi"); 
array_push($tableau, "Vendredi"); 

foreach($tableau as $valeur) 
{ 
   echo $valeur . "<br>"; 
}
// Résultat :
//    Lundi
//    Mardi
//    Mercredi
//    Jeudi
//    Vendredi

//-------------------------------------------array_shift / array_pop---------------------------------//

$tableau = array("Lundi", "Mardi", "Mercredi","Jeudi", "Vendredi"); 

array_shift($tableau); 
array_pop($tableau); 

foreach($tableau as $valeur) 
{ 
   echo $valeur . "<br>"; 
}
// Résultat :
//    Mardi
//    Mercredi
//    Jeudi

//-------------------------------------------FIN-----------------------------------------------------//
?>