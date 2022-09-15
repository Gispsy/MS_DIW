

<?php

function Test1 () 
{ 
   static $a=0; 
   echo "$a<br />"; 
   $a++;
} 

// Appel de la fonction (3 fois)
Test1(); 
Test1(); 
Test1(); 

function Test() { 
   $a=0; 
   echo $a."<br>"; 
   $a++; 
} 

// Appel de la fonction (2 fois)
Test(); 
Test(); 



?>