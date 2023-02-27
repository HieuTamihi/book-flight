<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section9.php";
$section9 = new Section9;

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $background = $_FILES['image1']['name'];
    $icon = $_FILES['image2']['name'];
    $btn_sec = $_POST['btn_sec'];
    $link = $_POST['link'];
    $target_dir = "../../public/image/";  
    $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
    move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES["image1"]["name"]));
    move_uploaded_file($_FILES["image2"]["tmp_name"], $target_dir . basename($_FILES["image2"]["name"]));
    $section9->addSection9($title, $content, $background, $icon, $btn_sec, $link);
    header('location:../../views/section9.php?status=add');
}