<!DOCTYPE html>
<html lang="fr">
<head>
    <title> Reservation -- Détails </title>
    <meta content-type="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<<<<<<< HEAD
    <link href='view/css/style.css' rel='stylesheet'>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

=======
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
>>>>>>> 26d8b5f468fd98f386b686e9ab8dc2afd5b71f84
</head>
<body>

<form method="POST" action="index.php?name=manager">

<<<<<<< HEAD
    <div class="container">
        <h1>Liste des réservations</h1>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Destination</th>
                <th>Assurance</th>
                <th> Total</th>
                <th>Nom</th>
                <th>Age</th>
                <th>Editer</th>
                <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
            <br />
            <tr>
                <td>
                    <?php
                    $reponse=$bdd->query('SELECT * FROM Reservation');
                    while($donnees = $reponse->fetch())
                    {

                        echo $donnees['id'].'<br /><br />';
                    }

                    ?>
                </td>
                <td>
                    <?php
                    $reponse=$bdd->query('SELECT * FROM Reservation');
                    while($donnees = $reponse->fetch())
                    {

                        echo $donnees['Destination'].'<br /><br />';
                    }

                    ?>
                </td>
                <td>

                    <?php
                    $reponse=$bdd->query('SELECT * FROM Reservation');
                    while($donnees = $reponse->fetch())
                    {
                        if($donnees['Assurance']==1)
                            $assurance='OUI';
                        else
                            $assurance='NON';

                        echo $assurance.'<br /><br />';


                    }
                    ?>
                </td>
                <td>

                    <?php
                    $reponse=$bdd->query('SELECT * FROM Reservation');
                    while($donnees = $reponse->fetch())
                    {
                        echo $donnees['Total']. '<br /><br />';


                    }
                    ?>
                </td>
                <td>

                    <?php
                    $reponse=$bdd->query('SELECT * FROM Reservation');
                    while($donnees = $reponse->fetch())
                    {
                        $list = explode(":", $donnees['Nom']);


                        for ($i = 0; $i < count($list); $i++)
                        {
                            echo  $list[$i]. '<br /><br />' ;

                            $i = $i + 1;
                        }


                    }
                    ?>
                </td>

                <td>

                    <?php
                    $reponse=$bdd->query('SELECT * FROM Reservation');
                    while($donnees = $reponse->fetch())
                    {
                        $list2 = explode(":", $donnees['Age']);


                        for ($i = 0; $i < count($list); $i++)
                        {
                            echo  $list2[$i]. '<br /><br />' ;

                            $i = $i + 1;
                        }


                    }
                    ?>
                </td>

                <td>

                    <?php
                    $reponse=$bdd->query('SELECT * FROM Reservation');
                    while($donnees = $reponse->fetch())
                    {
                        echo '<input type="submit" class="btn btn-info btn-xs" value="Editer" name="' . $donnees['id'] . '">' . '<br /><br />';

                    }
                    ?>
                </td>



                <td>

                    <?php
                    $reponse=$bdd->query('SELECT * FROM Reservation');
                    while($donnees = $reponse->fetch())
                    {
                        echo '<input type="submit" class="btn btn-info btn-xs" value="Supprimer" name="' . "Suppress" . $donnees['id'] . '">' . '<br /><br />';


                    }
                    ?>
                </td>



            </tr>
            </tbody>
        </table>


        <div class="btn-group">

            <input type='submit' value='Nouvelle réservation' class="btn btn-primary" name='Nouvelle_reservation'>
        </div>
    </div>

=======
<div class="container">
            <h1>Liste des réservations</h1>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Destination</th>
                    <th>Assurance</th>
                    <th> Total</th>
                    <th>Nom</th>
                    <th>Age</th>
                    <th>Editer</th>
                    <th>Supprimer</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <?php
                        $reponse=$bdd->query('SELECT * FROM Reservation');
                        while($donnees = $reponse->fetch())
                        {

                            echo $donnees['id'].'<br />';
                        }

                        ?>
                    </td>
                    <td>
                        <?php
                        $reponse=$bdd->query('SELECT * FROM Reservation');
                        while($donnees = $reponse->fetch())
                        {

                            echo $donnees['Destination'].'<br />';
                        }

                        ?>
                    </td>
                    <td>

                        <?php
                        $reponse=$bdd->query('SELECT * FROM Reservation');
                        while($donnees = $reponse->fetch())
                        {
                            if($donnees['Assurance']==1)
                                $assurance='OUI';
                            else
                                $assurance='NON';

                            echo $assurance.'<br />';

                            
                        }
                        ?>
                    </td>
					<td>

                        <?php
                        $reponse=$bdd->query('SELECT * FROM Reservation');
                        while($donnees = $reponse->fetch())
                        {
                            echo $donnees['Total']. '<br />';

                           
                        }
                        ?>
                    </td>
					<td>

                        <?php
                        $reponse=$bdd->query('SELECT * FROM Reservation');
                        while($donnees = $reponse->fetch())
                        {
                            $list = explode(":", $donnees['Nom']);
                    

							for ($i = 0; $i < count($list); $i++) 
							{
									echo  $list[$i]. '<br />' ;
                        
									$i = $i + 1;
							}

                           
                        }
                        ?>
                    </td>
					
					<td>

                        <?php
                        $reponse=$bdd->query('SELECT * FROM Reservation');
                        while($donnees = $reponse->fetch())
                        {
                            $list2 = explode(":", $donnees['Age']);
                    

							for ($i = 0; $i < count($list); $i++) 
							{
									echo  $list2[$i]. '<br />' ;
                        
									$i = $i + 1;
							}

                           
                        }
                        ?>
                    </td>
						
					<td>

                        <?php
                        $reponse=$bdd->query('SELECT * FROM Reservation');
                        while($donnees = $reponse->fetch())
                        {
                          echo '<input type="submit" class="buttonEditer" value="Editer" name="' . $donnees['id'] . '">' . '<br />';
                           
                        }
                        ?>
                    </td>
					
					
					
					<td>

                        <?php
                        $reponse=$bdd->query('SELECT * FROM Reservation');
                        while($donnees = $reponse->fetch())
                        {
                          echo '<input type="submit" class="buttonSupprimer" value="Supprimer" name="' . "Suppress" . $donnees['id'] . '">' . '<br />';

                           
                        }
                        ?>
                    </td>



                </tr>
                </tbody>
            </table>
			
			 <input type='submit' value='Nouvelle réservation' class="buttonNew" name='Nouvelle_reservation'>
        </div>
>>>>>>> 26d8b5f468fd98f386b686e9ab8dc2afd5b71f84






</form>
</body>
</html>
