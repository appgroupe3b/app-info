<?php
<<<<<<< HEAD

//Fonction permettant de récupérer les pièces du client

=======
//Fonction permettant de rÃ©cupÃ©rer les piÃ¨ces du client
>>>>>>> fdf50e9ebb886a454646a18266a7d17a5fe4ec7c
function recuperer_capteurs($bdd)
{
    $liste_capteurs = array();
    
    $reponse = $bdd->query("SELECT id,nom FROM catalogue WHERE nom LIKE '%capteur%'");
    $liste_capteurs = $reponse->fetchAll(PDO::FETCH_ASSOC);
    
    return $liste_capteurs;
    
}
<<<<<<< HEAD

=======
>>>>>>> fdf50e9ebb886a454646a18266a7d17a5fe4ec7c
function recuperer_actionneurs($bdd)
{
    $liste_actionneurs = array();
    
    $reponse = $bdd->query("SELECT id,nom FROM catalogue WHERE nom LIKE '%actionneur%'");
    $liste_actionneurs = $reponse->fetchAll(PDO::FETCH_ASSOC);
    
    return $liste_actionneurs;
    
}
<<<<<<< HEAD

function recuperer_cemacs($bdd)
{
    $liste_cemacs = array();
    
    $reponse = $bdd->query("SELECT id,nom FROM catalogue WHERE nom LIKE '%capteur%'");
    $liste_cemacs = $reponse->fetchAll(PDO::FETCH_ASSOC);
    
    return $liste_cemacs;
    
}

function recuperer_catalogue($bdd)
{
    $liste_catalogue = array();
    
    $reponse = $bdd->query("SELECT id,nom FROM catalogue");
    $liste_catalogue = $reponse->fetchAll(PDO::FETCH_ASSOC);
    
    return $liste_catalogue;
    
}

//function recuperer_donnees($bdd, $id_catalogue)
//{
 //   $req = $bdd->prepare('SELECT catalogue.nom, catalogue.reference, catalogue.propriete, catalogue.promotion, catalogue.prix, catalogue.unit�s_actives FROM catalogue WHERE id_catalogue = ?');
//    $req->execute(array($id_catalogue));
//    $liste_donnees = $req->fetchAll(PDO::FETCH_ASSOC); 
//    return $liste_donnees;
//}
function recuperer_donnees($bdd, $id_catalogue)
{
    $req = $bdd->prepare('SELECT catalogue.nom, catalogue.reference, catalogue.propriete, catalogue.promotion, catalogue.prix, catalogue.unit�s_actives FROM catalogue WHERE id_catalogue = ?');
    $req->execute(array($id_catalogue));
    $liste_donnees = $req->fetchAll(PDO::FETCH_ASSOC); 
    return $liste_donnees;
}

?>
=======
	function recuperer_cemacs($bdd)
	{
		$liste_cemacs = array();
		
		$reponse = $bdd->query("SELECT id,nom FROM catalogue WHERE nom LIKE '%capteur%'");
		$liste_cemacs = $reponse->fetchAll(PDO::FETCH_ASSOC);
		
		return $liste_cemacs;
		
	}
	function recuperer_catalogue($bdd)
	{
		$liste_catalogue = array();
		
		$reponse = $bdd->query("SELECT id,nom FROM catalogue");
		$liste_catalogue = $reponse->fetchAll(PDO::FETCH_ASSOC);
		
		return $liste_catalogue;
		
	}
	//function recuperer_donnees($bdd, $id_catalogue)
	//{
	 //   $req = $bdd->prepare('SELECT catalogue.nom, catalogue.reference, catalogue.propriete, catalogue.promotion, catalogue.prix, catalogue.unités_actives FROM catalogue WHERE id_catalogue = ?');
	//    $req->execute(array($id_catalogue));
	//    $liste_donnees = $req->fetchAll(PDO::FETCH_ASSOC); 
	//    return $liste_donnees;
	//}
	function recuperer_donnees($bdd, $id_catalogue)
	{
		$req = $bdd->prepare('SELECT catalogue.nom, catalogue.reference, catalogue.propriete, catalogue.promotion, catalogue.prix, catalogue.unités_actives FROM catalogue WHERE id_catalogue = ?');
		$req->execute(array($id_catalogue));
		$liste_donnees = $req->fetchAll(PDO::FETCH_ASSOC); 
		return $liste_donnees;
	}
?>
>>>>>>> fdf50e9ebb886a454646a18266a7d17a5fe4ec7c