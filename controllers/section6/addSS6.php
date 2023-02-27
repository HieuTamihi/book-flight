<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section6.php";
$section6 = new Section6;

if (isset($_POST['submit'])) {
    $main = $_POST['main'];
    $des = $_POST['des'];
    $section6->addTTSection6($main, $des);
    header('location:../../views/section6.php?status=add');
}
if (isset($_POST['submit1'])) {
    $main_img = $_FILES['image1']['name'];
    $sub_img = $_FILES['image2']['name'];
    $sub_title = $_POST['sub_title'];
    $content = $_POST['content'];

    $target_dir = "../../public/image/";
    $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
    $section6->addIMGSection6($main_img, $sub_img, $sub_title, $content);
    move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES["image1"]["name"]));
    move_uploaded_file($_FILES['image2']['tmp_name'], $target_dir . basename($_FILES['image2']['name']));
    header('location:../../views/section6.php?status=add');
}
