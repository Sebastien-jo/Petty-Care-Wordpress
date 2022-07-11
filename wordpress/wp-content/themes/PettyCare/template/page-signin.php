<?php
/*
    Template Name: Sign in
*/
?>
<?php
get_header();
?>
<?php
if ( isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['password']) ) {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['fisrtname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // echo("Vous êtes enregistré !");

}

?>
<div class="container">
    <form class="registerForm" method="post">
        <div class="name">
            <label for="lastname">Votre nom</label>
            <input type="text" name="lastname" id="lastname" placeholder="Nom" required />

            <label for="firstname">Votre prénom</label>
            <input type="text" name="firstname" id="firstname" placeholder="Prénom" required />
        </div>
        <div class="adress">
            <label for="adress">Votre adresse</label>
            <input type="text" name="address" id="adress" placeholder="Adresse" required />
        </div>
        <div class="email">
            <label for="email">Votre email</label>
            <input type="email" name="email" id="email" placeholder="Email" required />
        </div>
        <div class="password">
            <label for="password">Votre mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Mot de passe" required />
        </div>
        <div>
            <input type="checkbox" name="personaldata" id="personaldata" required /> <label for="personaldata" class="inline">En cochant cette case, vous acceptez le traitement de vos données personnelles.</label>
        </div>
        <div class="button">
            <input type="submit" value="Valider" class="valider" />
        </div>
    </form>
</div>

<?php
get_footer();
?>