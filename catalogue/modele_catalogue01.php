<?php

//Fonction permettant de récupérer les données des capteurs

function recuperer_donnees($bdd,$id_catalogue )
{
    $req = $bdd->prepare('SELECT *
						FROM catalogue WHERE id_catalogue = ?');
    $req->execute(array($id_catalogue));
    
    $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
    return $donnees;
}



?>