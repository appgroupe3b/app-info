  <form method="POST" action="index.php?cible=verif">
                Identifiant
                <br/>
                <input type="text" name="identifiant"/>
                <br/>
                Mot de passe
                <br/>
                <input type="password" name="mdp"/>
                <br/>
                <input type='submit' value="Connexion"/>
            </form>
    <?php
    $formulaire = ob_get_clean();
    return $formulaire;

    ?>
