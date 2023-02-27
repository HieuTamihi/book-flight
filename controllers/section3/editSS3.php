<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section3.php";
$section3 = new Section3;

$main = $_POST['main'];
$sub = $_POST['sub'];
$des = $_POST['des'];
$image1 = $_FILES['image1']['name'];
$title1 = $_POST['title1'];
$content1 = $_POST['content1'];
$image2 = $_FILES['image2']['name'];
$title2 = $_POST['title2'];
$content2 = $_POST['content2'];
$image3 = $_FILES['image3']['name'];
$title3 = $_POST['title3'];
$content3 = $_POST['content3'];
$id = $_POST['id'];
if (isset($_POST['submit'])) {
    if (isset($id)) {
        $getSS3ById = $section3->getSS3ById($id);
        foreach ($getSS3ById as $values) {
            if ($_FILES["image1"]["tmp_name"] != null && $_FILES["image2"]["tmp_name"] != null && $_FILES["image3"]["tmp_name"] != null) {
                $target_dir = "../../public/image/";
                unlink("../../public/image/" . $values['img_col_1']);
                unlink("../../public/image/" . $values['img_col_2']);
                unlink("../../public/image/" . $values['img_col_3']);
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $section3->updateSS3($main, $sub, $des, $image1, $title1, $content1, $image2, $title2, $content2, $image3, $title3, $content3, $id);
                move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES["image1"]["name"]));
                move_uploaded_file($_FILES["image2"]["tmp_name"], $target_dir . basename($_FILES["image2"]["name"]));
                move_uploaded_file($_FILES["image3"]["tmp_name"], $target_dir . basename($_FILES["image3"]["name"]));
                header('location:../../views/section3.php?status=edit');
            }
            if ($_FILES["image1"]["tmp_name"] == null && $_FILES["image2"]["tmp_name"] != null && $_FILES["image3"]["tmp_name"] != null) {
                $target_dir = "../../public/image/";
                unlink("../../public/image/" . $values['img_col_2']);
                unlink("../../public/image/" . $values['img_col_3']);
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $section3->updateSS3NotImage1($main, $sub, $des, $title1, $content1, $image2, $title2, $content2, $image3, $title3, $content3, $id);
                move_uploaded_file($_FILES["image2"]["tmp_name"], $target_dir . basename($_FILES["image2"]["name"]));
                move_uploaded_file($_FILES["image3"]["tmp_name"], $target_dir . basename($_FILES["image3"]["name"]));
                header('location:../../views/section3.php?status=edit');
            }
            if ($_FILES["image1"]["tmp_name"] == null && $_FILES["image2"]["tmp_name"] == null && $_FILES["image3"]["tmp_name"] != null) {
                $target_dir = "../../public/image/";
                unlink("../../public/image/" . $values['img_col_3']);
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $section3->updateSS3NotImage12($main, $sub, $des, $title1, $content1, $title2, $content2, $image3, $title3, $content3, $id);
                move_uploaded_file($_FILES["image3"]["tmp_name"], $target_dir . basename($_FILES["image3"]["name"]));
                header('location:../../views/section3.php?status=edit');
            }
            if ($_FILES["image1"]["tmp_name"] != null && $_FILES["image2"]["tmp_name"] == null && $_FILES["image3"]["tmp_name"] == null) {
                $target_dir = "../../public/image/";
                unlink("../../public/image/" . $values['img_col_1']);
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $section3->updateSS3NotImage23($main, $sub, $des, $image1, $title1, $content1, $title2, $content2, $title3, $content3, $id);
                move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES["image1"]["name"]));
                header('location:../../views/section3.php?status=edit');
            }
            if ($_FILES["image1"]["tmp_name"] != null && $_FILES["image2"]["tmp_name"] != null && $_FILES["image3"]["tmp_name"] == null) {
                $target_dir = "../../public/image/";
                unlink("../../public/image/" . $values['img_col_1']);
                unlink("../../public/image/" . $values['img_col_2']);
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $section3->updateSS3($main, $sub, $des, $image1, $title1, $content1, $image2, $title2, $content2, $image3, $title3, $content3, $id);
                move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES["image1"]["name"]));
                move_uploaded_file($_FILES["image2"]["tmp_name"], $target_dir . basename($_FILES["image2"]["name"]));
                header('location:../../views/section3.php?status=edit');
            }
            if ($_FILES["image1"]["tmp_name"] != null && $_FILES["image2"]["tmp_name"] == null && $_FILES["image3"]["tmp_name"] != null) {
                $target_dir = "../../public/image/";
                unlink("../../public/image/" . $values['img_col_1']);
                unlink("../../public/image/" . $values['img_col_3']);
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $section3->updateSS3($main, $sub, $des, $image1, $title1, $content1, $image2, $title2, $content2, $image3, $title3, $content3, $id);
                move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES["image1"]["name"]));
                move_uploaded_file($_FILES["image3"]["tmp_name"], $target_dir . basename($_FILES["image3"]["name"]));
                header('location:../../views/section3.php?status=edit');
            }
            if ($_FILES["image1"]["tmp_name"] == null && $_FILES["image2"]["tmp_name"] != null && $_FILES["image3"]["tmp_name"] == null) {
                $target_dir = "../../public/image/";
                unlink("../../public/image/" . $values['img_col_2']);
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $section3->updateSS3NotImage13($main, $sub, $des, $title1, $content1, $image2, $title2, $content2, $title3, $content3, $id);
                move_uploaded_file($_FILES["image2"]["tmp_name"], $target_dir . basename($_FILES["image2"]["name"]));
                header('location:../../views/section3.php?status=edit');
            } else {
                $section3->updateSS3NotImage($main, $sub, $des, $title1, $content1, $title2, $content2, $title3, $content3, $id);
                header('location:../../views/section3.php?status=edit');
            }
        }
    }
}
