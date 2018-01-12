<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../headernav/headernav.css" />
	<link rel="stylesheet" type="text/css" href="../footer/footer.css">
	<link rel="stylesheet" type="text/css" href="programmations.css">
	<title>Programmation capteur</title>
</head>
<body>
	<div style='text-align:center;'>
	<?php include '../headernav/headernav.php' ?>
	<h1><?php echo htmlspecialchars($_GET['nom_programmation']); ?></h1>
	<h2><?php echo htmlspecialchars($_GET['nom_piece']); ?>/<?php echo htmlspecialchars($_GET['nom_capteur']);?></h2>
	
	<div>
		<h3>Heure d'activation</h3>
		<input type="number" name="heure" value="0" min="0" max="24">Heure<input type="number" name="heure" value="0" min="0" max="60">Minute
	</div>
	<div>
		<h3>Heure d'arret</h3>
		<input type="number" name="heure" value="0" min="0" max="24">Heure<input type="number" name="heure" value="0" min="0" max="60">Minute
	</div>
	<div>
		<h3>Les Jours d'activation</h3>
		<input type="checkbox" name="lundi" id="lundi" /> <label for="lundi">lundi</label>
		<input type="checkbox" name="mardi" id="mardi" /> <label for="mardi">mardi</label>
		<input type="checkbox" name="mercredi" id="mercredi" /> <label for="mercredi">mercredi</label>
		<input type="checkbox" name="jeudi" id="jeudi" /> <label for="jeudi">jeudi</label>
		<input type="checkbox" name="vendredi" id="vendredi" /> <label for="vendredi">vendredi</label>
		<input type="checkbox" name="samedi" id="samedi" /> <label for="samedi">samedi</label>
		<input type="checkbox" name="dimanche" id="dimanche" /> <label for="dimanche">dimanche</label>
	</div>
	</div>
	<footer>

    		<?php include '../footer/footer.php' ?>

    </footer>
	
</body>