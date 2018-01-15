
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="donnees.css" />
<link rel="stylesheet" type="text/css" href="../footer/footer.css">
<link rel="stylesheet" type="text/css" href="../headernav/headernav.css">
<title>Données</title>
</head>

<body>

<?php //include '../headernav/headernav.php'; ?>
    
    <?php require_once 'controleur_catalogue.php' ?>
    
	
    <!-- Le corps -->
    <h1>Les données  </h1>
    
    	<div>
			
			<?php 
			
				if(isset($liste_donnees)) {
					foreach($liste_donnees as $truc)
					{
						echo 'Le nom du capteur est ' . $truc['nom'] . '.' .'<br/>';
					}
				}
				if(isset($liste_donnees)) {
				    foreach($liste_donnees as $truc)
				    {
				        echo 'Sa référence est ' . $truc['reference'] . '.'.'<br/>';
				    }
				}
				if(isset($liste_donnees)) {
				    foreach($liste_donnees as $truc)
				    {
				        echo 'Il vous permettra de ' . $truc['propriete'] . '.'. '<br/>';
				    }
				}
				if(isset($liste_donnees)) {
				    foreach($liste_donnees as $truc)
				    {
				        echo 'Son prix est de ' . $truc['prix'] . ' euros.' .  '<br/>';
				    }
				}
			
				if(isset($liste_donnees)) {
				    foreach($liste_donnees as $truc)
				    {
				        echo 'Il est installé dans '. $truc['unites_actives'] . ' foyer(s).' .'<br/>';
				    }
				}?>
				
				<h3>
			<?php // ne s'affichera que s'il y a une promotion
				if(isset($liste_donnees)) {
				    foreach($liste_donnees as $truc)
				    {
				        $promotions = $truc['promotions'];
				        if ($promotions!=0 ) {
				            echo "Vous avez une remise sur ce produit de " . $truc['promotions'] . "%."  ;
				        } 
				    }
				}
				?>
				<script >
				var = $promotions;
				if (var != 0 ){
					alert (' Ce produit est en promotion ! ' );
					</script>
				</h3>
				
			
		</div>
    
    <!-- Le pied de page -->
	<footer>
       <?php //include '../footer/footer.php' ?>
	</footer>
    </body>
</html>