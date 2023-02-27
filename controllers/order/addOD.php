<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/order.php"; 
$order = new Order;

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $status = $_POST['status'];

    $order->addOrder($fullname, $phone, $status);
    header('location:../../views/orders.php?status=add');
}
