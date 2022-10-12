<?php include('connexion_artist.php')?>

<?php include('header.php')?>
        <title>Ajout</title>
        </head>
        <body>
            <h1>Le Formulaire d'ajout</h1>
            <hr>
            <form action ="script_disc_ajout.php" method = 'post'>
                <h2>Ajouter un vinyle</h2>
                    <!-- Ajout de titre debut -->
                    <label for = 'Titre' class="form-label">Title</label>
                    <input type = 'text' name = 'title' placeholder = 'Enter title' class="form-control"><br>
                    <br>
                    <!-- Ajout de titre fin -->
                    <!-- Début menu déroulant -->
                    <label for = 'Artist' >Artist</label>
                    <select name = "artist" class="form-select" >
                    <option selected>Veuillez séléctionner un Artist</option>
                        <?php  foreach ($tableau as $artist):?>
                            <option value = <?= $artist->artist_id ?>>
                                <?= $artist->artist_name?>
                            </option>
                        <?php endforeach?>
                    </select><br>
                    <br>
                    <!-- Fin menu déroulant -->
                    <!-- Ajout de l'année  -->
                    <label for = 'Year' >Year</label>
                    <input type = 'text' name = 'year' placeholder = 'Entrer year' class="form-control"><br>
                    <br>
                    <!-- Fin ajout de l'année -->
                    <!-- Ajout du genre -->
                    <label for = 'Genre'>Genre</label>
                    <input type = 'text' name = 'genre' placeholder = 'Entrer genre (Rock, Pop, Prog...)' class="form-control"><br>
                    <br>
                    <!-- Fin d'ajout du genre -->
                    <!-- Début d'ajout du label -->
                    <label for = 'Label'>Label</label>
                    <input type = 'text' name = 'label' placeholder = 'Entrer label (EMI, Warner, PolyGram, Univers sale ...)' class="form-control"><br>
                    <br>
                    <!-- Fin ajout du label -->
                    <!-- Début ajout prix -->
                    <label for = 'Price'>Price</label>
                    <input type = 'text' name = 'price' class="form-control"><br>
                    <br>
                    <!-- Fin ajout prix -->
                    <!-- Début ajout d'image -->
                    <label for = 'Picture'>Picture</label>
                    <input type = 'file' name = 'picture' class="form-control"><br>
                    <br>
                    <!-- Fin ajout image -->
                    <button type="submit" class="btn btn-dark" value ="Ajouter">Ajouter</button>
                    <button type="reset" class="btn btn-dark"><a href= 'discs.php' value="100000">Retour</a></button>
            </form>

            <?php include('footer.php')?>

        </body>
    </html>


