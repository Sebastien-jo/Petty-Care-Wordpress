<?php
/*
    Template Name: Cart
*/
?>
<?php
    get_header();
?>

<!-- LOGO PETTY CARE VIRIDIAN GREEN -->

<div>
    <!-- COMPOSANT FLECHE -->
    <p><a href="#">Continuer mes achats</a></p>
</div>
<div>
    <h2>Mon panier</h2>
    <p>1 produit</p>
</div>
<section>
    <article>
        <!-- IMAGE CHAT -->
    </article>
    <article>
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
        <div>
            <p>Quantité</p>
            <!-- BOUTON POUR AJOUTER QUANTITE -->
        </div>
    </article>
</section>
<section>
    <h4>Récapitulatif</h4>
    <div>
        <input type="text" id='text' size='30' required>
        <!-- BOUTON OK -->
    </div>
    <div>
        <p>1 produit</p>
        <p>149.00€</p>
    </div>
    <div>
        <p>Date de livraison estimée avec Colissimo</p>
        <p>13 juillet</p>
    </div>
    <div>
        <p>Frais de livraison estimés avec Colissimo</p>
        <p>Gratuit</p>
    </div>
    <div>
        <p>TOTAL</p>
        <p>149.00 €</p>
    </div>
</section>
<!-- EN STATIQUE -->
<div>
    <h3>TOTAL : 149.00 €</h3>
    <!-- BOUTON COMMANDER -->
</div>
<?php
    get_footer();
?>