<!DOCTYPE html>
<html lang="en">
<head>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Title -->
<title>Mougs - ★★★★☆ Restaurant</title>

<!-- Favicons -->
<link rel="shortcut icon" href="assets/img/favicon.png">
<link rel="apple-touch-icon" href="assets/img/favicon_60x60.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon_76x76.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon_120x120.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon_152x152.png">

<!-- CSS Plugins -->
<link rel="stylesheet" href="assets/plugins/bootstrap/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/plugins/slick-carousel/slick/slick.css" />
<link rel="stylesheet" href="assets/plugins/animate.css/animate.min.css" />
<link rel="stylesheet" href="assets/plugins/animsition/dist/css/animsition.min.css" />

<!-- CSS Icons -->
<link rel="stylesheet" href="assets/css/themify-icons.css" />
<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css" />

<!-- CSS Theme -->
<link id="theme" rel="stylesheet" href="assets/css/themes/theme-beige.min.css" />

</head>

<body>
<?php
include_once "PDOUtility.php";
//class entity tiap tabel database
include_once "Entity/Kategori.php";
include_once "Entity/User.php";
include_once "Entity/Menu.php";
include_once "Entity/Menu_Pesanan.php";
include_once "Entity/Pembayaran.php";
include_once "Entity/Pesanan.php";
//class Daonya
include_once "Dao/MenuDaoImpl.php";
include_once "Dao/UserDaoImpl.php";
include_once "Dao/PembayaranDaoImpl.php";
include_once "Dao/PesananDaoImpl.php";
include_once "Dao/KategoriDaoImpl.php";
include_once "Dao/MenuPesanDaoImpl.php";

include_once "Controller/MenuController.php";
include_once "Controller/UserController.php";

include_once "function.php";
?>
<!--<!-- nyoba cart -->-->
<?php
//$menuControl = new MenuController();
//$menuDao = new MenuDaoImpl();
//$menu = new Menu();
//$link = PDOUtility::get_koneksi();
//if(!empty($_GET["action"])) {
//    switch($_GET["action"]) {
//        case "add":
//            if(!empty($_POST["quantity"])) {
//                $productByCode =$menuDao->getOneMenu($menu->setIdMenu($_GET["code"]));
////                $productByCode = PDOUtility::->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
//$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
//
//                if(!empty($_SESSION["cart_item"])) {
//                    if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
//                        foreach($_SESSION["cart_item"] as $k => $v) {
//                            if($productByCode[0]["code"] == $k) {
//                                if(empty($_SESSION["cart_item"][$k]["quantity"])) {
//                                    $_SESSION["cart_item"][$k]["quantity"] = 0;
//                                    }
//
//                                $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
//                                }
//                        }
//                    } else {
//                        $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
//                        }
//                } else {
//                    $_SESSION["cart_item"] = $itemArray;
//                    }
//                }
//        break;
//
//case "remove":
//    if(!empty($_SESSION["cart_item"])) {
//        foreach($_SESSION["cart_item"] as $k => $v) {
//            if($_GET["code"] == $k)
//                unset($_SESSION["cart_item"][$k]);
//            if(empty($_SESSION["cart_item"]))
//                unset($_SESSION["cart_item"]);
//            }
//        }
//    break;
//
//case "empty":
//    unset($_SESSION["cart_item"]);
//    break;
//    }
//}
//?>
<!--sampe sini-->


<div id="body-wrapper" class="animsition">

    <!-- Header -->
    <header id="header" class="light">

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- Logo -->
                    <div class="module module-logo dark">
                        <a href="index.php">
                            <img src="assets/img/logoMougsPutih.png" alt="" width="200">
                        </a>
                    </div>
                </div>
                <div class="col-md-7">
                    <!-- Navigation -->
                    <nav class="module module-navigation left mr-4">
                        <ul id="nav-main" class="nav nav-main">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="index.php?menu=about">About</a>
                            </li>
                            <li>
                                <a href="index.php?menu=order">Menu</a>
                            </li>
                            <li><a href="index.php?menu=contact">Contact</a></li>
<!--                            <li >-->
<!--                                <a href="index.php?menu=book">Book</a>-->
<!--                            </li>-->
                        </ul>
                    </nav>
                    <div class="module left">
                        <a href="index.php?menu=order" class="btn btn-outline-secondary"><span>Order</span></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <a href="#" class="module module-cart right" data-toggle="panel-cart">
                        <span class="cart-icon">
                            <i class="ti ti-shopping-cart"></i>
                            <span class="notification">2</span>
                        </span>
                        <span class="cart-value">$32.98</span>
                    </a>
                </div>
            </div>
        </div>

    </header>
    <!-- Header / End -->

    <!-- Header -->
    <header id="header-mobile" class="light">

        <div class="module module-nav-toggle">
            <a href="#" id="nav-toggle" data-toggle="panel-mobile"><span></span><span></span><span></span><span></span></a>
        </div>    

        <div class="module module-logo">
            <a href="index.php">
                <img src="assets/img/logoMougsPutih.png" alt="">
            </a>
        </div>

        <a href="#" class="module module-cart" data-toggle="panel-cart">
            <i class="ti ti-shopping-cart"></i>
            <span class="notification">2</span>
        </a>

    </header>
    <!-- Header / End -->

    <!-- Content -->
    <div id="content">

        <!-- Page Title -->
        <div class="page-title bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 push-lg-4">
                        <h1 class="mb-0">Menu List</h1>
                        <h4 class="text-muted mb-0">Our Fresh Foods From The Oven</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div class="page-content">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-3">
                        <!-- Menu Navigation -->
                        <nav id="menu-navigation" class="stick-to-content" data-local-scroll>
                            <ul class="nav nav-menu bg-dark dark">
                                <li><a href="#Burgers">Burgers</a></li>
                                <li><a href="#Pasta">Pasta</a></li>
                                <li><a href="#Pizza">Pizza</a></li>
                                <li><a href="#Sushi">Sushi</a></li>
                                <li><a href="#Desserts">Desserts</a></li>
                                <li><a href="#Drinks">Drinks</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-9">
<!------------------------------------------ Menu Category / Burgers ------------------------------------------>
                            <div id="Burgers" class="menu-category">
                                <div class="menu-category-title">
                                    <div class="bg-image"><img src="assets/img/photos/menu-title-burgers.jpg" alt="">
                                    </div>
                                    <h2 class="title">Burgers</h2>
                                </div>
                                <div class="menu-category-content">
                            <!--------------------------------------------- Menu Item ------------------------------------------------>
                                    <?php
                                    while($data = $hasil->fetch()){
                                        if($data->getKategori()->getIdKategory() == "1"){
                                    ?>
                                    <div class="menu-item menu-list-item">
                                        <div class="row align-items-center">
                                            <div class="col-sm-6 mb-2 mb-sm-0">
                                                <div><h6 class="mb-0"><?php echo $data->getNama();?></h6></div>
                                            </div>
                                            <div class="col-sm-6 text-sm-right">
                                                <span class="text-md mr-4"> Rp.<?php echo $data->getHarga(); ?></span>
                                                <button class="btn btn-outline-secondary btn-sm"
                                                        data-target="#productModal" data-toggle="modal"><span>Add to cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
<!------------------------------------------ Menu Category / Pasta ------------------------------------------>
                            <div id="Pasta" class="menu-category">
                                <div class="menu-category-title">
                                    <div class="bg-image"><img src="assets/img/photos/menu-title-pasta.jpg" alt="">
                                    </div>
                                    <h2 class="title">Pasta</h2>
                                </div>
                                <div class="menu-category-content">
                            <!--------------------------------------------- Menu Item ------------------------------------------------>
                                    <?php
                                    while($data = $hasil2->fetch()){
                                    if($data->getKategori()->getIdKategory() == "2"){
                                    ?>
                                    <div class="menu-item menu-list-item">
                                        <div class="row align-items-center">
                                            <div class="col-sm-6 mb-2 mb-sm-0">
                                                <h6 class="mb-0"><?php echo $data->getNama();?></h6>
                                            </div>
                                            <div class="col-sm-6 text-sm-right">
                                                <span class="text-md mr-4">  Rp.<?php echo $data->getHarga(); ?></span>
                                                <button class="btn btn-outline-secondary btn-sm"
                                                        data-target="#productModal" data-toggle="modal"><span>Add to cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    }
                                    ?>
                                </div>
                            </div>
<!------------------------------------------ Menu Category / Pizza ------------------------------------------>
                            <div id="Pizza" class="menu-category">
                                <div class="menu-category-title">
                                    <div class="bg-image"><img src="assets/img/photos/menu-title-pizza.jpg" alt="">
                                    </div>
                                    <h2 class="title">Pizza</h2>
                                </div>
                                <div class="menu-category-content">
                                <!--------------------------------------------- Menu Item ------------------------------------------------>
                                    <?php
                                    while($data = $hasil3->fetch()){
                                    if($data->getKategori()->getIdKategory() == "3") {
                                        ?>
                                        <div class="menu-item menu-list-item">
                                            <div class="row align-items-center">
                                                <div class="col-sm-6 mb-2 mb-sm-0">
                                                    <h6 class="mb-0"><?php echo $data->getNama(); ?></h6>
                                                </div>
                                                <div class="col-sm-6 text-sm-right">
                                                <span class="text-md mr-4">  Rp.<?php echo $data->getHarga(); ?></span>
                                                    <button class="btn btn-outline-secondary btn-sm"
                                                            data-target="#productModal" data-toggle="modal"><span>Add to cart</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    } }
                                    ?>
                                </div>
                            </div>
<!------------------------------------------ Menu Category / sushi ------------------------------------------>
                            <div id="Sushi" class="menu-category">
                                <div class="menu-category-title">
                                    <div class="bg-image"><img src="assets/img/photos/menu-title-sushi.jpg" alt="">
                                    </div>
                                    <h2 class="title">Sushi</h2>
                                </div>
                                <div class="menu-category-content">
                            <!--------------------------------------------- Menu Item ------------------------------------------------>
                                    <?php
                                    while($data = $hasil4->fetch()){
                                    if($data->getKategori()->getIdKategory() == "4") {
                                        ?>
                                        <div class="menu-item menu-list-item">
                                            <div class="row align-items-center">
                                                <div class="col-sm-6 mb-2 mb-sm-0">
                                                    <h6 class="mb-0"><?php echo $data->getNama(); ?></h6>
                                                </div>
                                                <div class="col-sm-6 text-sm-right">
                                                <span class="text-md mr-4"> Rp.<?php echo $data->getHarga(); ?></span>
                                                    <button class="btn btn-outline-secondary btn-sm"
                                                            data-target="#productModal" data-toggle="modal"><span>Add to cart</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    } }
                                    ?>
                                </div>
                            </div>
<!------------------------------------------ Menu Category / sushi ------------------------------------------>
                            <div id="Desserts" class="menu-category">
                                <div class="menu-category-title">
                                    <div class="bg-image"><img src="assets/img/photos/menu-title-desserts.jpg" alt="">
                                    </div>
                                    <h2 class="title">Desserts</h2>
                                </div>
                                <div class="menu-category-content">
                                 <!--------------------------------------------- Menu Item ------------------------------------------------>
                                    <?php
                                    while($data = $hasil5->fetch()){
                                        if($data->getKategori()->getIdKategory() == "5") {
                                            ?>
                                    <div class="menu-item menu-list-item">
                                        <div class="row align-items-center">
                                            <div class="col-sm-6 mb-2 mb-sm-0">
                                                <h6 class="mb-0"><?php echo $data->getNama(); ?></h6>
                                            </div>
                                            <div class="col-sm-6 text-sm-right">
                                                <span class="text-md mr-4"> Rp.<?php echo $data->getHarga(); ?></span>
                                                <button class="btn btn-outline-secondary btn-sm"
                                                        data-target="#productModal" data-toggle="modal"><span>Add to cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    }
                                    ?>
                                </div>
                            </div>
<!------------------------------------------ Menu Category / Drinks ------------------------------------------>
                            <div id="Drinks" class="menu-category">
                                <div class="menu-category-title">
                                    <div class="bg-image"><img src="assets/img/photos/menu-title-drinks.jpg" alt="">
                                    </div>
                                    <h2 class="title">Drinks</h2>
                                </div>
                                <div class="menu-category-content">
                                 <!--------------------------------------------- Menu Item ------------------------------------------------>
                                    <?php
                                    while($data = $hasil6->fetch()) {
                                        if ($data->getKategori()->getIdKategory() == "6") {
                                            ?>
                                            <div class="menu-item menu-list-item">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <h6 class="mb-0"><?php echo $data->getNama(); ?></h6>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right">
                                                <span class="text-md mr-4">  Rp.<?php echo $data->getHarga(); ?></span>
                                                        <button class="btn btn-outline-secondary btn-sm"
                                                                data-target="#productModal" data-toggle="modal"><span>Add to cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
<!----------------------------------------------------------------------------------------------------------------------------------------->
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer id="footer" class="bg-dark dark">
            
            <div class="container">
                <!-- Footer 1st Row -->
                <div class="footer-first-row row">
                    <div class="col-lg-3 text-center">
                        <a href="index.php"><img src="assets/img/logoMougsPutih.png" alt="" width="200" class="mt-5 mb-5"></a>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <h5 class="text-muted">Subscribe Us!</h5>
                        <!-- MailChimp Form -->
                        <form action="//suelo.us12.list-manage.com/subscribe/post-json?u=ed47dbfe167d906f2bc46a01b&amp;id=24ac8a22ad" id="sign-up-form" class="sign-up-form validate-form mb-3" method="POST">
                            <div class="input-group">
                                <input name="EMAIL" id="mce-EMAIL" type="email" class="form-control" placeholder="Tap your e-mail..." required>
                                <span class="input-group-btn">
                                    <button class="btn btn-primary btn-submit" type="submit">
                                        <span class="description">Subscribe</span>
                                        <span class="success">
                                            <svg x="0px" y="0px" viewBox="0 0 32 32"><path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/></svg>
                                        </span>
                                        <span class="error">Try again...</span>
                                    </button>
                                </span>
                            </div>
                        </form>
<!--                        <h5 class="text-muted mb-3">Social Media</h5>-->
<!--                        <a href="#" class="icon icon-social icon-circle icon-sm icon-facebook"><i class="fa fa-facebook"></i></a>-->
<!--                        <a href="#" class="icon icon-social icon-circle icon-sm icon-google"><i class="fa fa-google"></i></a>-->
<!--                        <a href="#" class="icon icon-social icon-circle icon-sm icon-twitter"><i class="fa fa-twitter"></i></a>-->
<!--                        <a href="#" class="icon icon-social icon-circle icon-sm icon-youtube"><i class="fa fa-youtube"></i></a>-->
<!--                        <a href="#" class="icon icon-social icon-circle icon-sm icon-instagram"><i class="fa fa-instagram"></i></a>-->
                    </div>
                </div>
                <!-- Footer 2nd Row -->
                <div class="footer-second-row">
                    <span class="text-muted">Copyright Soup 2017©. Made with love by Suelo.</span>
                </div>
            </div>

            <!-- Back To Top -->
            <a href="#" id="back-to-top"><i class="ti ti-angle-up"></i></a>

        </footer>
        <!-- Footer / End -->

    </div>
    <!-- Content / End -->

    <!-- Panel Cart -->
    <div id="panel-cart">
        <div class="panel-cart-container">
            <div class="panel-cart-title">
                <h5 class="title">Your Cart</h5>
                <button class="close" data-toggle="panel-cart"><i class="ti ti-close"></i></button>
            </div>
            <div class="panel-cart-content">
                <table class="table-cart">
                    <tr>
                        <td class="title">
                            <span class="name"><a href="#productModal" data-toggle="modal">Pizza Chicked BBQ</a></span>
                            <span class="caption text-muted">26”, deep-pan, thin-crust</span>
                        </td>
                        <td class="price">$9.82</td>
                        <td class="actions">
                            <a href="#productModal" data-toggle="modal" class="action-icon"><i class="ti ti-pencil"></i></a>
                            <a href="#" class="action-icon"><i class="ti ti-close"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">
                            <span class="name"><a href="#productModal" data-toggle="modal">Beef Burger</a></span>
                            <span class="caption text-muted">Large (500g)</span>
                        </td>
                        <td class="price">$9.82</td>
                        <td class="actions">
                            <a href="#productModal" data-toggle="modal" class="action-icon"><i class="ti ti-pencil"></i></a>
                            <a href="#" class="action-icon"><i class="ti ti-close"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">
                            <span class="name"><a href="#productModal" data-toggle="modal">Extra Burger</a></span>
                            <span class="caption text-muted">Small (200g)</span>
                        </td>
                        <td class="price text-success">$0.00</td>
                        <td class="actions">
                            <a href="#productModal" data-toggle="modal" class="action-icon"><i class="ti ti-pencil"></i></a>
                            <a href="#" class="action-icon"><i class="ti ti-close"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">
                            <span class="name">Weekend 20% OFF</span>
                        </td>
                        <td class="price text-success">-$8.22</td>
                        <td class="actions"></td>
                    </tr>
                </table>
                <div class="cart-summary">
                    <div class="row">
                        <div class="col-7 text-right text-muted">Order total:</div>
                        <div class="col-5"><strong>$21.02</strong></div>
                    </div>
                    <div class="row">
                        <div class="col-7 text-right text-muted">Delivery:</div>
                        <div class="col-5"><strong>$3.99</strong></div>
                    </div>
                    <hr class="hr-sm">
                    <div class="row text-lg">
                        <div class="col-7 text-right text-muted">Total:</div>
                        <div class="col-5"><strong>$24.21</strong></div>
                    </div>
                </div>
            </div>
        </div>
        <a href="index.php?menu=checkout" class="panel-cart-action btn btn-secondary btn-block btn-lg"><span>Go to checkout</span></a>
    </div>

    <!-- Panel Mobile -->
    <nav id="panel-mobile">
        <div class="module module-logo bg-dark dark">
            <a href="#">
                <img src="assets/img/logoMougsPutih.png" alt="" width="200">
            </a>
            <button class="close" data-toggle="panel-mobile"><i class="ti ti-close"></i></button>
        </div>
        <nav class="module module-navigation"></nav>
        <div class="module module-social">
            <h6 class="text-sm mb-3">Follow Us!</h6>
            <a href="#" class="icon icon-social icon-circle icon-sm icon-facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="icon icon-social icon-circle icon-sm icon-google"><i class="fa fa-google"></i></a>
            <a href="#" class="icon icon-social icon-circle icon-sm icon-twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="icon icon-social icon-circle icon-sm icon-youtube"><i class="fa fa-youtube"></i></a>
            <a href="#" class="icon icon-social icon-circle icon-sm icon-instagram"><i class="fa fa-instagram"></i></a>
        </div>
    </nav>

    <!-- Body Overlay -->
    <div id="body-overlay"></div>

</div>

<!-- Modal / Product -->
<!-- diindex-->

<!-- JS Plugins -->
<script src="assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="assets/plugins/tether/dist/js/tether.min.js"></script>
<script src="assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/plugins/slick-carousel/slick/slick.min.js"></script>
<script src="assets/plugins/jquery.appear/jquery.appear.js"></script>
<script src="assets/plugins/jquery.scrollto/jquery.scrollTo.min.js"></script>
<script src="assets/plugins/jquery.localscroll/jquery.localScroll.min.js"></script>
<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="assets/plugins/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.min.js"></script>
<script src="assets/plugins/twitter-fetcher/js/twitterFetcher_min.js"></script>
<script src="assets/plugins/skrollr/dist/skrollr.min.js"></script>
<script src="assets/plugins/animsition/dist/js/animsition.min.js"></script>

<!-- JS Core -->
<script src="assets/js/core.js"></script>

</body>

</html>
