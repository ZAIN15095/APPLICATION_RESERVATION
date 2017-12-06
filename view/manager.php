<<<<<<< HEAD
<!DOCTYPE html>
<html lang="fr">
<head>
    <title> Reservation -- Détails </title>
    <meta content-type="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

=======
<html>
<head>
    <meta charset="utf-8" />
    <link href='view/css/style.css' rel='stylesheet'>
    <title> Reservation -- Détails </title>
</head>
<body>
>>>>>>> 4fa4dc909e181c3d8db06b7676a77732f20715b2
<form method="POST" action="index.php?name=manager">
    <h1>Liste des réservations</h1>
    Id
    Destination
    Assurance
    Total
    Nom
    Age
    Editer
    Supprimer

    <?php
    $reponse=$bdd->query('SELECT * FROM Reservation');
    while($donnees = $reponse->fetch()){

        echo $donnees['id'].$donnees['Destination'].'<br />';
        if($donnees['Assurance']==1)
            $assurance='OUI';
        else
            $assurance='NON';

        echo $assurance.$donnees['Total'].'<br />';

        $list=explode(":", $donnees['Nom']);
        $list2=explode(":", $donnees['Age']);

        for($i=0;$i<count($list);$i++){
            echo $list[$i];
            echo $list2[$i];
            $i=$i+1;
        }

        echo '<input type="submit" class="buttonEditer" value="Editer" name="'.$donnees['id'].'"><input type="submit" class="buttonSupprimer" value="Supprimer" name="';
        echo "Suppress".$donnees['id'];
        echo '">';
    }
    ?>
    <br />
    <input type='submit' value='Nouvelle réservation' class="buttonNew" name='Nouvelle_reservation'>
</form>
</body>
</html>
