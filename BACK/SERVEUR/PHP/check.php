<?php echo "Tu surfes sur le web en semaine plutôt le : "; 

// Lecture du tableau 
foreach ($_REQUEST["Fjour"] as $Jour)      
{ 
    echo " $Jour - "; 
} 

?>