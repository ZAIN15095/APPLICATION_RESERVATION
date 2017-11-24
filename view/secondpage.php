<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Details des réservations</title>
		<link href='view/style.css' rel='stylesheet'>
		
	</head>
	
		<body>
			<h1>Detail des réservations</h1>

            <form method='post' action='index.php'>

                <?php

                for($i = 0; $i < $reservation->get_number_places(); $i++)
                {
                    echo "<br>
					<table>
						<tr>
							<td>Nom<br>

                        </td>
                        <td>
							<input type='text' name='names[]' maxlength='40'
							value='".$reservation->get_name()[$i]."'
							placeholder = 'Entrer le nom'/><br>
                        </td>
						</tr>

						<tr>
                        <td>Age<br>

                        </td>
                        <td><input type='text' name='ages[]' maxlength='3'
							value='".$reservation->get_age()[$i]."' placeholder = 'Entrer l´âge'/>
							<br>
                        </td>
						</tr>
                  </table>
                    ";
                }
                ?>

                <br/><br/>
                <input type='submit' value='Etape suivante'
                       name='validation'/>
                <input type='submit' value='Retour à la page précédente'
                       name='backtofirst'/>
                <input type='submit' value='Annuler la reservation'
                       name='cancel'/>

            </form>
		</body>
</html>
