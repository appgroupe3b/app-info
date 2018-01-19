<?php

//Fonction permettant de récupérer les pièces du client
function recuperer_pieces($bdd)
{
	$liste_pieces = array();
	
	$reponse = $bdd->query("SELECT id,nom FROM piece");
	$liste_pieces = $reponse->fetchAll(PDO::FETCH_ASSOC);
	return $liste_pieces;
}

//Fonction permettant de récupérer les différentes types de capteurs
function recuperer_types_capteurs($bdd)
{
	$liste_types_capteurs = array();
	
	$reponse = $bdd->query("SELECT id,reference FROM catalogue");
	$liste_types_capteurs = $reponse->fetchAll(PDO::FETCH_ASSOC);
	return $liste_types_capteurs;
}

//Fonction permettant de récupérer les capteurs de chaque pièce
function recuperer_capteurs($bdd, $id_piece)
{
	$req = $bdd->prepare('SELECT capteurs.nom, capteurs.id, catalogue.reference FROM capteurs INNER JOIN catalogue ON capteurs.id_catalogue = catalogue.id WHERE id_piece = ? ');
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
function ajouter_capteur($bdd, $nom_nouveau_capteur, $id_piece, $select_type_capteur)
{
	$req = $bdd->prepare('INSERT INTO capteurs(nom,id_piece,id_catalogue) VALUES(:nom, :id_piece, :id_catalogue)');
	$req->execute(array('nom' => $nom_nouveau_capteur, 'id_piece' => $id_piece, 'id_catalogue' => $select_type_capteur));
}

//Fonction permettant de supprimer une pièce
function supprimer_piece($bdd, $id_piece_supprimer)
{
	$req = $bdd->prepare('DELETE FROM piece WHERE id = ?');
	$req->execute(array($id_piece_supprimer));
}

//Fonction permettant de supprimer un capteur
function supprimer_capteur($bdd, $id_capteur_supprimer)
{
	$req = $bdd->prepare('DELETE FROM capteurs WHERE id = ?');
	$req->execute(array($id_capteur_supprimer));
}

function capteurs_drop_down($capteurs_piece_supprimer)
{
	$liste_options = '';
	foreach ($capteurs_piece_supprimer as $truc) 
		{ 						
			$option = '<option value=' . $truc['id'] . '>' . $truc['nom'] . '</option>';

			$liste_options .= $option;				
		}
	return $liste_options;
}
?>
