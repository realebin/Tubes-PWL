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
<!-- CSS Quantity-->
    <style>
        input,
        textarea {
            border: 1px solid #eeeeee;
            box-sizing: border-box;
            margin: 0;
            outline: none;
            padding: 10px;
        }

        input[type="button"] {
            -webkit-appearance: button;
            cursor: pointer;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }

        .input-group {
            clear: both;
            margin: 15px 0;
            position: relative;
        }

        .input-group input[type='button'] {
            background-color: #eeeeee;
            min-width: 38px;
            width: auto;
            transition: all 300ms ease;
        }

        .input-group .button-minus,
        .input-group .button-plus {
            font-weight: bold;
            height: 38px;
            padding: 0;
            width: 38px;
            position: relative;
        }
        .input-group .quantity-field {
            position: relative;
            height: 38px;
            left: -6px;
            text-align: center;
            width: 62px;
            display: inline-block;
            font-size: 13px;
            margin: 0 0 5px;
            resize: vertical;
        }
        .button-plus {
            left: -13px;
        }

        input[type="number"] {
            -moz-appearance: textfield;
            -webkit-appearance: none;
        }

    </style>
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
                            if($_SESSION['approved_user'] == TRUE && $_SESSION['userrole'] == 'Dapur'){
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

                                </li>
                                <?php
                            }
                            ?>
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
                        <span class="cart-value">Rp.<?php $data = $hasil->fetch(); echo $data->getHarga(); ?></span>
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
        <?php
        if($_SESSION['approved_user'] == TRUE && $_SESSION['userrole'] == 'Admin'){ ?>
            <legend>Insert Menu</legend>
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="utility-box-content">
                <div class="form-group">
                    <label>Name :</label>
                    <input type="text" name="menunama" class="form-control" placeholder="Insert Name" required/>
                </div>
                <div class="form-group">
                    <label>Price :</label>
                    <input type="text" name="harga" class="form-control" placeholder="Insert Price" required/>
                </div><div class="form-group">
                    <label>Status :</label>
                    <input type="text" name="status" class="form-control" placeholder="Insert Status (1 or 0)" required/>
                </div>
                <div class="form-group">
                    <label>Category :</label>
                    <select name="kategori">
                        <option value="">-Select Category-</option>
                        <?php
                        //                            $catDao = new CategoryDaoImpl();
                        //                            $hasil = $catDao->getAllCategory();
                        while($data2 = $hasilcat->fetch()){
                            ?>
                            <option value="<?php echo $data2->getIdKategori(); ?>">
                                <?php echo $data2->getNama(); ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <button class="utility-box-btn btn btn-secondary btn-block btn-lg btn-submit"
                        type="submit" name="btnSubmitMenu" value="insertmenu">
                    <span class="description">Insert</span>
                </button>
            </div>
        </form>

        <?php }?>

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
                                        if($data->getKategori()->getIdKategori() == "1"){
                                    ?>
                                    <div class="menu-item menu-list-item">
                                        <div class="row align-items-center">
                                            <div class="col-sm-6 mb-2 mb-sm-0">
                                                <div><h6 class="mb-0"><?php echo $data->getNama();?></h6></div>
                                            </div>
                                            <div class="col-sm-6 text-sm-right form-inline">
                                                <span class="text-md mr-4"> Rp.<?php echo $data->getHarga(); ?></span>

                                                <!-------------------------------Button Cart--------------------------->
                                                <form method="post">
                                                    <input type="hidden" name="id_makanan" value="<?php echo $data->getIdMenu(); ?>" />
                                                    <input type="hidden" name="nama_makanan" value="<?php echo $data->getNama(); ?>" />
                                                    <input type="hidden" name="harga" value="<?php echo $data->getHarga(); ?>" />
                                                <input type="submit" name="btnAddCart" value="Add to cart" class="btn btn-outline-secondary btn-sm"/>
                                                <!-------------------------------Quantity--------------------------->
                                                <div class="input-group" style="margin-right: 0px;margin-left: auto;">
                                                    <input type="button" value="-" class="button-minus" data-field="quantity">
                                                    <input type="number" step="1" max="" value="1" name="quantity" class="quantity-field">
                                                    <input type="button" value="+" class="button-plus" data-field="quantity">
                                                </div>
                                                </form>

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
                                    if($data->getKategori()->getIdKategori() == "2"){
                                    ?>
                                    <div class="menu-item menu-list-item">
                                        <div class="row align-items-center">
                                            <div class="col-sm-6 mb-2 mb-sm-0">
                                                <h6 class="mb-0"><?php echo $data->getNama();?></h6>
                                            </div>
                                            <div class="col-sm-6 text-sm-right form-inline">
                                                <span class="text-md mr-4">  Rp.<?php echo $data->getHarga(); ?></span>
                                                <!-------------------------------Button Cart--------------------------->
                                                <form method="post">
                                                    <input type="hidden" name="id_makanan" value="<?php echo $data->getIdMenu(); ?>" />
                                                    <input type="hidden" name="nama_makanan" value="<?php echo $data->getNama(); ?>" />
                                                    <input type="hidden" name="harga" value="<?php echo $data->getHarga(); ?>" />
                                                    <input type="submit" name="btnAddCart" value="Add to cart" class="btn btn-outline-secondary btn-sm"/>
                                                    <!-------------------------------Quantity--------------------------->
                                                    <div class="input-group" style="margin-right: 0px;margin-left: auto;">
                                                        <input type="button" value="-" class="button-minus" data-field="quantity">
                                                        <input type="number" step="1" max="" value="1" name="quantity" class="quantity-field">
                                                        <input type="button" value="+" class="button-plus" data-field="quantity">
                                                    </div>
                                                </form>
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
                                    if($data->getKategori()->getIdKategori() == "3") {
                                        ?>
                                        <div class="menu-item menu-list-item">
                                            <div class="row align-items-center">
                                                <div class="col-sm-6 mb-2 mb-sm-0">
                                                    <h6 class="mb-0"><?php echo $data->getNama(); ?></h6>
                                                </div>
                                                <div class="col-sm-6 text-sm-right form-inline">
                                                <span class="text-md mr-4">  Rp.<?php echo $data->getHarga(); ?></span>
                                                    <!-------------------------------Button Cart--------------------------->
                                                    <form method="post">
                                                        <input type="hidden" name="id_makanan" value="<?php echo $data->getIdMenu(); ?>" />
                                                        <input type="hidden" name="nama_makanan" value="<?php echo $data->getNama(); ?>" />
                                                        <input type="hidden" name="harga" value="<?php echo $data->getHarga(); ?>" />
                                                        <input type="submit" name="btnAddCart" value="Add to cart" class="btn btn-outline-secondary btn-sm"/>
                                                        <!-------------------------------Quantity--------------------------->
                                                        <div class="input-group" style="margin-right: 0px;margin-left: auto;">
                                                            <input type="button" value="-" class="button-minus" data-field="quantity">
                                                            <input type="number" step="1" max="" value="1" name="quantity" class="quantity-field">
                                                            <input type="button" value="+" class="button-plus" data-field="quantity">
                                                        </div>
                                                    </form>
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
                                    if($data->getKategori()->getIdKategori() == "4") {
                                        ?>
                                        <div class="menu-item menu-list-item">
                                            <div class="row align-items-center">
                                                <div class="col-sm-6 mb-2 mb-sm-0">
                                                    <h6 class="mb-0"><?php echo $data->getNama(); ?></h6>
                                                </div>
                                                <div class="col-sm-6 text-sm-right form-inline">
                                                <span class="text-md mr-4"> Rp.<?php echo $data->getHarga(); ?></span>
                                                    <!-------------------------------Button Cart--------------------------->
                                                    <form method="post">
                                                        <input type="hidden" name="id_makanan" value="<?php echo $data->getIdMenu(); ?>" />
                                                        <input type="hidden" name="nama_makanan" value="<?php echo $data->getNama(); ?>" />
                                                        <input type="hidden" name="harga" value="<?php echo $data->getHarga(); ?>" />
                                                        <input type="submit" name="btnAddCart" value="Add to cart" class="btn btn-outline-secondary btn-sm"/>
                                                        <!-------------------------------Quantity--------------------------->
                                                        <div class="input-group" style="margin-right: 0px;margin-left: auto;">
                                                            <input type="button" value="-" class="button-minus" data-field="quantity">
                                                            <input type="number" step="1" max="" value="1" name="quantity" class="quantity-field">
                                                            <input type="button" value="+" class="button-plus" data-field="quantity">
                                                        </div>
                                                    </form>
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
                                        if($data->getKategori()->getIdKategori() == "5") {
                                            ?>
                                    <div class="menu-item menu-list-item">
                                        <div class="row align-items-center">
                                            <div class="col-sm-6 mb-2 mb-sm-0">
                                                <h6 class="mb-0"><?php echo $data->getNama(); ?></h6>
                                            </div>
                                            <div class="col-sm-6 text-sm-right form-inline">
                                                <span class="text-md mr-4"> Rp.<?php echo $data->getHarga(); ?></span>
                                                <!-------------------------------Button Cart--------------------------->
                                                <form method="post">
                                                    <input type="hidden" name="id_makanan" value="<?php echo $data->getIdMenu(); ?>" />
                                                    <input type="hidden" name="nama_makanan" value="<?php echo $data->getNama(); ?>" />
                                                    <input type="hidden" name="harga" value="<?php echo $data->getHarga(); ?>" />
                                                    <input type="submit" name="btnAddCart" value="Add to cart" class="btn btn-outline-secondary btn-sm"/>
                                                    <!-------------------------------Quantity--------------------------->
                                                    <div class="input-group" style="margin-right: 0px;margin-left: auto;">
                                                        <input type="button" value="-" class="button-minus" data-field="quantity">
                                                        <input type="number" step="1" max="" value="1" name="quantity" class="quantity-field">
                                                        <input type="button" value="+" class="button-plus" data-field="quantity">
                                                    </div>
                                                </form>


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
                                        if ($data->getKategori()->getIdKategori() == "6") {
                                            ?>
                                            <div class="menu-item menu-list-item">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <h6 class="mb-0"><?php echo $data->getNama(); ?></h6>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right form-inline">
                                                <span class="text-md mr-4">  Rp.<?php echo $data->getHarga(); ?></span>
                                                     <!-------------------------------Button Cart--------------------------->
                                                        <form method="post">
                                                            <input type="hidden" name="id_makanan" value="<?php echo $data->getIdMenu(); ?>" />
                                                            <input type="hidden" name="nama_makanan" value="<?php echo $data->getNama(); ?>" />
                                                            <input type="hidden" name="harga" value="<?php echo $data->getHarga(); ?>" />
                                                            <input type="submit" name="btnAddCart" value="Add to cart" class="btn btn-outline-secondary btn-sm"/>
                                                            <!-------------------------------Quantity--------------------------->
                                                            <div class="input-group" style="margin-right: 0px;margin-left: auto;">
                                                                <input type="button" value="-" class="button-minus" data-field="quantity">
                                                                <input type="number" step="1" max="" value="1" name="quantity" class="quantity-field">
                                                                <input type="button" value="+" class="button-plus" data-field="quantity">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-------------------------------------------------------------------------------------->
                </div>
            </div>
        </div>
<!----------------------------------------------------------------------------------------------------------------------------------------->
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
        <a href="index.php?menu=checkout" class="panel-cart-action btn btn-secondary btn-block btn-lg" name="btnCheckout"><span>Go to checkout</span></a>
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

<!-- JS Quantity -->
    <script>
        function incrementValue(e) {
            e.preventDefault();
            var fieldName = $(e.target).data('field');
            var parent = $(e.target).closest('div');
            var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

            if (!isNaN(currentVal)) {
                parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
            } else {
                parent.find('input[name=' + fieldName + ']').val(0);
            }
        }

        function decrementValue(e) {
            e.preventDefault();
            var fieldName = $(e.target).data('field');
            var parent = $(e.target).closest('div');
            var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

            if (!isNaN(currentVal) && currentVal > 0) {
                parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
            } else {
                parent.find('input[name=' + fieldName + ']').val(0);
            }
        }

        $('.input-group').on('click', '.button-plus', function(e) {
            incrementValue(e);
        });

        $('.input-group').on('click', '.button-minus', function(e) {
            decrementValue(e);
        });
    </script>
</body>

</html>
