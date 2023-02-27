<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section5.php";
$section5 = new Section5;

if (isset($_GET['id'])) {
    $getSS5ById = $section5->getSS5ById($_GET['id']);
    foreach ($getSS5ById as $values) {
        $section5->deleteSection5($_GET['id']);
        unlink("../../public/image/" . $values['image']);
        header('location:../../views/section5.php?status=success');
    }
}
