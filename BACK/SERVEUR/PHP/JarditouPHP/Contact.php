<?php 
    include("Header.php");
?>

<!--Contact Formulaire-->
<img class="img-fluid col-12 overflow-auto" src="Logo/promotion.jpg" alt="Responsive image">
<br>
<br>
    <div class="layout">
        <article class="colo">
        <p class="display-8">*Ces zones sont obligatoires</p>
        <form action="http://bienvu.net/script.php" method="GET">
        <fieldset class="contac">
            <legend class="h1">Vos coordonnées</legend>

            <!--F_Nom-->
            <div class="form-groupe">
                <label for="nom">Votre Nom*:</label>
                <input type="text" class="form-control" name="nom" id="nom"><br>
            </div>

            <!--F_Prenom-->
            <div class="form-groupe">
                <label for="prenom">Votre prénom*:</label>
                <input type="text" class="form-control" name="prenom" id="prenom"><br>
            </div>

            <!--F_sexe-->
            <div class="form-groupe">
                <span> Sexe*</span>
            </div>
            <br>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="sexe" id="inlineRadio1" value="Homme">Homme
            </div>
                <input type="radio" class="form-check-input" name="sexe" value="Femme">Femme<br>
                <br>

            <!--F_Date de naissance-->
            <div class="form-groupe">
                <label for="date">Date de naissance*:</label>
                <input type="date" class="form-control" name="ddn" id="date"><br>
            </div>

            <!--F-Code postale-->
            <div class="form-groupe">
                <label for="CodePostal">Code postal*:</label>
                <input type="text" class="form-control" name="CodePostale" id="CodePostal"><br>
            </div>

            <!--F_Adresse-->
            <div class="form-groupe">
                <label for="Adress">Adress*:</label>
                <input type="text" name="Adress" class="form-control" id="Adress"><br>
            </div>

            <!--F_Ville-->
            <div class="form-groupe">
                <label for="Ville"> Ville*:</label>
                <input type="text" class="form-control" name="Ville" id="Ville"><br>
            </div>

            <!--F_Email-->
            <div class="form-groupe">
                <label for="Email">Email*:</label>
                <input type="email" class="form-control" name="Email" id="email" placeholder="dave.loper@afpa.fr">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

        </fieldset>
        <br>
        <fieldset>
            <legend class="h1">Votre demande</legend>
                <label for="exampleFormControlInput1">Sujet </label>
                <select id="exampleFormControlSelect1" class="form-control">
                    <option value="" selected>Veuillez séléctionner un sujet</option>
                    <option value="Utilitaire">Mes commandes</option>
                    <option value="Ventes produits">Question sur un produits</option>
                    <option value="Histoires du magasins">Réclamation</option>
                    <option value="Autres">Autres</option>
                </select><br>
                <label for="exampleFormControlTextarea1">Question à poser*:</label>
                <textarea name="questionaposer" rows="3" id="exampleFormControlTextarea1" class="form-control"></textarea>
        </fieldset>
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkbox">
                <label class="form-check-label" for="exampleCheck1">*J'accepte le traitement information de ce formulaire</label>
                <br>
                <button type="submit" class="btn btn-dark">Envoyer</button>
                <button type="reset" class="btn btn-dark">Rénitialiser</button>
        </form>
        <br>
        </article>
    </div>
</div>
<!--Fin Contact Formulaire-->

<?php 
    include("Footer.php");
?>