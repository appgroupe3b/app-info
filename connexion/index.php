<?php
    session_start();
    require("Modele/connexion.php");
    

    ?>
<!DOCTYPE html>
<html>
<head>
<title>Domisep</title>
</head>


    <?php

    if(!isset($_SESSION["userID"])){ // L'utilisateur n'est pas connecté
        include("Controleur/connexion.php"); // On utilise un controleur secondaire pour éviter d'avoir un fichier index.php trop gros
    } else { // L'utilisateur est connecté
        if(isset($_GET['cible'])) { // on regarde la page où il veut aller
            if($_GET['cible'] == 'sav'){
                include("Vue/SAV/SAV.html");
            } else if ($_GET['cible'] == "etape1"){
                include("Modele/utilisateurs.php");
                $reponse = utilisateur($db);

                // Détruit toutes les variables de session
                $_SESSION = array();
                if (isset($_COOKIE[session_name()])) {
                    setcookie(session_name(), '', time()-42000, '/');
                }
                session_destroy();
                include("Vue/accueil.php");
            }
        } else { // affichage par défaut
                include("Vue/accueil.php");
        }
    }

?>

</html>
