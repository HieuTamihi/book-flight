<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/header.php";
$header = new Header;

if (isset($_POST['submit'])) {
    $logo = $_FILES['image1']['name'];
    $logo_mb = $_FILES['image2']['name'];
    $address = $_POST['address'];
    $id = $_POST['id'];
    $size = $_FILES['image1']['size'];
    $size1 = $_FILES['image2']['size'];
    $target_dir = "../../public/image/";
    $target_file1 = $target_dir . basename($_FILES["image1"]["name"]);
    $target_file2 = $target_dir . basename($_FILES['image2']['name']);

    if (isset($id)) {
        $getLogoById = $header->getLogoById($id);
        foreach ($getLogoById as $values) {
            if ($_FILES["image1"]["tmp_name"] != null && $_FILES["image2"]["tmp_name"] != null) {
                $header->updateLogo($logo, $logo_mb, $address, $id);
                move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file1);
                move_uploaded_file($_FILES['image2']['tmp_name'], $target_file2);
                header('location:../../views/manager_header.php?status=edit');
            }
            if ($_FILES["image1"]["tmp_name"] != null && $_FILES["image2"]["tmp_name"] == null) {
                unlink("../../public/image/" . $values['image_logo']);
                $target_dir = "../../public/image/";
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $header->updateNotLogoMB($logo, $address, $id);
                move_uploaded_file($_FILES['image1']['tmp_name'], $target_dir . basename($_FILES['image1']['name']));
                header('location:../../views/manager_header.php?status=edit');
            }
            if ($_FILES["image1"]["tmp_name"] == null && $_FILES["image2"]["tmp_name"] != null) {
                unlink("../../public/image/" . $values['logo_mb']);
                $target_dir = "../../public/image/";
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $header->updateNotLogo($logo_mb, $address, $id);
                move_uploaded_file($_FILES['image2']['tmp_name'], $target_dir . basename($_FILES['image2']['name']));
                header('location:../../views/manager_header.php?status=edit');
            } else {
                $header->updateNotImageLogo($address, $id);
                header('location:../../views/manager_header.php?status=edit');
            }
        }
    }
}
