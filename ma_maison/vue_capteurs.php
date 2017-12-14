<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
        <title>DomIsep</title> 
    </head>
 
    <body>
 
    <?php /* <?php include 'header.php'; ?> */ ?>	
    
    <?php require 'controleur_ma_maison.php' ?>
    
	
    <!-- Le corps -->
    <h1>Les capteurs  </h1>
    
    	<div>
			
			<?php 
			
				if(isset($capteurs)) {
					foreach($capteurs as $truc)
					{
						echo $truc['nom'] . '<br/>';
					}
				}
			?>
		</div>
    
    <!-- Le pied de page -->
        
    </body>
</html>