<?php
/*
    Template Name: Login
*/
?>
<?php
get_header();
?>
<div class="container">
    <form method="post" action="https://localhost:8001/api/login">
        <div>
            <label for="identifiant">Votre identifiant</label>
            <input type="email" name="identifiant" id="identifiant" placeholder="Identifiant" required />
        </div>
        <div>
            <label for="pass">Votre mot de passe</label>
            <input type="password" name="pass" id="pass" placeholder="Mot de passe" required />
        </div>
        <div>
            <input type="checkbox" name="personaldata" id="personaldata" /> <label for="personaldata" class="inline" >Se souvenir de moi</label>
            <p><a href="#" id="mdp" >Mot de passe oublié</a></p>
        </div>
        <div class="button">
            <button type="button" class="connexion" >Se connecter</button>
        </div>
    </form>

    <form method="post">
        <div class="button">
            <button onclick="window.location.href = '<?php the_permalink(30) ?>'" type="button" class="create" >Créer un compte</button>
        </div>
    </form>
</div>

<?php
get_footer();
?>