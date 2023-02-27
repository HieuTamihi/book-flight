<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section5.php";
$section5 = new Section5;

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $image = $_FILES['image1']['name'];
    $content = $_POST['content'];
    $id = $_POST['id'];
    if (isset($id)) {
        $getSS5ById = $section5->getSS5ById($id);
        foreach ($getSS5ById as $values) {
            if ($_FILES["image1"]["tmp_name"] != null) {
                unlink("../../public/image/" . $values['image']);
                $target_dir = "../../public/image/";
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $section5->updateSS5($title, $image, $content, $id);
                move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES["image1"]["name"]));
                header('location:../../views/section5.php?status=edit');
            } else {
                $section5->updateSS5NotImage($title, $content, $id);
                header('location:../../views/section5.php?status=edit');
            }
        }
    }
}
