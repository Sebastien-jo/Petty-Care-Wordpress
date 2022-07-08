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
    <div class="advert">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <p><a class='advert' href="#">Livraison gratuite en France métropolitaine</a></p>
            </div>
            <div class="col-md-1">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Composant_Cross.svg" alt="" height="20">
                </a>
            </div>
        </div>
    </div>
    <div class="headMini">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-2">
                <p><a href="#">Suivi de commande</a></p>
            </div>
            <div class="col-md-1">
                <p><a href="#">Aide</a></p>
            </div>
            <div class="col-md-1 fr">
                <p>Français</p>
            </div>
        </div>
    </div>
    <div class="container desktop">
        <div class=row>
            <div class="col-md-2 nav">
                <a href="<?php the_permalink(7) ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/Logo-Petty-Care-Viridian-Green.svg" alt="" height="80"></a>
            </div>
            <div class="col-md-2 nav">
                <!-- NOS PRODUITS -->
                <p><a href="<?php the_permalink(16) ?>">Nos produits</a></p>
            </div>
            <div class="col-md-2 nav">
                <!-- NOTRE TECHNOLOGIE -->
                <p><a href="<?php the_permalink(20) ?>">Notre technologie</a></p>
            </div>
            <div class="col-md-2 nav">
                <!-- L'APPLICATION -->
                <p><a href="#">L'application</a></p>
            </div>
            <div class="col-md-1 nav">
                <!-- CONTACT -->
                <p><a href="<?php the_permalink(12) ?>">Contact</a></p>
            </div>
            <div class="col-md-1 nav comp">
                <!-- BARRE DE RECHERCHE -->
                <div>
                    <a href="<?php the_permalink(18) ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/Composant_Search.svg" alt="" height="30">
                    </a>
                </div>
            </div>
            <div class="col-md-1 nav comp">
                <!-- COMPTE -->
                <div>
                    <a href="<?php the_permalink(28) ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/Composant_Account.svg" alt="" height="40">
                    </a>
                </div>
            </div>
            <div class="col-md-1 nav comp">
                <!-- PANIER -->
                <div>
                    <a href="<?php the_permalink(26) ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/Composant_Cart.svg" alt="" height="40">
                    </a>
                </div>
            </div>
        </div>
    </div>