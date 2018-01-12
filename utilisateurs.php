<?php
<<<<<<< HEAD


    global $db;

=======
    global $db;
>>>>>>> fdf50e9ebb886a454646a18266a7d17a5fe4ec7c
    // fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
    function mdp($db,$identifiant){
        $reponse = $db->query('SELECT * FROM utilisateur WHERE identifiant="'.$identifiant.'"');
        return $reponse;
    }
<<<<<<< HEAD

=======
>>>>>>> fdf50e9ebb886a454646a18266a7d17a5fe4ec7c
    // fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
    function utilisateur($db){
        $reponse = $db->query('SELECT identifiant FROM utilisateur');
        return $reponse;
    }
<<<<<<< HEAD


?>
=======
?>
>>>>>>> fdf50e9ebb886a454646a18266a7d17a5fe4ec7c
