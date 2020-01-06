<?php
class Pesanan{
    private $idPesanan;
    private $no_meja;
    private $sub_total;
    private $idWaiters;
    private $Status_Pembayaran;

    /**
     * @return mixed
     */
    public function getIdWaiters()
    {
        return $this->idWaiters;
    }

    /**
     * @param mixed $idWaiters
     */
    public function setIdWaiters($idWaiters)
    {
        $this->idWaiters = $idWaiters;
    }

    /**
     * @return mixed
     */
    public function getStatusPembayaran()
    {
        return $this->Status_Pembayaran;
    }

    /**
     * @param mixed $Status_Pembayaran
     */
    public function setStatusPembayaran($Status_Pembayaran)
    {
        $this->Status_Pembayaran = $Status_Pembayaran;
    }


    /**
     * @return mixed
     */
    public function getIdPesanan()
    {
        return $this->idPesanan;
    }

    /**
     * @param mixed $idPesanan
     */
    public function setIdPesanan($idPesanan)
    {
        $this->idPesanan = $idPesanan;
    }

    /**
     * @return mixed
     */
    public function getNoMeja()
    {
        return $this->no_meja;
    }

    /**
     * @param mixed $no_meja
     */
    public function setNoMeja($no_meja)
    {
        $this->no_meja = $no_meja;
    }

    /**
     * @return mixed
     */
    public function getSubTotal()
    {
        return $this->sub_total;
    }

    /**
     * @param mixed $sub_total
     */
    public function setSubTotal($sub_total)
    {
        $this->sub_total = $sub_total;
    }

}
?>
