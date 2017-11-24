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

			<input type="text" name="destination" maxlength="40" value='<?php if (isset($reservation))
				echo $reservation->get_destination()?>'
			placeholder='Entrer la destination'/><br>
                <?php
                if(isset($reservation))
                {
                    if($reservation->get_display_error())
                    {
                        echo '<error>'.$reservation->error_destination().'</error>';
                    }
                }
                ?>



                <br>
			Nombre de places
			<input type='text' name="number_places" maxlength="2"
			value='<?php if (isset($reservation))
				echo $reservation->get_number_places()?>'
			placeholder='Entrer le nombre de places'/><br>

                        <?php
                        if(isset($reservation))
                        {
                            if($reservation->get_display_error() )
                            {
                                echo '<error>'.$reservation->error_number().'</error>';
                            }
                        }
                        ?>

             <br>
			Assurance annulation
			<input type='checkbox' name="insurance">

                <br>

				<button type="submit" name="details">Suivant</button>
				<button type="submit" name="cancel">Annulation</button>

			</form>
	</body>
</html>