<?php
class Header extends Db
{
    public function getLogoHeader()
    {
        $sql = self::$connection->prepare("SELECT `image_logo`,`logo_mb`,`address`,`id` FROM `header` WHERE `image_logo` != '' OR `address` != ''");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getMenuHeader()
    {
        $sql = self::$connection->prepare("SELECT `menu`,`move`,`id` FROM `header` WHERE id != 1");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getLogoById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `header` WHERE id = " . $id);
        $sql->execute(); //return an object
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item; //return an array
    }
    public function addLogo($logo, $logo_mb, $address)
    {
        $sql = self::$connection->prepare("INSERT INTO `header`(`image_logo`,`logo_mb`,`address`) VALUES(?,?,?)");
        $sql->bind_param("sss", $logo, $logo_mb, $address);
        return $sql->execute(); //return an object
    }
    public function addMenu($menu, $move)
    {
        $sql = self::$connection->prepare("INSERT INTO `header`(`menu`,`move`) VALUES(?,?)");
        $sql->bind_param("ss", $menu, $move);
        return $sql->execute(); //return an object
    }
    public function deleteLogo($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `header` WHERE `id`= ?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
    public function updateLogo($logo, $logo_mb, $address, $id)
    {
        $sql = self::$connection->prepare("UPDATE `header` SET `image_logo`=?,`logo_mb`=?,`address`=? WHERE `id`=?");
        $sql->bind_param("sssi", $logo, $logo_mb, $address, $id);
        return $sql->execute(); //return an object
    }
    public function updateNotLogo($logo_mb, $address, $id)
    {
        $sql = self::$connection->prepare("UPDATE `header` SET `logo_mb`=?,`address`=? WHERE `id`=?");
        $sql->bind_param("ssi", $logo_mb, $address, $id);
        return $sql->execute(); //return an object
    }
    public function updateNotLogoMB($logo, $address, $id)
    {
        $sql = self::$connection->prepare("UPDATE `header` SET `image_logo`=?,`address`=? WHERE `id`=?");
        $sql->bind_param("ssi", $logo, $address, $id);
        return $sql->execute(); //return an object
    }
    public function updateNotImageLogo($address, $id)
    {
        $sql = self::$connection->prepare("UPDATE `header` SET `address`=? WHERE `id`=?");
        $sql->bind_param("si", $address, $id);
        return $sql->execute(); //return an     
    }
    public function updateMenu($menu, $move, $id)
    {
        $sql = self::$connection->prepare("UPDATE `header` SET `menu`=?,`move`=? WHERE `id`=?");
        $sql->bind_param("ssi", $menu, $move, $id);
        return $sql->execute(); //return an object
    }
}
