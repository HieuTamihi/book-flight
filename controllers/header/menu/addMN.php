<?php
require "../../../config.php";
require "../../../models/db.php";
require "../../../models/header.php";
$header = new Header;

if (isset($_POST['submit'])) {
    $menu = $_POST['menu'];
    $move = $_POST['move'];
    $header->addMenu($menu, $move);
    header('location:../../../views/manager_header.php?status=add');
}
