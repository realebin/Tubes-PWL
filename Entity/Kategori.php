<?php
class Kategori{
    private $idKategori;
    private $nama;

    /**
     * @return mixed
     */
    public function getIdKategori()
    {
        return $this->idKategori;
    }

    /**
     * @param mixed $idKategory
     */
    public function setIdKategori($idKategori)
    {
        $this->idKategori = $idKategori;
    }

    /**
     * @return mixed
     */
    public function getNama()
    {
        return $this->nama;
    }

    /**
     * @param mixed $nama
     */
    public function setNama($nama)
    {
        $this->nama = $nama;
    }


}
?>