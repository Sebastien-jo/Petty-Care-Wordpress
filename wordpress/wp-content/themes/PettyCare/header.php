<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/assets/favicon.png" />
    <!-- CSS Perso -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/css/style.css"/>
    <?php wp_head(); ?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <p><a href="#">Livraison gratuite en France métropolitaine</a></p>
            </div>
            <div class="col-md-1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/Composant_Cross.svg" alt="" height="20">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-2">
                <p><a href="#">Suivi de commande</a></p>
            </div>
            <div class="col-md-1">
                <p><a href="#">Aide</a></p>
            </div>
            <div class="col-md-1">
                <p>Français</p>
            </div>
        </div>
    </div>
    <div class="container desktop">
        <div class=row>
            <div class="col-md-2">
                <a href="<?php the_permalink(7) ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/Logo-Petty-Care-Viridian-Green.svg" alt="" height="100"></a>
            </div>
            <div class="col-md-1">
                <!-- NOS PRODUITS -->
                <p><a href="<?php the_permalink(16) ?>">Nos produits</a></p>
            </div>
            <div class="col-md-1">
                <!-- NOTRE TECHNOLOGIE -->
                <p><a href="<?php the_permalink(20) ?>">Notre technologie</a></p>
            </div>
            <div class="col-md-1">
                <!-- L'APPLICATION -->
                <p><a href="#">L'application</a></p>
            </div>
            <div class="col-md-1">
                <!-- CONTACT -->
                <p><a href="<?php the_permalink(12) ?>">Contact</a></p>
            </div>
            <div class="col-md-2">
                <!-- BARRE DE RECHERCHE -->
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Composant_Search.svg" alt="" height="30">
                </div>
            </div>
            <div class="col-md-2">
                <!-- COMPTE -->
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Composant_Account.svg" alt="" height="40">
                </div>
                <h5><a href="#">Compte</a></h5>
            </div>
            <div class="col-md-2">
                <!-- PANIER -->
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Composant_Cart.svg" alt="" height="40">
                </div>
                <h5><a href="<?php the_permalink(26) ?>">Panier</a></h5>
            </div>
        </div>
    </div>