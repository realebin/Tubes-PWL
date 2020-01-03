<?php
class MenuDaoImpl{
    public function getAllMenu(){
        $link = PDOUtility::get_koneksi();
        try{
            $sql = "SELECT * FROM menu ORDER BY nama ASC";
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
            $sql = "SELECT * FROM menu WHERE idMenu =?";
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
            $sql = "INSERT INTO menu (harga,nama,status) VALUES(?,?,?)";
            $stmt = $link->prepare($sql);
            $stmt->bindValue(1,$menu->getHarga(),PDO::PARAM_INT);
            $stmt->bindValue(2,$menu->getNama(),PDO::PARAM_STR);
            $stmt->bindValue(3,$menu->getStatus(),PDO::PARAM_INT);
            $stmt->execute();
        }
        catch (PDOException $err){
            echo $err ->getMessage();
            die();
        }
        PDOUtility::close_koneksi($link);
        return $stmt;
    }

    public function deleteMenu(Menu $menu)
    {
        $link = PDOUtility::get_koneksi();
        $msg = 'gagalx';
        try{
            //begin transaksi #
            $link->beginTransaction();
            //query
            $qry = "DELETE FROM menu WHERE idMenu = (?)";
            //prepare
            $stmt = $link -> prepare($qry);
            //parameter #
            $stmt->bindValue(1, $menu->getIdMenu(), PDO::PARAM_INT);
            //execute
            $stmt->execute();
            $link->commit();
            $msg = 'suksesx';
        }   catch(PDOException $err){
            $link->rollBack();
            $err->getMessage();
            die();
        }
        PDOUtility::close_koneksi($link);
        return $msg;
    }
    public function updateMenu(Menu $menu){
        $msg = 'gagalu';
        $link = PDOUtility::get_koneksi();
        try {
            $link->beginTransaction();
            $query = "UPDATE menu SET harga = ?, nama=?, status=? WHERE idMenu = ?";
            $stmt = $link->prepare($query);
            $stmt->bindValue(1, $menu->getHarga(), PDO::PARAM_INT);
            $stmt->bindValue(2, $menu->getNama(), PDO::PARAM_STR);
            $stmt->bindValue(3, $menu->getStatus(), PDO::PARAM_INT);
            $stmt->bindValue(4, $menu->getIdMenu(), PDO::PARAM_INT);
            $stmt->execute();
            $link->commit();
            $msg = 'suksesu';
        } catch (Exception $e) {
            $link->rollBack();
            $e->getMessage();
            die();
        }
        return $msg;

    }

}
?>
