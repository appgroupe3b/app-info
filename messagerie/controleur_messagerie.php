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

if (isset($_POST['categorie']) AND isset($_POST['message']))
{
	$categorie = $_POST['categorie'];
	$message = $_POST['message'];
	$nouveau_message = ajouter_message($bdd, $message);
	header("Location: messagerie.php");
}

?>