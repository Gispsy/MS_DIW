 <html>
    <body>
        <?php 

            $montableau = array("pommes", "cerises", "poires");

            foreach ($montableau as $element) { 
                echo $element."<br>";
            };

            // Ce code affichera :  
            //  _pommes_  
            //  _cerises_  
            //  _poires_  


            $newtableau = array(
                "nom" => "Gator",
                "prénom" => "Ali", 
                "email" => "ali.gator@croco.lac",
            );

            foreach ($newtableau as $cle => $valeur) { 
                echo $cle . " : " . $valeur; 
            };

            // Ce code affichera :  
            //  _nom : Gator_  
            //  _prénom : Ali_  
            //  _email : ali.gator@croco.lac_  
        ?>

    </body>
</html>