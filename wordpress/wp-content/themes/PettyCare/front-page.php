<?php
/*
    Template Name: Homepage
*/
?>
<?php
    get_header();
?>
<section class="welcome">
    <div class="container">
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/Logo-Petty-Care-White.svg" alt="" height="100">
        </div>
        <div>
            <h1>L'application santé pour votre animal de compagnie</h1>
        </div>
        <!-- BOUTON COMMANDER -->
        <div class="button">
            <button type="button">Commander</button>
        </div>
    </div>
</section>
<section class="products">
    <div class="container">
        <div>
            <h2>Nos produits</h2>
        </div>
        <div class="row">
            <article class="col-md-6">
                <!-- COLLIER -->
                <h4>Lorem ipsum dolor</h4>
            </article>
            <article class="col-md-6">
                <!-- JOUET -->
                <h4>Lorem ipsum dolor</h4>
            </article>
        </div>
    </div>
</section>
<section class="engagements">
    <div class="container">
        <div>
            <h2>Nos engagements</h2>
            <div class="row">
                <article class="col-md-3">
                    <!-- ARTICLE 1 -->
                    <p>Lorem ipsum dolor</p>
                </article>
                <article class="col-md-3">
                    <!-- ARTICLE 2 -->
                    <p>Lorem ipsum dolor</p>
                </article>
                <article class="col-md-3">
                    <!-- ARTICLE 3 -->
                    <p>Lorem ipsum dolor</p>
                </article>
                <article class="col-md-3">
                    <!-- ARTICLE 4 -->
                    <p>Lorem ipsum dolor</p>
                </article>
            </div>
        </div>
    </div>
</section>
<section class="operation">
    <div class="container">
        <h2>Le fonctionnement</h2>
        <div class="row">
            <div class="col-md-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis tellus imperdiet ullamcorper cras bibendum donec. Suspendisse risus nullam nunc, viverra sapien nisl ultricies.</p>
                <!-- UN BOUTON -->
                <div class="button">
                    <button type="button">Découvrir</button>
                </div>
            </div>
            <div class="col-md-8">
                <!-- UNE IMAGE -->
            </div>
        </div>
    </div>
</section>
<section class="opinion">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- UNE IMAGE -->
            </div>
            <div class="col-md-4">
                <div>
                    <h2>Les avis clients</h2>
                    <!-- Condition, si on clique ça déroule les avis -->
                    <p><a href="">Voir tous les avis +</a></p>
                </div>
                <article>
                    <h4>Vanessa P.</h4>
                    <div>
                        <!-- LES ETOILES -->
                    </div>
                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis tellus imperdiet ullamcorper cras bibendum donec. Suspendisse risus nullam nunc, viverra sapien nisl ultricies.”</p>
                </article>
                <article>
                    <h4>Philippe E.</h4>
                    <div>
                        <!-- LES ETOILES -->
                    </div>
                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis tellus imperdiet ullamcorper cras bibendum donec. Suspendisse risus nullam nunc, viverra sapien nisl ultricies.”</p>
                </article>
            </div>
        </div>
    </div>
</section>
<section class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Lorem newsletter inscription</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="col-md-6">
                <input type="email" id='email' pattern='.+@gmail\.com' size='30' required>
                <!-- BOUTON S'INSCRIRE -->
                <div class="button">
                    <button type="button">S'INSCRIRE</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
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