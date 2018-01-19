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
				<h1>Ajouter un capteur</h1>
				
				<div>
					<form method="post" action="controleur_ma_maison.php">
					<label for="select_piece">Dans quelle pièce ira ce capteur ?</label>
					
					<!-- on récupère les pièces pour en choisir une -->
						<select name="select_piece" id="select_piece">
       					<?php foreach ($pieces as $element) 
       					{ 
       					?>
							
							<option value="<?php echo $element['id'] ?>"><?php echo $element['nom'];?></option>
						
						<?php 
       					}
       					?>
						</select>
						</br></br>
					<label for="select_type_capteur">Quel est le type de ce capteur ?</label>
					
					<!-- on récupère les types de capteurs pour en choisir un -->
						<select name="select_type_capteur" id="select_type_capteur">
       					<?php foreach ($types_capteurs as $element) 
       					{ 
       					?>
							
							<option value="<?php echo $element['id'] ?>"><?php echo $element['reference'];?></option>
						
						<?php 
       					}
       					?>
						</select>
						
						</br></br>
						<label for="nom_nouveau_capteur">Nom du capteur :</label>
						<input type="text" name="nom_nouveau_capteur" id="nom_nouveau_capteur" placeholder="Ex : Capteur 1" size="20" maxlength="15" /></br></br>
						<input type="submit" value="Ajouter ce capteur" />
					</form>
				</div>
    
    <!-- Le pied de page -->
        
    </body>
</html>