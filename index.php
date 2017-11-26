<?php
if (!isset($_SESSION))
    session_start();

if(!empty($_GET["name"]) && is_file('Controller_'.$_GET['name'].'.php'))
    include 'controller_'.$_GET['name'].'.php';

else
    include "controller.php";
?>
