<?php
class Section6 extends Db
{
    public function getAllSection6()
    {
        $sql = self::$connection->prepare("SELECT `main_img`,`sub_img`,`sub_title`,`content`,`id` FROM `section_6` WHERE `main_img` != '' AND `sub_img` != '' AND `sub_title` != '' AND `content` != ''");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getSection6()
    {
        $sql = self::$connection->prepare("SELECT * FROM `section_6` WHERE `main_title` != '' AND `des` != ''");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function addTTSection6($main, $des)
    {
        $sql = self::$connection->prepare("INSERT INTO `section_6`(`main_title`, `des`) VALUES(?,?)");
        $sql->bind_param("ss", $main, $des);
        return $sql->execute(); //return an object
    }
    public function addIMGSection6($main_img, $sub_img, $sub_title, $content)
    {
        $sql = self::$connection->prepare("INSERT INTO `section_6`(`main_img`,`sub_img`,`sub_title`,`content`) VALUES(?,?,?,?)");
        $sql->bind_param("ssss", $main_img, $sub_img, $sub_title, $content);
        return $sql->execute(); //return an object
    }
    public function deleteSection6($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `section_6` WHERE `id`= ?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
    public function getSS6ById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `section_6` WHERE id = " . $id);
        $sql->execute(); //return an object
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item; //return an array
    }
    public function updateSS6($main, $des, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_6` SET `main_title`=?,`des`=? WHERE `id`=?");
        $sql->bind_param("ssi", $main, $des, $id);
        return $sql->execute(); //return an object
    }
    public function updateIMGSS6($image1, $image2, $sub_title, $content, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_6` SET `main_img`=?,`sub_img`=?,`sub_title`=?,`content`=? WHERE `id`=?");
        $sql->bind_param("ssssi", $image1, $image2, $sub_title, $content, $id);
        return $sql->execute(); //return an object
    }
    public function updateNotMainIMG($image2, $sub_title, $content, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_6` SET `sub_img`=?,`sub_title`=?,`content`=? WHERE `id`=?");
        $sql->bind_param("sssi", $image2, $sub_title, $content, $id);
        return $sql->execute(); //return an object
    }
    public function updateNotSubIMG($image1, $sub_title, $content, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_6` SET `main_img`=?,`sub_title`=?,`content`=? WHERE `id`=?");
        $sql->bind_param("sssi", $image1, $sub_title, $content, $id);
        return $sql->execute(); //return an object
    }
    public function updateNotIMG($sub_title, $content, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_6` SET `sub_title`=?,`content`=? WHERE `id`=?");
        $sql->bind_param("ssi", $sub_title, $content, $id);
        return $sql->execute(); //return an object
    }
}
