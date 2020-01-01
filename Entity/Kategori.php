<?php
Class Kategori{
    private $idKategory;
    private $menu;

    /**
     * Kategori constructor.
     * @param $menu
     */
    public function __construct()
    {
        $this->menu = new Menu();
    }

    /**
     * @return mixed
     */
    public function getIdKategory()
    {
        return $this->idKategory;
    }

    /**
     * @param mixed $idKategory
     */
    public function setIdKategory($idKategory)
    {
        $this->idKategory = $idKategory;
    }

    /**
     * @return mixed
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * @param mixed $menu
     */
    public function setMenu($menu_id)
    {
        $this->menu = $menu_id;
    }

    public function __set($name, $value)
    {
        if(!isset($this->menu_id)){
            $this->menu = new Menu();
        }
        if(isset($value)){
            switch ($name){
                case 'menu_id' :
                    $this->menu->setIdMenu($value);
                    break;
                case 'nama_menu':
                    $this->menu->setNama($value);
                default : break;
            }
        }
        // TODO: Implement __set() method.
    }
}
?>