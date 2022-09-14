<table border = "solid">

<?php
        $tableau = array (
            "Janvier" => 31,
            "Février" => 28,
            "Mars" => 31,
            "Avril" => 30,
            "Mai" => 31,
            "Juin" => 30,
            "Juillet" => 31,
            "Août" => 31,
            "Septembre" => 30,
            "Octobre" => 31,
            "Novembre" => 30,
            "Décembre" => 31,

        );
        
        for($L = 0; $L = $tableau; $L++){
            foreach($tableau as $cle => $valeur){
                echo"<tr><th>".$cle."</th><td>".$valeur."</td></tr>";
                
            }

        }
            
?>