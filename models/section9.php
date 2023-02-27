<?php
class Section9 extends Db
{
    public function getAllSection9()
    {
        $sql = self::$connection->prepare("SELECT * FROM `section_9`");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function deleteSection9($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `section_9` WHERE `id`= ?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
    public function addSection9($title, $content, $background, $icon, $btn_sec, $link)
    {
        $sql = self::$connection->prepare("INSERT INTO `section_9`(`title`,`des`,`background`,`icon_btn`,`btn_sec`,`link_btn`) VALUES(?,?,?,?,?,?)");
        $sql->bind_param("ssssss", $title, $content, $background, $icon, $btn_sec, $link);
        return $sql->execute(); //return an object
    }
    public function getSS9ById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `section_9` WHERE id = " . $id);
        $sql->execute(); //return an object
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item; //return an array
    }
    public function updateSS9($title, $content, $image1, $image2, $btn_sec, $link, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_9` SET `title`=?,`des`=?,`background`=?,`icon_btn`=?,`btn_sec`=?,`link_btn`=? WHERE `id`=?");
        $sql->bind_param("ssssssi", $title, $content, $image1, $image2, $btn_sec, $link, $id);
        return $sql->execute(); //return an object
    }
    public function updateSS9NotImage($title, $content, $btn_sec, $link, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_9` SET `title`=?,`des`=?,`btn_sec`=?,`link_btn`=? WHERE `id`=?");
        $sql->bind_param("ssssi", $title, $content, $btn_sec, $link, $id);
        return $sql->execute(); //return an object
    }
    public function updateSS9NotImage1($title, $content, $image2, $btn_sec, $link, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_9` SET `title`=?,`des`=?,`icon_btn`=?,`btn_sec`=?,`link_btn`=? WHERE `id`=?");
        $sql->bind_param("sssssi", $title, $content, $image2, $btn_sec, $link, $id);
        return $sql->execute(); //return an object
    }
    public function updateSS9NotImage2($title, $content, $image1, $btn_sec, $link, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_9` SET `title`=?,`des`=?,`background`=?,`btn_sec`=?,`link_btn`=? WHERE `id`=?");
        $sql->bind_param("sssssi", $title, $content, $image1, $btn_sec, $link, $id);
        return $sql->execute(); //return an object
    }
}
