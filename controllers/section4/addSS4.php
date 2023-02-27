<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section4.php";
$section4 = new Section4;

if (isset($_POST['submit'])) {
    $title = $_POST['main'];
    $sub = $_POST['sub'];
    $content = $_POST['content'];
    $section4->addSection4($title, $sub, $content);
    header('location:../../views/section4.php?status=add');
}