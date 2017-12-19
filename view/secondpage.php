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

    <script>
        function myFunction() {
<<<<<<< HEAD

            <?php
            for($i=0; $i < $reservation->getPlace()*2; $i++) {
                echo "document.getElementsByTagName('input')[$i].removeAttribute('required');";
            }?>
=======
            document.getElementsByTagName("input")[0].removeAttribute("required");
            document.getElementsByTagName("input")[1].removeAttribute("required");
>>>>>>> 26d8b5f468fd98f386b686e9ab8dc2afd5b71f84
        }
    </script>

</head>
<body>
<form method="POST" action="index.php">
    <div class="container">
    <h1>Détails des réservations</h1>

    <?php
    for($i=0; $i < $reservation->getPlace(); $i++) {

        echo "<br /><br /><div><label for='uname'>Nom</label>"."<input type='text' id='uname' name='names[]' required size='45'
        pattern='[A-Za-z]{1,15}' value='".$reservation->getName()[$i]."' placeholder = 'Entrer le nom' /> <span class='validity'></span>
        <p>Les noms doivent comporter entre 1 et 15 caractères.</p></div>";


/*        if (isset($reservation)) {
            if ($reservation->getErrorText() && $reservation->getNameError())
                echo "<error>Veuillez entrer un nom valide</error>";
        }*/

        echo "<br /><div><label for='uage'>Age</label>"."<input type='text' id='uage' name='ages[]' required size='45'
        pattern='[1-9]{0,1}[0-9]{1,3}' value='".$reservation->getAge()[$i]."' placeholder = 'Entrer l âge' /> <span class='validity'></span>
        <p>Les âges doivent avoir au maximum 3 caractères.</p></div>";

/*        if(isset($reservation)) {
            if ($reservation->getErrorText() && $reservation->getAgeError())
                echo "<error> Veuillez entrer un âge valide compris entre 1 et 99 inclus </error>";
        }*/
    }

    echo '<br />';

    ?>
<<<<<<< HEAD
        <br />

        <div class="btn-group">
            <input type='submit' class="btn btn-primary" onclick="myFunction()" name='previous_page' value='page précedente'/>
            <input type='submit' class="btn btn-primary" name='continue' value='continuer'/>
            <input type='submit' class="btn btn-primary" onclick="myFunction()" name='cancel' value='annuler'/>
        </div>
=======
    <br />
    <input type='submit' class="button" onclick="myFunction()" name='previous_page' value='page précedente'/>
    <input type='submit' class="button" name='continue' value='continuer'/>
    <input type='submit' class="button" onclick="myFunction()" name='cancel' value='annuler'/>
>>>>>>> 26d8b5f468fd98f386b686e9ab8dc2afd5b71f84
    </div>
</form>
</body>
</html>
