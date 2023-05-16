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
        <?php
            include('galerie.php'); /*  Affiche la galerie  */
            $id = $_GET['id']; /* On définie la valeur "$id" */
            if (array_key_exists($id, $galerie) && isset($id) && $id != 0): /* Si la clé "id" existe ET la variable est déclaré / différente de null ET la variable n'est pas égale à 0 */
        ?>
            <article id="detail-oeuvre">
                <div id="img-oeuvre">
                    <img src="<?php echo $galerie[$id-1]['img']; ?>" alt="<?php echo $galerie[$id-1]['auteur']; ?>"> <!-- Affiche son image -->
                </div>
                <div id="contenu-oeuvre">
                    <h1><?php echo $galerie[$id-1]['titre']; ?></h1> <!-- Affiche son titre -->
                    <p class="description"><?php echo $galerie[$id-1]['auteur']; ?></p> <!-- Affiche son auteur -->
                    <p class="description-complete"><?php echo $galerie[$id-1]['description']; ?></p>  <!-- Affiche sa description -->
                </div>
            </article>
        <?php
            else: /* Sinon: on indique que la page n'éxiste pas */
                echo 'La page n\'existe pas';
            endif;
        ?>
    </main>
    <?php include('footer.php'); ?> <!-- Affiche le footer -->
</body>
</html>