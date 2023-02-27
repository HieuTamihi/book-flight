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
$id = $_POST['id'];
if (isset($_POST['submit'])) {
    if (isset($id)) {
        $getContactById = $contact_order->getContactById($id);
        foreach ($getContactById as $values) {
            if ($_FILES["image1"]["tmp_name"] != null) {
                $target_dir = "../../public/image/";
                unlink("../../public/image/" . $values['image']);
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $contact_order->updateContact($image1, $content, $link, $id);
                move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES["image1"]["name"]));
                header('location:../../views/contact_order.php?status=edit');
            } else {
                $contact_order->updateNotImage($content, $link, $id);
                header('location:../../views/contact_order.php?status=edit');
            }
        }
    }
}
if (isset($_POST['submit1'])) {
    if (isset($id)) {
        $getContactById = $contact_order->getContactById($id);
        foreach ($getContactById as $values) {
            if ($_FILES["image2"]["tmp_name"] != null) {
                unlink("../../public/image/" . $values['image']);
                $target_dir = "../../public/image/";
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $contact_order->updateContact1($image2, $content, $link, $id);
                move_uploaded_file($_FILES["image2"]["tmp_name"], $target_dir . basename($_FILES["image2"]["name"]));
                header('location:../../views/contact_order.php?status=edit');
            } else {
                $contact_order->updateNotImage($content, $link, $id);
                header('location:../../views/contact_order.php?status=edit');
            }
        }
    }
}
if (isset($_POST['submit2'])) {
    if (isset($id)) {
        $getContactById = $contact_order->getContactById($id);
        foreach ($getContactById as $values) {
            if ($_FILES["image3"]["tmp_name"] != null) {
                unlink("../../public/image/" . $values['image']);
                $target_dir = "../../public/image/";
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $contact_order->updateContact2($image3, $content, $link, $id);
                move_uploaded_file($_FILES["image3"]["tmp_name"], $target_dir . basename($_FILES["image3"]["name"]));
                header('location:../../views/contact_order.php?status=edit');
            } else {
                $contact_order->updateNotImage($content, $link, $id);
                header('location:../../views/contact_order.php?status=edit');
            }
        }
    }
}
