<?php
class UserDaoImpl
{
    public function masuk(User $user)
    {
        $link = PDOUtility::get_koneksi();
        try{
            //query
            $sql = "SELECT * FROM user WHERE username = ? AND password = MD5(?)";
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
//        var_dump($sql);
//        exit();
        return $stmt;
    }
    public function getAllUser(){
        $link = PDOUtility::get_koneksi();
        try{
            //query
            $sql = "SELECT * FROM user WHERE role = 'Dapur' OR role='Kasir' OR role='Waiters' ORDER BY idUser ASC ";
            //prepare
            $stmt = $link -> prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS |
                PDO::FETCH_PROPS_LATE ,'User');
            //execute
            $stmt->execute();

        } catch (PDOException $err){
            echo $err -> getMessage();
            die();
        }
        PDOUtility::close_koneksi($link);
        return $stmt;
    }

    public function insertUser(User $user){
        $link = PDOUtility::get_koneksi();
        $msg = 'gagal';
        try{
            $link->beginTransaction();
            $sql = "INSERT INTO user (role,nama,username, password) VALUES(?,?,?,?)";
            $stmt = $link->prepare($sql);
            $stmt->bindValue(1,$user->getRole(),PDO::PARAM_STR);
            $stmt->bindValue(2,$user->getNama(),PDO::PARAM_STR);
            $stmt->bindValue(3,$user->getUsername(),PDO::PARAM_STR);
            $stmt->bindValue(4,$user->getPassword(),PDO::PARAM_STR);
            $stmt->execute();
            $link->commit();
            $msg = 'sukses';
        }
        catch (PDOException $err){
            echo $err ->getMessage();
            die();
        }
        PDOUtility::close_koneksi($link);
        return $msg;
    }
}

?>