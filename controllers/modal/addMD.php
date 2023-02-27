<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/modal.php";
$modal = new Modal;

if (isset($_POST['submit'])) {
    $logo = $_FILES['image1']['name'];
    $image = $_FILES['image2']['name'];
    $title = $_POST['title'];
    $des = $_POST['des'];
    $input1 = $_POST['input1'];
    $input2 = $_POST['input2'];
    $btn_form = $_POST['btn_form'];
    $note = $_POST['note'];

    $target_dir = "../../public/image/";
    $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
    $modal->addModal($logo, $image, $title, $des, $input1, $input2, $btn_form, $note);
    move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES["image1"]["name"]));
    move_uploaded_file($_FILES['image2']['tmp_name'], $target_dir . basename($_FILES['image2']['name']));
    header('location:../../views/modal.php?status=add');
}
