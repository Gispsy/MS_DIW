<?php include('connexion_discs.php')?>

<?php include('header.php')?>
        <title> Disc </title>
    </head>
    <body>
        <div class = "row justify-content-center">
            <div class="col-4 m-3">
                <h1> Liste des disques </h1>
            </div>
            <div class = "col-4 m-3">
                <a href = "disc_new.php" class="btn btn-primary float-end">Ajouter</a>
            </div>
        </div>

                    <?php foreach ($tableau as $disc): ?>                   <!--creer le tableau via base de données-->
                        <!-- <div class = "row d-flex justify-content mt-8">      div du total -->
                        <div class="col-12">
                            <div class = "card w-25 m-5 float-start">
                                    <div class = "card-head h-100">                  <!--tete de l'affiche-->
                                        <img src = 'jaquettes/<?=$disc -> disc_picture?>'alt = jaquette class = "card-img-top">
                                    </div>                                      <!--fin tete d'affiche-->
                        <div class = "card text-center">

                                        <div class = "card-body">                 <!--body de l'affiche-->

                                            <div class = "card-title h2"><?=$disc -> disc_title?></div>
                                        
                                            <div class = "card-title h5">Label : <?=$disc -> disc_label?></div>
                    
                                            <div class = "card-text-truncate h6">Année : <?=$disc -> disc_year?></div>
                                        
                                            <div class = "card-text-truncate h6">Genre : <?=$disc -> disc_genre?></div>
                                        
                                            <div class = "card-text-truncate h6"><?=$disc -> artist_name?></div>

                                            <div><a href = "disc_detail.php?id=<?=$disc -> disc_id ?>" class="btn btn-primary">Détail</a></div>

                                        </div>                                  <!--Fin body de l'affiche-->
                            </div>
                        </div>                                                      <!-- div du total-->
                    </div>
                <?php endforeach?>  
<?php include('footer.php') ?> 
    </body>
</html>