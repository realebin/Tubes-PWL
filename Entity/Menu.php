<?php
class Menu{
    private $idMenu;
    private $nama;
    private $harga;
    private $status;
    private $kategori;

    /**
     * Menu constructor.
     * @param $kategori
     */
    public function __construct()
    {
        $this->kategori = new Kategori();
    }

    /**
     * @return mixed
     */
    public function getKategori()
    {
        return $this->kategori;
    }

    /**
     * @param mixed $kategori
     */
    public function setKategori($kategori_id)
    {
        $this->kategori = $kategori_id;
    }

    /**
     * @return mixed
     */
    public function getIdMenu()
    {
        return $this->idMenu;
    }

    /**
     * @param mixed $idMenu
     */
    public function setIdMenu($idMenu)
    {
        $this->idMenu = $idMenu;
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

    /**
     * @return mixed
     */
    public function getHarga()
    {
        return $this->harga;
    }

    /**
     * @param mixed $harga
     */
    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function __set($name, $value)
    {
        if(!isset($this->kategori_id)){
            $this->kategori = new Kategori();
        }
        if(isset($value)){
            switch ($name){
                case 'nama_kategori' :
                    $this->kategori->setNama($value);
                    break;
                case 'id_kategori':
                    $this->kategori->setIdKategori($value);
                    break;
            }
        }
    }


}
?>