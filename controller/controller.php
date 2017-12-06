<?php
include_once 'model/model.php';
include_once 'controller/controller_database.php';

if (!isset($_SESSION))
    session_start();

<<<<<<< HEAD
$reservation = isset($_SESSION['ID']) && isset($_SESSION['ID']) ? unserialize($_SESSION['ID']) : new Reservation();

if(empty($reservation->getDestination()) && empty($reservation->getPlace()) && empty($_POST["next"])){
=======
if (isset($_SESSION['ID']) && isset($_SESSION['ID']))
    $reservation = unserialize($_SESSION['ID']);

else
    $reservation = new Reservation();

if(empty($reservation->getDestination()) && empty($reservation->getPlace()) && empty($_POST["continuer"])){
>>>>>>> 4fa4dc909e181c3d8db06b7676a77732f20715b2
    $reservation->setErrorText(False);
    include("view/firstpage.php");
}

<<<<<<< HEAD
elseif(isset($_POST["next"]) && empty($_POST["cancel"]) && $reservation->analysePlace($_POST['number_places']) && !is_numeric($_POST['destination']) && $_POST['destination'] != ''){
=======
elseif(isset($_POST["continuer"]) && empty($_POST["annuler"]) && $reservation->analysePlace($_POST['number_places']) && !is_numeric($_POST['destination']) && $_POST['destination'] != ''){
>>>>>>> 4fa4dc909e181c3d8db06b7676a77732f20715b2

    if(isset($_POST['case']))
        $reservation->setBox(True);
    else
        $reservation->setBox(False);

    $reservation->setDestination($_POST['destination']);
    $reservation->setPlace($_POST['number_places']);

    $reservation->setPage(False);
    $reservation->setErrorText(False);
    include 'view/secondpage.php';
}

<<<<<<< HEAD
elseif(isset($_POST['previous_page'])) {
=======
elseif(isset($_POST['page_precedente'])) {
>>>>>>> 4fa4dc909e181c3d8db06b7676a77732f20715b2
    $reservation->setName($_POST['names']);
    $reservation->setAge($_POST['ages']);
    $reservation->setPage(True);
    include 'view/firstpage.php';
}

<<<<<<< HEAD
elseif(isset($_POST['previous_page2'])){
=======
elseif(isset($_POST['page_precedente2'])){
>>>>>>> 4fa4dc909e181c3d8db06b7676a77732f20715b2
    $reservation->setPage(False);
    $reservation->setPrice(0);
    include 'view/secondpage.php';
  }


<<<<<<< HEAD
elseif(isset($_POST['continue']) && empty($_POST['cancel']) && isset($_POST['names']) && $_POST['names'] !=[] && isset($_POST["ages"]) && $_POST["ages"] != [] && !$reservation->getNameError()
=======
elseif(isset($_POST['confirmer']) && empty($_POST['annuler']) && isset($_POST['names']) && $_POST['names'] !=[] && isset($_POST["ages"]) && $_POST["ages"] != [] && !$reservation->getNameError()
>>>>>>> 4fa4dc909e181c3d8db06b7676a77732f20715b2
    && !$reservation->getAgeError())
{
    $reservation->setAge($_POST['ages']);
    $reservation->setName($_POST['names']);
<<<<<<< HEAD
    include 'view/thirdpage.php';
}

elseif(isset($_POST['confirm'])){
=======

    include 'view/thirdpage.php';
}

elseif(isset($_POST['suivant'])){
>>>>>>> 4fa4dc909e181c3d8db06b7676a77732f20715b2
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
<<<<<<< HEAD
        $sql="INSERT INTO Reservation (Destination, Assurance, Total, Nom, Age) VALUES ('$dest', '$assurance', '$total', '$names', '$ages')";
=======
        $sql="INSERT INTO Reservation (Destination, Assurance, Total, Nom, Age) VALUES ('$dest','$assurance','$total','$names', '$ages')";
>>>>>>> 4fa4dc909e181c3d8db06b7676a77732f20715b2

    else{
        $id=$reservation->idUpdate();
        $sql="UPDATE Reservation SET Destination='$dest', Assurance='$assurance', Total='$total', Nom='$names', Age='$ages' WHERE id='$id'";
    }

    $stmt = $bdd->prepare($sql);
    $exec=$stmt->execute();
    include 'view/fourthpage.php';
<<<<<<< HEAD
}

elseif(isset($_POST['cancel'])){
    $reservation->setErrorText(False);
    unset($reservation);
    include 'view/firstpage.php';
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
        include 'view/firstpage.php';
    }

    elseif($reservation->currentPage()==False){
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
=======
}

elseif(isset($_POST['annuler'])){
    $reservation->setErrorText(False);
    unset($reservation);
    include 'view/firstpage.php';
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
        include 'view/firstpage.php';
    }

    elseif($reservation->currentPage()==False){
        if (isset($_POST['names']) && isset ($_POST['ages'])) {
            $reservation->setName($_POST['names']);
            $reservation->setAge($_POST['ages']);;
        }

        include 'view/secondpage.php';
    }
}

if (isset($reservation) && empty($_POST['annuler']))
    $_SESSION['ID'] = serialize($reservation);


if(isset($_POST['annuler']))
>>>>>>> 4fa4dc909e181c3d8db06b7676a77732f20715b2
    session_unset();

?>
