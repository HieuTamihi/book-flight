<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/card.php";
$card = new Card;

if (isset($_POST['submit'])) {
    $type = $_POST['type'];
    $name1 = $_POST['name1'];
    $content = $_POST['content1'];
    $name2 = $_POST['name2'];
    $content2 = $_POST['content2'];
    $name3 = $_POST['name3'];
    $content3 = $_POST['content3'];
    $name4 = $_POST['name4'];
    $content4 = $_POST['content4'];
    $id = $_POST['id'];
    $card->updateCard($type, $name1, $content, $name2, $content2, $name3, $content3, $name4, $content4, $id);
    header('location:../../views/card.php?status=edit');
}
