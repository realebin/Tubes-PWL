<!DOCTYPE html>
<html lang="en">
<head>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Title -->
<title>Soup - Restaurant with Online Ordering System Template</title>

<!-- Favicons -->
<link rel="shortcut icon" href="../assets/img/favicon.png">
<link rel="apple-touch-icon" href="../assets/img/favicon_60x60.png">
<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/favicon_76x76.png">
<link rel="apple-touch-icon" sizes="120x120" href="../assets/img/favicon_120x120.png">
<link rel="apple-touch-icon" sizes="152x152" href="../assets/img/favicon_152x152.png">

<!-- CSS Plugins -->
<link rel="stylesheet" href="../assets/plugins/bootstrap/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="../assets/plugins/slick-carousel/slick/slick.css" />
<link rel="stylesheet" href="../assets/plugins/animate.css/animate.min.css" />
<link rel="stylesheet" href="../assets/plugins/animsition/dist/css/animsition.min.css" />

<!-- CSS Icons -->
<link rel="stylesheet" href="../assets/css/themify-icons.css" />
<link rel="stylesheet" href="../assets/plugins/font-awesome/css/font-awesome.min.css" />

<!-- CSS Theme -->
<link id="theme" rel="stylesheet" href="../assets/css/themes/theme-beige.min.css" />

</head>

<body>

<!-- Body Wrapper -->
<div id="body-wrapper" class="animsition">

    <!-- Header -->
    <header id="header" class="light">

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- Logo -->
                    <div class="module module-logo dark">
                        <a href="../index.php">
                            <img src="../assets/img/logo-light.svg" alt="" width="88">
                        </a>
                    </div>
                </div>
                <div class="col-md-7">
                    <!-- Navigation -->
                    <nav class="module module-navigation left mr-4">
                        <ul id="nav-main" class="nav nav-main">
                            <li class="has-dropdown">
                                <a href="#">Home</a>
                                <div class="dropdown-container">
                                    <ul>
                                        <li><a href="../index.php">Home Basic</a></li>
                                        <li><a href="index-slider.php">Home Fullwidth Slider</a></li>
                                        <li><a href="index-video.php">Home Video</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-dropdown">
                                <a href="#">About</a>
                                <div class="dropdown-container">
                                    <ul class="dropdown-mega">
                                        <li><a href="../page-about.php">About Us</a></li>
                                        <li><a href="page-services.php">Services</a></li>
                                        <li><a href="page-gallery.php">Gallery</a></li>
                                        <li><a href="page-reviews.php">Reviews</a></li>
                                        <li><a href="page-faq.php">FAQ</a></li>
                                    </ul>
                                    <div class="dropdown-image">
                                        <img src="../assets/img/photos/dropdown-about.jpg" alt="">
                                    </div>
                                </div>
                            </li>
                            <li class="has-dropdown">
                                <a href="#">Menu</a>
                                <div class="dropdown-container">
                                    <ul>
                                        <li class="has-dropdown">
                                            <a href="#">List</a>
                                            <ul>
                                                <li><a href="../menu-list-navigation.php">Navigation</a></li>
                                                <li><a href="menu-list-collapse.php">Collapse</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#">Grid</a>
                                            <ul>
                                                <li><a href="menu-grid-navigation.php">Navigation</a></li>
                                                <li><a href="menu-grid-collapse.php">Collapse</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="page-offers.php">Offers</a></li>
                            <li><a href="../page-contact.php">Contact</a></li>
                            <li class="has-dropdown">   
                                <a href="#">More</a>
                                <div class="dropdown-container">
                                    <ul class="dropdown-mega">
                                        <li><a href="../book-a-table.php">Book a table</a></li>
                                        <li><a href="../checkout.php">Checkout</a></li>
                                        <li><a href="../confirmation.php">Confirmation</a></li>
                                        <li><a href="blog.php">Blog</a></li>
                                        <li><a href="blog-sidebar.php">Blog + Sidebar</a></li>
                                        <li><a href="blog-post.php">Blog Post</a></li>
                                        <li><a href="documentation.php">Documentation</a></li>
                                    </ul>
                                    <div class="dropdown-image">
                                        <img src="../assets/img/photos/dropdown-more.jpg" alt="">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <div class="module left">
                        <a href="../menu-list-navigation.php" class="btn btn-outline-secondary"><span>Order</span></a>
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
            <a href="../index.php">
                <img src="../assets/img/logo-horizontal-dark.svg" alt="">
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
                        <h1 class="mb-0">Blog</h1>
                        <h4 class="text-muted mb-0">Some informations about our restaurant</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div class="page-content bg-light">

            <div class="container clearfix">
                <div class="main left">
                    <!-- Post / Item -->
                    <article class="post post-wide animated" data-animation="fadeIn">
                        <div class="post-image"><img src="../assets/img/posts/post01.jpg" alt=""></div>
                        <div class="post-content">
                            <ul class="post-meta">
                                <li>24 July, 2016</li>
                                <li>by Johnatan Doe</li>
                            </ul>
                            <h4><a href="blog-post.php">Delicious idea for your Sunday dessert</a></h4>
                            <p>Nulla leo lectus, commodo porttitor lacus a, placerat facilisis ligula.</p>
                        </div>
                    </article>
                    <!-- Post / Item -->
                    <article class="post post-wide animated" data-animation="fadeIn">
                        <div class="post-image"><img src="../assets/img/posts/post02.jpg" alt=""></div>
                        <div class="post-content">
                            <ul class="post-meta">
                                <li>24 July, 2016</li>
                                <li>by Johnatan Doe</li>
                            </ul>
                            <h4><a href="blog-post.php">How to make perfect Pasta?</a></h4>
                            <p>Nulla leo lectus, commodo porttitor lacus a, placerat facilisis ligula.</p>
                        </div>
                    </article>
                    <!-- Post / Item -->
                    <article class="post post-wide animated" data-animation="fadeIn">
                        <div class="post-image"><img src="../assets/img/posts/post03.jpg" alt=""></div>
                        <div class="post-content">
                            <ul class="post-meta">
                                <li>24 July, 2016</li>
                                <li>by Johnatan Doe</li>
                            </ul>
                            <h4><a href="blog-post.php">Delicious idea for your Sunday dessert</a></h4>
                            <p>Nulla leo lectus, commodo porttitor lacus a, placerat facilisis ligula.</p>
                        </div>
                    </article>
                    <!-- Post / Item -->
                    <article class="post post-wide animated" data-animation="fadeIn">
                        <div class="post-image"><img src="../assets/img/posts/post04.jpg" alt=""></div>
                        <div class="post-content">
                            <ul class="post-meta">
                                <li>24 July, 2016</li>
                                <li>by Johnatan Doe</li>
                            </ul>
                            <h4><a href="blog-post.php">How to make perfect Pasta?</a></h4>
                            <p>Nulla leo lectus, commodo porttitor lacus a, placerat facilisis ligula.</p>
                        </div>
                    </article>
                    <!-- Post / Item -->
                    <article class="post post-wide animated" data-animation="fadeIn">
                        <div class="post-image"><img src="../assets/img/posts/post05.jpg" alt=""></div>
                        <div class="post-content">
                            <ul class="post-meta">
                                <li>24 July, 2016</li>
                                <li>by Johnatan Doe</li>
                            </ul>
                            <h4><a href="blog-post.php">How to make perfect Pasta?</a></h4>
                            <p>Nulla leo lectus, commodo porttitor lacus a, placerat facilisis ligula.</p>
                        </div>
                    </article>
                    <!-- Pagination -->
                    <nav aria-label="Page navigation" class="mt-5">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <i class="ti-arrow-left"></i>
                                    <span class="sr-only">Previous</span>
                              </a>
                            </li>
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <i class="ti-arrow-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="sidebar right">
                    <!-- Widget - Newsletter -->
                    <div class="widget widget-newsletter">
                        <h5>Subscribe Us</h5>
                        <form action="//suelo.us12.list-manage.com/subscribe/post-json?u=ed47dbfe167d906f2bc46a01b&amp;id=24ac8a22ad" id="sign-up-form2" class="sign-up-form validate-form" method="POST"
                            data-message-error="Opps... Something went wrong - please try again later"
                            data-message-success="Yeah! You will recieve a confirmation email soon..."
                        >
                            <div class="form-group mb-0">
                                <input type="email"  name="EMAIL" id="mce-EMAIL2" value="" class="form-control" placeholder="Your e-mail..." required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-secondary btn-block">
                                    <span>Subscribe!</span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <hr>
                    <!-- Widget - Recent posts -->
                    <div class="widget widget-recent-posts">
                        <h5>Recent Posts</h5>
                        <ul class="list-posts">
                            <li>
                                <a href="blog-post.php" class="title">How to create effective webdeisign?</a>
                                <span class="date">February 14, 2015</span>
                            </li>
                            <li>
                                <a href="blog-post.php" class="title">Awesome weekend in Polish mountains!</a>
                                <span class="date">February 14, 2015</span>
                            </li>
                            <li>
                                <a href="blog-post.php" class="title">How to create effective webdeisign?</a>
                                <span class="date">February 14, 2015</span>
                            </li>
                        </ul>
                    </div>
                    <hr>
                    <!-- Widget - Twitter -->
                    <div class="widget widget-twitter">
                        <h5>Latest Tweets</h5>
                        <div id="twitter-feed" class="twitter-feed"></div>
                    </div>
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <footer id="footer" class="bg-dark dark">
            
            <div class="container">
                <!-- Footer 1st Row -->
                <div class="footer-first-row row">
                    <div class="col-lg-3 text-center">
                        <a href="../index.php"><img src="../assets/img/logo-light.svg" alt="" width="88" class="mt-5 mb-5"></a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h5 class="text-muted">Latest news</h5>
                        <ul class="list-posts">
                            <li>
                                <a href="blog-post.php" class="title">How to create effective webdeisign?</a>
                                <span class="date">February 14, 2015</span>
                            </li>
                            <li>
                                <a href="blog-post.php" class="title">Awesome weekend in Polish mountains!</a>
                                <span class="date">February 14, 2015</span>
                            </li>
                            <li>
                                <a href="blog-post.php" class="title">How to create effective webdeisign?</a>
                                <span class="date">February 14, 2015</span>
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
                        <h5 class="text-muted mb-3">Social Media</h5>
                        <a href="#" class="icon icon-social icon-circle icon-sm icon-facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="icon icon-social icon-circle icon-sm icon-google"><i class="fa fa-google"></i></a>
                        <a href="#" class="icon icon-social icon-circle icon-sm icon-twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="icon icon-social icon-circle icon-sm icon-youtube"><i class="fa fa-youtube"></i></a>
                        <a href="#" class="icon icon-social icon-circle icon-sm icon-instagram"><i class="fa fa-instagram"></i></a>
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
        <a href="../checkout.php" class="panel-cart-action btn btn-secondary btn-block btn-lg"><span>Go to checkout</span></a>
    </div>

    <!-- Panel Mobile -->
    <nav id="panel-mobile">
        <div class="module module-logo bg-dark dark">
            <a href="#">
                <img src="../assets/img/logo-light.svg" alt="" width="88">
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
<div class="modal fade" id="productModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header modal-header-lg dark bg-dark">
                <div class="bg-image"><img src="../assets/img/photos/modal-add.jpg" alt=""></div>
                <h4 class="modal-title">Specify your dish</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
            </div>
            <div class="modal-product-details">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h6 class="mb-0">Boscaiola Pasta</h6>
                        <span class="text-muted">Pasta, Cheese, Tomatoes, Olives</span>
                    </div>
                    <div class="col-3 text-lg text-right">$9.00</div>
                </div>
            </div>
            <div class="modal-body panel-details-container">
                <!-- Panel Details / Size -->
                <div class="panel-details">
                    <h5 class="panel-details-title">
                        <label class="custom-control custom-radio">
                            <input name="radio_title_size" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                        </label>
                        <a href="#panelDetailsSize" data-toggle="collapse">Size</a>
                    </h5>
                    <div id="panelDetailsSize" class="collapse show">
                        <div class="panel-details-content">
                            <div class="form-group">
                                <label class="custom-control custom-radio">
                                    <input name="radio_size" type="radio" class="custom-control-input" checked>
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Small - 100g ($9.99)</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="custom-control custom-radio">
                                    <input name="radio_size" type="radio" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Medium - 200g ($14.99)</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="custom-control custom-radio">
                                    <input name="radio_size" type="radio" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Large - 350g ($21.99)</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Panel Details / Additions -->
                <div class="panel-details">
                    <h5 class="panel-details-title">
                        <label class="custom-control custom-radio">
                            <input name="radio_title_additions" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                        </label>
                        <a href="#panelDetailsAdditions" data-toggle="collapse">Additions</a>
                    </h5>
                    <div id="panelDetailsAdditions" class="collapse">
                        <div class="panel-details-content">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Tomato ($1.29)</span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Ham ($1.29)</span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Chicken ($1.29)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Cheese($1.29)</span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Bacon ($1.29)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Panel Details / Other -->
                <div class="panel-details">
                    <h5 class="panel-details-title">
                        <label class="custom-control custom-radio">
                            <input name="radio_title_other" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                        </label>
                        <a href="#panelDetailsOther" data-toggle="collapse">Other</a>
                    </h5>
                    <div id="panelDetailsOther" class="collapse">
                        <textarea cols="30" rows="4" class="form-control" placeholder="Put this any other informations..."></textarea>
                    </div>
                </div>
            </div>
            <button type="button" class="modal-btn btn btn-secondary btn-block btn-lg" data-dismiss="modal"><span>Add to Cart</span></button>
        </div>
    </div>
</div>

<!-- JS Plugins -->
<script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="../assets/plugins/tether/dist/js/tether.min.js"></script>
<script src="../assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../assets/plugins/slick-carousel/slick/slick.min.js"></script>
<script src="../assets/plugins/jquery.appear/jquery.appear.js"></script>
<script src="../assets/plugins/jquery.scrollto/jquery.scrollTo.min.js"></script>
<script src="../assets/plugins/jquery.localscroll/jquery.localScroll.min.js"></script>
<script src="../assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="../assets/plugins/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.min.js"></script>
<script src="../assets/plugins/twitter-fetcher/js/twitterFetcher_min.js"></script>
<script src="../assets/plugins/skrollr/dist/skrollr.min.js"></script>
<script src="../assets/plugins/animsition/dist/js/animsition.min.js"></script>

<!-- JS Core -->
<script src="../assets/js/core.js"></script>

</body>

</html>