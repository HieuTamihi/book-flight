<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/contact_order.php";
$contact_order = new Contact_Order;

if (isset($_GET['id'])) {
    $getContactById = $contact_order->getContactById($_GET['id']);
    foreach ($getContactById as $values) {
        $contact_order->deleteCT($_GET['id']);
        unlink("../../public/image/" . $values['image']);
        header('location:../../views/contact_order.php?status=success');
    }
}
