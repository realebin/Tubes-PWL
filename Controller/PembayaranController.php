<?php
class PembayaranController{
    private $pembayaranDao;

    /**
     * PembayaranController constructor.
     * @param $pembayaranDao
     */
    public function __construct()
    {
        $this->pembayaranDao = new PembayaranDaoImpl();
    }

    public function olahPembayaran(){
        /////////////////ini untuk insert////////////////
        $btnSubmit = FILTER_INPUT(INPUT_POST, 'btnSubmitPembayaran');
        if($btnSubmit)
        {
            $metodeBayar = FILTER_INPUT(INPUT_POST, 'met-bay');
            $total = FILTER_INPUT(INPUT_POST, 'total');
            $userId = FILTER_INPUT(INPUT_POST, 'userId');
            $pesananId = FILTER_INPUT(INPUT_POST, 'pesananId');
            $pembayaran = new Pembayaran();
            $pembayaran->setMetodeBayar($metodeBayar);
            $pembayaran->setTotal($total);
            $pembayaran->setUser($userId);
            $pembayaran->setMenuPesanan($pesananId);

            $msg = $this->pembayaranDao->insertPembayaran($pembayaran);
            header('location:index.php?menu=pemb&msg='.$msg);
        }


        //////////////////ini buat delete//////////////
        $commandBtn = FILTER_INPUT(INPUT_GET, 'command');
        if($commandBtn == 'delete'){
            $metodeBayar = FILTER_INPUT(INPUT_POST, 'met-bay');
            $total = FILTER_INPUT(INPUT_POST, 'total');
            $pembayaran = new Pembayaran();
            $pembayaran->setMetodeBayar($metodeBayar);
            $pembayaran->setTotal($total);
            $msg = $this->pembayaranDao->deletePembayaran($pembayaran);
            header('location:index.php?menu=pemb&msg='.$msg);
        }
        //panggil hlmn viewnya
        // $ catDao ganti jdi $this->>catDao
        $hasil = $this->pembayaranDao->getAllPembayaran();
        require_once 'checkout.php';
    }

    public function ubahpembayaran(){
        ///update////
        $pesanan = FILTER_INPUT(INPUT_GET, 'pesananId');
        if(isset($pesanan)&& isset($menu)){
            $pembayaran = new Pembayaran();
            $pembayaran->setMenuPesanan($pesanan);
            $data = $this->pembayaranDao->getOnePembayaran();
            $result = $data -> fetch();
            $btnSubmitPembayaran = FILTER_INPUT(INPUT_POST, 'btnSubmitPembayaran');
            if($btnSubmitPembayaran){
                $metodeBayar = FILTER_INPUT(INPUT_POST, 'met-bay');
                $total = FILTER_INPUT(INPUT_POST, 'total');
                $pemb = new Pembayaran();
                $pemb->setMetodeBayar($metodeBayar);
                $pemb->setTotal($total);

                $msg = $this->pembayaranDao->updatePembayaran($pemb);
                header("location:index.php?menu=pemb&msg=".$msg);
            }

        }
        //panggil hlmnview
        require_once 'update_pembayaran.php';
    }

}
?>