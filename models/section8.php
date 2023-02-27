<?php
class Section8 extends Db
{
    public function getAllSection8()
    {
        $sql = self::$connection->prepare("SELECT * FROM `section_8`");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getAllTitle()
    {
        $sql = self::$connection->prepare("SELECT `main_title`,`embed_link` FROM `section_8` WHERE `main_title` != '' AND `embed_link` != ''");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function deleteSection8($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `section_8` WHERE `id`= ?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
    public function addSection8($main, $embed, $sub_title, $content)
    {
        $sql = self::$connection->prepare("INSERT INTO `section_8`(`main_title`,`embed_link`,`sub_title`,`content`) VALUES(?,?,?,?)");
        $sql->bind_param("ssss", $main, $embed, $sub_title, $content);
        return $sql->execute(); //return an object
    }
    public function getSS8ById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `section_8` WHERE id = " . $id);
        $sql->execute(); //return an object
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item; //return an array
    }
    public function updateSS8($main, $embed ,$sub, $content, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_8` SET `main_title`=?,`embed_link`=?,`sub_title`=?,`content`=? WHERE `id`=?");
        $sql->bind_param("ssssi", $main, $embed ,$sub, $content, $id);
        return $sql->execute(); //return an object
    }
}