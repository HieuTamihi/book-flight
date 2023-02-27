<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/contact_order.php";
$contact_order = new Contact_Order;
$image1 = $_FILES['image1']['name'];
$image2 = $_FILES['image2']['name'];
$image3 = $_FILES['image3']['name'];
$content = $_POST['content'];
$link = $_POST['link'];
if (isset($_POST['submit'])) {
    $target_dir = "../../public/image/";
    $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
    $contact_order->addIconOD($image1, $content, $link);
    move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES["image1"]["name"]));
    header('location:../../views/contact_order.php?status=add');
}
if (isset($_POST['submit1'])) {
    $target_dir = "../../public/image/";
    $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
    $contact_order->addIconCT($image2,$content,$link);
    move_uploaded_file($_FILES["image2"]["tmp_name"], $target_dir . basename($_FILES["image2"]["name"]));
    header('location:../../views/contact_order.php?status=add');
}
if (isset($_POST['submit2'])) {
    $target_dir = "../../public/image/";
    $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
    $contact_order->addContact($image3,$content,$link);
    move_uploaded_file($_FILES["image3"]["tmp_name"], $target_dir . basename($_FILES["image3"]["name"]));
    header('location:../../views/contact_order.php?status=add');
}
