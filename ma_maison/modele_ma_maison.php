<?php

//Fonction permettant de récupérer les pièces du client

function recuperer_pieces($bdd)
{
	$liste_pieces = array();
	
	$reponse = $bdd->query("SELECT id,nom FROM piece");
	$liste_pieces = $reponse->fetchAll(PDO::FETCH_ASSOC);
	return $liste_pieces;
}

//Fonction permettant de récupérer les capteurs dde chaque pièce
function recuperer_capteurs($bdd, $id_piece)
{
	$req = $bdd->prepare('SELECT catalogue.nom FROM catalogue, capteurs WHERE id_piece = ? AND capteurs.id_catalogue = catalogue.id ');
	$req->execute(array($id_piece));
	$liste_capteurs = $req->fetchAll(PDO::FETCH_ASSOC);	
	return $liste_capteurs;
}

//Fonction permettant d'ajouter une nouvelle pièce
function ajouter_piece($bdd, $nom_nouvelle_piece)
{
	$req = $bdd->prepare('INSERT INTO piece(nom) VALUES(:nom)');
	$req->execute(array('nom' => $nom_nouvelle_piece));
}

//Fonction permettant d'ajouter un nouveau capteur
function ajouter_capteur($bdd, $nom_nouveau_capteur, $id_piece)
{
	$req = $bdd->prepare('INSERT INTO capteurs(nom,id_piece) VALUES(:nom, :id_piece)');
	$req->execute(array('nom' => $nom_nouveau_capteur, 'id_piece' => $id_piece));
}
?>
