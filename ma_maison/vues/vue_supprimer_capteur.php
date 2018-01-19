<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
        <title>DomIsep</title> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    </head>
 
    <body>
 
    <?php /* <?php include 'header.php'; ?> */ ?>	
    
    <?php require_once 'controleur_ma_maison.php' ?>
    
	
    <!-- Le corps -->
				<h1>Supprimer un capteur</h1>
				
				<div>
					<form method="get" action="controleur_ma_maison.php">
					<label for="id_piece_choix">Dans quelle pièce est le capteur ?</label>
					
					<!-- on récupère les pièces pour en choisir une -->
						<select name="id_piece_choix" id="id_piece_choix">
						<option value=''>Liste des pièces</option>
       					<?php foreach ($pieces as $element) 
       					{ 
       					?>
							
							<option value="<?php echo $element['id'] ?>"><?php echo $element['nom'];?></option>
						
						<?php 
       					}
       					?>
						</select>
						<br><br><br>
						
					<label for="id_piece_choix">Quel est le nom de ce capteur ?</label>
						<select name="id_capteur_supprimer" id="id_capteur_supprimer">
						<option value=''>Liste des capteurs</option>
						
						
						</select>
						<br><br><br>
						
						<input type="submit" value="Supprimer ce capteur" />
					
						<script>
						$('#id_piece_choix').on('change', function()
						{
							var id_piece = this.value;
							$.ajax
							({
							type: "GET",
							url: "controleur_ma_maison.php?id_piece_choix="+id_piece,
							success: function(data) {
								$('#id_capteur_supprimer').html(data);
							}
							});
						});
						</script>
						
						
						
						</br></br>
				</div>
    
    <!-- Le pied de page -->
        
    </body>
</html>