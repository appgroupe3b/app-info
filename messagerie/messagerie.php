<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Messagerie</title>
        <link rel="stylesheet" type="text/css" href="headernav.css">
        <link rel="stylesheet" type="text/css" href="messagerie.css">
        <link rel="stylesheet" type="text/css" href="footer.css">
    </head>

    <header>
      <table>
  			<tr>
    			<td><img src="logo.png" alt=""width="100" height="100" /></td>
    			<td><font color="white" face="Verdana" ><h2>DomIsep</h2>
    			<p>A smart house makes a better home <p></td></font>
  			</tr>
	</table>

      </header>

    <nav style="position: fixed; text-align: center;">
    				<ul id="menu_horizontal">
						<li><a href="accueil.php" class="button">Accueil</a></li>
						<li><a href="ma_maison.php" class="button">Ma maison</a></li>
						<li><a href="programmations.php" class="button">Programmations</a></li>
						<li><a href="suivi_consommation.php" class="button">Suivi de consommation</a></li>
						<li><a href="espace_client.php" class="button">Espace Client</a></li>
						<li><a href="messagerie.php" class="button">Nous contacter</a></li>
					</ul>
    </nav>

    	<body>
    		<p align="justify">
			<main>
				
			<section style="text-align: center;">
				
				<h2>Messagerie</h2>

				<form method="post" action="traitement.php">
   				<p>
       				<label for="categorie">A quelle catégorie se lie votre message ?</label><br /><br>
       				<select name="categorie" id="categorie">
           				<option value="c1">Catégorie 1</option>
           				<option value="c2">Catégorie 2</option>
           				<option value="c3">Catégorie 3</option>
           				<option value="c4">Catégorie 4</option>
           				<option value="c5">Catégorie 5</option>
       				</select>
   				</p>

   					<p>
       				<label for="ameliorer">
       				Comment pouvons nous vous aider ?
       				</label>
       				<br />
       
       				<textarea name="ameliorer" id="ameliorer" rows="10" cols="50"></textarea>       
   					</p>
				</form>
				
				<br>

				<tr><td align="center"><input type="submit" value="Envoyer"></td></tr>
						
			</section>
	
			<div class="clear"></div>
			<!-- Les cadres seront flottants, il faut appliquer un clear:both pour continuer -->
		</main>
    	</body>



    	<footer>

    		<div id="socials">

    			<a href="#" class="social"><img src="mail.png" alt="social"/></a>
                <a href="#" class="social"><img src="twi.png" alt="social"/></a>
                <a href="#" class="social"><img src="face.png" alt="social"/></a>

        	</div>

        	<div class="copyright">&copy;  2017 All Rights Reserved</div>

    	</footer>

</html>
