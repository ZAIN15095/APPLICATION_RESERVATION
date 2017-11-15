<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Details des réservations</title>
		<link href='view/style.css' rel='stylesheet'>
		
	</head>
	
		<body>
			<h1>Detail des réservations</h1>
				<form method='post' action='router.php'>
				Nom
				<input type='text' name='names[]' maxlength='40'
				value='' placeholder = 'Entrer le nom'/><br />
				Age
				<input type='text' name='ages[]' maxlength='3'
				value='' placeholder = "Entrer l'âge"/>
				
				<br /><br />
				<input type='submit' value='Etape suivante'
				name='validation'/>
				
				<input type='submit' value='Retour à la page précédente'
				name='backtofirstpage'/>
				
				<input type='submit' value='Annuler la réservation'
				name='cancel'/>
				</form>
				
		</body>
</html>