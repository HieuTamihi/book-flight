<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section10.php";
$section10 = new Section10;

if (isset($_POST['submit'])) {
    $main = $_POST['main'];
    $sub = $_POST['sub'];
    $des = $_POST['des'];
    $image1 = $_FILES['image1']['name'];
    $content = $_POST['content'];
    $target_dir = "../../public/image/";
    $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
    move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES["image1"]["name"]));
    $section10->addSection10($main, $sub, $des, $image1, $content);
    header('location:../../views/section10.php?status=add');
}
