<?php
//Fonction permettant de récupérer les pièces du client

function recuperer_capteurs($bdd)
{
    $liste_capteurs = array();
    
    $reponse = $bdd->query("SELECT id,nom FROM catalogue WHERE nom LIKE '%capteur%'");
    $liste_capteurs = $reponse->fetchAll(PDO::FETCH_ASSOC);
    
    return $liste_capteurs;
    
}

function recuperer_actionneurs($bdd)
{
    $liste_actionneurs = array();
    
    $reponse = $bdd->query("SELECT id,nom FROM catalogue WHERE nom LIKE '%actionneur%'");
    $liste_actionneurs = $reponse->fetchAll(PDO::FETCH_ASSOC);
    
    return $liste_actionneurs;
    
}

function recuperer_cemacs($bdd)
{
    $liste_cemacs = array();
    
    $reponse = $bdd->query("SELECT id,nom FROM catalogue WHERE nom LIKE '%cemac%'");
    $liste_cemacs = $reponse->fetchAll(PDO::FETCH_ASSOC);
    
    return $liste_cemacs;
    
}

function recuperer_catalogue($bdd)
{
    $liste_catalogue = array();
    
    $reponse = $bdd->query("SELECT id,nom FROM catalogue");
    $liste_catalogue = $reponse->fetchAll(PDO::FETCH_ASSOC);
    
    return $liste_catalogue;
    
}

function recuperer_donnees($bdd, $id_catalogue)
{
    $liste_donnees = array();
    $req = $bdd->prepare('SELECT * FROM catalogue WHERE id = ?');
    $req->execute(array($id_catalogue));
    $liste_donnees = $req->fetchAll(PDO::FETCH_ASSOC);
    return $liste_donnees;  
}

?>