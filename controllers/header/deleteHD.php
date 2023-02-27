<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/header.php";
$header = new Header;

if (isset($_GET['id'])) {
    $getLogoById = $header->getLogoById($_GET['id']);
    foreach ($getLogoById as $values) {
        $header->deleteLogo($_GET['id']);
        unlink("../../public/image/" . $values['image_logo']);
        unlink("../../public/image/" . $values['logo_mb']);
        header('location:../../views/manager_header.php?status=success');
    }
}
