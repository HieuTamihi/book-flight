<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section8.php";
$section8 = new Section8;

if (isset($_GET['id'])) {
    $getAllTitle = $section8->getAllTitle();
    foreach ($getAllTitle as $values) {
        if (count($getAllTitle) > 1) {
            $section8->deleteSection8($_GET['id']);
            header('location:../../views/section8.php?status=success');
        } else {
            header('location:../../views/section8.php?status=fail');
        }
    }
}
