<?php

function recuperer_categories($bdd)
{
	$liste_categorie = array();
    
    $reponse = $bdd->query("SELECT id,nom FROM categorie");
    $liste_categorie = $reponse->fetchAll(PDO::FETCH_ASSOC);
    
    return $liste_categorie;
    
}


function ajouter_message($bdd, $message)
{
	$req = $bdd->prepare('INSERT INTO message(message) VALUES(:message)');
	$req->execute(array('message' => $message));
}
?>