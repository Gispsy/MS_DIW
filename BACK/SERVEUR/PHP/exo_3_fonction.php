<html>
    <body>
        <?php
           function mdp(){
            $resultat = ("TopSecret42");
            if(strlen($resultat) >= 8){
                true;
                echo'let';
            }if(strtolower($resultat)){
                true;
                echo"'s";
            }if(strtoupper($resultat)){
                true;
                echo' go';
            }if(ctype_digit($resultat)){
                $resultat = false;
                echo' nul';
                echo"<br>".$resultat;
            }else{
                $resultat = true;
                echo' juste';
                echo'<br>'.$resultat;
            }
           }
           mdp();
        ?>
    </body>
</html>