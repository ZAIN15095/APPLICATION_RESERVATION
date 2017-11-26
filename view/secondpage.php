<html>
<<<<<<< HEAD
<head>
    <meta charset="utf-8" />
    <link href='#' rel='stylesheet'>
    <title> Reservation -- Détails </title>
</head>
<body>
<form method="POST" action="index.php">
    <h1>Détails des réservations</h1>

    <?php
    for($i=0; $i < $reservation->getPlace(); $i++) {

        echo "<br /><br />Nom"."<input type='text' name='names[]' value='".$reservation->getName()[$i]."' placeholder = 'Entrer le nom' />";


        if (isset($reservation)) {
            if ($reservation->getErrorText() && $reservation->getNameError())
                echo "<error>Veuillez entrer un nom valide</error>";
        }

        echo "<br />Age"."<input type='text' name='ages[]' value='".$reservation->getAge()[$i]."'placeholder = 'Entrer le nom' />";

        if(isset($reservation)) {
            if ($reservation->getErrorText() && $reservation->getAgeError())
                echo "<error> Veuillez entrer un âge valide compris entre 1 et 99 inclus </error>";
        }
    }

    echo '<br />';

    ?>
    <br />
    <input type='submit' class="button" name='page_precedente' value='page précedente'/>
    <input type='submit' class="button" name='confirmer' value='continuer'/>
    <input type='submit' class="button" name='annuler' value='annuler'/>

</form>
</body>
=======
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
>>>>>>> 4f870c561aba0bf8c081c25327c2ec5e925534d3
</html>
