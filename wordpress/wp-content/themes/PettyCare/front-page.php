<?php
/*
    Template Name: Homepage
*/
?>
<div style="background: url('<?php bloginfo('template_directory'); ?>/assets/Image_Cat_Grey.jpg') no-repeat center; background-size: cover;" alt="">
<div class="frontpageHeader">
<?php
    get_header();
?>
</div>
    <section class="welcome">
        <div class="container">
            <div class="homeTitle">
                <h1>L'application santé pour votre animal de compagnie</h1>
            </div>
            <!-- BOUTON COMMANDER -->
            <div class="button headerButton">
                <button type="button">Commander</button>
            </div>
        </div>
    </section>
</div>
<section class="products">
    <div class="container category">
        <div>
            <h2 class="frontpageTitle">Nos produits</h2>
        </div>
        <div class="row divArticle">
            <article class="col-md-6 articleProduct">
                <!-- COLLIER -->
                <img class="imgProduct" src="<?php echo get_template_directory_uri(); ?>/assets/Image_Cat_Necklace.png" alt="">
                <h4 class="FrontSubtitle">Lorem ipsum dolor</h4>
            </article>
            <article class="col-md-6 articleProduct">
                <!-- JOUET -->
                <img class="imgProduct" src="<?php echo get_template_directory_uri(); ?>/assets/Image_Cat_Toy.jpg" alt="">
                <h4 class="FrontSubtitle">Lorem ipsum dolor</h4>
            </article>
        </div>
    </div>
</section>
<section class="engagements">
    <div class="container category">
        <div>
            <h2 class="frontpageTitle">Nos engagements</h2>
            <div class="row engArticle">
                <article class="col-md-3">
                    <!-- ARTICLE 1 -->
                    <div class="engCircle"></div>
                    <p>Lorem ipsum dolor</p>
                </article>
                <article class="col-md-3">
                    <!-- ARTICLE 2 -->
                    <div class="engCircle"></div>
                    <p>Lorem ipsum dolor</p>
                </article>
                <article class="col-md-3">
                    <!-- ARTICLE 3 -->
                    <div class="engCircle"></div>
                    <p>Lorem ipsum dolor</p>
                </article>
                <article class="col-md-3">
                    <!-- ARTICLE 4 -->
                    <div class="engCircle"></div>
                    <p>Lorem ipsum dolor</p>
                </article>
            </div>
        </div>
    </div>
</section>
<section class="operation">
    <div class="container category">
        <div class="row">
            <div class="col-md-4">
                <h2 class="frontpageTitle">Le fonctionnement</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis tellus imperdiet ullamcorper cras bibendum donec. Suspendisse risus nullam nunc, viverra sapien nisl ultricies.</p>
                <!-- UN BOUTON -->
                <div class="button">
                    <button type="button">Découvrir</button>
                </div>
            </div>
            <div class="col-md-8">
                <!-- UNE IMAGE -->
                <img class="imgOperation" src="<?php echo get_template_directory_uri(); ?>/assets/Image_Cat_Sleeping.png" alt="" height="400">
            </div>
        </div>
    </div>
</section>
<section class="opinion">
    <div class="container category">
        <div class="row">
            <div class="col-md-8">
                <!-- UNE IMAGE -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/Image_Cat_Pet.png" alt="" height="500">
            </div>
            <div class="col-md-4">
                <div>
                    <h2 class="frontpageTitle">Les avis clients</h2>
                </div>
                <article>
                    <h4>Vanessa P.</h4>
                    <div>
                        <!-- LES ETOILES -->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/Composant_Five_Stars.svg" alt="" height="20">
                    </div>
                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis tellus imperdiet ullamcorper cras bibendum donec. Suspendisse risus nullam nunc, viverra sapien nisl ultricies.”</p>
                </article>
                <article>
                    <h4>Philippe E.</h4>
                    <div>
                        <!-- LES ETOILES -->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/Composant_Five_Stars.svg" alt="" height="20">
                    </div>
                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis tellus imperdiet ullamcorper cras bibendum donec. Suspendisse risus nullam nunc, viverra sapien nisl ultricies.”</p>
                </article>
            </div>
        </div>
    </div>
</section>
<section class="newsletter">
    <div class="container category">
        <div class="row">
            <h2 class="frontpageTitle">Lorem newsletter inscription</h2>
            <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="col-md-6">
                <input type="email" id='email' pattern='.+@gmail\.com' size='30' placeholder="votreadressemail@gmail.com" required>
                <!-- BOUTON S'INSCRIRE -->
                <div>
                    <button class="frontpageButton frontpageNewsletter" type="button">S'inscrire</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container category">
        <div class="row">
            <div class="col-md-4">
                <article>
                    <h4>Livraison et retours</h4>
                    <p>Livraison gratuite en France métropolitaine</p>
                    <p>Retours gratuits pendant 30 jours</p>
                </article>
            </div>
            <div class="col-md-4">
                <article>
                    <h4>Service client à l'écoute</h4>
                    <p>Une question ?</p>
                    <p>Appelez-nous au 0806 700 364</p>
                    <p>Du lundi au vendredi, de 10h à 18h</p>
                </article>
            </div>
            <div class="col-md-4">
                <article>
                    <h4>Paiement sécurisé</h4>
                    <p>Possible en 3x sans frais</p>
                </article>
            </div>
        </div>
    </div>
</section>
<?php
    get_footer();
?>