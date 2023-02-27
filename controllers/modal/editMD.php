<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/modal.php";
$modal = new Modal;
$logo = $_FILES['image1']['name'];
$image = $_FILES['image2']['name'];
$title = $_POST['title'];
$des = $_POST['des'];
$input1 = $_POST['input1'];
$input2 = $_POST['input2'];
$btn_form = $_POST['btn_form'];
$note = $_POST['note'];
$id = $_POST['id'];

if (isset($_POST['submit'])) {
    if (isset($_GET['id'])) {
        $getModalById = $modal->getModalById($_GET['id']);
        foreach ($getModalById as $values) {
            if ($_FILES["image1"]["tmp_name"] != null && $_FILES["image2"]["tmp_name"] != null) {
                unlink("../../public/image/" . $values['logo']);
                unlink("../../public/image/" . $values['image']);
                $target_dir = "../../public/image/";
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $modal->updateModal($logo, $image, $title, $des, $input1, $input2, $btn_form, $note, $id);
                move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES["image1"]["name"]));
                move_uploaded_file($_FILES['image2']['tmp_name'], $target_dir . basename($_FILES['image2']['name']));
                header('location:../../views/modal.php?status=edit');
            }
            if ($_FILES["image1"]["tmp_name"] != null && $_FILES["image2"]["tmp_name"] == null) {
                $target_dir = "../../public/image/";
                unlink("../../public/image/" . $values['logo']);
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $modal->updateMDNotImage($logo, $title, $des, $input1, $input2, $btn_form, $note, $id);
                move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES['image1']['name']));
                header('location:../../views/modal.php?status=edit');
            }
            if ($_FILES["image1"]["tmp_name"] == null && $_FILES["image2"]["tmp_name"] != null) {
                unlink("../../public/image/" . $values['image']);
                $target_dir = "../../public/image/";
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $modal->updateModalNotLogo($image, $title, $des, $input1, $input2, $btn_form, $note, $id);
                move_uploaded_file($_FILES['image2']['tmp_name'], $target_dir . basename($_FILES['image2']['name']));
                header('location:../../views/modal.php?status=edit');
            } else {
                $modal->updateNotImage($title, $des, $input1, $input2, $btn_form, $note, $id);
                header('location:../../views/modal.php?status=edit');
            }
        }
    }
}
