<?php
include_once 'model/model.php';

if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}

if (isset($_SESSION['Reservation']))
{
    $reservation = unserialize($_SESSION['Reservation']);
}

else
{
    $reservation = new Reservation();
}