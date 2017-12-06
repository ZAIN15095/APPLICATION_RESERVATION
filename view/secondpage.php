<<<<<<< HEAD
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
=======
<html>
<head>
    <meta charset="utf-8" />
    <link href='view/css/style.css' rel='stylesheet'>
    <title> Reservation -- Détails </title>
</head>
<body>
<form method="POST" action="index.php">
>>>>>>> 4fa4dc909e181c3d8db06b7676a77732f20715b2
    <h1>Détails des réservations</h1>

    <?php
    for($i=0; $i < $reservation->getPlace(); $i++) {

<<<<<<< HEAD
        echo "<br /><br /><div><label for='uname'>Nom</label>"."<input type='text' id='uname' name='names[]' required size='45'
        pattern='[A-Za-z]{1,15}' value='".$reservation->getName()[$i]."' placeholder = 'Entrer le nom' /> <span class='validity'></span>
        <p>Names must be 1-15 characters in length.</p></div>";
=======
        echo "<br /><br />Nom"."<input type='text' name='names[]' value='".$reservation->getName()[$i]."' placeholder = 'Entrer le nom' />";
>>>>>>> 4fa4dc909e181c3d8db06b7676a77732f20715b2


        if (isset($reservation)) {
            if ($reservation->getErrorText() && $reservation->getNameError())
                echo "<error>Veuillez entrer un nom valide</error>";
        }

<<<<<<< HEAD
        echo "<br /><div><label for='uage'>Age</label>"."<input type='text' id='uage' name='ages[]' required size='45'
        pattern='[1-9]{0,1}[0-9]{1,3}' value='".$reservation->getAge()[$i]."' placeholder = 'Entrer l âge' /> <span class='validity'></span>
        <p>Ages must be maximum 3 characters in length.</p></div>";
=======
        echo "<br />Age"."<input type='text' name='ages[]' value='".$reservation->getAge()[$i]."'placeholder = 'Entrer le nom' />";
>>>>>>> 4fa4dc909e181c3d8db06b7676a77732f20715b2

        if(isset($reservation)) {
            if ($reservation->getErrorText() && $reservation->getAgeError())
                echo "<error> Veuillez entrer un âge valide compris entre 1 et 99 inclus </error>";
        }
    }

    echo '<br />';

    ?>
    <br />
<<<<<<< HEAD
    <input type='submit' class="button" name='previous_page' value='page précedente'/>
    <input type='submit' class="button" name='continue' value='continuer'/>
    <input type='submit' class="button" name='cancel' value='annuler'/>
    </div>
=======
    <input type='submit' class="button" name='page_precedente' value='page précedente'/>
    <input type='submit' class="button" name='confirmer' value='continuer'/>
    <input type='submit' class="button" name='annuler' value='annuler'/>

>>>>>>> 4fa4dc909e181c3d8db06b7676a77732f20715b2
</form>
</body>
</html>
