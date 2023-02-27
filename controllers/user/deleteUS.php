<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/admin.php";
$admin = new Admin;

if (isset($_GET['id'])) {
    if ($_GET['id'] == 1) {
        header('location:../../views/users.php?status=fail');
    } else {
        $admin->deleteUser($_GET['id']);
        header('location:../../views/users.php?status=success');
    }
}
