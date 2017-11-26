<html>
<head>
    <meta charset="utf-8" />
    <link href='view/css/style.css' rel='stylesheet'>
    <title> Reservation -- Détails </title>
</head>
<body>
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
