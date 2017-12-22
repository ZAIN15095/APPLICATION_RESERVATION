<?php
include_once 'model/model.php';
include_once 'controller/controller_database.php';

if (!isset($_SESSION))
    session_start();

if (isset($_SESSION['ID']) && isset($_SESSION['ID']))
    $reservation = unserialize($_SESSION['ID']);

else
    $reservation = new Reservation();

if(empty($reservation->getDestination()) && empty($reservation->getPlace()) && empty($_POST["next"])){
$reservation->setError(False);
include("view/firstpage.php");
}

// Show Second Page
elseif(isset($_POST["next"]) && !$reservation->getPlaceError($_POST['number_places']) && !$reservation->getDestinationError($_POST['destination'])) {

    if(isset($_POST['case'])) {
        $reservation->setCheckBox(True);
    }
    else {
        $reservation->setCheckBox(False);
    }

    $reservation->setDestination($_POST['destination']);
    $reservation->setPlace($_POST['number_places']);

    $reservation->setPage(False);
    $reservation->setError(False);
    include 'view/secondpage.php';
}

// If user click on previous when he's on Second Page
elseif(isset($_POST['previous_page'])) {
    $reservation->setError(False);
    $reservation->setName($_POST['names']);
    $reservation->setAge($_POST['ages']);
    $reservation->setPage(True);
    include 'view/firstpage.php';
}

// If user click on previous when he's on Third Page
elseif(isset($_POST['previous_page2'])){
    $reservation->setPage(False);
    $reservation->setError(False);
    $reservation->setPrice(0);
    include 'view/secondpage.php';
  }

// Show Third Page
elseif(isset($_POST['continue']) && !$reservation->getNameError($_POST['names']) && !$reservation->getAgeError($_POST['ages']) && $reservation->getAge18Error($_POST['ages']) != 0)
{
    $reservation->setAge($_POST['ages']);
    $reservation->setName($_POST['names']);
    include 'view/thirdpage.php';
}

elseif(isset($_POST['confirm'])){
    $dest = $reservation->getDestination();
    $assurance = $reservation->getCheckBox();
    $total = $reservation->getPrice();
    $names = implode(',', $reservation->getName());
    $ages = implode(',', $reservation->getAge());

    if($assurance==True)
        $assurance=1;
    else
        $assurance=0;

    if($reservation->getStateUpdate() == False)
        $sql="INSERT INTO Reservation (Destination, Assurance, Total, Nom, Age) VALUES ('$dest', '$assurance', '$total', '$names', '$ages')";

    else{
        $id=$reservation->getIdUpdate();
        $sql="UPDATE Reservation SET Destination='$dest', Assurance='$assurance', Total='$total', Nom='$names', Age='$ages' WHERE id='$id'";
    }

    $stmt = $bdd->prepare($sql);
    $exec=$stmt->execute();
    include 'view/fourthpage.php';
}

elseif(isset($_POST['cancel']) || isset($_POST['Nouvelle_reservation'])) {
    $reservation->setError(False);
    unset($reservation);
    session_unset();
    include 'view/firstpage.php';
}

else
{
    $reservation->setError(True);
    if($reservation->getPage()==True)
    {
        $reservation->setDestination($_POST['destination']);
        $reservation->setPlace($_POST['number_places']);
        if(isset($_POST['case'])){
            $reservation->setCheckBox(True);
    }

    else{
            $reservation->setCheckBox(False);
        }
        include 'view/firstpage.php';
    }

    elseif($reservation->getPage()==False){
        if (isset($_POST['names']) && isset ($_POST['ages'])) {
            $reservation->setName($_POST['names']);
            $reservation->setAge($_POST['ages']);;
        }

        include 'view/secondpage.php';
    }
}

if (isset($reservation) && empty($_POST['cancel']))
    $_SESSION['ID'] = serialize($reservation);

if(isset($_POST['cancel']))
    session_unset();

?>
