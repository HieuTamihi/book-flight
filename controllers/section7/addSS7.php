<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section7.php";
$section7 = new Section7;

if (isset($_POST['submit'])) {
    $main = $_POST['main'];
    $des = $_POST['des'];
    $sub = $_POST['sub'];
    $sub_content = $_POST['sub_content'];
    $content = $_POST['content'];
    $btn_sec = $_POST['btn_sec'];
    $col = $_POST['col'];
    $section7->addSection7($main, $des, $sub, $sub_content, $content, $btn_sec, $col);
    header('location:../../views/section7.php?status=add');
}