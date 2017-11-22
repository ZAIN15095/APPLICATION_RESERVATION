<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Réservation</title>
		<link href='view/style.css' rel='stylesheet'>
	</head>

	<body>
		<h1>RESERVATION</h1>
		<h3>Prix des places </h3>
		<ul>
			<li> Moins de 12 ans = 10 euros </li>
			<li> Plus de 12 ans = 15 euros</li>
		</ul>
		
		<h4>L'assurance vous reviens à 20 euros quel que soit le nombre de voyageurs</h4>
				
			<form action="index.php"  method="post">
			
			Destination
			<input type='text' name='destination' maxlength="40"
			value='<?php if (isset($reservation))
				echo $reservation->get_destination()?>'
			placeholder='Entrer la destination'/><br>
			
			Nombre de places
			<input type='text' name='nbr_places' maxlength="2"
			value='<?php if (isset($reservation))
				echo $reservation->get_num_palces()?>'
			placeholder='Entrer le nombre de places'/><br>
			
			Assurance annulation
			<input type='checkbox' name='insurance'>
			
				<button type="submit" name="details">Suivant</button>
				<button type="submit" name="cancel">Annulation</button>
				
			</form>
	</body>
</html>