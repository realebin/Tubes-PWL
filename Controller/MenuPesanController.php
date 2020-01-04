<?php
class MenuPesanController{
    private $menuPesanDao;

    /**
     * MenuController constructor.
     * @param $menuPesanDao
     */
    public function __construct()
    {
        $this->menuPesanDao = new MenuPesanDaoImpl();
    }

    public function olahMenuPesan(){
        /////////////////ini untuk insert////////////////
        $btnSubmit = FILTER_INPUT(INPUT_POST, 'btnSubmitMenuPesan');
        if($btnSubmit)
        {
            $menu = FILTER_INPUT(INPUT_POST, 'menuid');
            $harga_jual = FILTER_INPUT(INPUT_POST, 'harga_jual');
            $pesanan = FILTER_INPUT(INPUT_POST, 'pesananid');
            $qty = FILTER_INPUT(INPUT_POST, 'qty');
            $status = FILTER_INPUT(INPUT_POST, 'status');
            $menuP = new Menu_Pesanan();
            $menuP->setPesanan($pesanan);
            $menuP->setMenu($menu);
            $menuP->setHargaJual($harga_jual);
            $menuP->setQty($qty);
            $menuP->setStatus($status);

            $msg = $this->menuPesanDao->insertMenuPesan($menuP);
            header('location:index.php?menu=mnup&msg='.$msg);
        }


        //////////////////ini buat delete//////////////
        $commandBtn = FILTER_INPUT(INPUT_GET, 'command');
        if($commandBtn == 'delete'){
            $menu = FILTER_INPUT(INPUT_GET, 'menuid');
            $pesanan = FILTER_INPUT(INPUT_GET, 'pesananid');
            $menuP = new Menu_Pesanan();
            $menuP->setMenu($menu);
            $menuP->setPesanan($pesanan);
            $msg = $this->menuPesanDao->deleteMenuPesan($menuP);
            header('location:index.php?menu=mnup&msg='.$msg);
        }
        //panggil hlmn viewnya
        // $ catDao ganti jdi $this->>catDao
        $hasil = $this->menuPesanDao->getAllMenuPesan();
        require_once 'menu-list-navigation.php';
    }

    public function ubahMenuP(){
        ///update////
        $menu = FILTER_INPUT(INPUT_GET, 'menuid');
        $pesanan = FILTER_INPUT(INPUT_GET, 'pesananid');
        if(isset($pesanan)&& isset($menu)){
            $menuP = new Menu_Pesanan();
            $menuP->setPesanan($pesanan);
            $menuP->setMenu($menu);
            $data = $this->menuPesanDao->getOneMenuPesan($menuP);
            $result = $data -> fetch();
            $btnUpdateMenuP = FILTER_INPUT(INPUT_POST, 'btnUpdateMenuP');
            if($btnUpdateMenuP){
                $qty = FILTER_INPUT(INPUT_POST, 'qty');
                $harga_jual = FILTER_INPUT(INPUT_POST,'harga_jual');
                $status = FILTER_INPUT(INPUT_POST,'status');
                $menuP = new Menu_Pesanan();
                $menuP->setPesanan($pesanan);
                $menuP->setMenu($menu);
                $menuP->setQty($qty);
                $menuP->setHargaJual($harga_jual);
                $menuP->setStatus($status);

                $msg = $this->menuPesanDao->updateMenuPesan($menuP);
                header("location:index.php?menu=mnup&msg=".$msg);
            }

        }
        //panggil hlmnview
        require_once 'update_menuP.php';
    }

}
?>