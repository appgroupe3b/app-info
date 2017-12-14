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
include '../modele/newmodele.php';
$catalogue = recuperer_catalogue($bdd);
$catalogue_capteurs = recuperer_capteurs($bdd);
$catalogue_actionneurs = recuperer_actionneurs($bdd);
$catalogue_cemacs = recuperer_cemacs($bdd);

if (isset($_GET['id_catalogue']))
{
    $id_cataloguee = $_GET['id_catalogue'];
    
    $donnees = recuperer_donnees($bdd, $id_piece);
}
?>