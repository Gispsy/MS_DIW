<?php require_once 'controleur/Controleur.php';?>

<?php ob_start(); ?>
<?php $titre = "Mon Blog - ".$billet['titre']; ?>


<article>
    <header>
        <h1 class="titreBillet"><?= $billet['titre'] ?> </h1>
        <time><?= $billet['date'] ?></time>
    </header>
    <p><?= $billet['contenu'] ?></p>
</article>

    <hr />
    <header>
        <h1 id="titreReponses">Réponses à <?= $billet['titre'] ?></h1>
    </header>

<?php foreach ($comments as $commentaire): ?>
    <p><?= $commentaire['auteur'] ?> dit :</p>
    <p><?= $commentaire['contenu'] ?></p>
<?php endforeach; ?>

<?php $contenu = ob_get_clean(); ?>
<form method="post" action="index.php?action=commenter">
    <input id="auteur" name="auteur" type="text" placeholder="Votre pseudo" 
           required /><br />
    <textarea id="txtCommentaire" name="contenu" rows="4" 
              placeholder="Votre commentaire" required></textarea><br />
    <input type="hidden" name="id" value="<?= $billet['id'] ?>" />
    <input type="submit" value="Commenter" />
</form>

<?php require 'gabarit.php'; ?>