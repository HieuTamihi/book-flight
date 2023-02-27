<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/footer.php";
$footer = new Footer;

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $image1 = $_FILES['image1']['name'];
    $content = $_POST['content'];
    $col = $_POST['col'];
    $id = $_POST['id'];
    if (isset($id)) {
        $getFTById = $footer->getFTById($id);
        foreach ($getFTById as $values) {
            if ($_FILES["image1"]["tmp_name"] != null) {
                unlink("../../public/image/" . $values['image']);
                $target_dir = "../../public/image/";
                $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
                $footer->updateFT($title, $image1, $content, $col, $id);
                move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES["image1"]["name"]));
                header('location:../../views/manager_footer.php?status=edit');
            }
        }
    } else {
        $footer->updateNotImage($title, $content, $col, $id);
        header('location:../../views/manager_footer.php?status=edit');
    }
}
