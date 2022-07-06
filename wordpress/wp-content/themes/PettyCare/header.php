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
    <div class="container">
        <div class="row">
            <p><a href="#">Livraison gratuite en France métropolitaine</a></p>
            <!-- SVG CROIX -->
        </div>
    </div>
    <div class="container">
        <!-- UNIQUEMENT EN DESKTOP -->
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-2">
                <!-- SVG -->
                <p>Suivi de commande</p>
            </div>
            <div class="col-md-1">
                <!-- SVG -->
                <p>Aide</p>
            </div>
            <div class="col-md-1">
                <!-- SVG -->
                <p>Français</p>
            </div>
        </div>
    </div>
    <!-- SUR MOBILE -->
    <div class="container mobile">
        <div class=row>
            <div>
                <!-- MENU -->
                <!-- SVG -->
                <!-- MENU EN LISTE SI ON CLIQUE DESSUS CA DEROULE -->
                <p><a href="#">Menu</a></p>
            </div>
            <div>
                <!-- RECHERCHE -->
                <!-- SVG -->
                <p><a href="<?php the_permalink(18) ?>">Recherche</a></p>
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
                <p><a href="<?php the_permalink(26) ?>">Panier</a></p>
            </div>
        </div>
    </div>

    <!-- SUR DESKTOP -->
    <div class="container desktop">
        <div class=row>
            <div class="col-md-2">
            <a href="<?php the_permalink(7) ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/Logo-Petty-Care-Viridian-Green.svg" alt="" height="100"></a>
            </div>
            <div class="col-md-1">
                <!-- NOS PRODUITS -->
                <p><a href="#">Nos produits</a></p>
            </div>
            <div class="col-md-1">
                <!-- NOTRE TECHNOLOGIE -->
                <p><a href="#">Notre technologie</a></p>
            </div>
            <div class="col-md-1">
                <!-- L'APPLICATION -->
                <p><a href="#">L'application</a></p>
            </div>
            <div class="col-md-1">
                <!-- CONTACT -->
                <p><a href="#">Contact</a></p>
            </div>
            <div class="col-md-2">
                <!-- BARRE DE RECHERCHE -->
                <!-- SVG -->
                <input id="searchbar" onkeyup="search()" type="text" name="search" placeholder="Rechercher">
            </div>
            <div class="col-md-2">
                <!-- COMPTE -->
                <!-- SVG -->
                <h5><a href="#">Compte</a></h5>
            </div>
            <div class="col-md-2">
                <!-- PANIER -->
                <!-- SVG -->
                <h5><a href="#">Panier</a></h5>
            </div>
        </div>
    </div>