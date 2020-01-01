<?php
Class Pembayaran{
    private $idPembayaran;
    private $metode_bayar;
    private $total;
    private $pesanan;
    private $user;

    /**
     * Pembayaran constructor.
     * @param $pesanan
     * @param $user
     */
    public function __construct()
    {
        $this->pesanan = new Pesanan();
        $this->user = new User();
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
        if(!isset($this->pesanan_id)){
            $this->pesanan = new Pesanan();
        }

        if(!isset($this->user_id)){
            $this->user = new User();
        }
        if(isset($value)){
            switch($name){
                case 'pesanan_id' :
                    $this->pesanan->setIdPesanan($value);
                    break;
                case 'user_id' :
                    $this->user->setIdUser($value);
                    break;
                case 'nama_user' :
                    $this->user->setNama($value);
                    break;
                case 'role_user' :
                    $this->user->setRole($value);
                    break;
                default :
                    break;

            }
        }
    }

}
?>