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
	$req = $bdd->prepare('SELECT *
						FROM capteurs WHERE id_piece = ?');
	$req->execute(array($id_piece));
	$liste_capteurs = $req->fetchAll(PDO::FETCH_ASSOC);	
	return $liste_capteurs;
}

?>
