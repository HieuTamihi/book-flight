<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section1.php";
$section1 = new Section1;

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $btn_sec = $_POST['btn_sec'];
    $image = $_FILES['image1']['name'];
    $target_dir = "../../public/image/";
    $target_file1 = $target_dir . basename($_FILES["image1"]["name"]);
    $imageFileType1 =  pathinfo($target_file1, PATHINFO_EXTENSION);
    $size = $_FILES['image1']['size'];
    $array = array("jpg", "png", "jpeg", "gif");
    if (in_array($imageFileType1, $array)) {
        if ($size < 700000 && $size > 0) {
            $section1->addSection1($title, $content, $btn_sec, $image);
            move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file1);
            header('location:../../views/section1.php?status=add');
        } else {
            header('location:../../views/section1.php?status=imagefail');
        }
    } else {
        header('location:../../views/section1.php?status=addfail');
    }
}
