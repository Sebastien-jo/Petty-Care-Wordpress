<footer>
    <div class="footerTop">
        <div class="container divFooter">
            <div class="row">
                <div class="col-md-2">
                    <!-- LOGO PETTY CARE -->
                    <a href="<?php the_permalink(7) ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/Logo-Petty-Care-Deep-Jungle-Green.svg" alt="" height="100"></a>
                </div>
                <div class="col-md-3">
                    <p><a href="<?php the_permalink(16) ?>">Nos produits</a></p>
                    <p><a class='footerText' href="<?php the_permalink(7) ?>">Nos engagements</a></p>
                    <!-- Condition si la personne a un compte ou pas -->
                    <p><a class='footerText' href="<?php the_permalink(28) ?>">Mon compte</a></p>
                    <p><a class='footerText' href="#">Devenir revendeur</a></p>
                </div>
                <div class="col-md-3">
                    <p class='footerText'>Appelez-nous au 0806 700 364</p>
                    <p class='footerText'>Du lundi au vendredi de 10h à 18h</p>
                    <p class='footerText'>Ou contactez-nous via le formulaire en ligne</p>
                    <div>
                        <!-- BOUTON NOUS CONTACTER -->
                        <div>
                            <button class="footerButton" onclick="window.location.href ='<?php the_permalink(12) ?>'" type="button">Nous contacter</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- COMPOSANT FACEBOOK -->
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Composant_Facebook.svg" alt="" height="40">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <!-- COMPOSANT INSTAGRAM -->
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Composant_Instagram.svg" alt="" height="40">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <!-- COMPOSANT TWITTER -->
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Composant_Twitter.svg" alt="" height="40">
                            </a>
                        </div>
                    </div>
                    <div>
                        <p class='footerText'>Paiement 100% sécurisé</p>
                        <p class='footerText'>Paiement possible en 3x sans frais</p>
                        <!-- SVG LOGO MOYENS DE PAIEMENT -->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/Composant_Visa.svg" alt="" height="40">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/Composant_Paypal.svg" alt="" height="40">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/Composant_MasterCard.svg" alt="" height="40">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/Composant_GooglePay.svg" alt="" height="40">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/Composant_ApplePay.svg" alt="" height="40">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container divFooter">
        <div class="row">
            <p class="col-md-2"><a class='footerText' href="#">@ Petty Care 2022</a></p>
            <h5 class="col-md-2"><a class='footerText' href="<?php the_permalink(32) ?>">Plan du site</a></h5>
            <h5 class="col-md-2"><a class='footerText' href="<?php the_permalink(36) ?>">Confidentialité</a></h5>
            <h5 class="col-md-2"><a class='footerText' href="<?php the_permalink(34) ?>">Conditions générales de vente</a></h5>
            <h5 class="col-md-2"><a class='footerText' href="<?php the_permalink(14) ?>">Mentions légales</a></h5>
            <h5 class="col-md-2"><a class='footerText' href="<?php the_permalink(23) ?>">Gestion des cookies</a></h5>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>