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
                            <!--                            <li><a href="page-offers.php">Offers</a></li>-->
                            <li><a href="index.php?menu=contact">Contact</a></li>
                            <!--                            <li>-->
                            <!--                                <a href="index.php?menu=book">Book</a>-->
                            <!--                            </li>-->
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
                                    <a href="index.php?menu=waiters">Waiters</a>
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
        <div class="page-title border-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 push-lg-5">
                        <h1 class="mb-0">Waiters</h1>
                        <h4 class="text-muted mb-0">Check Orders for Kitchen</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section -->
        <section class="section section-bg-edge">

            <div class="image left bottom col-md-7">
                <div class="bg-image"><img src="assets/img/photos/some.png" alt=""></div>
            </div>

                <title>Caffe Tables</title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <body>
            <center>
                <div class="container">
                    <h2>Tables</h2>
                    <form>
                        <label class="checkbox-inline">
                            <div><a>Table 01</a></div>
                            <?php
                            foreach ($_SESSION['cart_item'] as $pilihan) { ?>
                                <div><input type="checkbox" value=""><?php echo $pilihan["id_makanan"]; ?><?php echo $pilihan["nama_makanan"]; ?><?php echo $pilihan["quantity"]; ?></a></span></div>
                                <?php
                            }
                            ?>
                        </label>
                    </form>
                </div>
            </center>s
<br><br>
            <?php
            if($_SESSION['approved_user'] == TRUE) {
                ?>

                <div class="form-group">
                    <input type="submit" class="utility-box-btn btn btn-secondary btn-block btn-lg btn-submit" value="Submit" name="btnSubmitUser"/>
                </div>
            <?php } ?>
            </body>



        </section>

        <!-- Section -->
        <section class="section section-lg dark bg-dark">

            <!-- BG Image -->
            <div class="bg-image bg-parallax"><img src="assets/img/photos/bg-croissant.jpg" alt=""></div>

            <div class="container text-center">
                <div class="col-lg-8 push-lg-2">
                    <h2 class="mb-3">Would you like to visit Us?</h2>
                    <h5 class="text-muted">Order foods and drinks even right now</h5>
                    <a href="index.php?menu=order" class="btn btn-primary"><span>Order Now!</span></a>
                    <!--                    <a href="book-a-table.php" class="btn btn-outline-primary"><span>Book a table</span></a>-->
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
                    }
                    $hasil = $hasil+$jumfin;
                    ?>
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
        <!--        <div class="module module-social">-->
        <!--            <h6 class="text-sm mb-3">Follow Us!</h6>-->
        <!--            <a href="#" class="icon icon-social icon-circle icon-sm icon-facebook"><i class="fa fa-facebook"></i></a>-->
        <!--            <a href="#" class="icon icon-social icon-circle icon-sm icon-google"><i class="fa fa-google"></i></a>-->
        <!--            <a href="#" class="icon icon-social icon-circle icon-sm icon-twitter"><i class="fa fa-twitter"></i></a>-->
        <!--            <a href="#" class="icon icon-social icon-circle icon-sm icon-youtube"><i class="fa fa-youtube"></i></a>-->
        <!--            <a href="#" class="icon icon-social icon-circle icon-sm icon-instagram"><i class="fa fa-instagram"></i></a>-->
        <!--        </div>-->
    </nav>

    <!-- Body Overlay -->
    <div id="body-overlay"></div>

</div>

<!-- Modal / Product -->
<!-- diindex -->

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
