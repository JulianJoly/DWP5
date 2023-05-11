<?php include('galerie.php'); ?> <!-- Affiche la galerie -->
<?php $id = $_GET['id']-1; ?> <!-- Récupère l'id dans l'url -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <?php include('header.php'); ?> <!-- Affiche le header -->
    <main>
        <article id="detail-oeuvre">
            <div id="img-oeuvre">
                <img src="<?php echo $galerie[$id]['img']; ?>" alt="<?php echo $galerie[$id]['auteur']; ?>"> <!-- Affiche son image -->
            </div>
            <div id="contenu-oeuvre">
                <h1><?php echo $galerie[$id]['titre']; ?></h1> <!-- Affiche son titre -->
                <p class="description"><?php echo $galerie[$id]['auteur']; ?></p> <!-- Affiche son auteur -->
                <p class="description-complete"><?php echo $galerie[$id]['description']; ?></p>  <!-- Affiche sa description -->
            </div>
        </article>
    </main>
    <?php include('footer.php'); ?> <!-- Affiche le footer -->
</body>
</html>