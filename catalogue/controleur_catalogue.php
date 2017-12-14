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
//on se sert du modèle

include '../modele/modele_catalogue.php';
include '../modele/modele_catalogue01.php';

$catalogue = recuperer_catalogue($bdd);
$catalogue_capteurs = recuperer_capteurs($bdd);
$catalogue_actionneurs = recuperer_actionneurs($bdd);
$catalogue_cemacs = recuperer_cemacs($bdd);


if (isset($_GET['id_catalogue']))
{
    $id_catalogue = $_GET['id_catalogue'];
    
    $donnees = recuperer_donnees($bdd, $id_catalogue);
}


?>