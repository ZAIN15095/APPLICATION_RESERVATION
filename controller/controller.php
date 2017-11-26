<?php
include_once 'model.php';
include_once 'controller_database.php';

<<<<<<< HEAD
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
=======
if (session_status() == PHP_SESSION_NONE)
    session_start();


$reservation = isset($_SESSION['Data_Reservation']) && !empty($_SESSION['Data_Reservation']) ? unserialize($_SESSION['Data_Reservation']) : new Data_Reservation();

if(empty($reservation->get_destination()) && empty($reservation->get_number_places()) && !isset($_POST["details"]))
{
    $reservation->set_display_error(False);
    include("view/firstpage.php");
}

elseif(isset($_POST["details"]) && empty($_POST["cancel"])&& !empty($_POST['destination']) && !is_numeric($_POST['destination'])
&& !empty($_POST['number_places']) && is_numeric($_POST['number_places']))
{
    if (!empty($_POST['insurance']))

    {
        if (isset($_POST['insurance'])) {
            $reservation->set_checkbox(True);
        } else {
            $reservation->set_checkbox(False);
        }
    }
    if (!empty($_POST['number_places']) )
    {
        if($_POST['number_places'] > 0 && $_POST['number_places'] < 11)
        {
            $reservation->set_number_places($_POST['number_places']);
            $reservation->set_destination($_POST['destination']);
            $reservation->set_display_error(False);
            $reservation->set_page('secondpage.php');
            include 'view/secondpage.php';
        }
        else
        {
            $reservation->set_display_error(True);
            $reservation->set_destination($_POST['destination']);
            $reservation->set_number_places($_POST['number_places']);
            include ("view/firstpage.php");
        }
    }


>>>>>>> 4f870c561aba0bf8c081c25327c2ec5e925534d3
}

elseif(isset($_POST["destination"]) && empty($_POST["destination"]) && isset($_POST['details']))

{
    $reservation->set_display_error(True);

    if (isset($_POST['insurance']))
    {
        $reservation->set_checkbox(True);
    }
    else
    {
        $reservation->set_checkbox(False);
    }

    $reservation->set_destination($_POST["destination"]);
    $reservation->set_number_places($_POST['number_places']);
    $reservation->set_page('firstpage.php');

    include ("view/firstpage.php");
}

elseif (isset($_POST['number_places']) && empty($_POST['number_places']) && isset($_POST['details']) && !empty($_POST['details']))
{
    $reservation->set_display_error(True);

    if (isset($_POST['insurance']))
    {
        $reservation->set_checkbox(True);
    }
    else
    {
        $reservation->set_checkbox(False);
    }
    $reservation->set_number_places($_POST['number_places']);
    $reservation->set_destination($_POST['destination']);
    $reservation->set_page('firstpage.php');

    include ("view/firstpage.php");
}

elseif(!empty($_POST['backtofirst']))
{
    if ($reservation->current_page() == 'view/secondpage.php')
    {
        $reservation->set_page('firstpage.php');
        $reservation->set_display_error(False);
        include 'view/firstpage.php';
    }
    else
    {
        include 'view/firstpage.php';
    }

}
elseif(!empty($_POST['cancel']))
{
    session_destroy();
    unset($reservation);
    $reservation->set_display_error(False);
    $reservation->set_page('firstpage.php');
    include 'view/firstpage.php';
}
else

{
<<<<<<< HEAD
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
=======
    $reservation->set_display_error(True);
    if (isset($_POST['insurance']))
    {
        $reservation->set_checkbox(True);
    }
    else
    {
        $reservation->set_checkbox(False);
    }

    $reservation->set_destination($_POST['destination']);
    $reservation->set_number_places($_POST['number_places']);
    $reservation->set_page('firstpage.php');
    include("view/firstpage.php");
}






>>>>>>> 4f870c561aba0bf8c081c25327c2ec5e925534d3

?>
