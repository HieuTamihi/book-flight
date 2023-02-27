<?php
class Section4 extends Db
{
    public function getAllSection4()
    {
        $sql = self::$connection->prepare("SELECT * FROM `section_4`");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    
    public function getAllTitle()
    {
        $sql = self::$connection->prepare("SELECT `title` FROM `section_4` WHERE `title` != ''");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }

    public function addSection4($title, $sub, $content)
    {
        $sql = self::$connection->prepare("INSERT INTO `section_4`(`title`, `sub_title`,`content`) VALUES(?,?,?)");
        $sql->bind_param("sss", $title, $sub, $content);
        return $sql->execute(); //return an object
    }
    public function deleteSection4($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `section_4` WHERE `id`= ?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
    public function getSS4ById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `section_4` WHERE id = " . $id);
        $sql->execute(); //return an object
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item; //return an array
    }
    public function updateSS4($title, $sub, $content, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_4` SET `title`=?,`sub_title`=?,`content`= ? WHERE `id`=?");
        $sql->bind_param("sssi", $title, $sub, $content, $id);
        return $sql->execute(); //return an object
    }
}