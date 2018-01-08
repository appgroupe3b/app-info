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
include 'modele_ma_maison.php';

//on récupère toutes les pièces de la maison pour les afficher
$pieces = recuperer_pieces($bdd);


//quand on clique sur une pièce, cette partie appelle une fonction qui permet d'afficher les capteurs de chaque pièce 
if (isset($_GET['id_piece']))
{
	$id_piece = $_GET['id_piece'];
	$capteurs = recuperer_capteurs($bdd, $id_piece);
}

//si on clique sur 'Ajouter une pièce' ou 'Ajouter un capteur'
if (isset($_GET['ajouter']))
{
			//On force la conversion en STRING
			$_GET['ajouter'] = (string) $_GET['ajouter']; 
			
			//la partie affichée change en fonction de si on veut ajouter une pièce ou un capteur
			if ($_GET['ajouter']=='piece')
			{
				require_once('vue_ajouter_piece.php');
			}
			
			elseif ($_GET['ajouter']=='capteur')
			{
				require_once('vue_ajouter_capteur.php');
			}
}
		
//cette section permet d'appeller une fonction qui inséra la nouvelle pièce dans la base de données
if (isset($_POST['nom_nouvelle_piece']))
{
	$nom_nouvelle_piece = $_POST['nom_nouvelle_piece'];
	$nouvelle_piece = ajouter_piece($bdd, $nom_nouvelle_piece);
	header("Location: vue_ma_maison.php");
}

//cette section permet d'appeller une fonction qui inséra le nouveau capteur dans la base de données
if (isset($_POST['nom_nouveau_capteur']) && isset($_POST['select_piece']))
{
	$nom_nouveau_capteur = $_POST['nom_nouveau_capteur'];
	$id_piece = $_POST['select_piece'];
	$nouveau_capteur = ajouter_capteur($bdd, $nom_nouveau_capteur, $id_piece);
	header("Location: vue_ma_maison.php");
}
?>

