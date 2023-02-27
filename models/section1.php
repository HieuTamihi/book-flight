<?php
class Section1 extends Db
{
    public function getAllSection1()
    {
        $sql = self::$connection->prepare("SELECT * FROM `section_1`");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function addSection1($title, $content, $btn_sec, $image)
    {
        $sql = self::$connection->prepare("INSERT INTO `section_1`(`title`, `des`,`btn_sec`,`image`) VALUES(?,?,?,?)");
        $sql->bind_param("ssss", $title, $content, $btn_sec, $image);
        return $sql->execute(); //return an object
    }
    public function deleteSection1($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `section_1` WHERE `id`= ?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
    public function getSS1ById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `section_1` WHERE id = " . $id);
        $sql->execute(); //return an object
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item; //return an array
    }
    public function updateSS1($title, $content, $btn_sec, $image, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_1` SET `title`=?,`des`=?,`btn_Sec`=?,`image` = ? WHERE `id`=?");
        $sql->bind_param("ssssi", $title, $content, $btn_sec, $image, $id);
        return $sql->execute(); //return an object
    }
    public function updateSS1NotImage($title, $content, $btn_sec, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_1` SET `title`=?,`des`=?,`btn_Sec`=? WHERE `id`=?");
        $sql->bind_param("sssi", $title, $content, $btn_sec, $id);
        return $sql->execute(); //return an object
    }
}