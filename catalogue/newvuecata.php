<!DOCTYPE html>
<html>
    <head>
    	  <!-- En-tete de le page -->
        <meta charset="utf-8" />
		<link rel="stylesheet" href="new-try.css" />
        <title>Catalogue - S.A.V.</title> 
    </head>
 
    <body>
 
    <?php //include 'headernav.php' ?>

    <!-- Le corps -->
    <h1>Catalogue</h1> 
    <ul id="menu-liste">
    	<li><a href="#">Liste des capteurs</a>
    		<ul>
    			<?php 
				foreach($liste_capteurs as $element)
				{
					echo '<a class="w3-button w3-block w3-teal" 
					href="vue_donnees_catalogue.php?id_catalogue='.$element['id'].'" >' . $element['nom'] . '</a>';
				}
				?>
			</ul>
		</li>
		<li><a href="#">Liste des actionneurs</a>
			<ul>
				<?php 
				foreach($liste_actionneurs as $element)
				{
					echo '<a class="w3-button w3-block w3-teal" 
					href="vue_donnees_catalogue.php?id_catalogue='.$element['id'].'" >' . $element['nom'] . '</a>';
				} 
				?>
			</ul>
		</li>
		<li><a href="#">Liste des Cemacs</a>
			<ul>
				<?php 
				foreach($liste_cemacs as $element)
				{
					echo '<a class="w3-button w3-block w3-teal" 
					href="vue_donnees_catalogue.php?id_catalogue='.$element['id'].'" >' . $element['nom'] . '</a>';
				}
				?>
			</ul>
		</li>
		<li><a href="#">Tout le catalogue</a>
			<ul>
				<?php 
				foreach($liste_catalogue as $element)
				{
					echo '<a class="w3-button w3-block w3-teal" 
					href="vue_donnees_catalogue.php?id_catalogue='.$element['id'].'" >' . $element['nom'] . '</a>' ;
				}
				?>
			</ul>
		</li>
	</ul>


    
 <?php// include 'footer.php' ?>
        
    </body>
</html>