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

<<<<<<< HEAD


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
=======
include 'modele_messagerie.php';
$categorie = recuperer_categories($bdd);

if (isset($_POST['categorie']) AND isset($_POST['message']))
{
	$categorie = $_POST['categorie'];
	$message = $_POST['message'];
	$nouveau_message = ajouter_message($bdd, $message);
	header("Location: messagerie.php");
>>>>>>> d4f1d451f16d7a6c8076f07ac8bec87f9efcabf8
}

?>