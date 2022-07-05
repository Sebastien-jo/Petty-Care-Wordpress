<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://use.typekit.net/ecx6sed.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/assets/favicon.png" />
    <?php wp_head(); ?>
</head>
<body>
    <div>
        <p><a href="#">Livraison gratuite en France métropolitaine</a></p>
    </div>
    <div>
        <nav>
            <!-- NAVBAR -->
            <div>
                <!-- MENU -->
                <!-- SVG -->
                <!-- MENU EN LISTE SI ON CLIQUE DESSUS CA DEROULE -->
                <p><a href="#">Menu</a></p>
            </div>
            <div>
                <!-- RECHERCHE -->
                <!-- SVG -->
                <p><a href="<?php the_permalink(37) ?>">Recherche</a></p>
            </div>
            <div>
                <!-- COMPTE -->
                <!-- SVG -->
                <!-- condition si la personne a un compte ou pas -->
                <p><a href="<?php the_permalink() ?>">Compte</a></p>
            </div>
            <div>
                <!-- PANIER -->
                <!-- SVG -->
                <p><a href="<?php the_permalink(19) ?>">Panier</a></p>
            </div>
        </nav>
    </div>