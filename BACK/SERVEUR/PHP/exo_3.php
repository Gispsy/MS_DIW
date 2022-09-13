<!DOCTYPE html>
<html>
    <head>
        <title> Exo 3 Le tableau en PHP </title>
    <body>
        <?php
                $ColV = 12;         //Nombre de colonne Verticale
                $ColH = 12;         //Nombre de colonne Horizontale
                $Multi;             //Multiplication dans les colones
?>


<!-- //------------------------Ligne verticale-----------------------------------------// -->

<table border = solid>
    <tr>
        <td></td>
        <?php
                for($V = 0 ; $V<=$ColV ; $V++){
                    echo '<td>'.$V.'</td>';
                }
            echo'</tr>';


//-----------------------Ligne horizontale ---------------------------------------//

                    for($H = 0; $H<=$ColH ; $H++){
                        echo'<tr>';
                        echo'<td>'.$H.'</td>';
                        foreach($ColH as $H){
                            echo'<td>'.$H*$V.'</td>';
                        }
                    }
                    echo'</tr>';          


//-----------------------Multiplication-------------------------------------------//

                 
        ?>
    </body>
</html>
