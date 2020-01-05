<?php
class Kategori{
    private $idKategory;
    private $nama;

    /**
     * @return mixed
     */
    public function getIdKategory()
    {
        return $this->idKategory;
    }

    /**
     * @param mixed $idKategory
     */
    public function setIdKategory($idKategory)
    {
        $this->idKategory = $idKategory;
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