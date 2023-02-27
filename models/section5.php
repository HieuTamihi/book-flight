<?php
class Section5 extends Db
{
    public function getAllSection5()
    {
        $sql = self::$connection->prepare("SELECT * FROM `section_5`");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getSS5ById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `section_5` WHERE id = " . $id);
        $sql->execute(); //return an object
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item; //return an array
    }
    public function addSection5($title, $image, $content)
    {
        $sql = self::$connection->prepare("INSERT INTO `section_5`(`title`, `image`,`content`) VALUES(?,?,?)");
        $sql->bind_param("sss", $title, $image, $content);
        return $sql->execute(); //return an object
    }
    public function deleteSection5($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `section_5` WHERE `id`= ?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
    public function updateSS5($title, $image, $content, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_5` SET `title`=?,`image`=?,`content`=? WHERE `id`=?");
        $sql->bind_param("sssi", $title, $image, $content, $id);
        return $sql->execute(); //return an object
    }
    public function updateSS5NotImage($title, $content, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_5` SET `title`=?,`content`=? WHERE `id`=?");
        $sql->bind_param("ssi", $title, $content, $id);
        return $sql->execute(); //return an object
    }
}
