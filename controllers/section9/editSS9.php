<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section9.php";
$section9 = new Section9;

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image1 = $_FILES['image1']['name'];
    $image2 = $_FILES['image2']['name'];
    $btn_sec = $_POST['btn_sec'];
    $link = $_POST['link'];
    $id = $_POST['id'];
    if (isset($id)) {
        $getSS9ById = $section9->getSS9ById($id);
        foreach ($getSS9ById as $values) {
            if ($_FILES["image1"]["tmp_name"] != null && $_FILES["image2"]["tmp_name"] != null) {
                unlink("../../public/image/" . $values['background']);
                unlink("../../public/image/" . $values['icon_brn']);
                $target_dir = "../../public/image/";
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $section9->updateSS9($title, $content, $image1, $image2, $btn_sec, $link, $id);
                move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES["image1"]["name"]));
                move_uploaded_file($_FILES["image2"]["tmp_name"], $target_dir . basename($_FILES["image2"]["name"]));
                header('location:../../views/section9.php?status=edit');
            }
        }
    }
    if (isset($id)) {
        $getSS9ById = $section9->getSS9ById($id);
        foreach ($getSS9ById as $values) {
            if ($_FILES["image1"]["tmp_name"] == null && $_FILES["image2"]["tmp_name"] != null) {
                unlink("../../public/image/" . $values['icon_brn']);
                $target_dir = "../../public/image/";
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $section9->updateSS9NotImage1($title, $content, $image2, $btn_sec, $link, $id);
                move_uploaded_file($_FILES["image2"]["tmp_name"], $target_dir . basename($_FILES["image2"]["name"]));
                header('location:../../views/section9.php?status=edit');
            }
        }
    }
    if (isset($id)) {
        $getSS9ById = $section9->getSS9ById($id);
        foreach ($getSS9ById as $values) {
            if ($_FILES["image1"]["tmp_name"] != null && $_FILES["image2"]["tmp_name"] == null) {
                unlink("../../public/image/" . $values['background']);
                $target_dir = "../../public/image/";
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $section9->updateSS9NotImage2($title, $content, $image1, $btn_sec, $link, $id);
                move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES["image1"]["name"]));
                header('location:../../views/section9.php?status=edit');
            }
        }
    } else {
        $section9->updateSS9NotImage($title, $content, $btn_sec, $link, $id);
        header('location:../../views/section9.php?status=edit');
    }
}
