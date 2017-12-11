<!DOCTYPE html>
<html>
    <head>
        <meta charset="iso-8859-15" />
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
					href="controleur_ma_maison.php?id_piece='.$element['id'].'" >' . $element['nom'] . '</a> <br/>';
				}
				
				foreach($capteurs as $truc)
				{
					echo $truc['nom'] . '<br/>';
				}
			?>
		</div>
    
    <!-- Le pied de page -->
        
    </body>
</html>
