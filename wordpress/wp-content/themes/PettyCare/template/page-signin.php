<?php
get_header();
?>

    <form method="post" action="nompagequerenvoieleformulaire.php">
        <p>
            <label for="lastname">Votre nom</label>
            <input type="text" name="lastname" id="lastname" placeholder="Nom" required />

            <label for="firstname">Votre prénom</label>
            <input type="text" name="firstname" id="firstname" placeholder="Prénom" required />

            <label for="adress">Votre adresse</label>
            <input type="text" name="street" id="adress" placeholder="Voie" required />
            <input type="text" name="number" id="adress" placeholder="N°" required />
            <input type="text" name="postal" id="adress" placeholder="Code postal" required />
            <input type="text" name="city" id="adress" placeholder="Ville" required />

            <label for="email">Votre email</label>
            <input type="email" name="email" id="email" placeholder="Email" required />

            <label for="pass">Votre mot de passe</label>
            <input type="password" name="pass" id="pass" placeholder="Mot de passe" required />

            <label for="pass">Confirmez votre mot de passe</label>
            <input type="password" name="pass" id="pass" placeholder="Mot de passe" required />

            <input type="checkbox" name="personaldata" id="personaldata" required /> <label for="personaldata">En cochant cette case, vous acceptez le traitement de vos données personnelles.</label>

            <input type="submit" value="Valider" />
        </p>
    </form>

<?php
get_footer();
?>