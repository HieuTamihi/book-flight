<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section8.php";
$section8 = new Section8;

if (isset($_POST['submit'])) {
    $main = $_POST['main'];
    $embed = $_POST['embed'];
    $sub = $_POST['sub'];
    $content = $_POST['content'];
    $id = $_POST['id'];
    $section8->updateSS8($main, $embed ,$sub, $content, $id);
    header('location:../../views/section8.php?status=edit');
}