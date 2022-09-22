<html>
    <body>
        <?php

        // On déclare une variable dont la valeur (contenu) sera écrite dans le fichier
        $myVar = "Bonjour le monde";

        // Ouverture en écriture seule 
        $fp = fopen("essai.txt", "a"); 

        // Ecriture du contenu ($myVar) 
        fputs($fp, $myVar); 

        // Fermeture du fichier  
        fclose($fp); 

        ?>

        <?php

                // Ouverture en lecture seule  
        $fp = fopen("essai.txt", "r"); 

        // Boucle jusqu'à la fin du fichier
        while (!feof($fp)) 
        { 
            // Lecture d'une ligne, le contenu de la ligne est affecté à la variable $ligne  
            $ligne = fgets($fp, 4096); 
            echo $lign."<br>";
        }
        ?>

        <?php

                // On ouvre le fichier moncompteur.txt
            $fichier = fopen("compteur.txt","r+");

            // on lit la première ligne du fichier, le résultat est stocké dans la variable $visiteurs
            $visiteurs = fgets($fichier);

            // on ajoute 1 au nombre de visiteurs
            $visiteurs++;

            // on se positionne au début du fichier
            fseek($fichier,0);

            // on écrit le nouveau nombre dans le fichier
            fputs($fichier,$visiteurs);

            // on referme le fichier compteur.txt
            fclose($fichier);

            // on indique sur la page le nombre de visiteurs

        ?>

    </body>
</html>