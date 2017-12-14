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

include '../modele/modele_catalogue01.php';

if (isset($_GET['id_catalogue']))
{
    $id_catalogue = $_GET['id_catalogue'];
    echo $id_catalogue;
    
    $donnees = recuperer_donnees($bdd, $id_catalogue);
}


?>