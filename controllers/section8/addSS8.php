<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section8.php";
$section8 = new Section8;

if (isset($_POST['submit'])) {
    $main = $_POST['main'];
    $embed = $_POST['embed'];
    $sub_title = $_POST['sub_title'];
    $content = $_POST['content'];
    $section8->addSection8($main, $embed, $sub_title, $content);
    header('location:../../views/section8.php?status=add');
}