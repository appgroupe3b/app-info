<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../headernav/headernav.css" />
	<link rel="stylesheet" type="text/css" href="../footer/footer.css">
	<link rel="stylesheet" type="text/css" href="programmations.css">
	<title>Modification de programations</title>
</head>
<?php include '../headernav/headernav.php' ?>
<body>
	<div style='text-align:center;'>
		<h1> <?php echo htmlspecialchars($_GET['nom_programmation']); ?> </h1>
	<?php 
	
	/*Connection à la BDD*/
	try
	{
	    $bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '');
	    //$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}
	include '../ma_maison/modele_ma_maison.php';
	$pieces=recuperer_pieces($bdd);
	foreach ($pieces as $element)
	{
	   ?> 
	   <h2><?php echo htmlspecialchars($element['nom']);?></h2><br> <?php
	   $id_piece=$element['id'];
	   $nom_piece=$element['nom'];
	   $req = $bdd->prepare('SELECT *
						FROM capteurs 
                        INNER JOIN catalogue on capteurs.id_catalogue = catalogue.id
                        WHERE id_piece = ?');
	   $req->execute(array($id_piece));
	   $capteurs = $req->fetchAll(PDO::FETCH_ASSOC);
	   
	   foreach($capteurs as $element)
	   {
	       ?>
	       <a href="capteur.php?nom_programmation=<?php echo $_GET['nom_programmation']; ?>&amp;nom_piece=<?php echo $nom_piece;?>&amp;nom_capteur=<?php echo $element['nom'];?>"><?php echo $element['nom'];?></a>
	       <?php
	      
	   }
	}
	?>
	</div>
	<footer>
	<?php include '../footer/footer.php' ?>
    </footer>
	
	
	
</body>
</html>
