<?php


class PDOUtility
{
    public static function get_koneksi(){
        try{
            $db = "mysql:host=localhost;dbname=Restaurant";
            $db_handler = new PDO($db,"root", "");
            $db_handler -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            echo $e ->getMessage();
            die();
        }
        return $db_handler;
    }

    public static function close_koneksi(PDO $link){
        $link = NULL;
    }
}