<?php
class MenuController{
    private $menuDao;
    private $kategoriDao;


    /**
     * MenuController constructor.
     * @param $menuDao
     */
    public function __construct()
    {
        $this->menuDao = new MenuDaoImpl();
        $this->kategoriDao = new KategoriDaoImpl();
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

        ///////////////////////buat cart///////////////////////
        $btnAddCart = FILTER_INPUT(INPUT_POST, 'btnAddCart');
//       Array Penyimapan Semua Pesanan
        if($btnAddCart)
        {
//            ToDo: Buat Filter Input Post untuk id_makanan,harga,quantity
            $id_makanan = FILTER_INPUT(INPUT_POST,'id_makanan');
            $nama_makanan = FILTER_INPUT(INPUT_POST,'nama_makanan');
            $harga = FILTER_INPUT(INPUT_POST,'harga');
            $quantity = FILTER_INPUT(INPUT_POST,'quantity');

//            ToDo: Buat Objek Menu set data objek sama Filter Input Diatas
//            $menu_pesanan = new Menu_Pesanan();
//            $menu_pesanan->setMenu($id_makanan);
//            $menu_pesanan->setHargaJual($harga);
//            $menu_pesanan->setQty($quantity);

//            Todo: Masukkin Objek Kedalam Array
//            $pesanan=array($menu_pesanan);
            $pesanan=array("id_makanan"=>$id_makanan, "nama_makanan"=>$nama_makanan,"quantity"=>$quantity,"harga"=>$harga);
//            Todo: Masukkin pesanan yang diatas kedalam array penampung pesanan
            array_push($_SESSION['cart_item'],$pesanan);
//            Kalau ini untuk ngeprint isi si arayy nya abaikan terlebih dahulu.
//            Dan caranya harus di rubah sedikit
//            foreach ($cart as $pilihan) {
//                print_r(" Makanan: ".$pilihan["id_makanan"]);
//                print_r(" Banyak: ".$pilihan["quantity"]);
//            }

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
        // TODO : bikin getall kategori
//        $data_kategori = $this->kategoriDao->getAllKategori();


        $hasil = $this->menuDao->getAllMenu();
        $hasil2 = $this->menuDao->getAllMenu();
        $hasil3 = $this->menuDao->getAllMenu();
        $hasil4 = $this->menuDao->getAllMenu();
        $hasil5 = $this->menuDao->getAllMenu();
        $hasil6 = $this->menuDao->getAllMenu();
        $hasilcat = $this->kategoriDao->getAllKategori();
        require_once 'menu-list-navigation.php';
//        require_once 'cobacoba.php';
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
//        require_once 'update_menu.php';
    }

}
?>