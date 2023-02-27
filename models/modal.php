<?php
class Modal extends Db
{
    public function getModal()
    {
        $sql = self::$connection->prepare("SELECT * FROM `modal`");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function addModal($logo, $image, $title, $des, $input1, $input2, $btn_form, $note)
    {
        $sql = self::$connection->prepare("INSERT INTO `modal`(`logo`,`image`,`title`,`des`,`input_1`,`input_2`,`btn_form`,`note`) VALUES(?,?,?,?,?,?,?,?)");
        $sql->bind_param("ssssssss", $logo, $image, $title, $des, $input1, $input2, $btn_form, $note);
        return $sql->execute(); //return an object
    }
    public function deleteModal($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `modal` WHERE `id`= ?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
    public function getModalById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `modal` WHERE id = " . $id);
        $sql->execute(); //return an object
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item; //return an array
    }
    public function updateModal($logo, $image, $title, $des, $input1, $input2, $btn_form, $note, $id)
    {
        $sql = self::$connection->prepare("UPDATE `modal` SET `logo`=?,`image`=?,`title`=?,`des`=?,`input_1`=?,`input_2`=?,`btn_form`=?,`note`=? WHERE `id`=?");
        $sql->bind_param("ssssssssi", $logo, $image, $title, $des, $input1, $input2, $btn_form, $note, $id);
        return $sql->execute(); //return an object
    }
    public function updateModalNotLogo($image, $title, $des, $input1, $input2, $btn_form, $note, $id)
    {
        $sql = self::$connection->prepare("UPDATE `modal` SET `image`=?,`title`=?,`des`=?,`input_1`=?,`input_2`=?,`btn_form`=?,`note`=? WHERE `id`=?");
        $sql->bind_param("sssssssi", $image, $title, $des, $input1, $input2, $btn_form, $note, $id);
        return $sql->execute(); //return an object
    }
    public function updateMDNotImage($logo, $title, $des, $input1, $input2, $btn_form, $note, $id)
    {
        $sql = self::$connection->prepare("UPDATE `modal` SET `logo`=?,`title`=?,`des`=?,`input_1`=?,`input_2`=?,`btn_form`=?,`note`=? WHERE `id`=?");
        $sql->bind_param("sssssssi", $logo, $title, $des, $input1, $input2, $btn_form, $note, $id);
        return $sql->execute(); //return an object
    }
    public function updateNotImage($title, $des, $input1, $input2, $btn_form, $note, $id)
    {
        $sql = self::$connection->prepare("UPDATE `modal` SET `title`=?,`des`=?,`input_1`=?,`input_2`=?,`btn_form`=?,`note`=? WHERE `id`=?");
        $sql->bind_param("ssssssi", $title, $des, $input1, $input2, $btn_form, $note, $id);
        return $sql->execute(); //return an object
    }
}
