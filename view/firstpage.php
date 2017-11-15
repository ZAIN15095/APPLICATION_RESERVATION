<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<title>Réservation</title>
	</head>

	<body>
		<div id="page_1">
			<form action="router.php"  method="post">
				<h1>RESERVATION</h1>
				<h3>Prix des places </h3>
				<ul>
					<li> Moins de 12 ans = 10 euros </li>
					<li> Plus de 12 ans = 15 euros</li>
				</ul>
				<h4>L'assurance vous reviens à 20 euros quel que soit le nombre de voyageurs</h4>

				<label for="destination">Destination
					<select name="destination" id="destination" align="right">
						<option value="Paris">Paris</option>
						<option value="Berlin">Berlin</option>
						<option value="Beyrouth">Beyrouth</option>
						<option value="Madrid">Madrid</option>
						<option value="Rome">Rome</option>
						
					</select></br>
				</label>
		
				<label for="places"> Nombre de palces
				<input type="number" id="places" name="places" min="1" max= "40"/>
				</label> <br/>
		
				<label> Assurance annulation </label>
				<input type="checkbox" value="insurance" /><br />


				<button type="submit" class="btn btn-primary" name="step_1"> Suivant</button>
				<button name="destroy" class="btn btn-default"> Annulation</button>
				
			</form>
		</div>
	</body>
</html>