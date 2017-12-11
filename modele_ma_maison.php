<?php

//Fonction permettant de récupérer les pièces du client

function recuperer_pieces($bdd)
{
	$liste_pieces = array();
	
	$reponse = $bdd->query("SELECT id,nom FROM piece");
	$liste_pieces = $reponse->fetchAll(PDO::FETCH_ASSOC);
	/*while ($donnees = $reponse->fetch())
	{
		$liste_pieces[] = $donnees;
	}*/
	
	return $liste_pieces;
	
}

function recuperer_capteurs($bdd, $id_piece)
{
	/*$id_piece = array();
	$req = $bdd->prepare('SELECT id FROM piece WHERE nom = ? ');
	$req->execute(array($nom_piece));
	$id_piece = $reponse->fetchAll(PDO::FETCH_ASSOC);*/
	
	$liste_capteurs = array();
	$req = $bdd->prepare('SELECT capteurs.nom
						FROM capteurs
						INNER JOIN pieces
						ON pieces.? = capteurs.id_piece');
	$req->execute(array($id_piece()));
	$liste_capteurs = $reponse->fetchAll(PDO::FETCH_ASSOC);
	
	return $liste_capteurs;
}

?>
