<?php

//Fonction permettant de r�cup�rer les pi�ces du client

function recuperer_capteurs($bdd)
{
	$liste_capteurs = array();
	
	$reponse = $bdd->query("SELECT id,nom FROM catalogue WHERE nom LIKE '%capteur%'");
	/*recherche seulement les noms des �l�ments ayant 'capteur'*/
	$catalogue_capteurs = $reponse->fetchAll(PDO::FETCH_ASSOC);
	/*while (!$donnees = $reponse->fetch())
	{
		$liste_capteurs[] = $donnees;
	}*/
	
	return $catalogue_capteurs;
	
}

function recuperer_actionneurs($bdd)
{
	$liste_actionneurs = array();
	
	$reponse = $bdd->query("SELECT id,nom FROM catalogue WHERE nom LIKE'%actionneur%'");
	/*recherche seulment les noms des �l�ments ayant par 'actionneur'*/
	$catalogue_actionneurs = $reponse->fetchAll(PDO::FETCH_ASSOC);
	/*while (!$donnees = $reponse->fetch())
	{
		$liste_actionneurs[] = $donnees;
	}*/
	
	return $catalogue_actionneurs;
	
}


function recuperer_cemacs($bdd)
{
	$liste_cemacs = array();
	
	$reponse = $bdd->query("SELECT id,nom FROM catalogue WHERE nom LIKE'%cemac%'");
	/*recherche seulement les noms des �l�ments ayant par 'cemac'*/
	$catalogue_cemacs = $reponse->fetchAll(PDO::FETCH_ASSOC);
	/*while (!$donnees = $reponse->fetch())
	{
		$liste_cemacs[] = $donnees;
	}*/
	
	return $catalogue_cemacs;
	
}

function recuperer_catalogue($bdd)
{
	$liste_catalogue = array();
	
	$reponse = $bdd->query("SELECT id,nom FROM catalogue");
	$catalogue = $reponse->fetchAll(PDO::FETCH_ASSOC);
	/*while (!$donnees = $reponse->fetch())
	{
		$liste_catalogue[] = $donnees;
	}*/
	
	return $catalogue;
	
}


?>