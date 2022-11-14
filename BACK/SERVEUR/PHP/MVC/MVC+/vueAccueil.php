<!--vueAccueil.php-->
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Mon blog</title>
</head>
<body>
<div id="global">
    <header>
        <a href="index.php"><h1 id="titreBlog">Mon Blog</h1></a>
        <p>Hello et bienvenue !!!!</p>
    </header>
    <div id="contenu">
        <?php foreach($billets as $billet): ?>
        <article>
            <header>
                <h1 class="titreBillet">
                    <?= $billet['titre']?>
                </h1>
                <time><?= $billet['date']?></time>
            </header>
            <p><?= $billet['contenu']?></p>
        </article>
        <hr>

        <?php endforeach; ?>
    </div>
    <footer id="piedBlog">
        Blog exercice
    </footer>
</div>
</body>
</html>