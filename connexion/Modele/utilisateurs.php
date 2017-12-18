<?php


    global $db;

    // fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
    function mdp($db,$identifiant){
        $reponse = $db->query('SELECT * FROM utilisateur WHERE identifiant="'.$identifiant.'"');
        return $reponse;
    }

    // fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
    function utilisateur($db){
        $reponse = $db->query('SELECT identifiant FROM utilisateur');
        return $reponse;
    }


?>
