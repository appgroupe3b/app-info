<?php

function recuperer_categories($bdd)
{
	$liste_categorie = array();
    
    $reponse = $bdd->query("SELECT id,nom FROM categorie");
    $liste_categorie = $reponse->fetchAll(PDO::FETCH_ASSOC);
    
    return $liste_categorie;
<<<<<<< HEAD
}


function ajouter_message($bdd, $categorie, $message)
{
	$req = $bdd->prepare('INSERT INTO message(id_categorie, message) VALUES(:id_categorie, :message)');
	$req->execute(array('id_categorie' => $categorie, 'message' => $message));
=======
    
}


function ajouter_message($bdd, $message)
{
	$req = $bdd->prepare('INSERT INTO message(message) VALUES(:message)');
	$req->execute(array('message' => $message));
>>>>>>> d4f1d451f16d7a6c8076f07ac8bec87f9efcabf8
}
?>