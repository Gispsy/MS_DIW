<!DOCTYPE html>
<html>
    <head>
        <title> Exo 3 Le tableau en PHP </title>
    <body>
        <?php
                $ColV = 12;         //Nombre de colonne Verticale
                $ColH = 12;         //Nombre de colonne Horizontale
        ?>


<!-- //------------------------Ligne verticale-----------------------------------------// -->

<table border = "solid">
    <tr>
        <td></td>
        <?php
                for($V = 0 ; $V<=$ColV ; $V++){
                    echo '<td><b>'.$V.'</b></td>';

                };
//-----------------------Ligne horizontale ---------------------------------------//

                for($H = 0; $H<=$ColH ; $H++){
                    echo'<tr>';
                    echo'<td><b>'.$H.'</b></td>';
                    for($L = 0; $L<=12; $L++){
                        echo'<td>'.$H*$L.'</td>';
                    }
                    echo '</tr>';
                };         

        ?>
    </body>
</html>
