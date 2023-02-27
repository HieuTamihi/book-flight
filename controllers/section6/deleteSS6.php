<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section6.php";
$section6 = new Section6;

if (isset($_GET['id'])) {
    $getSS6ById = $section6->getSS6ById($_GET['id']);
    foreach ($getSS6ById as $values) {
        unlink("../../public/image/" . $values['main_img']);
        unlink("../../public/image/" . $values['sub_img']);
        $section6->deleteSection6($_GET['id']);
        header('location:../../views/section6.php?status=success');
    }
}
