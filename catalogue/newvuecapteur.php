<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="donnees.css" />
        <title>Données</title> 
    </head>
 
  	<body>
  		<?php /*php include 'header.php'; ?> */ ?>
  		<?php require 'newcontroleur.php' ?>

  		<!-- ce qui sera afficher-->

  		<!--le nom-->
  		 <h1>Les données </h1>
    
    	<div>
			
			<?php 
				if(isset($nom)){
					foreach($liste_donnees as $element)
					{
						echo $element['nom'] . '<br/>';
					}
				}
				
				if(isset($prix)){
					foreach($liste_donnees as $element)
					{
					    echo $element['prix'] . '<br/>';
					}
				}
				if(isset($promotions)){
					foreach($liste_donnees as $element)
					{
					    echo $element['promotions'] . '<br/>';
					}
				}
				if(isset($propriete)){
					foreach($liste_donnees as $element)
					{
					    echo $element['propriete'] . '<br/>';
					}
				}
				if(isset($reference)){
					foreach($liste_donnees as $element)
					{
				        echo $element['reference'] . '<br/>';
					}
				}
				if(isset($unites_actives))
				{
					foreach($liste_donnees as $element)
					{
					   echo $element['unites_actives'] . '<br/>';
					}
				}
			?>
				
		</div>
    
    <!-- Le pied de page -->
        
    </body>
</html>