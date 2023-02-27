<?php
require "../config.php";
require "../models/db.php";
require "../models/order.php";
$order = new Order;
$connect = new Db;

if (isset($_POST['submit'])) {
    $fullname = mysqli_escape_string($connect->__construct(),$_POST['fullname']);
    $phone = $_POST['phone'];

    $order->addOrderUser($fullname, $phone);
    header('location:../index.php?status=tc');
}
