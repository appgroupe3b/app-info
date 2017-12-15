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
	include 'newmodele.php';
	$liste_catalogue = recuperer_catalogue($bdd);
	$liste_capteurs = recuperer_capteurs($bdd);
	$liste_actionneurs = recuperer_actionneurs($bdd);
	$liste_cemacs = recuperer_cemacs($bdd);
	if (isset($_GET['id_catalogue']))
	{
		$id_catalogue = $_GET['id_catalogue'];
		
		$liste_donnees = recuperer_donnees($bdd, $id_catalogue);
	}
?>