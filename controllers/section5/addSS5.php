<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section5.php";
$section5 = new Section5;

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $image = $_FILES['image1']['name'];
    $content = $_POST['content'];

    $target_dir = "../../public/image/";
    $imageFileType =   pathinfo($target_file, PATHINFO_EXTENSION);
    $section5->addSection5($title, $image, $content);
    move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES["image1"]["name"]));
    header('location:../../views/section5.php?status=add');
}