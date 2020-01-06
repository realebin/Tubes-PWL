<?php
if($_SESSION['approved_user'] == FALSE) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>

        <!-- Meta -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <!-- Title -->
        <title>Mougs - ★★★★☆ Restaurant</title>

        <!-- Favicons -->
        <link rel="shortcut icon" href="assets/img/favicon.png">
        <link rel="apple-touch-icon" href="assets/img/favicon_60x60.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon_76x76.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon_120x120.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon_152x152.png">

        <!-- CSS Plugins -->
        <link rel="stylesheet" href="assets/plugins/bootstrap/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/plugins/slick-carousel/slick/slick.css"/>
        <link rel="stylesheet" href="assets/plugins/animate.css/animate.min.css"/>
        <link rel="stylesheet" href="assets/plugins/animsition/dist/css/animsition.min.css"/>

        <!-- CSS Icons -->
        <link rel="stylesheet" href="assets/css/themify-icons.css"/>
        <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css"/>

        <!-- CSS Theme -->
        <link id="theme" rel="stylesheet" href="assets/css/themes/theme-beige.min.css"/>

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
                <a href="#" id="nav-toggle"
                   data-toggle="panel-mobile"><span></span><span></span><span></span><span></span></a>
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

            <!-- Section -->
            <section class="section section-lg bg-dark">

                <!-- Video BG -->
<!--                https://youtu.be/t4gN-iqeY0E-->
                <div class="bg-video"
                     data-property="{videoURL:'https://youtu.be/F32P-LVXonM', showControls: false, containment:'self',startAt:1,stopAt:39,mute:true,autoPlay:true,loop:true,opacity:0.8,quality:'hd1080'}"></div>
                <div class="bg-image bg-video-placeholder zooming"><img src="assets/img/photos/bg-restaurant.jpg"
                                                                        alt=""></div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 push-lg-3">
                            <!-- Book a Table -->
                            <div class="utility-box">
                                <div class="utility-box-title bg-dark dark">
                                    <div class="bg-image"><img src="assets/img/photos/modal-review.jpg" alt=""></div>
                                    <div>
                                        <span class="icon icon-primary"><i class="ti ti-bookmark-alt"></i></span>
                                        <h4 class="mb-0">Login</h4>
                                        <p class="lead text-muted mb-0">This login only for staff</p>
                                    </div>
                                </div>
                                <form action="" method="POST">
                                    <div class="utility-box-content">
                                        <div class="form-group">
                                            <label>Username :</label>
                                            <input type="text" name="uname" class="form-control" required/>
                                        </div>
                                        <div class="form-group">
                                            <label>Password :</label>
                                            <input type="password" name="pwd" class="form-control" required/>
                                        </div>
                                        <button class="utility-box-btn btn btn-secondary btn-block btn-lg btn-submit"
                                                type="submit" name="btnLogin">
                                            <span class="description">Login</span>
                                            <!--                                    <span class="success">-->
                                            <!--                                        <svg x="0px" y="0px" viewBox="0 0 32 32"><path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/></svg>-->
                                            <!--                                    </span>-->
                                            <!--                                    <span class="error">Try again...</span>-->
                                        </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!-- Footer -->
            <footer id="footer" class="bg-dark dark">

                <div class="container">
                    <!-- Footer 1st Row -->
                    <div class="footer-first-row row">
                        <div class="col-lg-3 text-center">
                            <a href="index.php"><img src="assets/img/logoMougsPutih.png" alt="" width="200"
                                                     class="mt-5 mb-5"></a>
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
                            <form action="//suelo.us12.list-manage.com/subscribe/post-json?u=ed47dbfe167d906f2bc46a01b&amp;id=24ac8a22ad"
                                  id="sign-up-form" class="sign-up-form validate-form mb-3" method="POST">
                                <div class="input-group">
                                    <input name="EMAIL" id="mce-EMAIL" type="email" class="form-control"
                                           placeholder="Tap your e-mail..." required>
                                    <span class="input-group-btn">
                                    <button class="btn btn-primary btn-submit" type="submit">
                                        <span class="description">Subscribe</span>
                                        <span class="success">
                                            <svg x="0px" y="0px" viewBox="0 0 32 32"><path
                                                        stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79"
                                                        fill="none" stroke="#FFFFFF" stroke-width="2"
                                                        stroke-linecap="square" stroke-miterlimit="10"
                                                        d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/></svg>
                                        </span>
                                        <span class="error">Try again...</span>
                                    </button>
                                </span>
                                </div>
                            </form>
<!--                            <h5 class="text-muted mb-3">Social Media</h5>-->
<!--                            <a href="#" class="icon icon-social icon-circle icon-sm icon-facebook"><i-->
<!--                                        class="fa fa-facebook"></i></a>-->
<!--                            <a href="#" class="icon icon-social icon-circle icon-sm icon-google"><i-->
<!--                                        class="fa fa-google"></i></a>-->
<!--                            <a href="#" class="icon icon-social icon-circle icon-sm icon-twitter"><i-->
<!--                                        class="fa fa-twitter"></i></a>-->
<!--                            <a href="#" class="icon icon-social icon-circle icon-sm icon-youtube"><i-->
<!--                                        class="fa fa-youtube"></i></a>-->
<!--                            <a href="#" class="icon icon-social icon-circle icon-sm icon-instagram"><i-->
<!--                                        class="fa fa-instagram"></i></a>-->
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
                                <span class="name"><a href="#productModal"
                                                      data-toggle="modal">Pizza Chicked BBQ</a></span>
                                <span class="caption text-muted">26”, deep-pan, thin-crust</span>
                            </td>
                            <td class="price">$9.82</td>
                            <td class="actions">
                                <a href="#productModal" data-toggle="modal" class="action-icon"><i
                                            class="ti ti-pencil"></i></a>
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
                                <a href="#productModal" data-toggle="modal" class="action-icon"><i
                                            class="ti ti-pencil"></i></a>
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
                                <a href="#productModal" data-toggle="modal" class="action-icon"><i
                                            class="ti ti-pencil"></i></a>
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
                            <div class="col-7 text-right text-muted">Devliery:</div>
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
<!--            <div class="module module-social">-->
<!--                <h6 class="text-sm mb-3">Follow Us!</h6>-->
<!--                <a href="#" class="icon icon-social icon-circle icon-sm icon-facebook"><i-->
<!--                            class="fa fa-facebook"></i></a>-->
<!--                <a href="#" class="icon icon-social icon-circle icon-sm icon-google"><i class="fa fa-google"></i></a>-->
<!--                <a href="#" class="icon icon-social icon-circle icon-sm icon-twitter"><i class="fa fa-twitter"></i></a>-->
<!--                <a href="#" class="icon icon-social icon-circle icon-sm icon-youtube"><i class="fa fa-youtube"></i></a>-->
<!--                <a href="#" class="icon icon-social icon-circle icon-sm icon-instagram"><i class="fa fa-instagram"></i></a>-->
<!--            </div>-->
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
    <?php
}
else{
    include_once 'index.php';
}
?>