<html>
<head>
    <meta charset="utf-8" />
    <link href='#' rel='stylesheet'>
    <title> Reservation -- Validation </title>

</head>
<body>
<form method="POST" action="index.php">
    <h1>Validation des réservations</h1>

<<<<<<< HEAD
    Destination
=======
        <h1>Validation des reservations</h1>
        <form method='Post' action='index.php'>
		
		Destination<br />
		
		Nombre de places<br />
		
		Assurance annulation<br /><br />
>>>>>>> 4f870c561aba0bf8c081c25327c2ec5e925534d3

    <?php echo $reservation->getDestination(); ?><br />
    Nombre de places
    <?php echo $reservation->getPlace(); ?><br />

    <?php
    for ($i = 0; $i < $reservation->getPlace(); $i++)
    {
        echo'Nom'.$reservation->getName()[$i].'<br />'.'Age'.$reservation->getAge()[$i].'<br />';

    }
    echo'Assurance annulation';
    if($reservation->getBox())
        echo "OUI";
    else
        echo 'NON';
    ?>

    <br />
    <input type='submit' class="button" name='page_precedente2' value='page précedente'/>
    <input type='submit' class="button" name='suivant' value='confirmer'/>
    <input type='submit' class="button" name='annuler' value='annuler'/>

</form>
</body>
</html>
