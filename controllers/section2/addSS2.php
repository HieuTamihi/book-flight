<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section2.php";
$section2 = new Section2;

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_FILES['image1']['name'];
    $image1 = $_FILES['image2']['name'];
    $target_dir = "../../public/image/";
    $target_file1 = $target_dir . basename($_FILES["image1"]["name"]);
    $target_file2 = $target_dir . basename($_FILES['image2']['name']);
    $imageFileType1 =  pathinfo($target_file1, PATHINFO_EXTENSION);
    $imageFileType2 =  pathinfo($target_file2, PATHINFO_EXTENSION);
    $size = $_FILES['image1']['size'];
    $size1 = $_FILES['image2']['size'];
    $array = array("jpg", "png", "jpeg", "gif");
    if (in_array($imageFileType1, $array) && in_array($imageFileType2, $array)) {
        if ($size < 700000 && $size1 < 700000 && $size > 0 && $size1 > 0) {
            $section2->addSection2($title, $content, $image, $image1);
            move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES["image1"]["name"]));
            move_uploaded_file($_FILES["image2"]["tmp_name"], $target_dir . basename($_FILES["image2"]["name"]));
            header('location:../../views/section2.php?status=add');
        } else {
            header('location:../../views/section2.php?status=imagefail');
        }
    } else {
        header('location:../../views/section2.php?status=addfail');
    }
}
