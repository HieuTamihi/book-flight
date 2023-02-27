<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section3.php";
$section3 = new Section3;

if (isset($_GET['id'])) {
    $getSS3ById = $section3->getSS3ById($_GET['id']);
    foreach ($getSS3ById as $values) {
        $section3->deleteSection3($_GET['id']);
        unlink("../../public/image/" . $values['img_col_1']);
        unlink("../../public/image/" . $values['img_col_2']);
        unlink("../../public/image/" . $values['img_col_3']);
        header('location:../../views/section3.php?status=success');
    }
}
