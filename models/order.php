<?php
class Order extends Db
{
    public function getAllOrder()
    {
        $sql = self::$connection->prepare("SELECT * FROM `infouser`");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getOrderById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `infouser` WHERE id = " . $id);
        $sql->execute(); //return an object
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item; //return an array
    }

    public function addOrder($fullname, $phone, $status)
    {
        $sql = self::$connection->prepare("INSERT INTO `infouser`(`fullname`, `phone_number`, `status`) VALUES(?,?,?)");
        $sql->bind_param("ssi", $fullname, $phone, $status);
        return $sql->execute(); //return an object
    }
    public function deleteOrder($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `infouser` WHERE `id`=?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }

    public function updateOrder($fullname, $phone, $status, $create_at, $id)
    {
        $sql = self::$connection->prepare("UPDATE `infouser` SET `fullname`=?,`phone_number`=?,`status`=?,`create_at` = ? WHERE `id`=?");
        $sql->bind_param("ssisi", $fullname, $phone, $status, $create_at, $id);
        return $sql->execute(); //return an object
    }

    public function addOrderUser($fullname, $phone)
    {
        $sql = self::$connection->prepare("INSERT INTO `infouser`(`fullname`, `phone_number`, `status`) VALUES(?,?,'0')");
        $sql->bind_param("ss", $fullname, $phone);
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
        $sql = self::$connection->prepare("SELECT * FROM `infouser` WHERE `fullname` LIKE ?");
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
        $sql = self::$connection->prepare("SELECT * FROM `infouser` WHERE `fullname` LIKE ? LIMIT ?, ?");
        $keyword = "%$keyword%";
        $sql->bind_param("sii", $keyword, $firstLink, $perPage);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function orderPaginate($page, $perPage)
    {
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM `infouser` LIMIT ?, ?");
        $sql->bind_param("ii", $firstLink, $perPage);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}
