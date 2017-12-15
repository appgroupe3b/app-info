<!DOCYTPE html>
<html>
<head>
	<meta charset="utf-8" />
        <title>Programmation</title>
        <link rel="stylesheet" type="text/css" href="../headernav/headernav.css">
        <link rel="stylesheet" type="text/css" href="../footer/footer.css">
        <link rel="stylesheet" type="text/css" href="programmations.css">
</head>
<body>

<?php include '../headernav/headernav.php' ?>
      
		
<div style='text-align:center;'> 
	<a href="../programmations/nouvelle_programmation.php"><img src="../img/nvx.png" alt="Créer une nouvelle programation" /> </a>
	<div>
	</br>
	</br>
	</br>
	</br>
	</div>
	<?php /*Connection à la BDD*/
	try
	{
	    $bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '');
	    //$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}
	$liste_programmations = array();
    
    $reponse = $bdd->query("SELECT nom FROM programmation");
    $liste_programmations = $reponse->fetchAll(PDO::FETCH_ASSOC);
    foreach ($liste_programmations as $element)
    {
        ?>
	    <a href="modifier_programmation.php?nom_programmation=<?php echo ($element['nom']); ?>"><?php echo ($element['nom']); ?></a><br>
	    <?php
    }
    ?>
</div>
</body>
		<footer>
			<?php include '../footer/footer.php' ?>
		</footer>
</html>
