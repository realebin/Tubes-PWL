<?php
class PesananController{
    private $pesananDao;

    /**
     * PesananController constructor.
     * @param $pesananDao
     */
    public function __construct()
    {
        $this->pesananDao = new PesananDaoImpl();
    }

    public function olahPesanan(){
        /////////////////ini untuk insert////////////////
        $btnSubmit = FILTER_INPUT(INPUT_POST, 'btnSubmitPesanan');
        if($btnSubmit)
        {
            $no_meja = FILTER_INPUT(INPUT_POST, 'no_meja');
            $sub = FILTER_INPUT(INPUT_POST, 'sub_total');
            $pesanan = new Pesanan();
            $pesanan->setNoMeja($no_meja);
            $pesanan->setSubTotal($sub);
            $msg = $this-$this->pesananDao->insertPesanan($pesanan);
            header('location:index.php?menu=pes&msg='.$msg);
        }


        //////////////////ini buat delete//////////////
        $commandBtn = FILTER_INPUT(INPUT_GET, 'command');
        if($commandBtn == 'delete'){
            $id = FILTER_INPUT(INPUT_GET, 'id');
            $pesanan = new Pesanan();
            $pesanan->setIdPesanan($id);
            $msg = $this->pesananDao->deletePesanan($pesanan);
            header('location:index.php?menu=pes&msg='.$msg);
        }
        //panggil hlmn viewnya
        $hasil = $this->pesananDao->getAllPesanan();
        require_once 'menu-list-navigation.php';
    }

    public function ubahPesanan(){
        ///update////
        $id = FILTER_INPUT(INPUT_GET, 'id');
        if(isset($id)){
            $pesanan = new Pesanan();
            $pesanan->setIdPesanan($id);
            $data = $this->pesananDao->getOnePesanan($pesanan);
            $result = $data -> fetch();
            $btnUpdatePesanan = FILTER_INPUT(INPUT_POST, 'btnUpdatePesanan');
            if($btnUpdatePesanan){
                $no_meja = FILTER_INPUT(INPUT_POST, 'no_meja');
                $sub = FILTER_INPUT(INPUT_POST, 'sub_total');
                $pesanan = new Pesanan();
                $pesanan->setIdPesanan($id);
                $pesanan->setSubTotal($sub);
                $pesanan->setNoMeja($no_meja);

                $msg = $this->pesananDao->updatePesanan($pesanan);
                header("location:index.php?menu=pes&msg=".$msg);
            }

        }
        //panggil hlmnview
        require_once 'update_pesanan.php';
    }

}
?>