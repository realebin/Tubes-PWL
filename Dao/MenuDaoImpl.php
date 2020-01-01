<?php
Class KategoriDaoImpl{
    public function getAllKategori(Kategori $kategori){
        $link = PDOUtility::get_koneksi();
        try{
            $sql = "SELECT k.*, m.idMenu AS Menu_id FROM Kategori k 
JOIN Menu m ON k.Menu_id = m.id_Menu";
            $stmt = $link->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE ,'Kategori');
            //execute
            $stmt->execute();
        }
        catch(PDOException $err){
            echo $err->getMessage();
            die();

        }
        PDOUtility::close_koneksi($link);
        return $stmt;
    }
}
?>