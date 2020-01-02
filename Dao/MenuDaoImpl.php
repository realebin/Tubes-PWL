<?php
class MenuDaoImpl{
    public function getAllMenu(){
        $link = PDOUtility::get_koneksi();
        try{
            $sql = "SELECT * FROM Menu ORDER BY nama ASC";
            $stmt = $link->query($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE ,'Menu');
        }
        catch (PDOException $err){
            echo $err ->getMessage();
            die();
        }
        PDOUtility::close_koneksi($link);
        return $stmt;
    }
    public function getOneMenu(Menu $menu){
        $link = PDOUtility::get_koneksi();
        try{
            $sql = "SELECT * FROM Menu WHERE idMenu =?";
            $stmt = $link->prepare($sql);
            $stmt->bindValue(1,$menu->getIdMenu(),PDO::PARAM_INT);
            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE ,'Menu');
            $stmt->execute();
        }
        catch (PDOException $err){
            echo $err ->getMessage();
            die();
        }
        PDOUtility::close_koneksi($link);
        return $stmt;
    }
    public function insertMenu(Menu $menu){
        $link = PDOUtility::get_koneksi();
        $msg = 'gagal';
        try{
            $link->beginTransaction();
            $sql = "INSERT INTO Menu ()";
            $stmt = $link->prepare($sql);
            $stmt->bindValue(1,$menu->getIdMenu(),PDO::PARAM_INT);
            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE ,'Menu');
            $stmt->execute();
        }
        catch (PDOException $err){
            echo $err ->getMessage();
            die();
        }
        PDOUtility::close_koneksi($link);
        return $stmt;
    }

}
?>
