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
//            var_dump($pengguna);exit;

//            $userDao = new UserDaoImpl();
            $data = $this->userDao->masuk($pengguna);

            $result = $data->fetch();

            ///kalau $result['idUser'] > 0 dihapus bisa masuk tapi salah bener jadi approved user
            if (isset($result) && $result['idUser'] > 0) {
                $_SESSION['approved_user'] = TRUE;
                $_SESSION['userid'] = $result['idUser'];
                $_SESSION['username'] = $result['username'];
                $_SESSION['userrole'] = $result['role'];
                $_SESSION['name'] = $result['nama'];
//                var_dump($_SESSION['username']);
//                exit();
            }
            header('location:index.php');
        }
        //(harusnya login.php tapi gabisa karena stuck di login.php terus)
        require_once 'login.php';
<<<<<<< HEAD
=======

>>>>>>> 67748080f91e32ee1bc70aca7dc4e425edd4e9f5
    }
}
?>