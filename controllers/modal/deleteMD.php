<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/modal.php";
$modal = new Modal;

if (isset($_GET['id'])) {
    $getModalById = $modal->getModalById($_GET['id']);
    foreach ($getModalById as $values) {
        $modal->deleteModal($_GET['id']);
        unlink("../../public/image/" . $values['logo']);
        unlink("../../public/image/" . $values['image']);
        header('location:../../views/modal.php?status=success');
    }
}
