<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/footer.php";
$footer = new Footer;

if (isset($_GET['id'])) {
    $getAllTitle = $footer->getAllTitle();
    foreach ($getAllTitle as $values) {
        if (count($getAllTitle) > 1) {
            $getFTById = $footer->getFTById($_GET['id']);
            foreach ($getFTById as $values) {
                $footer->deleteFT($_GET['id']);
                unlink("../../public/image/" . $values['image']);
                header('location:../../views/manager_footer.php?status=success');
            }
        } else {
            header('location:../../views/manager_footer.php?status=fail');
        }
    }
}
