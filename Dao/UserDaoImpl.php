<?php
class UserDaoImpl
{
    public function masuk(User $user)
    {
        $link = PDOUtility::get_koneksi();
        try{
            //query
            $sql = "SELECT * FROM user where username = ? AND password = MD5(?)";
            //prepare
            $stmt = $link -> prepare($sql);
            $stmt->bindValue(1, $user->getUsername(), PDO::PARAM_STR);
            $stmt->bindValue(2, $user->getPassword(), PDO::PARAM_STR);
            //execute
            $stmt->execute();

        } catch (PDOException $err){
            echo $err -> getMessage();
            die();
        }
        PDOUtility::close_koneksi($link);
        return $stmt;
    }
}

?>