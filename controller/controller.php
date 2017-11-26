<?php
include_once 'model.php';
include_once 'controller_database.php';

if (!isset($_SESSION))
    session_start();

if (isset($_SESSION['Variable']) && isset($_SESSION['Variable']))
    $reservation = unserialize($_SESSION['Variable']);

else
    $reservation = new Reservation();

if(empty($reservation->getDestination()) && empty($reservation->getPlace()) && empty($_POST["continuer"])){
    $reservation->setErrorText(False);
    include("firstpage.php");
}

elseif(isset($_POST["continuer"]) && empty($_POST["annuler"]) && $reservation->analysePlace($_POST['number_places']) && !is_numeric($_POST['destination']) && $_POST['destination'] != ''){

    if(isset($_POST['case']))
        $reservation->setBox(True);
    else
        $reservation->setBox(False);

    $reservation->setDestination($_POST['destination']);
    $reservation->comparePlace($_POST['number_places']);
    $reservation->setPlace($_POST['number_places']);

    $reservation->setPage(False);
    $reservation->setErrorText(False);
    include 'secondpage.php';
}

elseif(isset($_POST['page_precedente'])) {
    $reservation->setName($_POST['names']);
    $reservation->setAge($_POST['ages']);
    $reservation->setPage(True);
    include 'firstpage.php';
}

elseif(isset($_POST['page_precedente2'])){
    $reservation->setPage(False);
    $reservation->setPrice(0);
    include 'secondpage.php';
  }


elseif(isset($_POST['confirmer']) && empty($_POST['annuler']) && isset($_POST['names']) && $_POST['names'] !=[] && isset($_POST["ages"]) && $_POST["ages"] != [] && !$reservation->getNameError()
    && !$reservation->getAgeError())
{
    $reservation->setAge($_POST['ages']);
    $reservation->setName($_POST['names']);

    include 'thirdpage.php';
}

elseif(isset($_POST['suivant'])){
    $dest = $reservation->getDestination();
    $assurance = $reservation->getBox();
    $total = $reservation->getPrice();
    $names = implode(',', $reservation->getName());
    $ages = implode(',', $reservation->getAge());

    if($assurance==True)
        $assurance=1;
    else
        $assurance=0;

    if($reservation->stateUpdate()==False)
        $sql="INSERT INTO Reservation (Destination, Assurance, Total, Nom, Age) VALUES ('$dest','$assurance','$total','$names', '$ages')";

    else{
        $id=$reservation->idUpdate();
        $sql="UPDATE Reservation SET Destination='$dest', Assurance='$assurance', Total='$total', NomAge='$str' WHERE id='$id'";
    }

    $stmt = $bdd->prepare($sql);
    $exec=$stmt->execute();
    include 'fourthpage.php';
}

elseif(isset($_POST['annuler'])){
    $reservation->setErrorText(False);
    unset($reservation);
    include 'firstpage.php';
}

else
{
    $reservation->setErrorText(True);
    if($reservation->currentPage()==True)
    {
        $reservation->setDestination($_POST['destination']);
        $reservation->setPlace($_POST['number_places']);
        if(isset($_POST['case'])){
            $reservation->setBox(True);
    }

    else{
            $reservation->setBox(False);
        }
        include 'firstpage.php';
    }

    elseif($reservation->currentPage()==False){
        if (isset($_POST['names']) && isset ($_POST['ages'])) {
            $reservation->setName($_POST['names']);
            $reservation->setAge($_POST['ages']);;
        }

        include 'secondpage.php';
    }
}

if (isset($reservation) && empty($_POST['annuler']))
    $_SESSION['Variable'] = serialize($reservation);


if(isset($_POST['annuler']))
    session_unset();

?>
