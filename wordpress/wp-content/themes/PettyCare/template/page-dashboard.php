<?php
/*
    Template Name: Dashboard
*/
?>
<?php
get_header();
?>
<div class="container center">
    <div class="button" >
        <input type="button" class="deconnexion" value="Se déconnecter">
    </div>
    <section>
        <div class="histo">
            <p><a href="#" class="dashboard histodash" >Historique et détails des commandes</a></p>
        </div>
        <div class="adressdash">
            <p><a href="#" class="dashboard adressdash2" >Mes adresses</a></p>
        </div>
        <div class="infos">
            <p><a href="#" class="dashboard infodash" >Mes informations personnelles</a></p>
        </div>
        <div class="paiement">
            <p><a href="#" class="dashboard paiementdash" >Mes moyens de paiement</a></p>
        </div>
    </section>
</div>

<?php
get_footer();
?>