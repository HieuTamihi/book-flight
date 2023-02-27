<?php
class Footer extends Db
{
    public function getFTCol1()
    {
        $sql = self::$connection->prepare("SELECT * FROM `footer` WHERE `col` = 0");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getFTCol2()
    {
        $sql = self::$connection->prepare("SELECT `image`,`content` FROM `footer` WHERE `col` = 1");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getAllFT()
    {
        $sql = self::$connection->prepare("SELECT * FROM `footer`");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getAllTitle()
    {
        $sql = self::$connection->prepare("SELECT `title` FROM `footer` WHERE `title` != ''");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function deleteFT($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `footer` WHERE `id`= ?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
    public function addFooter($title, $image1, $content, $col)
    {
        $sql = self::$connection->prepare("INSERT INTO `footer`(`title`,`image`,`content`,`col`) VALUES(?,?,?,?)");
        $sql->bind_param("ssss", $title, $image1, $content, $col);
        return $sql->execute(); //return an object
    }
    public function getFTById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `footer` WHERE id = " . $id);
        $sql->execute(); //return an object
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item; //return an array
    }
    public function updateFT($title, $image1, $content, $col, $id)
    {
        $sql = self::$connection->prepare("UPDATE `footer` SET `title`=?,`image`=?,`content`=?,`col`=? WHERE `id`=?");
        $sql->bind_param("ssssi", $title, $image1, $content, $col, $id);
        return $sql->execute(); //return an object
    }
    public function updateNotImage($title, $content, $col, $id)
    {
        $sql = self::$connection->prepare("UPDATE `footer` SET `title`=?,`content`=?,`col`=? WHERE `id`=?");
        $sql->bind_param("sssi", $title, $content, $col, $id);
        return $sql->execute(); //return an object
    }
}
