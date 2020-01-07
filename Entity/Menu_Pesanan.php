<?php
class Menu_Pesanan{
//  nyimpan id_menu
    private $menu;
    private $pesanan;
//  nyimpan quantity
    private $qty;
//  nyimpan harga
    private $harga_jual;
    private $status;

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

    /**
     * Menu_Pesanan constructor.
     * @param $menu
     * @param $pesanan
     */
    public function __construct( )
    {
        $this->menu = new Menu();
        $this->pesanan = new Pesanan();
    }

    /**
     * @return mixed
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * @param mixed $menu
     */
    public function setMenu($menu_id)
    {
        $this->menu = $menu_id;
    }

    /**
     * @return mixed
     */
    public function getPesanan()
    {
        return $this->pesanan;
    }

    /**
     * @param mixed $pesanan
     */
    public function setPesanan($pesanan_id)
    {
        $this->pesanan = $pesanan_id;
    }

    /**
     * @return mixed
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param mixed $qty
     */
    public function setQty($qty)
    {
        $this->qty = $qty;
    }

    /**
     * @return mixed
     */
    public function getHargaJual()
    {
        return $this->harga_jual;
    }

    /**
     * @param mixed $harga_jual
     */
    public function setHargaJual($harga_jual)
    {
        $this->harga_jual = $harga_jual;
    }

    public function __set($name, $value)
    {
        if(!isset($this->menu_id)){
            $this->menu = new Menu();
        }
        if(!isset($this->pesanan_id)){
            $this->pesanan = new Pesanan();
        }
        if(isset($value)){
            switch($name){
                case 'menu_id' :
                    $this->menu->setIdMenu($value);
                    break;
                case 'nama_menu' :
                    $this->menu->setNama($value);
                    break;
                case 'pesanan_id':
                    $this->pesanan->setIdPesanan($value);
                    break;
                default :
                    break;

            }
        }

    }
}
?>