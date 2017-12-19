<?php
include_once 'model/model.php';

if (!isset($_SESSION))
    session_start();

if (isset($_SESSION['ID']) && !empty($_SESSION['ID']))
    $reservation = unserialize($_SESSION['ID']);

else
    $reservation = new Reservation();

$dbname='Data';
try
{
    $bdd = new PDO('mysql:host=localhost','root','');
    $bdd->query("CREATE DATABASE IF NOT EXISTS $dbname");
    $bdd->query("use $dbname");
    $bdd->query("CREATE TABLE IF NOT EXISTS Reservation(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
estination TEXT(30) NOT NULL,
Assurance BOOLEAN NOT NULL,
Total TEXT(50),
Nom TEXT(50),
Age TEXT(50)
)");
}

catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM Reservation');

if(empty($_POST))
    include('view/manager.php');

if(!empty($_POST)){
    while($donnees = $reponse->fetch()){
        if(isset($_POST[$donnees['id']])){
            $reservation->setDestination($donnees['Destination']);
            $reservation->setStateUpdate(True);
            $reservation->setIdUpdate($donnees['id']);
            $str=$donnees["Nom"];
            $str2=$donnees["Age"];
            $name=explode(",", $str);
            $age=explode(",", $str2);
            $reservation->setPlace(count($name));
            $a=$reservation->setName($name);
            $a2=$reservation->setAge($age);

            if($donnees["Assurance"]==1){
                $reservation->setBox(True);
            }
            else{
                $reservation->setBox(False);
            }
            include 'view/firstpage.php';
        }

        elseif(!empty($_POST["Suppress".$donnees['id']])){
            $id=$donnees['id'];
            $sql = "DELETE FROM Reservation WHERE id=$id";
            $bdd->exec($sql);
            include 'view/manager.php';
        }
    }

    if(!empty($_POST['Nouvelle_reservation'])) {
        include 'controller/controller.php';
    }
}

$_SESSION['ID'] = serialize($reservation);

?>
