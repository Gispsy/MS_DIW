<html>
    <body>

        <form action="script.php" method="GET">
            <input type="text" name="prenom" />
             <input type="submit" value="ENVOYER" /> 
        </form>

        <form action="script.php" method="post"> 
            Nom : <input type="text" name="nom" size="20" maxlength="40" /> <br /> 
            Prenom : <input type="text" name="prenom" size="20" maxlength=40 /> 
            <input type="submit" value="ENVOYER" /> 
          </form>

          <form action ="check.php" method="post"> 
            Tu utilises internet plutôt le :<br /> 
            <input type="checkbox" name="Fjour[]" value="Lundi" />Lundi<br />
            <input type="checkbox" name="Fjour[]" value="Mardi" />Mardi<br />
            <input type="checkbox" name="Fjour[]" value="Mercredi" />Mercredi<br />
            <input type="checkbox" name="Fjour[]" value="Jeudi" />Jeudi<br />
            <input type="checkbox" name="Fjour[]" value="Vendredi" />Vendredi<br />
            <input type="submit" name="Envoyer" value="ENVOYER" /> 
        </form> 


        <!-- Après avoir rempli la case "Votre Email" du formulaire et en cliquant sur "OK", celui-ci appellera la page "page.php" qui recevra les variables "Email" et "secret". -->
        <form action="script.php" method="post">
            Votre e-mail : <input type="text" name="email" />
            <input type="hidden" name="secret" value="texte à passer discrètement" />
            <input type="submit" value="OK" />
        </form> 


        <form action="<?php print $_SERVER['PHP_SELF'] ?>"method="post">
            <input type="text" name="zoneDeTexte" size="40" maxlength="40">
            <input type="submit" name="btnEnvoyer" value="envoyer">
            <input type="submit" name="delete" value="Supprimer">
            <input type="submit" name="create" value="Créer">
            <input type="submit" name="update" value="Modifier">
            <?php   if ( isset( $_POST['update'])) { // mise à jour
                echo "mise a jour";
            } elseif ( isset($_POST['delete'])) {
                echo "suppression";
            } elseif ( isset($_POST['create'])) {
                echo "Création";
            } ?>
          </form>

    </body>
</html>