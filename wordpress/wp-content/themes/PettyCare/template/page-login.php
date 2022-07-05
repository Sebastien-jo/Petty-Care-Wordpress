<?php
get_header();
?>

    <form method="post" action="nompagequerenvoieleformulaire.php">
        <p>
            <label for="identifiant">Votre identifiant</label>
            <input type="email" name="identifiant" id="identifiant" placeholder="Identifiant" required />

            <label for="pass">Votre mot de passe</label>
            <input type="password" name="pass" id="pass" placeholder="Mot de passe" required />

            <input type="checkbox" name="personaldata" id="personaldata" /> <label for="personaldata">Se souvenir de moi</label>
            <a href="#">Mot de passe oublié</a>

            <input type="submit" value="Se connecter" />
        </p>
    </form>

    <form method="post" action="pageinscription.php">
        <input type="submit" value="Créer un compte" />
    </form>

<?php
get_footer();
?>