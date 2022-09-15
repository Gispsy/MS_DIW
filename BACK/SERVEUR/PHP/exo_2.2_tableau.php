<table border = "solid">

<?php

    $departements = array(
        "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
        "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
        "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
        "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
    );
    ksort($departements);
        foreach($departements as $dep => $region){?>
            <tr><th> <?=$dep ?> </th>
            <?php foreach($region as $reg ){ ?>
                <td> <?= $reg ?></td>
            <?php } ?>
        <?php 
        } $nombre = count($departements);
        echo"Nombre de départements ".$nombre;
        ?>
        

</table>