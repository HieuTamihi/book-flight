<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section4.php";
$section4 = new Section4;

if (isset($_POST['submit'])) {
    $title = $_POST['main'];
    $sub = $_POST['sub'];
    $content = $_POST['content'];
    $id = $_POST['id'];
    $section4->updateSS4($title, $sub, $content, $id);
    header('location:../../views/section4.php?status=edit');
}
