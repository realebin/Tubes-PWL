<?php
//ob_start();
session_start();
if (!isset($_SESSION['approved_user'])) {
    $_SESSION['approved_user'] = FALSE;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>



    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

<!--nambah nyobain-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style5.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<!--sampe sini uy-->

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
include_once "Controller/KategoriController.php";
include_once "Controller/MenuPesanController.php";
include_once "Controller/PembayaranController.php";
include_once "Controller/PesananController.php";

include_once "function.php";
?>
<!-- nyoba cart -->
<?php
$menuControl = new MenuController();
$menuDao = new MenuDaoImpl();
$menu = new Menu();
$link = PDOUtility::get_koneksi();
if(!empty($_GET["action"])) {
    switch($_GET["action"]) {
        case "add":
            break;

        case "remove":
            if(!empty($_SESSION["cart_item"])) {
                foreach($_SESSION["cart_item"] as $k => $v) {
                    if($_GET["code"] == $k)
                        unset($_SESSION["cart_item"][$k]);
                    if(empty($_SESSION["cart_item"]))
                        unset($_SESSION["cart_item"]);
                }
            }
            break;

        case "empty":
            unset($_SESSION["cart_item"]);
            break;
    }
}
?>
<!--sampe sini-->




<!-- dari sini ubahnya-->
<?php
$nav = FILTER_INPUT(INPUT_GET, 'menu');
$userControl = new UserController();
$menuControl = new MenuController();
switch ($nav)
{
    case 'login' :
    {
        //dikasih include_once login disini soalnya gagal di UserControllernya
        //gagalnya karena stuck di login.php terus
        //jadinya di UserController nya require_once nya di index.php (seharusnya login.php)
        include_once 'login.php';
        $userControl->login();
        }
        break;
    case 'logout' :
        {
            $_SESSION['approved_user'] = FALSE;
            $_SESSION['userid'] = '';
            $_SESSION['username'] = '';
            $_SESSION['userrole'] = '';
            $_SESSION['name'] = '';
            $_SESSION["cart_item"] = array();
            session_unset();
            session_destroy();
            header('location:index.php');
        }
        break;
    case 'about' : include_once 'page-about.php';
        break;
    case 'management' :
        $userControl = new UserController();
        $userControl->olahUser();
        break;
    case 'dapoer' : include_once 'dapoer.php';
        break;
    case 'mnu' :
    {
        $commander = FILTER_INPUT(INPUT_GET, 'command');
        if($commander == 'edit')
        {
            $menuControl->ubahMenu();
        }
        else {
            $menuControl->olahMenu();
        }
    }
    break;
    case 'user' :
        {
            $commander = FILTER_INPUT(INPUT_GET, 'command');
            $userControl = new UserController();
            if($commander == 'edit')
            {
                $userControl->ubahUser();
            }
            else{
                $userControl->olahUser();
            }
        }
        break;

    case 'checkout' : include_once 'checkout.php';
        break;
    case 'contact' : include_once 'page-contact.php';
        break;
    case 'order' :
        {

            $menuControl = new MenuController();
            $commander = FILTER_INPUT(INPUT_GET, 'command');
            if(isset($commander) && $commander == 'edit' && $_SESSION['userrole'] == 'Admin')
            {
                $menuControl->ubahMenu();
            }
            else{
                $menuControl->olahMenu();
            }
        }
        break;
    default :
        if($_SESSION['approved_user']){
            include_once ('index.php');
        }else{
            $userControl->login();
        }
        break;
}
if(!isset($nav))
{
    $userControl->login();
}
?>
<!--            sampe sini-->
<!-- Body Wrapper -->
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
<!--                     Navigation-->
                    <nav class="module module-navigation left mr-4">
                        <ul id="nav-main" class="nav nav-main">
                            <li><a href="index.php">Home</a></li>
                            <li>
                                <a href="index.php?menu=about">About</a>
                            </li>
                            <li>
                                <a href="index.php?menu=order">Menu</a>

                            </li>
                            <li><a href="index.php?menu=contact">Contact</a></li>
                            <?php
                            if($_SESSION['approved_user'] == TRUE && $_SESSION['userrole'] == 'Admin'){

                                ?>
                                <li>
                                    <a href="index.php?menu=management">User Manage</a>
                                </li>
                            <?php
                            }
                            if($_SESSION['approved_user'] == TRUE && $_SESSION['userrole'] == 'Dapur' ){
                                ?>
                                <li>
                                    <a href="index.php?menu=dapoer">Dapoer</a>
                                </li>
                                <?php
                            }
                            if($_SESSION['approved_user'] == TRUE && $_SESSION['userrole'] == 'Waiters' ){
                                ?>
                                <li>
                                    <a href="index.php?menu=dapoer">Waiters</a>
                                </li>
                                <?php
                            }
                            if($_SESSION['approved_user']==TRUE){
                                ?>
                                <li>
                                    <a href="index.php?menu=logout">Logout</a>

                                </li>
                            <?php }
                                else{
                                    ?>
                                    <li>
                                    <a href="index.php?menu=login">Login</a>
<!--                                        <p>--><?php //echo $_SESSION['nama']?><!--</p>-->

                                </li>
                            <?php
                                }
                            ?>
                        </ul>
                    </nav>
                    <div class="module left">
<!--                        ini juga diubah a hrefnya-->
                        <a href="index.php?menu=order" class="btn btn-outline-secondary"><span>Order</span></a>

                    </div>
                    <div class ="module left"> <?php if($_SESSION['approved_user']==TRUE){
                            ?>
                            <p style="text-align: center ;alignment: center; font-size: 20px "> &nbsp;&nbsp;&nbsp;Welcome <?php echo $_SESSION['userrole']?></p>
                        <?php }?>
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

    <script type="text/javascript">
        function deleteCat(id) {
            if(confirm("Apakah Anda yakin ingin menghapus data dengan id: "+id))
            {
                window.location = "index.php?menu=kat&command=delete&id="+id;
            }
        }

        function editCat(id) {
            window.location = "index.php?menu=kat&command=edit&id="+id;
        }
        function deleteMenu(id){
            if(confirm("Apakah Anda yakin ingin menghapus data dengan id: "+id))
            {
                window.location = "index.php?menu=mnu&command=delete&id="+id;
            }
        }
        function editMenu(id) {
            window.location = "index.php?menu=mnu&command=edit&id="+id;
        }
        function editUser(id) {
            window.location = "index.php?menu=user&command=edit&id="+id;
        }
    </script>
    <!-- Content -->
    <div id="content">

        <!-- Section - Main -->
        <section class="section section-main section-main-1 bg-light">

            <div class="container dark">
                <div class="slide-container">
                    <div id="section-main-1-carousel-image" class="image inner-controls">
                        <div class="slide"><div class="bg-image"><img src="assets/img/photos/slider-pasta.jpg" alt=""></div></div>
                        <div class="slide"><div class="bg-image"><img src="assets/img/photos/slider-burger.jpg" alt=""></div></div>
                        <div class="slide"><div class="bg-image"><img src="assets/img/photos/slider-dessert.jpg" alt=""></div></div>
                    </div>
                    <div class="content dark">
                        <div id="section-main-1-carousel-content">
                            <div class="content-inner">
                                <h1>Delicious Pasta</h1>
                                <h5 class="text-muted mb-5">Order it now!</h5>
                                <div class="btn-group">
                                    <a href="index.php?menu=order" data-toggle="modal" class="btn btn-outline-primary btn-lg"><span>Order now!</span></a>
                                </div>
                            </div>
                            <div class="content-inner">
                                <h1>Delicious Burger</h1>
                                <h5 class="text-muted mb-5">Order it now!</h5>
                                <a href="index.php?menu=order" class="btn btn-outline-primary btn-lg"><span>Order now!</span></a>
                            </div>
                            <div class="content-inner">
                                <h1>Delicious Desserts</h1>
                                <h5 class="text-muted mb-5">Order it now!</h5>
                                <a href="index.php?menu=order" class="btn btn-outline-primary btn-lg"><span>Order now!</span></a>
                            </div>
                        </div>
                        <nav class="content-nav">
                            <a class="prev" href="#"><i class="ti-arrow-left"></i></a>
                            <a class="next" href="#"><i class="ti-arrow-right"></i></a>
                        </nav>
                    </div>
                </div>
            </div>

        </section>

        <!-- Section - About -->
        <section class="section section-bg-edge">

            <div class="image right col-md-6 push-md-6">
                <div class="bg-image"><img src="assets/img/photos/bg-food.jpg" alt=""></div>
            </div>

            <div class="container">
                <div class="col-lg-5 col-md-9">
                    <div class="rate mb-5 rate-lg"><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star"></i></div>
                    <h1>The best western food in Indonesia!</h1>
                    <p class="lead text-muted mb-5">Many Asians are very fascinated with western cuisine. Taste may be subjective but what makes them really attractive is probably due to the inception of the fast food industry – though today, we crave something more substantial. Mougs is the places in Indonesia that you, as an Asian, can enjoy really wholesome western meals.</p>
                    <div class="blockquotes">
                        <!-- Blockquote -->
                        <blockquote class="blockquote light animated" data-animation="fadeInLeft">
                            <div class="blockquote-content">
                                <div class="rate rate-sm mb-3"><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star"></i></div>
                                <p>It’ was super duper amazing feeling for may belly!</p>
                            </div>
                            <footer>
                                <img src="assets/img/avatars/lele.jpg" alt="">
                                <span class="name">Anastasia Levina<span class="text-muted">, Google</span></span>
                            </footer>
                        </blockquote>
                        <!-- Blockquote -->
                        <blockquote class="blockquote animated" data-animation="fadeInRight" data-animation-delay="300">
                            <div class="blockquote-content dark">
                                <div class="rate rate-sm mb-3"><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star"></i></div>
                                <p>Great food and great experience!</p>
                            </div>
                            <footer>
                                <img src="assets/img/avatars/ebin.PNG" alt="">
                                <span class="name">Febrina Anastasha<span class="text-muted">, LinkedIn</span></span>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>

        </section>

        <!-- Section - Steps -->
        <section class="section section-extended right dark">

            <div class="container bg-dark">
                <div class="row">
                    <div class="col-md-4">
                        <!-- Step -->
                        <div class="feature feature-1 mb-md-0">
                            <div class="feature-icon icon icon-primary"><i class="ti ti-shopping-cart"></i></div>
                            <div class="feature-content">
                                <h4 class="mb-2">Pick a dish</h4>
                                <p class="text-muted mb-0">Choose your favorite meal and order it as many as you want.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Step -->
                        <div class="feature feature-1 mb-md-0">
                            <div class="feature-icon icon icon-primary"><i class="ti ti-wallet"></i></div>
                            <div class="feature-content">
                                <h4 class="mb-2">Make a payment</h4>
                                <p class="text-muted mb-0">Go to order cart check the bill, and if that's right then pay your order. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Step -->
                        <div class="feature feature-1 mb-md-0">
                            <div class="feature-icon icon icon-primary"><i class="ti ti-package"></i></div>
                            <div class="feature-content">
                                <h4 class="mb-2">Recieve your food!</h4>
                                <p class="text-muted mb-3">Wait your food with happy feelings and your food will come to you as soon as posible.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- Section - Menu -->
        <section class="section pb-0 protrude">

            <div class="container">
                <h1 class="mb-6">Our menu</h1>
            </div>

            <div class="menu-sample-carousel carousel inner-controls" data-slick='{
                "dots": true,
                "slidesToShow": 3,
                "slidesToScroll": 1,
                "infinite": true,
                "responsive": [
                    {
                        "breakpoint": 991,
                        "settings": {
                            "slidesToShow": 2,
                            "slidesToScroll": 1
                        }
                    },
                    {
                        "breakpoint": 690,
                        "settings": {
                            "slidesToShow": 1,
                            "slidesToScroll": 1
                        }
                    }
                ]
            }'>
                <!-- Menu Sample -->
                <div class="menu-sample">
                    <a href="index.php?menu=order">
                        <img src="assets/img/photos/menu-sample-burgers.jpg"  alt="" class="image">
                        <h3 class="title">Burgers</h3>
                    </a>
                </div>
                <!-- Menu Sample -->
                <div class="menu-sample">
                    <a href="index.php?menu=order">
                        <img src="assets/img/photos/menu-sample-pizza.jpg" alt="" class="image">
                        <h3 class="title">Pizza</h3>
                    </a>
                </div>
                <!-- Menu Sample -->
                <div class="menu-sample">
                    <a href="index.php?menu=order">
                        <img src="assets/img/photos/menu-sample-sushi.jpg" alt="" class="image">
                        <h3 class="title">Sushi</h3>
                    </a>
                </div>
                <!-- Menu Sample -->
                <div class="menu-sample">
                    <a href="index.php?menu=order">
                        <img src="assets/img/photos/menu-sample-pasta.jpg" alt="" class="image">
                        <h3 class="title">Pasta</h3>
                    </a>
                </div>
                <!-- Menu Sample -->
                <div class="menu-sample">
                    <a href="index.php?menu=order">
                        <img src="assets/img/photos/menu-sample-dessert.jpg" alt="" class="image">
                        <h3 class="title">Desserts</h3>
                    </a>
                </div>
                <!-- Menu Sample -->
                <div class="menu-sample">
                    <a href="index.php?menu=order">
                        <img src="assets/img/photos/menu-sample-drinks.jpg" alt="" class="image">
                        <h3 class="title">Drinks</h3>
                    </a>
                </div>

            </div>

        </section>

        <!-- Section - Offers -->
        <section class="section bg-light">

        </section>

        <!-- Section -->
        <section class="section section-lg dark bg-dark">

            <!-- BG Image -->
            <div class="bg-image bg-parallax"><img src="assets/img/photos/bg-croissant.jpg" alt=""></div>

            <div class="container text-center">
                <div class="col-lg-8 push-lg-2">
                    <h2 class="mb-3">Check our promo video!</h2>
                    <h5 class="text-muted">Book a table even right now or make an online order!</h5>
                    <button class="btn-play" data-toggle="video-modal" data-target="#modalVideo" data-video="https://www.youtube.com/embed/F32P-LVXonM"></button>
                </div>
            </div>

        </section>


        <!-- Footer -->
        <footer id="footer" class="bg-dark dark">

            <div class="container">
                <!-- Footer 1st Row -->
                <div class="footer-first-row row">
                    <div class="col-lg-3 text-center">
                        <a href="index.php"><img src="assets/img/logoMougsPutih.png" alt="" width="200" class="mt-5 mb-5"></a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h5 class="text-muted">Latest News About Mougs</h5>
                        <ul class="list-posts">
                            <li>
                                <a class="title">Mougs get Michellin Star Rewards at 2025.</a>
                            </li>
                            <li>
                                <a class="title">The best Western Restaurant in Town.</a>
                            </li>
                            <li>
                                <a class="title">Specialitation of Burger.</a>
                            </li>
                        </ul>
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
                    </div>
                </div>
                <!-- Footer 2nd Row -->
                <div class="footer-second-row">
                    <span class="text-muted">Copyright Soup 2017©. Made with love by Suelo.</span>
                </div>
            </div>

            <!-- Back To Top -->
            <a onclick="topFunction()" id="back-to-top"><i class="ti ti-angle-up"></i></a>
            <script>
                function topFunction() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }
            </script>


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
                    <tr class="title">
                    <td> <span class="caption text-muted"><a href="#productModal" data-toggle="modal">Id Menu</a></span></td>
                    <td><span class="caption text-muted"><a href="#productModal" data-toggle="modal">Nama Makanan</a></span></td>
                    <td><span class="caption text-muted"><a href="#productModal" data-toggle="modal">Quantity</a></span></td>
                    <td><span class="caption text-muted"><a href="#productModal" data-toggle="modal">Harga</a></span></td>
                    </tr>
                        <?php
                        foreach ($_SESSION['cart_item'] as $pilihan) { ?>
                    <tr class="title">
                        <td><span class="caption text-muted"><a href="#productModal" data-toggle="modal"><?php echo $pilihan["id_makanan"]; ?></a></span></td>
                        <td><span class="caption text-muted"><a href="#productModal" data-toggle="modal"><?php echo $pilihan["nama_makanan"]; ?></a></span></td>
                        <td><span class="caption text-muted"><a href="#productModal" data-toggle="modal"><?php echo $pilihan["quantity"]; ?></a></span></td>
                        <td><span class="caption text-muted"><a href="#productModal" data-toggle="modal"> Rp.<?php echo $pilihan["quantity"] * $pilihan["harga"] ; ?></a></span></td>
                    </tr>
                            <?php
                        }
                        ?>
                            <?php
                            $jumfin = 0;
                            foreach ($_SESSION['cart_item'] as $pilihan) {
                                $jumlah = $pilihan["quantity"] * $pilihan["harga"];
                                $jumfin = $jumfin + $jumlah;
                            }?>
                    <tr class="title">
                         <td><span class="caption text-muted"><a href="#productModal" data-toggle="modal">Subtotal</a></span></td>
                        <td><span class="caption text-muted"><a href="#productModal" data-toggle="modal"></a></span></td>
                         <td><span class="caption text-muted"><a href="#productModal" data-toggle="modal"></a></span></td>
                         <td><span class="caption text-muted"><a href="#productModal" data-toggle="modal">Rp. <?php echo $jumfin?></a></span></td>
                    </tr>
                </table>
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


<!-- Video Modal / Demo -->
<div class="modal modal-video fade" id="modalVideo" role="dialog">
    <button class="close" data-dismiss="modal"><i class="ti-close"></i></button>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <iframe height="500"></iframe>
        </div>
    </div>
</div>

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
