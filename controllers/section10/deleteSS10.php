<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section10.php";
$section10 = new Section10;

if (isset($_GET['id'])) {
    $getSS10ById = $section10->getSS10ById($_GET['id']);
    foreach ($getSS10ById as $values) {
        unlink("../../public/image/" . $values['image']);
        $section10->deleteSection10($_GET['id']);
        header('location:../../views/section10.php?status=success');
    }
}
