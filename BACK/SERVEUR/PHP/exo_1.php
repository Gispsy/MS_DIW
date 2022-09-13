<html>
    <body>
        <?php

            $n = 0;

            while ($n < 150){                                       //Boucle pour afficher tout les nombres jusque 150
                $n++;
                if ($n % 2 == 0){                                   //Condition pour avoir les nombres paire 
                    echo $n." est un nombre paire"."<br><br>";      //Affiche les nombres paire
                }else if($n % 2 == 1){
                    echo $n." est un nombre impaire"."<br>";        //Affiche les nombres impaire
                }
            }
        ?>
    </body>
</html>