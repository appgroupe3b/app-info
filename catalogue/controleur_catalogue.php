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

// on inclut le modele
require_once 'modele_catalogue.php';
//on recupere la liste de tous les elements
$liste_catalogue = recuperer_catalogue($bdd);
//on recupere la liste des capteurs
$liste_capteurs = recuperer_capteurs($bdd);
// on recupere les actionneurs
$liste_actionneurs = recuperer_actionneurs($bdd);
// on recupere des cemacs 
$liste_cemacs = recuperer_cemacs($bdd);


if(!isset($_GET['id_catalogue']) )
{
    require_once('newvuecata.php');
}

//quand on clique sur un element, cette partie appelle une fonction qui permet d'afficher les donnees des elements
else
{
    $_GET['id_catalogue'] = (string) $_GET['id_catalogue'];
    
    $id_catalogue = strip_tags($_GET['id_catalogue']);
    
    $liste_donnees = recuperer_donnees($bdd, $id_catalogue);
    require_once 'vue_donnees_catalogue.php';
}
?>