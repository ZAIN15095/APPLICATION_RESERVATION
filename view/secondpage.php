<html>
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
</html>
