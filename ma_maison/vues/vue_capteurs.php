<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<link rel="stylesheet" type="text/css" href="../footer/footer.css">
		<link rel="stylesheet" type="text/css" href="../headernav/headernav.css">
        <title>DomIsep</title> 
    </head>
 
    <body>
 
    <?php //include '../headernav/headernav.php'; ?>	
    
    <?php require 'controleur_ma_maison.php' ?>
    
	
    <!-- Le corps -->
    <h1>Les capteurs  </h1>
    
    	<div>
			
			<?php 
			
				if(isset($capteurs)) 
				{
					foreach($capteurs as $truc)
					{
						echo '<p>Le nom du capteur est : <strong>' . $truc['nom'] . "</strong>  et sa référence est : <strong>" . $truc['reference'] . '</strong></p><br/>';
					}
				}
			?>
		</div>
    
    <!-- Le pied de page -->
	<footer>
       <?php //include '../footer/footer.php' ?>
	</footer>
    </body>
</html>