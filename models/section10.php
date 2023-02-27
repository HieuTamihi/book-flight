<?php
class Section10 extends Db
{
    public function getAllSection10()
    {
        $sql = self::$connection->prepare("SELECT * FROM `section_10`");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function addSection10($main, $sub, $des, $image1, $content)
    {
        $sql = self::$connection->prepare("INSERT INTO `section_10`(`main_title`,`sub_title`,`des`,`image`,`content`) VALUES(?,?,?,?,?)");
        $sql->bind_param("sssss", $main, $sub, $des, $image1, $content);
        return $sql->execute(); //return an object
    }
    public function deleteSection10($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `section_10` WHERE `id`= ?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
    public function getSS10ById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `section_10` WHERE id = " . $id);
        $sql->execute(); //return an object
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item; //return an array
    }
    public function updateSS10($main, $sub, $des, $image1, $content, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_10` SET `main_title`=?,`sub_title`=?,`des`=?,`image`=?,`content`=? WHERE `id`=?");
        $sql->bind_param("sssssi", $main, $sub, $des, $image1, $content, $id);
        return $sql->execute(); //return an object
    }
    public function updateSS10NotImage($main, $sub, $des, $content, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_10` SET `main_title`=?,`sub_title`=?,`des`=?,`content`=? WHERE `id`=?");
        $sql->bind_param("ssssi", $main, $sub, $des, $content, $id);
        return $sql->execute(); //return an object
    }
}
