<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<link rel="stylesheet" type="text/css" href="../footer/footer.css">
		<link rel="stylesheet" type="text/css" href="../headernav/headernav.css">
        <title>Ma maison</title> 
    </head>
 
    <body>
 
   
	<?php /*include '../headernav/headernav.php' */?>
    
    <?php require_once('controleur_ma_maison.php') ?>
    
	
    <!-- Le corps -->
    <h1>Ma maison</h1>
    
    	<div>
			<h3>
				Mes pieces
			</h3>
			
			<div id="affichage_pieces">
			<?php 
				foreach($pieces as $element)
				{
					echo '<a class="w3-button w3-block w3-teal" 
					href="controleur_ma_maison.php?id_piece='.$element['id'].'" >' . $element['nom'] . '</a> <br/>';
				}
			?>
			</div>
		</div>
		
		<div>
			<h3>
				Actions
			</h3>
			<p><a href="controleur_ma_maison.php?ajouter=piece">Ajouter une pièce</a></p>
			
			<p><a href="controleur_ma_maison.php?ajouter=capteur">Ajouter un capteur</a></p>
			
			<p><a href="controleur_ma_maison.php?ajouter=supprimer">Supprimer une pièce</a></p>
			
			<p><a href="controleur_ma_maison.php?ajouter=supprimer_c">Supprimer un capteur</a></p>
		
		</div>
    </body>
    <!-- Le pied de page -->
	<footer>
	<?php /* include '../footer/footer.php' */ ?>
    </footer>
    
</html>
