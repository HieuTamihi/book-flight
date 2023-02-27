<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/admin.php";
$admin = new Admin;

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $admin->addUser($username, $password);
    header('location:../../views/users.php?status=tc');
}