<?php

//Fonction permettant de récupérer les pièces du client

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


?>
