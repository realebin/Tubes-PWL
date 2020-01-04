<?php
class PembayaranDaoImpl{
    public function getAllPembayaran()
    {
        $link = PDOUtility::get_koneksi();
        try {
            $sql = "SELECT p.*, u.idUser AS user_id, mp.pesanan_id AS pesanan_id, mp.menu_id AS menu_id 
            FROM pembayaran p JOIN menu_pesanan mp ON mp.menu_id = p.menu_id AND mp.pesanan_id = p.pesanan_id 
            ORDER BY p.idPembayaran ASC";
            $stmt = $link->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Pembayaran');
            //execute
            $stmt->execute();
        } catch (PDOException $err) {
            echo $err->getMessage();
            die();

        }
        PDOUtility::close_koneksi($link);
        return $stmt;
    }

    public function getOnePembayaran(Pembayaran $pembayaran)
    {
        $link = PDOUtility::get_koneksi();
        try {
            $sql = "SELECT * FROM pembayaran WHERE idPembayaran=?";
            $stmt = $link->prepare($sql);
            $stmt->bindValue(1, $pembayaran->getIdPembayaran(), PDO::PARAM_INT);
            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Pembayaran');
            $stmt->execute();
        } catch (PDOException $err) {
            echo $err->getMessage();
            die();
        }
        PDOUtility::close_koneksi($link);
        return $stmt;
    }

    public function insertPembayaran(Pembayaran $pembayaran)
    {
        $link = PDOUtility::get_koneksi();
        $msg = 'gagal';
        try {
            $link->beginTransaction();
            $sql = "INSERT INTO pembayaran(menu_id,metode_bayar, pesanan_id, total, user_id) VALUES(?,?,?,?,?)";
            $stmt = $link->prepare($sql);
            $stmt->bindValue(1, $pembayaran->getMenuPesanan()->getMenu(), PDO::PARAM_INT);
            $stmt->bindValue(2, $pembayaran->getMetodeBayar(), PDO::PARAM_STR);
            $stmt->bindValue(3, $pembayaran->getMenuPesanan()->getPesanan(), PDO::PARAM_INT);
            $stmt->bindValue(4, $pembayaran->getTotal(), PDO::PARAM_INT);
            $stmt->bindValue(5, $pembayaran->getUser(), PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $err) {
            echo $err->getMessage();
            die();
        }
        PDOUtility::close_koneksi($link);
        return $stmt;
    }

    public function deletePembayaran(Pembayaran $pembayaran)
    {
        $link = PDOUtility::get_koneksi();
        $msg = 'gagalx';
        try {
            //begin transaksi #
            $link->beginTransaction();
            //query
            $qry = "DELETE FROM pembayaran WHERE idPembayaran=?";
            //prepare
            $stmt = $link->prepare($qry);
            //parameter #
            $stmt->bindValue(1, $pembayaran->getIdPembayaran(), PDO::PARAM_INT);
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

    public function updatePembayaran(Pembayaran $pembayaran)
    {
        $msg = 'gagalu';
        $link = PDOUtility::get_koneksi();
        try {
            $link->beginTransaction();
            $query = "UPDATE pembayaran SET menu_id = ?, metode_bayar=?, pesanan_id=?, total=?, user_id=? WHERE idPembayaran=?";
            $stmt = $link->prepare($query);
            $stmt->bindValue(1, $pembayaran->getMenuPesanan()->getMenu(), PDO::PARAM_INT);
            $stmt->bindValue(2, $pembayaran->getMetodeBayar(), PDO::PARAM_STR);
            $stmt->bindValue(3, $pembayaran->getMenuPesanan()->getPesanan(), PDO::PARAM_INT);
            $stmt->bindValue(4, $pembayaran->getTotal(), PDO::PARAM_INT);
            $stmt->bindValue(5, $pembayaran->getUser(), PDO::PARAM_INT);
            $stmt->bindValue(5, $pembayaran->getIdPembayaran(), PDO::PARAM_INT);
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