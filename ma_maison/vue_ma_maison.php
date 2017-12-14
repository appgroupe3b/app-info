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
    <h1>Ma maison</h1>
    
    	<div>
			<h3>
				Mes pieces :
			</h3>
			<?php 
				foreach($pieces as $element)
				{
					echo '<a class="w3-button w3-block w3-teal" 
					href="vue_ma_maison.php?id_piece='.$element['id'].'" >' . $element['nom'] . '</a> <br/>';
				}
			
				if(isset($capteurs)) {
					foreach($capteurs as $truc)
					{
						echo $truc['id'] . '<br/>';
					}
				}
			?>
		</div>
    
    <!-- Le pied de page -->
        
    </body>
</html>
