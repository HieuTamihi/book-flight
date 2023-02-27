<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section4.php";
$section4 = new Section4;

if (isset($_GET['id'])) {
    $getAllTitle = $section4->getAllTitle();
    foreach ($getAllTitle as $values) {
        if (count($getAllTitle) > 1) {
            $section4->deleteSection4($_GET['id']);
            header('location:../../views/section4.php?status=success');
        } else {
            header('location:../../views/section4.php?status=fail');
        }
    }
}
