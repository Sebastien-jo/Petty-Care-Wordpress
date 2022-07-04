<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://use.typekit.net/ecx6sed.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petty Care</title>
</head>
<body>
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