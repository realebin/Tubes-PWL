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

<script type="text/javascript" src="jquery-3.4.1.js"></script>
<script type="text/javascript" src="jquery-3.4.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="datatables/datatables.css"/>
<link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>

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
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    </header>
    <!-- Content -->
    <div id="content">
    <!-- Page Title -->
    <div class="page-title bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 push-lg-4">
                    <h1 class="mb-0">User Management</h1>
                    <h4 class="text-muted mb-0">Some informations about our User</h4>
                </div>
            </div>
        </div>
    </div>

    <?php
    if($_SESSION['approved_user'] == TRUE) {
        ?>

        <fieldset>
            <legend>Manage User</legend>
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="utility-box-content">
                    <div class="form-group">
                        <label>Role :</label>
                        <input type="text" name="role" class="form-control" placeholder="Waiter, Cashier, Kitchen"/>
                    </div>
                    <div class="form-group">
                        <label>Nama :</label>
                        <input type="text" name="nama" class="form-control" placeholder="Name"/>
                    </div>
                    <div class="form-group">
                        <label>Username :</label>
                        <td><input type="text" name="uname" class="form-control" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                        <label>Password :</label>
                        <input type="text" name="pwd" class="form-control" placeholder="Password"/>
                    </div>
<!--                    <div class="form-group">-->
<!--                        <label>Retype Password :</label>-->
<!--                        <input type="text" name="rpwd" class="form-control" placeholder=" Re-type Password"/>-->
<!--                    </div>-->

                    <?php
                    if($_SESSION['approved_user'] == TRUE) {
                        ?>

                        <div class="form-group">
                            <input type="submit" class="utility-box-btn btn btn-secondary btn-block btn-lg btn-submit" value="Submit" name="btnSubmitUser"/>
                        </div>
                    <?php } ?>



                </div>
            </form>
            <?php
            $msg = FILTER_INPUT(INPUT_GET, 'msg');
            if (isset($msg)) {
                if ($msg == 'sukses') {
                    echo '<p style="color:green;">Data berhasil disimpan.</p>';
                } else if ($msg == 'gagal') {
                    echo '<p style="color:red;">Data gagal disimpan.</p>';
                } else if ($msg == 'ext') {
                    echo '<p style="color:red;">Data gagal disimpan karena file cover tidak sesuai typenya.</p>';
                }
                else if ($msg == 'suksesu') {
                    echo '<p style="color:green;">Data berhasil diubah.</p>';
                } else if ($msg == 'gagalu') {
                    echo '<p style="color:red;">Data gagal diubah.</p>';
                }
                else if ($msg == 'suksesx') {
                    echo '<p style="color:green;">Data berhasil dihapus.</p>';
                } else {
                    echo '<p style="color:red;">Data gagal dihapus.</p>';
                }

            }
            ?>
        </fieldset>
        <?php
    }
    ?>

    <table class="display" id="user" style="text-align: center">
        <thead>
        <tr>
            <th>ID User</th>
            <th>Role</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        /* @var $data as User*/
        foreach ($hasilUser as $data) {
            echo '<tr>';
                echo '<td>'.$data->getIdUser().'</td>';
                echo '<td>'.$data->getRole().'</td>';
                echo '<td>'.$data->getNama().'</td>';
                echo '<td>'.$data->getUsername().'</td>';
                echo '<td>'.$data->getPassword().'</td>';
                echo '<td><input type="button" onclick="editUser('.$data->getIdUser().')" value="Edit"></td>';
           echo '</tr>';
       }?>

        </tbody>
    </table>


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
</div>
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
<!--di index-->

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

<!-- JS Google Map -->
<script src="https://maps.googleapis.com/maps/api/js"></script>

<script type="text/javascript" src="datatables/datatables.js"></script>
<script type="text/javascript" src="datatables/datatables.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#user').DataTable();
    });
</script>
</body>
</html>