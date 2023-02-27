<?php 
session_start();
unset($_SESSION['user']);
unset($_SESSION['permision']);
header('location:./index.php');
?>