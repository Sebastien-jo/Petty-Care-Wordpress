<?php
/*
    Template Name: Cart
*/
?>
<?php
    get_header();
?>
<div class="container">
    <!-- LOGO PETTY CARE VIRIDIAN GREEN -->
    
    <div class="row">
        <div class="col-md-2">
            <!-- COMPOSANT FLECHE -->
        </div>
        <div class="col-md-2">
            <p><a href="#">Continuer mes achats</a></p>
        </div>
    </div>
    <div class = row>
        <h2>Mon panier</h2>
        <p>1 produit</p>
    </div>
    <section class="row">
        <article class="col-md-6">
            <!-- IMAGE CHAT -->
        </article>
        <article class="col-md-6">
            <h4>Nom du produit</h4>
            <h4>149.00€</h4>
            <div>
                <label for="color-select">Couleur :</label>
                <select name="pets" id="pet-select">
                    <option value="red">Rouge</option>
                    <option value="blue">Bleu</option>
                    <option value="green">Green</option>
                    <option value="yellow">Jaune</option>
                    <option value="pink">Rose</option>
                </select>
            </div>
            <div class='row'>
                <div class="col-md-2">
                    <p>Quantité :</p>
                </div>
                <div class="col-md-1">
                    <!-- BOUTON POUR AJOUTER QUANTITE -->
                    <div class="button">
                        <button type="button">-</button>
                    </div>
                </div>
                <div class="col-md-1">
                    <span>1</span>
                </div>
                <div class="col-md-1">
                    <div class="button">
                        <button type="button">+</button>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section>
        <h4>Récapitulatif</h4>
        <div class="row">
            <div class="col-md-3">
                <input type="text" id='text' size='30' placeholder="J'ai un code avantage" required>
            </div>
            <div class="col-md-1">
                <!-- BOUTON OK -->
                <div class="button">
                    <button type="button">Ok</button>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class="col-md-10">
                <p>1 produit</p>
            </div>
            <div class="col-md-2">
                <p>149.00€</p>
            </div>
        </div>
        <div class='row'>
            <div class="col-md-10">
                <p>Date de livraison estimée avec Colissimo</p>
            </div>
            <div class="col-md-2">
                <p>13 juillet</p>
            </div>
        </div>
        <div class='row'>
            <div class="col-md-10">
                <p>Frais de livraison estimés avec Colissimo</p>
            </div>
            <div class="col-md-2">
                <p>Gratuit</p>
            </div>
        </div>
        <div class='row'>
            <div class="col-md-10">
                <p>TOTAL</p>
            </div>
            <div class="col-md-2">
                <p>149.00 €</p>
            </div>
        </div>
    </section>
    <!-- EN STATIQUE -->
    <div class='row'>
        <div class="col-md-3">
            <h3>TOTAL : 149.00 €</h3>
        </div>
        <div class="col-md-3">
            <!-- BOUTON COMMANDER -->
            <div class="button">
                <button type="button">Commander</button>
            </div>
        </div>
    </div>
</div>
<?php
    get_footer();
?>
