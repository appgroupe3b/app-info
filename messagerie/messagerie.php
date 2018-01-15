<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Messagerie</title>
        <link rel="stylesheet" type="text/css" href="../headernav/headernav.css">
        <link rel="stylesheet" type="text/css" href="messagerie.css">
        <link rel="stylesheet" type="text/css" href="../footer/footer.css">
    </head>

    <?php include '../headernav/headernav.php' ?>

    	<body>
    		<?php include 'controleur_messagerie.php' ?>
    		<p align="justify">
			<main>
				
			<section>
				
				<h2>Messagerie</h2>

				<form method="post" action="">
   				<p>
       				<label for="categorie">A quelle catégorie se lie votre message ?</label><br /><br>
       			<div class="select">
              <select name="categorie" id="categorie">
       					<?php foreach ($categorie as $element) 
       					{ 
       					?>
                  
                  <option value="<?php echo $element['nom'];?>"><?php echo htmlspecialchars($element['nom']);?></option> 
               
                <?php 
       					}
       					?>
       				</select>
            </div>
   				</p>

   					<p>
       				<label for="message">
       				Comment pouvons nous vous aider ?
       				</label>
       				<br/>
       
       				<textarea name="message" id="message" rows="10" cols="50"></textarea>       
   					</p>
            <tr><td align="center"><input type="submit" value="Envoyer"></td></tr>
				</form>
				
				<br>
						
			</section>
	
			<div class="clear"></div>
			<!-- Les cadres seront flottants, il faut appliquer un clear:both pour continuer -->
		</main>
    	</body>



    	<footer>

    		<?php include '../footer/footer.php' ?>

    	</footer>

</html>
