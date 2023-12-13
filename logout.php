<?php 
session_start();

$_SESSION['verified'] = false;
header('Location: ./index.php');
?>