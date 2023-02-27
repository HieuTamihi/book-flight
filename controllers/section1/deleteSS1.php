<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section1.php";
$section1 = new Section1;

if (isset($_GET['id'])) {
    $getSS1ById = $section1->getSS1ById($_GET['id']);
    foreach ($getSS1ById as $values) {
        $section1->deleteSection1($_GET['id']);
        unlink("../../public/image/" . $values['image']);
        header('location:../../views/section1.php?status=success');
    }
}
