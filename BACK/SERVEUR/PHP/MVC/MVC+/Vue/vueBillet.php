<?php require_once 'controller/Controleur.php';?>

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

<?php require 'gabarit.php'; ?>