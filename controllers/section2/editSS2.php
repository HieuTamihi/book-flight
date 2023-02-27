<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section2.php";
$section2 = new Section2;
$title = $_POST['title'];
$content = $_POST['content'];
$image = $_FILES['image1']['name'];
$image1 = $_FILES['image2']['name'];
$id = $_POST['id'];
if (isset($_POST['submit'])) {
    if (isset($id)) {
        $getSS2ById = $section2->getSS2ById($id);
        foreach ($getSS2ById as $values) {
            if ($_FILES["image1"]["tmp_name"] != null && $_FILES["image2"]["tmp_name"] != null) {
                unlink("../../public/image/" . $values['image']);
                unlink("../../public/image/" . $values['sub_img']);
                $target_dir = "../../public/image/";
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $section2->updateSS2($title, $content, $image, $image1, $id);
                move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES["image1"]["name"]));
                move_uploaded_file($_FILES["image2"]["tmp_name"], $target_dir . basename($_FILES["image2"]["name"]));
                header('location:../../views/section2.php?status=edit');
            }
        }
    }
    if (isset($id)) {
        $getSS2ById = $section2->getSS2ById($id);
        foreach ($getSS2ById as $values) {
            if ($_FILES["image1"]["tmp_name"] == null && $_FILES["image2"]["tmp_name"] != null) {
                unlink("../../public/image/" . $values['sub_img']);
                $target_dir = "../../public/image/";
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $section2->updateSS2NotImageMain($title, $content, $image1, $id);
                move_uploaded_file($_FILES["image2"]["tmp_name"], $target_dir . basename($_FILES["image2"]["name"]));
                header('location:../../views/section2.php?status=edit');
            }
        }
    }
    if (isset($id)) {
        $getSS2ById = $section2->getSS2ById($id);
        foreach ($getSS2ById as $values) {
            if ($_FILES["image1"]["tmp_name"] != null && $_FILES["image2"]["tmp_name"] == null) {
                unlink("../../public/image/" . $values['image']);
                $target_dir = "../../public/image/";
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $section2->updateSS2NotImageSub($title, $content, $image, $id);
                move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES["image1"]["name"]));
                header('location:../../views/section2.php?status=edit');
            }
        }
    }
    if ($_FILES["image1"]["tmp_name"] == null && $_FILES["image2"]["tmp_name"] == null) {
        $section2->updateSS2NotImage($title, $content, $id);
        header('location:../../views/section2.php?status=edit');
    }
}
