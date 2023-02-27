<?php
class Section3 extends Db
{
    public function getAllSection3()
    {
        $sql = self::$connection->prepare("SELECT * FROM `section_3`");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function addSection3($main, $sub, $des, $image1, $title1, $content1, $image2, $title2, $content2, $image3, $title3, $content3)
    {
        $sql = self::$connection->prepare("INSERT INTO `section_3`(`main_title`,`sub_title`,`des`,`img_col_1`,`title_col_1`,`des_col_1`,`img_col_2`,`title_col_2`,`des_col_2`,`img_col_3`,`title_col_3`,`des_col_3`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
        $sql->bind_param("ssssssssssss", $main, $sub, $des, $image1, $title1, $content1, $image2, $title2, $content2, $image3, $title3, $content3);
        return $sql->execute(); //return an object
    }
    public function deleteSection3($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `section_3` WHERE `id`= ?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
    public function getSS3ById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `section_3` WHERE id = " . $id);
        $sql->execute(); //return an object
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item; //return an array
    }
    public function updateSS3($main, $sub, $des, $image1, $title1, $content1, $image2, $title2, $content2, $image3, $title3, $content3, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_3` SET `main_title`=?,`sub_title`=?,`des`=?, `img_col_1`=?, `title_col_1` = ?, `des_col_1` = ?, `img_col_2`=?,`title_col_2`=?,`des_col_2`=?,`img_col_3`=?,`title_col_3`=?,`des_col_3`=? WHERE `id`=?");
        $sql->bind_param("ssssssssssssi", $main, $sub, $des, $image1, $title1, $content1, $image2, $title2, $content2, $image3, $title3, $content3, $id);
        return $sql->execute(); //return an object
    }
    public function updateSS3NotImage($main, $sub, $des, $title1, $content1, $title2, $content2, $title3, $content3, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_3` SET `main_title`=?,`sub_title`=?,`des`=?, `title_col_1` = ?, `des_col_1` = ?,`title_col_2`=?,`des_col_2`=?,`title_col_3`=?,`des_col_3`=? WHERE `id`=?");
        $sql->bind_param("sssssssssi", $main, $sub, $des, $title1, $content1, $title2, $content2, $title3, $content3, $id);
        return $sql->execute(); //return an object
    }
    public function updateSS3NotImage1($main, $sub, $des, $title1, $content1, $image2, $title2, $content2, $image3, $title3, $content3, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_3` SET `main_title`=?,`sub_title`=?,`des`=?,`title_col_1` = ?, `des_col_1` = ?,`img_col_2`=? ,`title_col_2`=?,`des_col_2`=?,`img_col_3`=?,`title_col_3`=?,`des_col_3`=? WHERE `id`=?");
        $sql->bind_param("sssssssssssi", $main, $sub, $des, $title1, $content1, $image2, $title2, $content2, $image3, $title3, $content3, $id);
        return $sql->execute(); //return an object
    }
    public function updateSS3NotImage12($main, $sub, $des, $title1, $content1, $title2, $content2, $image3, $title3, $content3, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_3` SET `main_title`=?,`sub_title`=?,`des`=?,`title_col_1` = ?, `des_col_1` = ?,`title_col_2`=?,`des_col_2`=?,`img_col_3`=?,`title_col_3`=?,`des_col_3`=? WHERE `id`=?");
        $sql->bind_param("ssssssssssi", $main, $sub, $des, $title1, $content1, $title2, $content2, $image3, $title3, $content3, $id);
        return $sql->execute(); //return an object
    }
    public function updateSS3NotImage23($main, $sub, $des, $image1, $title1, $content1, $title2, $content2, $title3, $content3, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_3` SET `main_title`=?,`sub_title`=?,`des`=?,`img_col_1`=?,`title_col_1` = ?, `des_col_1` = ?,`title_col_2`=?,`des_col_2`=?,`title_col_3`=?,`des_col_3`=? WHERE `id`=?");
        $sql->bind_param("ssssssssssi", $main, $sub, $des, $image1, $title1, $content1, $title2, $content2, $title3, $content3, $id);
        return $sql->execute(); //return an object
    }
    public function updateSS3NotImage13($main, $sub, $des, $title1, $content1, $image2, $title2, $content2, $title3, $content3, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_3` SET `main_title`=?,`sub_title`=?,`des`=?,`title_col_1` = ?,`des_col_1` = ?, `img_col_2`=?,`title_col_2`=?,`des_col_2`=?,`title_col_3`=?,`des_col_3`=? WHERE `id`=?");
        $sql->bind_param("ssssssssssi", $main, $sub, $des, $title1, $content1, $image2, $title2, $content2, $title3, $content3, $id);
        return $sql->execute(); //return an object
    }
    public function updateSS3NotImage3($main, $sub, $des, $image1, $title1, $content1, $image2, $title2, $content2, $title3, $content3, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_3` SET `main_title`=?,`sub_title`=?,`des`=?,`img_col_1` =?,`title_col_1` = ?, `des_col_1` = ?,`img_col_2`=? ,`title_col_2`=?,`des_col_2`=?,`title_col_3`=?,`des_col_3`=? WHERE `id`=?");
        $sql->bind_param("sssssssssssi", $main, $sub, $des, $image1, $title1, $content1, $image2, $title2, $content2, $title3, $content3, $id);
        return $sql->execute(); //return an object
    }
    public function updateSS3NotImage2($main, $sub, $des, $image1, $title1, $content1, $title2, $content2, $image3, $title3, $content3, $id)
    {
        $sql = self::$connection->prepare("UPDATE `section_3` SET `main_title`=?,`sub_title`=?,`des`=?,`img_col_1` =?,`title_col_1` = ?, `des_col_1` = ?,`title_col_2`=?,`des_col_2`=?, `img_col_3`=? ,`title_col_3`=?,`des_col_3`=? WHERE `id`=?");
        $sql->bind_param("sssssssssssi", $main, $sub, $des, $image1, $title1, $content1, $title2, $content2, $image3, $title3, $content3, $id);
        return $sql->execute(); //return an object
    }
}
