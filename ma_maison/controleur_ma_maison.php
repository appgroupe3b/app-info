<?php
//On se connecte à la BDD
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

include 'modele_ma_maison.php';

$pieces = recuperer_pieces($bdd);




if (isset($_GET['id_piece']))
{
		/*$_GET['id_piece'] = (int) $_GET['id_piece'];*/
	
		$_GET['id_piece'] = $id_piece();
		
		$capteurs = recuperer_capteurs($bdd, $id_piece);
}










?>

