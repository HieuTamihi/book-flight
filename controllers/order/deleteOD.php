<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/order.php"; 
$order = new Order;

if(isset($_GET['id'])){
    $order->deleteOrder($_GET['id']);
    header('location:../../views/orders.php?status=success');
}