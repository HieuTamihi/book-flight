<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section2.php";
$section2 = new Section2;

if (isset($_GET['id'])) {
    $getSS2ById = $section2->getSS2ById($_GET['id']);
    foreach ($getSS2ById as $values) {
        $section2->deleteSection2($_GET['id']);
        unlink("../../public/image/" . $values['image']);
        unlink("../../public/image/" . $values['sub_img']);
        header('location:../../views/section2.php?status=success');
    }
}
