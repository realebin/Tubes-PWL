<?php
Class Pesanan{
    private $idPesanan;
    private $no_meja;
    private $sub_total;

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
