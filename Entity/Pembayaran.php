<?php
class Pembayaran{
    private $idPembayaran;
    private $metode_bayar;
    private $total;
    private $user;
    private $menu_pesanan;

    /**
     * @return Menu_Pesanan
     */
    public function getMenuPesanan()
    {
        return $this->menu_pesanan;
    }

    /**
     * @param Menu_Pesanan $menu_pesanan
     */
    public function setMenuPesanan($menu_id)
    {
        $this->menu_pesanan = $menu_id;
    }

    /**
     * Pembayaran constructor.
     * @param $pesanan
     * @param $user
     */
    public function __construct()
    {
        $this->pesanan = new Pesanan();
        $this->user = new User();
        $this->menu_pesanan = new Menu_Pesanan();
    }

    /**
     * @return mixed
     */

    public function getIdPembayaran()
    {
        return $this->idPembayaran;
    }

    /**
     * @param mixed $idPembayaran
     */
    public function setIdPembayaran($idPembayaran)
    {
        $this->idPembayaran = $idPembayaran;
    }

    /**
     * @return mixed
     */
    public function getMetodeBayar()
    {
        return $this->metode_bayar;
    }

    /**
     * @param mixed $metode_bayar
     */
    public function setMetodeBayar($metode_bayar)
    {
        $this->metode_bayar = $metode_bayar;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }


    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user_id)
    {
        $this->user = $user_id;
    }

    public function __set($name, $value)
    {

        if(!isset($this->user_id)){
            $this->user = new User();
        }
        if(!isset($this->menu_id)){
            $this->menu_pesanan = new Menu_Pesanan();
        }
        if(isset($value)){
            switch($name){
                case 'user_id' :
                    $this->user->setIdUser($value);
                    break;
                case 'nama_user' :
                    $this->user->setNama($value);
                    break;
                case 'role_user' :
                    $this->user->setRole($value);
                    break;
                case 'menu_id':
                    $this->menu_pesanan->setMenu($value);
                    break;
                case 'pesanan_id':
                    $this->menu_pesanan->setPesanan($value);
                    break;
                default : break;

            }
        }
    }

}
?>