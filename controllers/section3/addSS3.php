<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section3.php";
$section3 = new Section3;

if (isset($_POST['submit'])) {

    $main = $_POST['main'];
    $sub = $_POST['sub'];
    $des = $_POST['des'];
    $image1 = $_FILES['image1']['name'];
    $title1 = $_POST['title1'];
    $content1 = $_POST['content1'];
    $image2 = $_FILES['image2']['name'];
    $title2 = $_POST['title2'];
    $content2 = $_POST['content2'];
    $image3 = $_FILES['image3']['name'];
    $title3 = $_POST['title3'];
    $content3 = $_POST['content3'];

    $target_dir = "../../public/image/";
    $imageFileType =   pathinfo($target_file, PATHINFO_EXTENSION);
    $section3->addSection3($main, $sub, $des, $image1, $title1, $content1, $image2, $title2, $content2, $image3, $title3, $content3);
    move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES["image1"]["name"]));
    move_uploaded_file($_FILES["image2"]["tmp_name"], $target_dir . basename($_FILES["image2"]["name"]));
    move_uploaded_file($_FILES["image3"]["tmp_name"], $target_dir . basename($_FILES["image3"]["name"]));
    header('location:../../views/section3.php?status=add');
}
