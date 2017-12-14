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
    <h1>Ajouter un <?php echo $_GET['ajouter']; ?></h1>
    
    	<div>
			<form method="post" action="modele_ma_maison.php">
			
			
			
			</form>
			
		</div>
    
    <!-- Le pied de page -->
        
    </body>
</html>