<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section10.php";
$section10 = new Section10;

if (isset($_POST['submit'])) {
    $main = $_POST['main'];
    $sub = $_POST['sub'];
    $des = $_POST['des'];
    $image1 = $_FILES['image1']['name'];
    $content = $_POST['content'];
    $id = $_POST['id'];
    if (isset($id)) {
        $getSS10ById = $section10->getSS10ById($id);
        foreach ($getSS10ById as $values) {
            if ($_FILES["image1"]["tmp_name"] != null) {
                unlink("../../public/image/" . $values['image']);
                $target_dir = "../../public/image/";
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $section10->updateSS10($main, $sub, $des, $image1, $content, $id);
                move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES["image1"]["name"]));
                header('location:../../views/section10.php?status=edit');
            }
        }
    } else {
        $section10->updateSS10NotImage($main, $sub, $des, $content, $id);
        header('location:../../views/section10.php?status=edit');
    }
}
