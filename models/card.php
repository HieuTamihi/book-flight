<?php
class Card extends Db
{
    public function getTitle()
    {
        $sql = self::$connection->prepare("SELECT * FROM `card` WHERE `id` = 1");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getAllCard()
    {
        $sql = self::$connection->prepare("SELECT * FROM `card` WHERE `id` != 1");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function addCard($type, $name1, $content, $name2, $content2, $name3, $content3, $name4, $content4)
    {
        $sql = self::$connection->prepare("INSERT INTO `card`(`type_card`,`name_card_1`,`content_name`,`name_card_2`,`content_name_2`,`name_card_3`,`content_name_3`,`name_card_4`,`content_name_4`) VALUES(?,?,?,?,?,?,?,?,?)");
        $sql->bind_param("sssssssss", $type, $name1, $content, $name2, $content2, $name3, $content3, $name4, $content4);
        return $sql->execute(); //return an object
    }
    public function deleteCard($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `card` WHERE `id`= ?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }

    public function updateCard($type, $name1, $content, $name2, $content2, $name3, $content3, $name4, $content4, $id)
    {
        $sql = self::$connection->prepare("UPDATE `card` SET `type_card`=?,`name_card_1`=?,`content_name`=?,`name_card_2`=?,`content_name_2`=?,`name_card_3`=?,`content_name_3`=?,`name_card_4`=?,`content_name_4`=? WHERE `id`=?");
        $sql->bind_param("sssssssssi", $type, $name1, $content, $name2, $content2, $name3, $content3, $name4, $content4, $id);
        return $sql->execute(); //return an object
    }
    public function getCardById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `card` WHERE id = " . $id);
        $sql->execute(); //return an object
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item; //return an array
    }
}
