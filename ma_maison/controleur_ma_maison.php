<?php

//On se connecte à la BDD
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '');
	//$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


//on inclut le modèle
include_once 'modeles/modele_ma_maison.php';

//on récupère toutes les pièces de la maison pour les afficher
$pieces = recuperer_pieces($bdd);

//on récupère aussi toutes les types de capteurs nécessaires pour ajouter un capteur
$types_capteurs = recuperer_types_capteurs($bdd);

//quand on clique sur une pièce, cette partie appelle une fonction qui permet d'afficher les capteurs de chaque pièce 
if (isset($_GET['id_piece']))
{
	$_GET['id_piece'] = (string) $_GET['id_piece']; 
	
	$id_piece = strip_tags($_GET['id_piece']);
	
	$capteurs = recuperer_capteurs($bdd, $id_piece);
	require_once 'vues/vue_capteurs.php';
}

//si on clique sur 'Ajouter une pièce' ou 'Ajouter un capteur'
elseif (isset($_GET['ajouter']))
{
			//On force la conversion en STRING
			$_GET['ajouter'] = (string) $_GET['ajouter']; 
			$ajouter = strip_tags($_GET['ajouter']);
			
			//la partie affichée change en fonction de si on veut ajouter une pièce ou un capteur
			if ($ajouter == 'piece')
			{
				require_once('vues/vue_ajouter_piece.php');
			}
			
			elseif ($ajouter == 'capteur')
			{
				require_once('vues/vue_ajouter_capteur.php');
			}
			
			elseif ($ajouter == 'supprimer')
			{
				require_once('vues/vue_supprimer_piece.php');
			}
			
			elseif ($ajouter == 'supprimer_c')
			{
				require_once('vues/vue_supprimer_capteur.php');
			}
			
			else 
			{
				echo "Ne touchez pas à l'URL, ça ne marchera pas!";
				die();
			}
}
		
//cette section permet d'appeller une fonction qui inséra la nouvelle pièce dans la base de données
elseif (isset($_POST['nom_nouvelle_piece']))
{
	$_POST['nom_nouvelle_piece'] = (string) $_POST['nom_nouvelle_piece'];
	
	$nom_nouvelle_piece = strip_tags($_POST['nom_nouvelle_piece']);
	
	$nouvelle_piece = ajouter_piece($bdd, $nom_nouvelle_piece);
	header("Location: controleur_ma_maison.php");
}

//cette section permet d'appeller une fonction qui inséra le nouveau capteur dans la base de données
elseif (isset($_POST['nom_nouveau_capteur']) && isset($_POST['select_piece']) && isset($_POST['select_type_capteur']))
{
	$_POST['nom_nouveau_capteur'] = (string) $_POST['nom_nouveau_capteur'];
	$_POST['select_piece'] = (int) $_POST['select_piece'];
	$_POST['select_type_capteur'] = (int) $_POST['select_type_capteur'];
	
	$nom_nouveau_capteur = strip_tags($_POST['nom_nouveau_capteur']);
	$id_piece = strip_tags($_POST['select_piece']);
	$select_type_capteur = strip_tags($_POST['select_type_capteur']);
	
	$nouveau_capteur = ajouter_capteur($bdd, $nom_nouveau_capteur, $id_piece, $select_type_capteur);
	header("Location: controleur_ma_maison.php");
}

//cette fonction permet de supprimer une pièce 
elseif (isset($_POST['id_piece_supprimer']))
{
	$_POST['id_piece_supprimer'] = (int) $_POST['id_piece_supprimer'];
	$_POST['id_piece_supprimer'] = strip_tags($_POST['id_piece_supprimer']);
	
	$id_piece_supprimer = $_POST['id_piece_supprimer'];
	$supprimer_p = supprimer_piece($bdd, $id_piece_supprimer);
	header("Location: controleur_ma_maison.php");
}

//cette fonction permet de récupérer une liste d'options d'un capteur
elseif (isset($_GET['id_piece_choix']))
{
	$_GET['id_piece_choix'] = (int) $_GET['id_piece_choix'];
	$_GET['id_piece_choix'] = strip_tags($_GET['id_piece_choix']);
	$id_piece_choix = $_GET['id_piece_choix'];
	$capteurs_piece_supprimer = recuperer_capteurs($bdd, $id_piece_choix);
	echo capteurs_drop_down($capteurs_piece_supprimer);
	
	if (isset($_GET['id_capteur_supprimer']))
	{
		$_GET['id_capteur_supprimer'] = (int) $_GET['id_capteur_supprimer'];
		$_GET['id_capteur_supprimer'] = strip_tags($_GET['id_capteur_supprimer']);
		$id_capteur_supprimer = $_GET['id_capteur_supprimer'];	
		$capteurs_supprimer = supprimer_capteur($bdd, $id_capteur_supprimer);
		header("Location: controleur_ma_maison.php");
	}
	
}

elseif(!isset($_POST['id_capteur_supprimer']) && !isset($_POST['id_piece_supprimer']) && !isset($_GET['id_piece']) && !isset($_GET['ajouter']) && !isset($_POST['nom_nouvelle_piece']) && !isset($_POST['nom_nouveau_capteur']) && !isset($_POST['select_piece']))
{
	require_once('vues/vue_ma_maison.php');
}
?>

