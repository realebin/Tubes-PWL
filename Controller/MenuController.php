<?php
class MenuController{
    private $menuDao;

    /**
     * MenuController constructor.
     * @param $menuDao
     */
    public function __construct()
    {
        $this->menuDao = new MenuDaoImpl();
    }

    public function olahMenu(){
        /////////////////ini untuk insert////////////////
        $btnSubmit = FILTER_INPUT(INPUT_POST, 'btnSubmitMenu');
        if($btnSubmit)
        {
            $name = FILTER_INPUT(INPUT_POST, 'menunama');
            $harga = FILTER_INPUT(INPUT_POST, 'harga');
            $status = FILTER_INPUT(INPUT_POST, 'status');
            $kategori = FILTER_INPUT(INPUT_POST, 'kategori');
            $menu = new Menu();
            $menu->setNama($name);
            $menu->setKategori($kategori);
            $menu->setHarga($harga);
            $menu->setStatus($status);

            $msg = $this->menuDao->insertMenu($menu);
            header('location:index.php?menu=mnu&msg='.$msg);
        }


        //////////////////ini buat delete//////////////
        $commandBtn = FILTER_INPUT(INPUT_GET, 'command');
        if($commandBtn == 'delete'){
            $id = FILTER_INPUT(INPUT_GET, 'idMenu');
            $menu = new Menu();
            $menu->setIdMenu($id);
            $msg = $this->menuDao->deleteMenu($menu);
            header('location:index.php?menu=mnu&msg='.$msg);
        }
        //panggil hlmn viewnya
        // $ catDao ganti jdi $this->>catDao
        $hasil = $this->menuDao->getAllMenu();
        require_once 'menu-list-navigation.php';
    }

    public function ubahMenu(){
        ///update////
        $id = FILTER_INPUT(INPUT_GET, 'idMenu');
        if(isset($id)){
            $menu = new Menu();
            $menu->setIdMenu($id);


            $data = $this->menuDao->getOneMenu($menu);
            $result = $data -> fetch();
            $btnUpdateMenu = FILTER_INPUT(INPUT_POST, 'btnUpdateMenu');
            if($btnUpdateMenu){
                $name = FILTER_INPUT(INPUT_POST,'menunama');
                $harga = FILTER_INPUT(INPUT_POST,'harga');
                $status = FILTER_INPUT(INPUT_POST,'status');
                $kategori = FILTER_INPUT(INPUT_POST,'kategori');
                $menu = new Menu();
                $menu->setIdMenu($id);
                $menu->setKategori($kategori);
                $menu->setHarga($harga);
                $menu->setStatus($status);
                $menu->setNama($name);

                $msg = $this->menuDao->updateMenu($menu);
                header("location:index.php?menu=mnu&msg=".$msg);
            }

        }
        //panggil hlmnview
        require_once 'update_menu.php';
    }

}
?>