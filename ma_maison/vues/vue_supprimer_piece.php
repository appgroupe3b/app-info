<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
        <title>DomIsep</title> 
    </head>
 
    <body>
 
    <?php /* <?php include 'header.php'; ?> */ ?>	
    
    <?php require_once 'controleur_ma_maison.php' ?>
    
	
    <!-- Le corps -->
				<h1>Supprimer une pièce</h1>
				
				<div>
					<form method="post" action="controleur_ma_maison.php">
					<label for="id_piece_supprimer">Quelle pièce désirez-vous supprimer ?</label>
					
					<!-- on récupère les pièces pour en choisir une -->
						<select name="id_piece_supprimer" id="id_piece_supprimer">
       					<?php foreach ($pieces as $element) 
       					{ 
       					?>
							
							<option value="<?php echo $element['id'] ?>"><?php echo $element['nom'];?></option>
						
						<?php 
       					}
       					?>
						</select>
						
						</br></br>
						<input type="submit" value="Supprimer cette pièce" />
					</form>
				</div>
    
    <!-- Le pied de page -->
        
    </body>
</html>