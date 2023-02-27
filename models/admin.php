<?php
class Admin extends Db
{
    public function checkUser($username)
    {
        $sql = self::$connection->prepare("SELECT * FROM `admin` WHERE `username` = ?");
        $sql->bind_param("s", $username);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->num_rows;
        if ($items == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function checkLogin($password, $username)
    {
        $sql = self::$connection->prepare("SELECT * FROM `admin` WHERE `password` = ? AND `username` = ?");
        $password = md5($password);
        $sql->bind_param("ss", $password, $username);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->num_rows;
        if ($items == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function getUserId($username)
    {
        $sql = self::$connection->prepare("SELECT `id` FROM `admin` WHERE `username` =?");
        $sql->bind_param("s", $username);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function getAllUser()
    {
        $sql = self::$connection->prepare("SELECT * FROM `admin`");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    
    public function getUserById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `admin` WHERE id = " . $id);
        $sql->execute(); //return an object
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item; //return an array
    }

    public function addUser($username, $password)
    {
        $sql = self::$connection->prepare("INSERT INTO `admin`(`username`, `password`) VALUES(?,?)");
        $password = md5($password);
        $sql->bind_param("ss", $username, $password);
        return $sql->execute(); //return an object
    }
    public function deleteUser($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `admin` WHERE `id`= ? AND `id` > 1");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }

    public function updateUser($username, $password, $id)
    {
        $sql = self::$connection->prepare("UPDATE `admin` SET `username`=?,`password`=? WHERE `id`=?");
        $password = md5($password);
        $sql->bind_param("ssi", $username, $password, $id);
        return $sql->execute(); //return an object
    }
    public function paginate($url, $total, $perPage, $page)
    {
        $totalLinks = ceil($total / $perPage);
        $link = "";
        for ($j = 1; $j <= $totalLinks; $j++) {
            if ($page == $j) {
                $link = $link . "<li class ='active'> $j </a></li>";
            } else {
                $link = $link . "<li><a href='$url&page=$j'> $j </a></li>";
            }
        }
        return $link;
    }

    public function search($keyword)
    {
        $sql = self::$connection->prepare("SELECT * FROM `admin` WHERE `username` LIKE ?");
        $keyword = "%$keyword%";
        $sql->bind_param("s", $keyword);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function search1($keyword, $page, $perPage)
    {
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM `admin` WHERE `username` LIKE ? LIMIT ?, ?");
        $keyword = "%$keyword%";
        $sql->bind_param("sii", $keyword, $firstLink, $perPage);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function userPaginate($page, $perPage)
    {
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM `admin` LIMIT ?, ?");
        $sql->bind_param("ii", $firstLink, $perPage);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}
