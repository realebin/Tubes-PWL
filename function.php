<?php
function makemenu()
{
    $mnu = array("HOME" => "index", "ABOUT" => "about", "MENU" => "menu", "CONTACT" => "contact", "BOOK" => "book", "LOGIN" => "login");
    if($_SESSION['approved_user'] == TRUE) {
        $mnu = array("HOME" => "index", "ABOUT" => "about", "MENU" => "menu", "CONTACT" => "contact", "BOOK" => "book", "LOGOUT" => "logout");
    }
    foreach ($mnu as $value => $key)
    {
        echo '<a href="index.php?menu='.$key.'">'.$value.'</a> | ';
    }
}
?>
