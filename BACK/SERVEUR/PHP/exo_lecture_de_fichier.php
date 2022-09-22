<html>
    <body>
        <?php 
            $fp = file ('exo_text_manipulation_fichier.txt');

            foreach ($fp as $ligne) {
                echo htmlspecialchars($ligne) . "<br>";
            }
        ?>

    </body>
</html>

        