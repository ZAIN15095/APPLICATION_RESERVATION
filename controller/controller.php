<?php
include_once 'model/model.php';

if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}

if (isset($_SESSION['Data_reservation'])&& !empty($_SESSION['Data_reservation']))
{
    $reservation = unserialize($_SESSION['Data_reservation']);
}

else
{
    $reservation = new Data_reservation();
}


/* if(isset($_POST['destination']) && !empty($_POST['destination']))
{
	/$reservation->set_destination($_POST['destination']);
	include 'view/firstpage.php';
}

if(isset($_POST['number_places']) && !empty($_POST['number_places']))
{
	//$reservation-> set_num_places($_POST["number_places"]);
	include 'view/firstpage.php';
} */

if(empty($reservation->get_destination()) && empty($reservation->get_num_palces()) && empty($_POST["détails"])){
  include("view/firstpage.php");
  
}

if (isset($_POST['details'])) {
	
	include("view/secondpage.php");
}



?>