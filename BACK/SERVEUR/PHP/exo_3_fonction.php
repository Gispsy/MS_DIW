<html>
    <body>
        <?php
            function verif(){
                $resultat = complex_password("TopSecret42");
                if($resultat = strlen($resultat < 8)){

                    $resultat = true;
                   

                }if($resultat = strtoupper($resultat){

                    $resultat = true ; 
                    
                }
            };
            verif();
        ?>
    </body>
</html>