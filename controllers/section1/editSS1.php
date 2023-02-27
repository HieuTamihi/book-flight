<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section1.php";
$section1 = new Section1;
$title = $_POST['title'];
$content = $_POST['content'];
$btn_sec = $_POST['btn_sec'];
$image = $_FILES['image1']['name'];
$id = $_POST['id'];
if (isset($_POST['submit'])) {
    if (isset($id)) {
        $getSS1ById = $section1->getSS1ById($id);
        foreach ($getSS1ById as $values) {
            if ($_FILES["image1"]["tmp_name"] != null) {
                unlink("../../public/image/" . $values['image']);
                $target_dir = "../../public/image/";
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $section1->updateSS1($title, $content, $btn_sec, $image, $id);
                move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES["image1"]["name"]));
                header('location:../../views/section1.php?status=edit');
            } else {
                $section1->updateSS1NotImage($title, $content, $btn_sec, $id);
                header('location:../../views/section1.php?status=edit');
            }
        }
    }
}
