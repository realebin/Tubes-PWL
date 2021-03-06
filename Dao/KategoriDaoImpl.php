<?php
Class KategoriDaoImpl{
    public function getAllKategori(){
        $link = PDOUtility::get_koneksi();
        try{
            //query
            $sql = "SELECT * FROM kategori";
            //prepare
            $stmt = $link -> prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS |
                PDO::FETCH_PROPS_LATE ,'Kategori');
            //execute
            $stmt->execute();

        } catch (PDOException $err){
            echo $err -> getMessage();
            die();
        }
        PDOUtility::close_koneksi($link);
        return $stmt;
    }


    public function getOneKategori(Kategori $kategori){
        $link = PDOUtility::get_koneksi();
        try{
            $sql = "SELECT * FROM kategori WHERE idKategori =?";
            $stmt = $link->prepare($sql);
            $stmt->bindValue(1,$kategori->getIdKategori(),PDO::PARAM_INT);
            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE ,'Kategori');
            $stmt->execute();
        }
        catch (PDOException $err){
            echo $err ->getMessage();
            die();
        }
        PDOUtility::close_koneksi($link);
        return $stmt;
    }
    public function insertKategori(Kategori $kategori){
        $link = PDOUtility::get_koneksi();
        $msg = 'gagal';
        try{
            $link->beginTransaction();
            $sql = "INSERT INTO kategori(nama) VALUES(?)";
            $stmt = $link->prepare($sql);
            $stmt->bindValue(1,$kategori->getNama(),PDO::PARAM_STR);
            $stmt->execute();
        }
        catch (PDOException $err){
            echo $err ->getMessage();
            die();
        }
        PDOUtility::close_koneksi($link);
        return $stmt;
    }

    public function deleteKategori(Kategori $kategori)
    {
        $link = PDOUtility::get_koneksi();
        $msg = 'gagalx';
        try{
            //begin transaksi #
            $link->beginTransaction();
            //query
            $qry = "DELETE FROM kategori WHERE idKategori = (?)";
            //prepare
            $stmt = $link -> prepare($qry);
            //parameter #
            $stmt->bindValue(1, $kategori->getIdKategori(), PDO::PARAM_INT);
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
    public function updateKategori(Kategori $kategori){
        $msg = 'gagalu';
        $link = PDOUtility::get_koneksi();
        try {
            $link->beginTransaction();
            $query = "UPDATE kategori SET nama=? WHERE idKategori = ?";
            $stmt = $link->prepare($query);
            $stmt->bindValue(1, $kategori->getNama(), PDO::PARAM_STR);
            $stmt->bindValue(2, $kategori->getIdKategori(), PDO::PARAM_INT);
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