<?php include('connexion_discs.php')?>

<?php include('header.php')?>
        <title> Disc </title>
    </head>
    <body>
        <h1> Liste des disques </h1>
        <a href="disc_new.php" class="btn btn-primary float-end">Ajouter</a>
            <table>
                <?php foreach ($tableau as $disc): ?>
                    <tr><div  class='row'>

                    <div class="col-6">

                        <td ><img src = 'jaquettes/<?=$disc -> disc_picture?>'alt = jaquette class="img-fluid rounded float-start"></td>

                    </div>

                        <div>
                            <td class="form-control"><?=$disc -> disc_title?></td>
                            <td class="form-control"><b>Label : </b><?=$disc->disc_label?></td>
                            <td class="form-control"><b>Année : </b><?=$disc->disc_year?></td>
                            <td class="form-control"><b>Genre : </b><?=$disc->disc_genre?></td>
                            <td class="form-control"><?=$disc->artist_name?></td>
                            <td class="form-control"><a href="disc_detail.php?id=<?=$disc->disc_id ?>" class="btn btn-primary">Détail</a></td>
                        </div>

                </tr></div>
                <?php endforeach?>      
    </body>
</html>