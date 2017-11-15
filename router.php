<?php
if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}

if (!empty($_GET["name"]))
{
    include 'controller/controller_'.$_GET["name"].'.php';
}
else
{
  include 'controller/controller.php';
}
?>
