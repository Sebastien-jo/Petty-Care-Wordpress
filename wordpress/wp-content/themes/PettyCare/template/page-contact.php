<?php
/*
    Template Name: Contact form
*/
?>
<?php
    get_header();
?>

    <div formsappId="62cbdeff971e3e097d357bf3"></div>
    <script src="https://my.forms.app/static/iframe.js" type="text/javascript"></script>
    <script>
        new formsapp('62cbdeff971e3e097d357bf3', {
            width: '100%',
            height: 'formHeight'
        });
    </script>

<?php
    get_footer();
?>