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

if(empty($reservation->get_destination()) && empty($reservation->get_num_palces()) && empty($_POST["détails"])){
  include("view/firstpage.php");
  
}

if (isset($_POST['details'])) {
	
	include("view/secondpage.php");
}



?>
