<html>
    <body>
        <?php  
        
            $var1 = "bonjour";
            $$var1 = "le monde"; 

            echo $bonjour;
                // affichera "le monde"

                

            $euro=6.55957;
            printf("%.2f FF<br />",$euro);
            $money1 = 68.75;
            $money2 = 54.35;
            $money = $money1 + $money2;
            // echo $money affichera "123.1";
            echo "affichage sans printf : " . $money . "<br />";
            $monformat = sprintf("%01.2f", $money);

            // echo $monformat affichera "123.10"
            echo "affichage avec printf : " . $monformat . "<br />";

            $year="2002";
            $month="4";
            $day="5";
            $varDate = sprintf("%04d-%02d-%02d", $year, $month, $day) ;

            // echo $varDate affichera "2002-04-05"
            echo "affichage avec sprintf : " . $varDate;

            $myVar = "KO";

                if ($myVar != "OK") 
            {
                error_log("Ouh là pas bien");
                // Message enregistré dans le fichier 'C:/<repertoire_logs>/php_error.log' 
            }

          
        ?>
    </body>
</html>