<?php
require "../../config.php";
require "../../models/db.php";
require "../../models/card.php";
$card = new Card;

if (isset($_GET['id'])) {
    $card->deleteCard($_GET['id']);
    header('location:../../views/card.php?status=success');
}
