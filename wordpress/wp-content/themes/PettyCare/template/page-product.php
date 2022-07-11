<?php
/*
    Template Name: Product
*/
?>
<?php
    get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <!-- Image background chat -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/Image_Cat_Toy_2.png" alt="" height="400">
        </div>
        <div class="col-md-6">
            <section>
                <div>
                    <h4>Titre du produit</h4>
                    <h4>149 €</h4>
                </div>
                <div>
                    <!-- Etoiles des avis -->
                    <p>4.9/5</p>
                    <p><a href="#">Voir les avis</a></p>
                </div>
                <div class="row">
                    <article class="col-md-3">
                        <!-- image en cercle -->
                        <div class="productCircle"></div>
                        <p>Lorem ipsum</p>
                    </article>
                    <article class="col-md-3">
                        <!-- image en cercle -->
                        <div class="productCircle"></div>
                        <p>Lorem ipsum</p>
                    </article>
                    <article class="col-md-3">
                        <!-- image en cercle -->
                        <div class="productCircle"></div>
                        <p>Lorem ipsum</p>
                    </article>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempor, elit sagittis, fermentum magna. Massa quisque in quisque vel laoreet sit nec, mi fermentum. Orci feugiat eget viverra tempor vel viverra cursus ultricies massa. Sem enim, scelerisque dictumst orci.</p>
                <section class="row">
                    <div class="col-md-2">
                        <h4>Quantité</h4>
                    </div>
                    <div class="col-md-1">
                        <button class="productButton" type="button">-</button>
                    </div>
                    <div class="col-md-1">
                        <span>1</span>
                    </div>
                    <div class="col-md-1">
                        <button class="productButton" type="button">+</button>
                    </div>
                    <div class="col-md-4">
                        <button class="productButton" type="button">Ajouter au panier</button>
                    </div>
                </section>
            </section>
        </div>
    </div>
    <section>
        <!-- Bouton ALLER AU PANIER -->
        <div class="col-md-4 goToBasket">
            <button onclick="window.location.href ='<?php the_permalink(26) ?>'" class="productButton" type="button">Aller au panier</button>
        </div>
    </section>
</div>
<?php
    get_footer();
?>