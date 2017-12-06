<!DOCTYPE html>
<html lang="fr">
<head>
    <title> Reservation -- Détails </title>
    <meta content-type="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='view/css/style.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<form method="POST" action="index.php">
    <div class="container">
    <h1>Détails des réservations</h1>

    <?php
    for($i=0; $i < $reservation->getPlace(); $i++) {

        echo "<br /><br /><div><label for='uname'>Nom</label>"."<input type='text' id='uname' name='names[]' required size='45'
        pattern='[A-Za-z]{1,15}' value='".$reservation->getName()[$i]."' placeholder = 'Entrer le nom' /> <span class='validity'></span>
        <p>Names must be 1-15 characters in length.</p></div>";


        if (isset($reservation)) {
            if ($reservation->getErrorText() && $reservation->getNameError())
                echo "<error>Veuillez entrer un nom valide</error>";
        }

        echo "<br /><div><label for='uage'>Age</label>"."<input type='text' id='uage' name='ages[]' required size='45'
        pattern='[1-9]{0,1}[0-9]{1,3}' value='".$reservation->getAge()[$i]."' placeholder = 'Entrer l âge' /> <span class='validity'></span>
        <p>Ages must be maximum 3 characters in length.</p></div>";

        if(isset($reservation)) {
            if ($reservation->getErrorText() && $reservation->getAgeError())
                echo "<error> Veuillez entrer un âge valide compris entre 1 et 99 inclus </error>";
        }
    }

    echo '<br />';

    ?>
    <br />
    <input type='submit' class="button" name='previous_page' value='page précedente'/>
    <input type='submit' class="button" name='continue' value='continuer'/>
    <input type='submit' class="button" name='cancel' value='annuler'/>
    </div>
</form>
</body>
</html>
