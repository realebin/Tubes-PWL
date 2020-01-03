<?php

Class MenuPesanDaoImpl
{
    public function getAllMenuPesan()
    {
        $link = PDOUtility::get_koneksi();
        try {
            $sql = "SELECT mp.*, m.idMenu AS menu_id, p.idPesanan AS pesanan_id FROM menu_pesanan mp JOIN menu m ON m.idMenu = mp.menu_id 
JOIN pesanan p ON mp.pesanan_id = p.idPesanan ORDER BY pesanan_id ASC";
            $stmt = $link->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Menu_Pesanan');
            //execute
            $stmt->execute();
        } catch (PDOException $err) {
            echo $err->getMessage();
            die();

        }
        PDOUtility::close_koneksi($link);
        return $stmt;
    }

    public function getOneMenuPesan(Menu_Pesanan $MP)
    {
        $link = PDOUtility::get_koneksi();
        try {
            $sql = "SELECT * FROM menu_pesanan WHERE menu_id=? AND pesanan_id=?";
            $stmt = $link->prepare($sql);
            $stmt->bindValue(1, $MP->getMenu(), PDO::PARAM_INT);
            $stmt->bindValue(2, $MP->getPesanan(), PDO::PARAM_INT);
            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Menu_Pesanan');
            $stmt->execute();
        } catch (PDOException $err) {
            echo $err->getMessage();
            die();
        }
        PDOUtility::close_koneksi($link);
        return $stmt;
    }

    public function insertMenuPesan(Menu_Pesanan $MP)
    {
        $link = PDOUtility::get_koneksi();
        $msg = 'gagal';
        try {
            $link->beginTransaction();
            $sql = "INSERT INTO menu_pesanan(harga_jual, menu_id, pesanan_id, qty, status) VALUES(?,?,?,?,?)";
            $stmt = $link->prepare($sql);
            $stmt->bindValue(1, $MP->getHargaJual(), PDO::PARAM_INT);
            $stmt->bindValue(2, $MP->getMenu(), PDO::PARAM_INT);
            $stmt->bindValue(3, $MP->getPesanan(), PDO::PARAM_INT);
            $stmt->bindValue(4, $MP->getQty(), PDO::PARAM_INT);
            $stmt->bindValue(5, $MP->getStatus(), PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $err) {
            echo $err->getMessage();
            die();
        }
        PDOUtility::close_koneksi($link);
        return $stmt;
    }

    public function deleteMenuPesan(Menu_Pesanan $MP)
    {
        $link = PDOUtility::get_koneksi();
        $msg = 'gagalx';
        try {
            //begin transaksi #
            $link->beginTransaction();
            //query
            $qry = "DELETE FROM menu_pesanan WHERE menu_id=? AND pesanan_id=?";
            //prepare
            $stmt = $link->prepare($qry);
            //parameter #
            $stmt->bindValue(1, $MP->getMenu(), PDO::PARAM_INT);
            $stmt->bindValue(2, $MP->getPesanan(), PDO::PARAM_INT);
            //execute
            $stmt->execute();
            $link->commit();
            $msg = 'suksesx';
        } catch (PDOException $err) {
            $link->rollBack();
            $err->getMessage();
            die();
        }
        PDOUtility::close_koneksi($link);
        return $msg;
    }

    public function updateMenuPesan(Menu_Pesanan $MP)
    {
        $msg = 'gagalu';
        $link = PDOUtility::get_koneksi();
        try {
            $link->beginTransaction();
            $query = "UPDATE menu_pesanan SET harga_jual = ?, qty=?, status=? WHERE menu_id=? AND pesanan_id=?";
            $stmt = $link->prepare($query);
            $stmt->bindValue(1, $MP->getHargaJual(), PDO::PARAM_INT);
            $stmt->bindValue(2, $MP->getQty(), PDO::PARAM_INT);
            $stmt->bindValue(3, $MP->getStatus(), PDO::PARAM_INT);
            $stmt->bindValue(4, $MP->getMenu(), PDO::PARAM_INT);
            $stmt->bindValue(5, $MP->getPesanan(), PDO::PARAM_INT);
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
