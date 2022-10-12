<?php include('connexion_id_artist.php')?>

<?php include('header.php')?>

        <body>
            <form action ="script_disc_modif.php" method = 'post'>

                        <h1>Modifier un vinyle</h1>
                        <input type = 'hidden'value ='<?=$mymodif->disc_id?>' name = 'id'></input>
                    <div class="col-12">
                        <!-- debut titre -->
                        <label for = 'Title'>Title</label>
                        <input type = "text" value = '<?=$mymodif->disc_title?>' name = 'title' class="form-control" ></input><br><br>
                        <!-- Fin titre -->
                        <!-- <?=var_dump($mymodif -> disc_title)?>  -->
                    </div>
                        <!-- Debut artist -->
                        <div class="col-12">
                        <label for = 'Artist'>Artist</label>
                            <select name = 'artist' class="form-control" >
                                <option value = <?= $mymodif->artist_id?>><?=$mymodif -> artist_name?></option>
                                    <?php foreach ($tableau as $artist):?>
                                        <option value = <?= $artist->artist_id?>>
                                            <!-- <?=var_dump($artist -> artist_name);?> -->
                                            <?=$artist -> artist_name?>
                                        </option>
                                    <?php endforeach?>
                                </select><br>
                                <br>
                        </div>
                    <!-- Fin artist -->
                    <!-- Debut année  -->
                    <div class="col-12">
                        <label for = 'Year'>Year</label>
                        <input type = 'text' value = '<?=$mymodif->disc_year?>' name = 'year' class="form-control" ></input><br><br>
                    <!-- Fin année -->
                    </div>
                    <!-- Debut genre -->
                    <div class="col-12">
                        <label for = 'Genre'>Genre</label>
                        <input type = 'text' value = '<?=$mymodif->disc_genre?>' name = 'genre' class="form-control" ></input><br><br>
                    </div> 
                    <!-- Fin genre -->  
                    <!-- Debut label -->
                    <div class="col-12">
                        <label for = 'Label'>Label</label>
                        <input type = 'text' value = '<?=$mymodif->disc_label?>' name = 'label' class="form-control" ></input><br><br>
                    </div>
                    <!-- Fin label -->
                    <!-- Debut prix -->
                    <div class="col-12">
                        <label for = 'Price'>Price</label>
                        <input type = 'text' value = '<?=$mymodif->disc_price?>' name = 'price' class="form-control" ></input><br><br>
                    </div>
                    <!-- Fin prix -->
                    <!-- Debut image -->
                    <label for = 'Picture'>Picture</label><br><br>
                    <input type = 'file' name = 'picture'><br>
                    <td ><img src = 'jaquettes/<?=$mymodif -> disc_picture?>'alt = jaquette class="img-fluid img-thumbnail"></td><br>

                    <button type="submit" class="btn btn-dark">Modifier</button>
                    <button type = 'submit' class="btn btn-dark"><a href="disc_detail.php?id=<?=$mymodif->disc_id ?>">Retour</a></button>
            </form>
            
            <?php include('footer.php')?>

        </body>
    </html>
            