<?php
class Section7 extends Db
{
    public function getAllSection7()
    {
        $sql = self::$connection->prepare("SELECT * FROM `section_7`");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getAllTitle()
    {
        $sql = self::$connection->prepare("SELECT `main_title`,`des` FROM `section_7` WHERE `main_title` != '' AND `des` != ''");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }

    public function getSec7Col1()
    {
        $sql = self::$connection->prepare("SELECT * FROM `section_7` WHERE `col` = 0");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getSec7Col2()
    {
        $sql = self::$connection->prepare("SELECT * FROM `section_7` WHERE `col` = 1");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function deleteSection7($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `section_7` WHERE `id`= ?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
    public function addSection7($main, $des, $sub, $sub_content, $content, $btn_sec, $col)
    {
        $sql = self::$connection->prepare("INSERT INTO `section_7`(`main_title`,`des`,`sub_title`,`sub_des`,`content`,`btn_sec`,`col`) VALUES(?,?,?,?,?,?,?)");
        $sql->bind_param("ssssssi", $main, $des, $sub, $sub_content, $content, $btn_sec, $col);
        return $sql->execute(); //return an object
    }
    public function updateSS7($main, $des, $sub, $sub_content, $content, $btn_sec, $col, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_7` SET `main_title`=?,`des`=?,`sub_title`=?,`sub_des`=?,`content`=?,`btn_sec`=?,`col`=? WHERE `id`=?");
        $sql->bind_param("ssssssii", $main, $des, $sub, $sub_content, $content, $btn_sec, $col, $id);
        return $sql->execute(); //return an object
    }
    public function getSS7ById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `section_7` WHERE id = " . $id);
        $sql->execute(); //return an object
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item; //return an array
    }
}
