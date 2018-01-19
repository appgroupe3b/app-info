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



include 'modele_messagerie.php';

$categorie = recuperer_categories($bdd);


if (!isset($_POST['categorie']) AND !isset($_POST['message']))
{
	require('vue_messagerie.php');
}



elseif (isset($_POST['categorie']) AND isset($_POST['message']))
{
	$_GET['categorie'] = (string) $_GET['categorie'];
	$_GET['message'] = (string) $_GET['message	'];
	
	$categorie = strip_tags($_POST['categorie']);
	$message = strip_tags($_POST['message']);
	
	$nouveau_message = ajouter_message($bdd, $categorie, $message);
	header("Location: controleur_messagerie.php");
}

?>