<!DOCTYPE html>
<html>
    <head>
    	  <!-- En-tÃªte de le page -->
        <meta charset="utf-8" />
		<link rel="stylesheet" href="../design/donnees.css" />
        <title>Données des appareils - S.A.V.</title> 
    </head>
 
    <body>

 
   <!--<?php include 'headernav.php'; ?>-->
   <?php require '../controleur/controleur_catalogue.php' ?>
   <?php require '../controleur/controleur_catalogue01.php' ?>
   
   <!-- ce qui va s'afficher -->
   <h1> <?php
   				foreach($donnees as $element)
   				{
   						echo  $element['nom'] ;
				}; ?>	
   	</h1>

    <?php 
				foreach($donnees as $element)
				{
					echo $element['nom'] . $element['reference'] . $element['propriete'] . $element['prix'] . $element['promotions'] . $element['unites_actives'] ;
				}; ?>

 <!-- <?php include 'footer.php'; ?>-->  

	</body>
</html>