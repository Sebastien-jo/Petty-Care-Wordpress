<?php
/*
    Template Name: Research
*/
?>
<?php
    get_header();
?>

<section>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/Logo-Petty-Care-Viridian-Green.svg" alt="" height="100">
    <!-- COMPOSANT CROIX -->
    <p>X</p>
</section>
<section>
    <input id="searchbar" onkeyup="search()" type="text" name="search" placeholder="Rechercher">
    <p>Annuler</p>
</section>
<section>
    <h3>Suggestions</h3>
    <p>Lorem ipsum</p>
    <p>Lorem ipsum</p>
    <p>Lorem ipsum</p>
    <p>Lorem ipsum</p>
    <p>Lorem ipsum</p>
</section>

<?php
    get_footer();
?>