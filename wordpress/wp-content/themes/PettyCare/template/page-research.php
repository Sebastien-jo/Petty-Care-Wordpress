<?php
/*
    Template Name: Research
*/
?>
<?php
    get_header();
?>
<div class="pageResearch">
    <div class="container">
        <section class="row">
            <div class="col-md-3">
                <input id="searchbar" onkeyup="search()" type="text" name="search" placeholder="Rechercher">
            </div>
            <div class="col-md-2">
                <button class="researchButton" type="button">Annuler</button>
            </div>
        </section>
    </div>
</div>

<?php
    get_footer();
?>