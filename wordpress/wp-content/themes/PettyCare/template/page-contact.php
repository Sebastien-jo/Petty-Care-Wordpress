<?php
/*
    Template Name: Contact form
*/
?>
<?php
    get_header();
?>

<div class="container">
    <!-- LE FORMULAIRE AVANT -->
    <form action="page-contact.php" method="post">
        <div>
            <label for="name">Prénom :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div>
            <label for="lastname">Nom :</label>
            <input type="text" id="lastname" name="user_name">
        </div>
        <div>
            <label for="mail">e-mail :</label>
            <input type="email" id="mail" name="user_mail">
        </div>
        <div>
            <label for="msg">Message :</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer le formulaire</button>
        </div>
    </form>
</div>

<?php
    get_footer();
?>