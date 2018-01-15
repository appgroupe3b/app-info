<br/<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<link rel="stylesheet" type="text/css" href="../footer/footer.css">
		<link rel="stylesheet" type="text/css" href="../headernav/headernav.css">
        <title>Ma maison</title> 
    </head>
 
    <body>
 
   
	<?php include '../headernav/headernav.php' ?>
    
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
					href="vue_capteurs.php?id_piece='.$element['id'].'" >' . $element['nom'] . '</a> <br/>';
				}
			?>
		</div>
		
		<div>
			<h3>
				Ajouter :
			</h3>
			<p><a href="vue_ajouter.php?ajouter=pièce">Ajouter une pièce</a></p>
			<p><a href="vue_ajouter.php?ajouter=capteur">Ajouter une capteur</a></p>
		
		</div>
    </body>
    <!-- Le pied de page -->
	<footer>
	<?php include '../footer/footer.php' ?>
    </footer>
    
</html>
