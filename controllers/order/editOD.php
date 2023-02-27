<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/order.php";
$order = new Order;

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $status = $_POST['status'];
    $create_at = $_POST['create_at'];
    $id = $_POST['id'];
    $order->updateOrder($fullname, $phone, $status, $create_at, $id);
    header('location:../../views/orders.php?status=edit');
}
