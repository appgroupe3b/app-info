<?php

//Fonction permettant de rÃ©cupÃ©rer les piÃ¨ces du client

function recuperer_pieces($bdd)
{
	$liste_pieces = array();
	
	$reponse = $bdd->query("SELECT id,nom FROM piece");
	$liste_pieces = $reponse->fetchAll(PDO::FETCH_ASSOC);
	
	return $liste_pieces;
	
}

function recuperer_capteurs($bdd, $id_piece)
{
	$req = $bdd->prepare('SELECT catalogue.nom FROM catalogue, capteurs WHERE id_piece = ? AND capteurs.id_catalogue = catalogue.id  ');
	$req->execute(array($id_piece));
	$liste_capteurs = $req->fetchAll(PDO::FETCH_ASSOC);	
	return $liste_capteurs;
}

function ajouter_piece($bdd)
{
	
}
function recuperer_programmations($bdd)
{
    $liste_programmations = array();
    
    $reponse = $bdd->query("SELECT nom FROM programmation");
    $liste_programmations = $reponse->fetchAll(PDO::FETCH_ASSOC);
}

//Partie Eloise 

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
    
    $reponse = $bdd->query("SELECT id,nom FROM catalogue WHERE nom LIKE '%capteur%'");
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

//function recuperer_donnees($bdd, $id_catalogue)
//{
//   $req = $bdd->prepare('SELECT catalogue.nom, catalogue.reference, catalogue.propriete, catalogue.promotion, catalogue.prix, catalogue.unités_actives FROM catalogue WHERE id_catalogue = ?');
//    $req->execute(array($id_catalogue));
//    $liste_donnees = $req->fetchAll(PDO::FETCH_ASSOC);
//    return $liste_donnees;
//}
function recuperer_donnees($bdd, $id_catalogue)
{
    $req = $bdd->prepare('SELECT catalogue.nom, catalogue.reference, catalogue.propriete, catalogue.promotion, catalogue.prix, catalogue.unités_actives FROM catalogue WHERE id_catalogue = ?');
    $req->execute(array($id_catalogue));
    $liste_donnees = $req->fetchAll(PDO::FETCH_ASSOC);
    return $liste_donnees;
}

function recuperer_categories($bdd)
{
	$liste_categorie = array();
    
    $reponse = $bdd->query("SELECT id,nom FROM categorie");
    $liste_categorie = $reponse->fetchAll(PDO::FETCH_ASSOC);
    
    return $liste_categorie;
    
}
	

?>

?>
