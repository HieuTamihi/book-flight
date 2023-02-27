<?php
class Contact_Order extends Db
{
    public function getOrder()
    {
        $sql = self::$connection->prepare("SELECT * FROM `contact_order` WHERE `col` = 0");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getContact()
    {
        $sql = self::$connection->prepare("SELECT * FROM `contact_order` WHERE `col` = 1");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getContact1()
    {
        $sql = self::$connection->prepare("SELECT * FROM `contact_order` WHERE `col` = 2");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function addIconOD($image1, $content, $link)
    {
        $sql = self::$connection->prepare("INSERT INTO `contact_order`(`image`,`content`,`link`,`col`) VALUES(?,?,?,0)");
        $sql->bind_param("sss", $image1, $content, $link);
        return $sql->execute(); //return an object
    }
    public function addIconCT($image2, $content, $link)
    {
        $sql = self::$connection->prepare("INSERT INTO `contact_order`(`image`,`content`,`link`,`col`) VALUES(?,?,?,1)");
        $sql->bind_param("sss", $image2, $content, $link);
        return $sql->execute(); //return an object
    }
    public function addContact($image3, $content, $link)
    {
        $sql = self::$connection->prepare("INSERT INTO `contact_order`(`image`,`content`,`link`,`col`) VALUES(?,?,?,2)");
        $sql->bind_param("sss", $image3, $content, $link);
        return $sql->execute(); //return an object
    }
    public function getContactById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `contact_order` WHERE id = " . $id);
        $sql->execute(); //return an object
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item; //return an array
    }
    public function deleteCT($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `contact_order` WHERE `id`= ?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
    public function updateContact($image1, $content, $link, $id)
    {
        $sql = self::$connection->prepare("UPDATE `contact_order` SET `image`=?,`content`=?,`link`=?,`col`=0 WHERE `id`=?");
        $sql->bind_param("sssi", $image1, $content, $link, $id);
        return $sql->execute(); //return an object
    }
    public function updateContact1($image2, $content, $link, $id)
    {
        $sql = self::$connection->prepare("UPDATE `contact_order` SET `image`=?,`content`=?,`link`=?,`col`=1 WHERE `id`=?");
        $sql->bind_param("sssi", $image2, $content, $link, $id);
        return $sql->execute(); //return an object
    }
    public function updateContact2($image3, $content, $link, $id)
    {
        $sql = self::$connection->prepare("UPDATE `contact_order` SET `image`=?,`content`=?,`link`=?,`col`=2 WHERE `id`=?");
        $sql->bind_param("sssi", $image3, $content, $link, $id);
        return $sql->execute(); //return an object
    }
    public function updateNotImage($content, $link, $id)
    {
        $sql = self::$connection->prepare("UPDATE `contact_order` SET `content`=?,`link`=? WHERE `id`=?");
        $sql->bind_param("ssi", $content, $link, $id);
        return $sql->execute(); //return an object
    }
}
