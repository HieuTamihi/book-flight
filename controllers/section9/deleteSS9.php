<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/section9.php";
$section9 = new Section9;

if (isset($_GET['id'])) {
    $getSS9ById = $section9->getSS9ById($_GET['id']);
    foreach ($getSS9ById as $values) {
        $section9->deleteSection9($_GET['id']);
        unlink("../../public/image/" . $values['background']);
        unlink("../../public/image/" . $values['icon_brn']);
        header('location:../../views/section9.php?status=success');
    }
}
