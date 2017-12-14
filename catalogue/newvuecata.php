<!DOCTYPE html>
<html>
    <head>
    	  <!-- En-tete de le page -->
        <meta charset="utf-8" />
		<link rel="stylesheet" href="../design/new-try.css" />
        <title>Catalogue - S.A.V.</title> 
    </head>
 
    <body>
 
   <!--  <?php include 'headernav.php' ?>	 -->
    <?php require '../controleur/controleur_catalogue.php'  ?>
    <?php require '../vue/vue_catalogue01.php'  ?>
    <?php require '../controleur/controleur'?>
     <?php require '../controleur/newcontroleur'?>
    
    <!-- Le corps -->
    <h1>Catalogue</h1> 
    <ul id="menu-liste">
    	<li><a href="#">Liste des capteurs</a>
    		<ul>
    			<?php 
				foreach($catalogue_capteurs as $element)
				{
					echo '<a class="w3-button w3-block w3-teal" 
					href="controleur_catalogue01.php?id_catalogue='.$element['id'].'" >' . $element['nom'] . '</a> ' ;
				}; 
				if(isset($donnees)) {
				    foreach(donnees as $truc)
				    {
				        echo $truc['id'] . '<br/>';
				    }
				    ?>
			</ul>
		</li>
		<li><a href="#">Liste des actionneurs</a>
			<ul>
				<?php 
				foreach($catalogue_actionneurs as $element)
				{
					echo '<a class="w3-button w3-block w3-teal" 
					href="../vue/vue_catalogue01.php?id_catalogue='.$element['id'].'" >' . $element['nom'] . '</a> ' ;
				}; 
				if(isset($donnees)) {
				    foreach(donnees as $truc)
				    {
				        echo $truc['id'] . '<br/>';
				    }
				}?>
			</ul>
		</li>
		<li><a href="#">Liste des Cemacs</a>
			<ul>
				<?php 
				foreach($catalogue_cemacs as $element)
				{
					echo '<a class="w3-button w3-block w3-teal" 
					href="../vue/vue_catalogue01.php?id_catalogue='.$element['id'].'" >' . $element['nom'] . '</a> ' ;
				}
				if(isset($donnees)) {
				    foreach($donnees as $truc)
				    {
				        echo $truc['id'] . '<br/>';
				    }
				}?>
			</ul>
		</li>
		<li><a href="#">Tout le catalogue</a>
			<ul>
				<?php 
				foreach($catalogue as $element)
				{
					echo '<a class="w3-button w3-block w3-teal" 
					href="../vue/vue_catalogue01.php?id_catalogue='.$element['id'].'" >' . $element['nom'] . '</a>' ;
				};
				if(isset($donnees)) {
				    foreach(donnees as $truc)
				    {
				        echo $truc['id'] . '<br/>';
				    }
				    ?>
			</ul>
		</li>
	</ul>
 
    
<!-- <?php // include 'footer.php' ?>	-->
        
    </body>
</html>