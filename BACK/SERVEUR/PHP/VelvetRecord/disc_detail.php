<?php include('connexion_id_disc.php')?>

<?php include('header.php')?>

            <title>Details discs </title>
        </head>
        <body>
            <h1>Details</h1>
            <?php
                if (empty($myArtist) ){             //verifie $myArtist si il est bon sinon i affiche erreur et affiche pas la suite du programme 

                    echo 'Erreur ';
                                
                }else{
                
                
                }
            ?>
                <from>
                    <input type = "hidden" value ='<?= $myArtist->artist_id?>'></input>
                    <div class = 'row'>
                        <div class="col-6">
                            <label for ='Title'>Title</label>
                            <input for = 'text'name = "title" value='<?=$myArtist->disc_title?>' class="form-control"  readonly></input><br><br>
                        </div>

                        <div class="col-6">
                            <label for ='Artist'>Artist</label>
                            <input for = 'text' name = "name" value='<?=$myArtist->artist_name?>' class="form-control"  readonly></input><br><br>
                        </div>
                    </div>

                    <div class = 'row'>
                        <div class="col-6">
                            <label for ='Year'>Year</label>
                            <input for ='text' name = "year" value ='<?=$myArtist->disc_year?>' class="form-control"  readonly></input><br><br>
                        </div>

                        <div class="col-6">
                            <label for = 'Genre'>Genre</label>
                            <input for = 'text' name = "genre" value='<?=$myArtist->disc_genre?>' class="form-control"  readonly></input><br><br>
                        </div>
                    </div>
                    <div class = 'row'>
                        <div class="col-6">
                            <label for ='Label'>Label</label>
                            <input for = 'text' name = "label" value='<?=$myArtist->disc_label?>' class="form-control"  readonly></input><br><br>
                        </div>

                        <div class="col-6">
                            <label for ='Price'>Price</label>
                            <input for = 'text' name = "price" value='<?=$myArtist->disc_price?>' class="form-control" readonly></input><br><br>
                        </div>
                    </div>
                        <label for = 'Picture'>Picture</label><br>
                        <td name = "picture"><img src = 'jaquettes/<?=$myArtist -> disc_picture?>'alt = jaquette class="img-fluid img-thumbnail"></td><br><br>
                </from>
                
               <button type="submit" class="btn btn-dark"><a href="disc_modifier.php?id=<?=$myArtist->disc_id ?>">Modifier</a></button>
            <button type="reset" class="btn btn-dark"><a href= 'discs.php'>Retour</a></button>
            <button onclick = 'supp()' class="btn btn-dark"><a href = 'script_disc_delete.php?id=<?=$myArtist->artist_id?>'>supprimer</a></button>
            <script href ='supp_script.js'></script>
<?php include('footer.php')?>

