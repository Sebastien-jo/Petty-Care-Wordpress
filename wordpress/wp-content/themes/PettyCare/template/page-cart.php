<?php
/*
    Template Name: Cart
*/
?>
<?php
    get_header();
?>
<div class="divCart">
    <div class="container">
        <div class = row>
            <h2>Mon panier</h2>
            <p>1 produit</p>
        </div>
        <section class="row">
            <article class="col-md-6">
                <!-- IMAGE CHAT -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/Image_Cat_Grey.jpg" alt="" height="400">
            </article>
            <article class="col-md-6">
                <h4 class="cartSubtitle">Nom du produit</h4>
                <h4 class="cartSubtitle">149.00€</h4>
                <div>
                    <label for="color-select">Couleur :</label>
                    <select class="cartSelectColor" name="pets" id="pet-select">
                        <option value="red">Rouge</option>
                        <option value="blue">Bleu</option>
                        <option value="green">Green</option>
                        <option value="yellow">Jaune</option>
                        <option value="pink">Rose</option>
                    </select>
                </div>
                <p class="textCartQuantity">Quantité :</p>
                <div class='row cartQuantity'>
                    <div class="col-md-1">
                        <button class='cartButton' type="button">-</button>
                    </div>
                    <div class="col-md-1">
                        <span>1</span>
                    </div>
                    <div class="col-md-1">
                        <button class='cartButton' type="button">+</button>
                    </div>
                </div>
            </article>
        </section>
        <section>
            <h4 class="cartSubtitle">Récapitulatif</h4>
            <div class="row">
                <div class="col-md-3">
                    <input type="text" id='text' size='30' placeholder="J'ai un code avantage" required>
                </div>
                <div class="col-md-1">
                    <!-- BOUTON OK -->
                    <div>
                        <button class='cartButton' type="button">Ok</button>
                    </div>
                </div>
            </div>
            <hr>
            <div class='row'>
                <div class="col-md-10">
                    <p>1 produit</p>
                </div>
                <div class="col-md-2">
                    <p>149.00€</p>
                </div>
            </div>
            <hr>
            <div class='row'>
                <div class="col-md-10">
                    <p>Date de livraison estimée avec Colissimo</p>
                </div>
                <div class="col-md-2">
                    <p>13 juillet</p>
                </div>
            </div>
            <hr>
            <div class='row'>
                <div class="col-md-10">
                    <p>Frais de livraison estimés avec Colissimo</p>
                </div>
                <div class="col-md-2">
                    <p>Gratuit</p>
                </div>
            </div>
            <hr>
            <div class='row'>
                <div class="col-md-10">
                    <p>TOTAL</p>
                </div>
                <div class="col-md-2">
                    <p>149.00 €</p>
                </div>
            </div>
            <hr>
        </section>
        <div class='row'>
            <div class="col-md-3">
                <h3 class="cartSubtitle">TOTAL : 149.00 €</h3>
            </div>
            <div class="col-md-3">
                <!-- BOUTON COMMANDER -->
                <div>
                    <button class='cartButton' type="button">Commander</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    get_footer();
?>
