<?php
class Section2 extends Db
{
    public function getAllSection2()
    {
        $sql = self::$connection->prepare("SELECT * FROM `section_2`");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function addSection2($title, $content, $image, $image1)
    {
        $sql = self::$connection->prepare("INSERT INTO `section_2`(`title`, `des`,`image`,`sub_img`) VALUES(?,?,?,?)");
        $sql->bind_param("ssss", $title, $content, $image, $image1);
        return $sql->execute(); //return an object
    }
    public function deleteSection2($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `section_2` WHERE `id`= ?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
    public function getSS2ById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `section_2` WHERE id = " . $id);
        $sql->execute(); //return an object
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item; //return an array
    }
    public function updateSS2($title, $content, $image, $image1, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_2` SET `title`=?,`des`=?,`image`=?, `sub_img`=? WHERE `id`=?");
        $sql->bind_param("ssssi", $title, $content, $image, $image1, $id);
        return $sql->execute(); //return an object
    }
    public function updateSS2NotImage($title, $content, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_2` SET `title`=?,`des`=? WHERE `id`=?");
        $sql->bind_param("ssi", $title, $content, $id);
        return $sql->execute(); //return an object
    }
    public function updateSS2NotImageSub($title, $content, $image, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_2` SET `title`=?,`des`=?,`image`=? WHERE `id`=?");
        $sql->bind_param("sssi", $title, $content, $image, $id);
        return $sql->execute(); //return an object
    }
    public function updateSS2NotImageMain($title, $content, $image1, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_2` SET `title`=?,`des`=?,`sub_img`=? WHERE `id`=?");
        $sql->bind_param("sssi", $title, $content, $image1, $id);
        return $sql->execute(); //return an object
    }
}
