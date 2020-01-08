<?php


class KategoriController
{
    private $katDao;

    /**
     * KategoriController constructor.
     * @param $katDao
     */
    public function __construct()
    {
        $this->katDao = new KategoriDaoImpl();
    }


    public function olahKategori(){
        /////////////////ini untuk insert////////////////
        $btnSubmit = FILTER_INPUT(INPUT_POST, 'btnSubmitMenu');
        if($btnSubmit)
        {
            $name = FILTER_INPUT(INPUT_POST, 'nama');
            $kat = new Kategori();
            $kat->setNama($name);
            $msg = $this->katDao->insertKategori($kat);
            header('location:index.php?menu=kat&msg='.$msg);
        }


        //////////////////ini buat delete//////////////
        $commandBtn = FILTER_INPUT(INPUT_GET, 'command');
        if($commandBtn == 'delete'){
            $id = FILTER_INPUT(INPUT_GET, 'id');
            $kat = new Kategori();
            $kat->setIdKategori($id);
            $msg = $this->katDao->deleteKategori($kat);
            header('location:index.php?menu=kat&msg='.$msg);
        }
        //panggil hlmn viewnya
        $hasil = $this->katDao->getAllKategori();
        require_once 'menu-list-navigation.php';

        $hasilkat = $this->katDao->getAllKategori();
    }

    public function ubahKat(){
        ///update////
        $id = FILTER_INPUT(INPUT_GET, 'id');
        if(isset($id)){
            $kat = new Kategori();
            $kat->setIdKategori($id);


            $data = $this->katDao->getOneKategori($kat);
            $result = $data -> fetch();
            $btnUpdateKat = FILTER_INPUT(INPUT_POST, 'btnUpdateKat');
            if($btnUpdateKat){
                $name = FILTER_INPUT(INPUT_POST,'nama');
                $kat = new Kategori();
                $kat->setIdKategori($id);
                $kat->setNama($name);

                $msg = $this->katDao->updateKategori($kat);
                header("location:index.php?menu=kat&msg=".$msg);
            }

        }
    }
}

?>