<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!-- LOGO PETTY CARE -->
                <a href="<?php the_permalink(7) ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/Logo-Petty-Care-Deep-Jungle-Green.svg" alt="" height="100"></a>
            </div>
            <div class="col-md-3">
                <p><a href="<?php the_permalink(16) ?>">Nos produits</a></p>
                <p><a href="#engagements">Nos engagements</a></p>
                <!-- Condition si la personne a un compte ou pas -->
                <p><a href="<?php the_permalink() ?>">Mon compte</a></p>
                <p><a href="#">Devenir revendeur</a></p>
            </div>
            <div class="col-md-3">
                <p>Appelez-nous au 0806 700 364</p>
                <p>Du lundi au vendredi de 10h à 18h</p>
                <p>Ou contactez-nous via le formulaire en ligne</p>
                <div>
                    <!-- BOUTON NOUS CONTACTER -->
                    <div class="button">
                        <button type="button">Nous contacter</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <div>
                        <!-- COMPOSANT FACEBOOK -->
                    </div>
                    <div>
                        <!-- COMPOSANT INSTAGRAM -->
                    </div>
                    <div>
                        <!-- COMPOSANT TWITTER -->
                    </div>
                </div>
                <div>
                    <p>Paiement 100% sécurisé</p>
                    <!-- SVG LOGO MOYENS DE PAIEMENT -->
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <p class="col-md-2"><a href="#">@ Petty Care 2022</a></p>
            <h5 class="col-md-2"><a href="<?php the_permalink(32) ?>">Plan du site</a></h5>
            <h5 class="col-md-2"><a href="<?php the_permalink(36) ?>">Confidentialité</a></h5>
            <h5 class="col-md-2"><a href="<?php the_permalink(34) ?>">Conditions générales de vente</a></h5>
            <h5 class="col-md-2"><a href="<?php the_permalink(14) ?>">Mentions légales</a></h5>
            <h5 class="col-md-2"><a href="<?php the_permalink(23) ?>">Gestion des cookies</a></h5>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>