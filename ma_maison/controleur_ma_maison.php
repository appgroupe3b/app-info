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

include 'modele_ma_maison.php';

$pieces = recuperer_pieces($bdd);




if (isset($_GET['id_piece']))
{
	$id_piece = $_GET['id_piece'];
	
	$capteurs = recuperer_capteurs($bdd, $id_piece);
}










?>

