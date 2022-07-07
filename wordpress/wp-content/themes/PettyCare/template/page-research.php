<?php
/*
    Template Name: Research
*/
?>
<?php
    get_header();
?>

<div class="container">
    <section class="row">
        <div class="col-md-2">
            <input id="searchbar" onkeyup="search()" type="text" name="search" placeholder="Rechercher">
        </div>
        <div class="button col-md-2">
            <button type="button">Annuler</button>
        </div>
    </section>
</div>

<?php
    get_footer();
?>