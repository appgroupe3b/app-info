<?php

//Fonction permettant de récupérer les données des capteurs



function recuperer_donnees($bdd)
{
	$donnees = array();
	
	$reponse = $bdd->query("SELECT id, nom, reference, propriete, promotions, unites_actives, prix FROM catalogue");
	/*recherche seulement les noms des éléments ayant 'capteur'*/
	$donnees = $reponse->fetchAll(PDO::FETCH_ASSOC);
	/*while (!$donnees = $reponse->fetch())
	{
		$liste_capteurs[] = $donnees;
	}*/	
	return $donnees;	
}



?>