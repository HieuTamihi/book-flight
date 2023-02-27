<?php
require "../../../config.php";
require "../../../models/db.php";
require "../../../models/header.php";
$header = new Header;

if (isset($_POST['submit'])) {
    $menu = $_POST['menu'];
    $move = $_POST['move'];
    $id = $_POST['id'];
    $header->updateMenu($menu, $move, $id);
    header('location:../../../views/manager_header.php?status=edit');
}