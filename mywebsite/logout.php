<?php
session_start();
include("database.php");

if(isset($_SESSION['email']) || isset($_SESSION['email']))
{
    session_unset();
    session_destroy();
    header("Location:index.php");
    exit();
}
else
{
    header("Location:index.php");
    exit();
}

?>