<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/footer.php";
$footer = new Footer;

if (isset($_POST['submit'])) {
    if ($_POST['col'] == '') {
        $title = $_POST['title'];
        $image1 = $_FILES['image1']['name'];
        $content = $_POST['content'];
        $col = 0;
        $footer->addFooter($title, $image1, $content, $col);
        $target_dir = "../../public/image/";  
        $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES["image1"]["name"]));
        header('location:../../views/manager_footer.php?status=add');
    }
    else{
        $title = $_POST['title'];
        $image1 = $_FILES['image1']['name'];
        $content = $_POST['content'];
        $col = $_POST['col'];
        $target_dir = "../../public/image/";
        $imageFileType =  pathinfo($target_file, PATHINFO_EXTENSION);
        $footer->addFooter($title, $image1, $content, $col);
        move_uploaded_file($_FILES["image1"]["tmp_name"], $target_dir . basename($_FILES["image1"]["name"]));
        header('location:../../views/manager_footer.php?status=add');
    }
}
