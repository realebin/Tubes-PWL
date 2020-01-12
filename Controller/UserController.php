<?php


class UserController
{
    private $userDao;
    /*** UserController constructor.
 * @param $userDao */
    public function __construct()
{
    $this->userDao = new UserDaoImpl();
}
    public function login()
    {
        $btnLogin = FILTER_INPUT(INPUT_POST, 'btnLogin');
        if (isset($btnLogin)) {
            $username = FILTER_INPUT(INPUT_POST, 'uname');
            $password = FILTER_INPUT(INPUT_POST, 'pwd');

            $pengguna = new User();
            $pengguna->setUsername($username);
            $pengguna->setPassword($password);

            $data = $this->userDao->masuk($pengguna);

            $result = $data->fetch();

            ///kalau $result['idUser'] > 0 dihapus bisa masuk tapi salah bener jadi approved user
            if (isset($result) && $result['idUser'] > 0) {
                $_SESSION['approved_user'] = TRUE;
                $_SESSION['userid'] = $result['idUser'];
                $_SESSION['username'] = $result['username'];
                $_SESSION['userrole'] = $result['role'];
                $_SESSION['name'] = $result['nama'];
                $_SESSION["cart_item"] = array();
            }
            header('location:index.php');
        }
        //(harusnya login.php tapi gabisa karena stuck di login.php terus)

        require_once 'login.php';
    }
    public function olahUser(){
        /////////////////ini untuk insert////////////////
        $btnSubmit = FILTER_INPUT(INPUT_POST, 'btnSubmitUser');
        if($btnSubmit)
        {
            $role = FILTER_INPUT(INPUT_POST, 'role');
            $name = FILTER_INPUT(INPUT_POST, 'nama');
            $uname = FILTER_INPUT(INPUT_POST, 'uname');
            $password = FILTER_INPUT(INPUT_POST, 'pwd');
            $user = new User();
            $user->setNama($name);
            $user->setRole($role);
            $user->setPassword($password);
            $user->setUsername($uname);
            $msg = $this->userDao->insertUser($user);
            header('location:index.php?menu=management&msg='.$msg);
        }
        $hasilUser = $this->userDao->getAllUser();
        include_once 'management.php';
    }
    public function ubahUser(){
        /////////////////ini untuk insert////////////////
        $user = new User();
        $id = FILTER_INPUT(INPUT_GET,'idUser');
        $user->setIdUser($id);

        if(isset($id))
        {
            $btnUpdateUser = FILTER_INPUT(INPUT_POST,'btnUpdateUser');
            if($btnUpdateUser){
                $role = FILTER_INPUT(INPUT_POST, 'role');
                $name = FILTER_INPUT(INPUT_POST, 'nama');
                $uname = FILTER_INPUT(INPUT_POST, 'uname');
                $password = FILTER_INPUT(INPUT_POST, 'pwd');
                $user->setNama($name);
                $user->setRole($role);
                $user->setPassword($password);
                $user->setUsername($uname);
                $msg = $this->userDao->updateUser($user);
                header('location:index.php?menu=user&msg='.$msg);

            }
            $result = $this->userDao->getOneUser($user);
        }

        require_once 'update_user.php';
    }
}
?>