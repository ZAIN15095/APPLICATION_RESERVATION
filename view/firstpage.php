<html>
<<<<<<< HEAD
<head>
    <meta charset="utf-8" />
    <link href='#' rel='stylesheet'>
    <Title> Réservation </Title>
</head>
<body>
<form method="POST" action="index.php">
    <h1>Réservation</h1>
    <h3Prix des places </h2>
    <ul>
        <li> Moins de 12 ans = 10 euros </li>
        <li> Plus de 12 ans = 15 euros</li>
    </ul>
    <h4>L'assurance vous reviens à 20 euros quel que soit le nombre de voyageurs</h4>

    Destination

    <input type="text" value='<?php if(isset($reservation)) echo $reservation->getDestination()?>' name="destination" placeholder = 'Entrer la destination'/>

    <?php
    if(isset($reservation)){
        if($reservation->getErrorText() && ($reservation->getDestination()=="" || is_numeric($reservation->getDestination())))
            echo "<error> Veuillez entrer une destination valide </error>";
    }
    ?>

    <br />
    Nombre de places

    <input type="text" value='<?php if(isset($reservation)) echo $reservation->getPlace() ?>' name="number_places" placeholder = 'Entrer le nombre de places'/>

    <?php
    if(isset($reservation)){
        if($reservation->getErrorText() && ($reservation->getPlace()=="" || (int)($reservation->getPlace())<=0 || (int)($reservation->getPlace())>10))
            echo "<error> Il faut qu'il y ait minimum une place et maximum 10 places </error>";
    }
    ?>

    <br />
    Assurance

    <?php
    echo "<input type=\"checkbox\" name=\"case\" value=\"case\"";
    if(isset($reservation) && $reservation->getBox())
        echo "checked";
    echo "/>";
    ?>

    <br />
    <input type="submit" class="button" name="continuer" value="suivant">
    <input type="submit" class="button" name="annuler" value="annuler"/>

</form>
</body>
</html>
=======
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
>>>>>>> 4f870c561aba0bf8c081c25327c2ec5e925534d3
