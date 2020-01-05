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

//            $userDao = new UserDaoImpl();
            $data = $this->userDao->masuk($pengguna);

            $result = $data->fetch();

            if (isset($result) && $result['idUser'] > 0) {
                $_SESSION['approved_user'] = TRUE;
                $_SESSION['userid'] = $result['idUser'];
                $_SESSION['username'] = $result['username'];
                $_SESSION['userrole'] = $result['role'];
                $_SESSION['name'] = $result['nama'];
            }
            header('location:index.php');
        }
        require_once 'index.php';

    }
}
?>