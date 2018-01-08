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
				<h1>Ajouter une pièce</h1>
				
				<div>
					<form method="post" action="controleur_ma_maison.php">
					<label for="nom_nouvelle_piece">Nom de la pièce :</label>
					<input type="text" name="nom_nouvelle_piece" id="nom_nouvelle_piece" placeholder="Ex : Salon" size="30" maxlength="20" /></br></br>
					<input type="submit" value="Ajouter cette pièce" />
					</form>
				</div>
				
				
    <!-- Le pied de page -->
        
    </body>
</html>