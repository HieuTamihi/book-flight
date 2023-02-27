<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section7.php";
$section7 = new Section7;

if (isset($_GET['id'])) {
    $getAllTitle = $section7->getAllTitle();
    foreach ($getAllTitle as $values) {
        if (count($getAllTitle) > 1) {
            $section7->deleteSection7($_GET['id']);
            header('location:../../views/section7.php?status=success');
        } else {
            header('location:../../views/section7.php?status=fail');
        }
    }
}
