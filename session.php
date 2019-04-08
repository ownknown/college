<?php
session_start();
if(!isset($_SESSION['login'])){
    header('Location: login.php');
}

include('google-analytics.php');
?>
