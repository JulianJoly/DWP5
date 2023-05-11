<?php include('galerie.php'); ?> <!-- Affiche la galerie -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <?php include('header.php'); ?> <!-- Affiche le header -->
    <main>
        <div id="liste-oeuvres">
        <?php foreach($galerie as $oeuvre) : ?> <!-- Pour chaque oeuvre dans le tableau "gallery" : -->
            <article class="oeuvre"> <!-- Créer un article -->
                <a href="oeuvre.php?id=<?php echo $oeuvre['id']; ?>"> <!-- Créer son url -->
                    <img src="<?php echo $oeuvre['img']; ?>" alt="<?php echo $oeuvre['auteur']; ?>"> <!-- Affiche son image -->
                    <h2><?php echo $oeuvre['titre']; ?></h2> <!-- Affiche son titre -->
                    <p class="description"><?php echo $oeuvre['auteur']; ?></p> <!-- Affiche son auteur -->
                </a>
            </article>
        <?php endforeach ?>
        </div>
    </main>
    <?php include('footer.php'); ?> <!-- Affiche le footer -->
</body>
</html>