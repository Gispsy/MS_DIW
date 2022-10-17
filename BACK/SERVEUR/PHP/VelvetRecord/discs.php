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
                <div class = "row row-cols-1 row-cols-md-3 mx-5">
                    <?php foreach ($tableau as $disc): ?>                   <!--creer le tableau via base de données-->  
                        <div class="col-3">
    <div class="card">
      <img src="<?= "jaquettes/". $disc->disc_picture ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?=$disc -> disc_title?></h5>
        <h6 class="card-title"><?=$disc -> disc_label?></h6>
        <p class="card-text"><?=$disc -> disc_year?></p>
        <p class="card-text"><?=$disc -> disc_genre?></p>
        <p class="card-text"><?=$disc -> artist_name?></p>
        <p class="card-text"><a href = "disc_detail.php?id=<?=$disc -> disc_id ?>" class="btn btn-primary mx-2">Détail</a></p>
      </div>
    </div>
  </div>                                                   <!-- div du total-->
                    <?php endforeach?>  
                </div>
        <?php include('footer.php') ?>
    </body>
</html>