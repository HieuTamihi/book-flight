<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section6.php";
$section6 = new Section6;

if (isset($_POST['submit'])) {
    $main = $_POST['main'];
    $des = $_POST['des'];
    $id = $_POST['id'];
    $section6->updateSS6($main, $des, $id);
    header('location:../../views/section6.php?status=edit');
}
if (isset($_POST['submit1'])) {
    $image1 = $_FILES['image1']['name'];
    $image2 = $_FILES['image2']['name'];
    $sub_title = $_POST['sub'];
    $content = $_POST['content'];
    $id = $_POST['id'];
    if (isset($id)) {
        $getSS6ById = $section6->getSS6ById($id);
        foreach ($getSS6ById as $values) {
            if ($_FILES["image1"]["tmp_name"] != null && $_FILES["image2"]["tmp_name"] != null) {
                unlink("../../public/image/" . $values['main_img']);
                unlink("../../public/image/" . $values['sub_img']);
                $target_dir = "../public/image/";
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $section6->updateIMGSS6($image1, $image2, $sub_title, $content, $id);
                move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES["image1"]["name"]));
                move_uploaded_file($_FILES["image2"]["tmp_name"], $target_dir . basename($_FILES["image2"]["name"]));
                header('location:../../views/section6.php?status=edit');
            }
        }
    }
    if (isset($id)) {
        $getSS6ById = $section6->getSS6ById($id);
        foreach ($getSS6ById as $values) {
            if ($_FILES["image1"]["tmp_name"] == null && $_FILES["image2"]["tmp_name"] != null) {
                unlink("../../public/image/" . $values['sub_img']);
                $target_dir = "../../public/image/";
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $section6->updateNotMainIMG($image2, $sub_title, $content, $id);
                move_uploaded_file($_FILES["image2"]["tmp_name"], $target_dir . basename($_FILES["image2"]["name"]));
                header('location:../../views/section6.php?status=edit');
            }
        }
    }
    if (isset($id)) {
        $getSS6ById = $section6->getSS6ById($id);
        foreach ($getSS6ById as $values) {
            if ($_FILES["image1"]["tmp_name"] != null && $_FILES["image2"]["tmp_name"] == null) {
                unlink("../../public/image/" . $values['main_img']);
                $target_dir = "../../public/image/";
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $section6->updateNotSubIMG($image1, $sub_title, $content, $id);
                move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES["image1"]["name"]));
                header('location:../../views/section6.php?status=edit');
            }
        }
    }
    else {
        $section6->updateNotIMG($sub_title, $content, $id);
        header('location:../../views/section6.php?status=edit');
    }
}
