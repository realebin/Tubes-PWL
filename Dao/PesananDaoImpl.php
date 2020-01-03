<?php
class PesananDaoImpl{
    public function getAllPesanan(){
        $link = PDOUtility::get_koneksi();
        try{
            $sql = "SELECT * FROM pesanan ORDER BY idPesanan ASC";
            $stmt = $link->query($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE ,'Pesanan');
        }
        catch (PDOException $err){
            echo $err ->getMessage();
            die();
        }
        PDOUtility::close_koneksi($link);
        return $stmt;
    }
    public function getOnePesanan(Pesanan $pesanan){
        $link = PDOUtility::get_koneksi();
        try{
            $sql = "SELECT * FROM pesanan WHERE idPesanan =?";
            $stmt = $link->prepare($sql);
            $stmt->bindValue(1,$pesanan->getIdPesanan(),PDO::PARAM_INT);
            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE ,'Pesanan');
            $stmt->execute();
        }
        catch (PDOException $err){
            echo $err ->getMessage();
            die();
        }
        PDOUtility::close_koneksi($link);
        return $stmt;
    }
    public function insertPesanan(Pesanan $pesanan){
        $link = PDOUtility::get_koneksi();
        $msg = 'gagal';
        try{
            $link->beginTransaction();
            $sql = "INSERT INTO pesanan (no_meja,sub_total) VALUES(?,?)";
            $stmt = $link->prepare($sql);
            $stmt->bindValue(1,$pesanan->getNoMeja(),PDO::PARAM_INT);
            $stmt->bindValue(2,$pesanan->getSubTotal(),PDO::PARAM_INT);
            $stmt->execute();
        }
        catch (PDOException $err){
            echo $err ->getMessage();
            die();
        }
        PDOUtility::close_koneksi($link);
        return $stmt;
    }

    public function deleteMenu(Pesanan $pesanan)
    {
        $link = PDOUtility::get_koneksi();
        $msg = 'gagalx';
        try{
            //begin transaksi #
            $link->beginTransaction();
            //query
            $qry = "DELETE FROM pesanan WHERE idPesanan = (?)";
            //prepare
            $stmt = $link -> prepare($qry);
            //parameter #
            $stmt->bindValue(1, $pesanan->getIdPesanan(), PDO::PARAM_INT);
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
    public function updatePesanan(Pesanan $pesanan){
        $msg = 'gagalu';
        $link = PDOUtility::get_koneksi();
        try {
            $link->beginTransaction();
            $query = "UPDATE pesanan SET no_meja = ?, sub_total=? WHERE idPesanan = ?";
            $stmt = $link->prepare($query);
            $stmt->bindValue(1, $pesanan->getNoMeja(), PDO::PARAM_INT);
            $stmt->bindValue(2, $pesanan->getSubTotal(), PDO::PARAM_STR);
            $stmt->bindValue(3, $pesanan->getIdPesanan(), PDO::PARAM_INT);
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
