<?php

    include "db.php";                                       //Inclue la connexion via db.php

    $db = ConnexionDeBase();                                //J'utilise la fonction ConnexionDeBase pour connecter la base de donnée 
    $requete = $db->query("SELECT*FROM artist");            //J'utilise $requete pour Selection tout de la table artist
    $tableau = $requete-> fetchall(PDO::FETCH_OBJ);         //$tableau me sers a creer des tableau si besoin dans mon php

    $requete->closeCursor();                                 //Je ferme la requete avec la fonction closeCursor()

?>
<DOCTYPE html>
    <html lang = "fr">
        <head>
            <meta charset = "utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Formulaire d'ajout </title>
        </head>
        <body>
            <h1>Le Formulaire d'ajout</h1>
            <hr>
            <form>
                <h2>Ajouter un vinyle</h2>
                    <!-- Ajout de titre debut -->
                    <label for = 'titre'>Title</label>
                    <input type = 'text' name = 'title' placeholder = 'Enter title'><br>
                    <br>
                    <!-- Ajout de titre fin -->
                    <!-- Début menu déroulant -->
                    <label for = 'artist'>Artist</label>
                    <select>
                    <option value="" selected>Veuillez séléctionner un Artist</option>
                        <?php foreach ($tableau as $artist):?>
                            <option>
                                <?= $artist->artist_name?>
                            </option>
                        <?php endforeach?>
                    </select><br>
                    <br>
                    <!-- Fin menu déroulant -->
                    <!-- Ajout de l'année  -->
                    <label for = 'year'>Year</label>
                    <input type = 'text' name = 'year' placeholder = 'Entrer year'><br>
                    <br>
                    <!-- Fin ajout de l'année -->
                    <!-- Ajout du genre -->
                    <label for = 'genre'>Genre</label>
                    <input type = 'text' name = 'genre' placeholder = 'Entrer genre (Rock, Pop, Prog...)'><br>
                    <br>
                    <!-- Fin d'ajout du genre -->
                    <!-- Début d'ajout du label -->
                    <label for = 'label'>Label</label>
                    <input type = 'text' name = 'label' placeholder = 'Entrer label (EMI, Warner, PolyGram, Univers sale ...)'><br>
                    <br>
                    <!-- Fin ajout du label -->
                    <!-- Début ajout prix -->
                    <label for = 'price'>Price</label>
                    <input type = 'text' name = 'price'><br>
                    <br>
                    <!-- Fin ajout prix -->
                    <!-- Début ajout d'image -->
                    <label for = 'picture'>Picture</label>
                    <input type = 'file'><br>
                    <br>
                    <!-- Fin ajout image -->
                    <button type="submit" class="btn btn-dark">Ajouter</button>
            <button type="reset" class="btn btn-dark"><a href= 'discs.php'>Retour</a></button>
            </form>
        </body>
    </html>


