<?php
include_once 'model/model.php';

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







?>
