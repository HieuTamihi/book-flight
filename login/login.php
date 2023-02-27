<?php
session_start();
require "../config.php";
require "../models/db.php";
require "../models/admin.php";
$user = new Admin;
$connect = new Db;
if (isset($_POST['submit'])) {
    $username = mysqli_escape_string($connect->__construct(),$_POST['username']);
    $password = $_POST['password'];
    $getUserId = $user->getUserId($username);

    if ($user->checkUser($username)) {
        if ($user->checkLogin($password, $username)) {
            $_SESSION['user'] = $username;
            foreach ($getUserId as $value) {
                if ($value['id'] == 1) {
                    $_SESSION['permision'] = 1;
                    header('location:../views/index.php');
                } else {
                    $_SESSION['permision'] = 2;
                    header('location:../views/index.php');
                }
            }
        } else {
            header('location:index.php?status=fail');
        }
    } else {
        header('location:index.php?status=fail');
    }
}
