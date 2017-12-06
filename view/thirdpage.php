<<<<<<< HEAD
<!DOCTYPE html>
<html lang="fr">
<head>
    <title> Confirmation- Reservation </title>
    <meta content-type="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<form method="POST" action="index.php">

    <div class="container">
        <h1>Validation des réservations</h1>

        <table class="table table-condensed">
            <thead>
            <tr>
                <th>Destination</th>
                <th>Nombre des palces </th>
                <th>Assuration annulation </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td> <?php echo $reservation->getDestination(); ?></td>
                <td> <?php echo $reservation->getPlace(); ?></td>
                <td> <?php
                    if($reservation->getBox())
                        echo "OUI";
                    else
                        echo 'NON';
                    ?>
                </td>

            </tr>
            </tbody>
        </table>
    </div>

    <div class="container">
    <h1>Passenger details</h1>
    <table class="table table-condensed">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Age </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <?php
                for ($i = 0; $i < $reservation->getPlace(); $i++)
                {
                    echo $reservation->getName()[$i].'<br />';

                }
                ?>
            </td>
            <td>
                <?php
                for ($i = 0; $i < $reservation->getPlace(); $i++)
                {
                    echo $reservation->getAge()[$i].'<br />';

                }
                ?>
            </td>

        </tr>

        </tbody>
    </table>
        <br />

        <input type='submit' class="button" name='previous_page2' value='page précedente'/>
        <input type='submit' class="button" name='confirm' value='confirmer'/>
        <input type='submit' class="button" name='cancel' value='annuler'/>


    </div>






=======
<html>
<head>
    <meta charset="utf-8" />
    <link href='view/css/style.css' rel='stylesheet'>
    <title> Reservation -- Validation </title>

</head>
<body>
<form method="POST" action="index.php">
    <h1>Validation des réservations</h1>

    Destination

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
>>>>>>> 4fa4dc909e181c3d8db06b7676a77732f20715b2

</form>
</body>
</html>
<<<<<<< HEAD





=======
>>>>>>> 4fa4dc909e181c3d8db06b7676a77732f20715b2
