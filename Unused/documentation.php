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

<!-- CSS Code HighLighter -->
<link rel="stylesheet" href="../assets/css/prettify.css" />

<!-- CSS Theme -->
<link id="theme" rel="stylesheet" href="../assets/css/themes/theme-beige.min.css" />

</head>

<body data-spy="scroll" data-target="#side-navigation">

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
                                        <li><a href="book-a-table.php">Book a table</a></li>
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

    <section class="section section-lg bg-light">

        <div class="container" data-local-scroll>
            <div class="col-lg-8 push-lg-4">
                <h1>Documentation</h1>
                <p class="text-muted lead">This page includes all designed elements which you may use while creating sites based on this template.</p>
                <a href="#main" class="btn btn-outline-primary btn-lg"><span>Start Exploring <i class="i-after ti-arrow-down"></i></span></a>
                <a href="chooser.php" class="btn btn-secondary btn-lg"><span>Go to chooser</span></a>
            </div>
        </div>
        
    </section>
		
	<section id="main" class="container">

        <div class="row">
            <div class="col-md-9"> 

                <!-- Getting Started -->
                <div id="start">

                    <h1 class="border-bottom pb-3">Getting Started</h1>
                    <p class="lead">Soup is a HTML/CSS template based on <a href="http://v4-alpha.getbootstrap.com/" target="_blank" class="text-primary">Bootstrap 4</a> framework. It allows to built modern, fast and mobile friendly websites for restaurants. What's more it includes componentes for online ordering system.</p>
                    
                    <!-- HTML Structure -->
                    <div id="htmlStructure" class="py-3">
                        <h2>HTML Structure</h2>
                        <p class="lead">This is the base of each HTML file:</p>
<pre class="prettyprint">
&lt;!-- Header --&gt;
&lt;header id="header"&gt;
    ...
&lt;/header&gt;
&lt;!-- Header / End --&gt;

&lt;!-- Content --&gt;
&lt;div id="content"&gt;
		
	&lt;!-- Section --&gt;
	&lt;section&gt;
		...
	&lt;/section&gt;

    &lt;!-- Footer --&gt;
    &lt;footer&gt;
        ...
    &lt;/footer&gt;

&lt;/div&gt;
&lt;!-- Content / End --&gt;
</pre>
                    </div>

                    <!-- Grid -->
                    <div id="grid" class="py-3">
                        <h2>Grid System</h2>
                        <p class="lead">Soup Template supporst all features of <strong>Bootstrap</strong> Grid System - go to <a href="http://v4-alpha.getbootstrap.com/layout/grid/" target="_blank" class="text-primary"> Bootrstrap's page</a> and check how does it work.</p>
                    </div>

                </div>
                <!-- Getting Started / End -->

                <!-- Content Elements -->
                <div id="content-elements" class="py-5">
    
                    <h1 class="border-bottom pb-3">Content</h1>
                    <p class="lead">It will be pleasure to build content with this stuff!. More at <a href="http://v4-alpha.getbootstrap.com/content/reboot/" target="_blank" class="text-primary">Bootstrap's 4 page</a>.</p> 

                    <!-- Typography -->
                    <div id="typography" class="py-3">
                        <h2>Typography</h2>
                        <p class="lead">Useful elements to create nice texts.</p>
                        <!-- Headings -->
                        <h3>Headings</h3>
                        <div class="example-box">
                            <div class="example-box-title">Example</div>
                            <div class="example-box-content">
                                <h1>h1. Bootstrap heading</h1>
                                <h2>h2. Bootstrap heading</h2>
                                <h3>h3. Bootstrap heading</h3>
                                <h4>h4. Bootstrap heading</h4>
                                <h5>h5. Bootstrap heading</h5>
                                <h6>h6. Bootstrap heading</h6>
                            </div>
                        </div>
<pre class="prettyprint">
&lt;h1&gt;h1. Bootstrap heading&lt;/h1&gt;
&lt;h2&gt;h2. Bootstrap heading&lt;/h2&gt;
&lt;h3&gt;h3. Bootstrap heading&lt;/h3&gt;
&lt;h4&gt;h4. Bootstrap heading&lt;/h4&gt;
&lt;h5&gt;h5. Bootstrap heading&lt;/h5&gt;
&lt;h6&gt;h6. Bootstrap heading&lt;/h6&gt;
</pre>
                        <!-- Paragraph -->
                        <h3>Paragraph</h3>
                        <div class="example-box">
                            <div class="example-box-title">Example</div>
                            <div class="example-box-content">
                                <p class="lead">Maecenas a risus quis ipsum convallis fringilla in ut magna. Phasellus et sagittis odio. Sed in enim condimentum, lacinia metus id, sollicitudin libero. In ac ultricies justo. </p>
                                <p>Curabitur sit amet turpis eu diam luctus viverra. Sed viverra ornare ex, quis lobortis diam vehicula a. In imperdiet est tristique, malesuada odio quis, volutpat ante. Nulla ullamcorper, nisl sed faucibus posuere, dui turpis mattis turpis, in porttitor massa odio nec sapien.</p>
                            </div>
                        </div>
<pre class="prettyprint">&lt;p class="lead"&gt;...&lt;/p&gt;
&lt;p&gt;...&lt;/p&gt;
</pre>
                        <!-- Blockquote -->
                        <h3>Blockquote</h3>
                        <p>Blocquote with alternative <code>.light</code> version.</p>
                        <div class="example-box">
                            <div class="example-box-title">Example</div>
                            <div class="example-box-content">
                                <div class="blockquotes">
                                    <!-- Blockquote -->
                                    <blockquote class="blockquote mb-0">
                                        <div class="blockquote-content dark">
                                            <div class="rate rate-sm mb-3"><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star"></i></div>
                                            <p>Great food and great atmosphere!</p>
                                        </div>
                                        <footer>
                                            <img src="../assets/img/avatars/avatar01.jpg" alt="">
                                            <span class="name">Kate Hudson<span class="text-muted">, LinkedIn</span></span>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
<pre class="prettyprint">
&lt;!-- Blockquote --&gt;
&lt;blockquote class="blockquote"&gt;
    &lt;div class="blockquote-content dark"&gt;
        &lt;div class="rate rate-sm mb-3"&gt;&lt;i class="fa fa-star active"&gt;&lt;/i&gt;&lt;i class="fa fa-star active"&gt;&lt;/i&gt;&lt;i class="fa fa-star active"&gt;&lt;/i&gt;&lt;i class="fa fa-star active"&gt;&lt;/i&gt;&lt;i class="fa fa-star"&gt;&lt;/i&gt;&lt;/div&gt;
        &lt;p&gt;Great food and great atmosphere!&lt;/p&gt;
    &lt;/div&gt;
    &lt;footer&gt;
        &lt;img src="assets/img/avatars/avatar01.jpg" alt=""&gt;
        &lt;span class="name"&gt;Kate Hudson&lt;span class="text-muted"&gt;, LinkedIn&lt;/span&gt;&lt;/span&gt;
    &lt;/footer&gt;
&lt;/blockquote&gt;
</pre>
                    </div> 

                    <!-- Code -->
                    <div id="code" class="py-3">
                        <h2>Code</h2>
                        <p class="lead">Easy &amp; effectife way to resent code. More at <a href="http://v4-alpha.getbootstrap.com/content/code/" target="_blank" class="text-primary">Bootstrap's 4 page</a>.</p> 
                        <!-- Inline Code -->
                        <h3>Inline code</h3>
                        <div class="example-box">
                            <div class="example-box-title">Example</div>
                            <div class="example-box-content">
                                For example, <code>&lt;section&gt;</code> should be wrapped as inline.
                            </div>
                        </div>
<pre class="prettyprint">
For example, &lt;code&gt;&amp;lt;section&amp;gt;&lt;/code&gt; should be wrapped as inline.
</pre>
                        <!-- Inline Code -->
                        <h3>Code block</h3>
                        <div class="example-box">
                            <div class="example-box-title">Example</div>
                            <div class="example-box-content">
<pre><code>&lt;p&gt;Sample text here...&lt;/p&gt;
&lt;p&gt;And another line of sample text here...&lt;/p&gt;
</code></pre>
                            </div>
                        </div>
<pre class="prettyprint">
&lt;pre&gt;&lt;code&gt;&amp;lt;p&amp;gt;Sample text here...&amp;lt;/p&amp;gt;
&amp;lt;p&amp;gt;And another line of sample text here...&amp;lt;/p&amp;gt;
&lt;/code&gt;&lt;/pre&gt;
</pre>
                    </div>

                    <!-- Images -->
                    <div id="images" class="py-3">
                        <h2>Images</h2>
                        <div class="example-box">
                            <div class="example-box-title">Example</div>
                            <div class="example-box-content">
                                <img src="../assets/img/avatars/avatar01.jpg" alt="..." class="rounded">
                                <img src="../assets/img/avatars/avatar01.jpg" alt="..." class="img-thumbnail">
                            </div>
                        </div>
<pre class="prettyprint">
&lt;img src="..." alt="..." class="rounded"&gt;
&lt;img src="..." alt="..." class="img-thumbnail"&gt;
</pre>
                    </div>

                    <!-- Icons -->
                    <div id="icons" class="py-3">
                        <h2>Icons</h2>
                        <p class="lead">Soup template includes two fantastic sets of icons - <a href="http://themify.me/themify-icons/" target="_blank" class="text-primary">Themify Icons</a> and <a href="http://suelo.pl/themeforest/lineicons/demo.html" target="_blank" class="text-primary">Line Icons</a></p>
                        <h3>Basic Icons</h3>
                        <div class="example-box">
                            <div class="example-box-title">Example</div>
                            <div class="example-box-content">
                                <div class="row">
                                    <div class="col-md-4"> 
                                        <span class="icon icon-lg"><i class="ti-desktop"></i></span>
                                    </div>
                                    <div class="col-md-4"> 
                                        <span class="icon"><i class="ti-desktop"></i></span>
                                    </div>
                                    <div class="col-md-4"> 
                                        <span class="icon icon-sm"><i class="ti-desktop"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
<pre class="prettyprint html-code">
<span class="icon icon-lg"><i class="ti-desktop"></i></span>
<span class="icon"><i class="ti-desktop"></i></span>
<span class="icon icon-sm"><i class="ti-desktop"></i></span>
</pre>
                        <h3>Circle Icons</h3>
                        <div class="example-box">
                            <div class="example-box-title">Example</div>
                            <div class="example-box-content">
                                <div class="row">
                                    <div class="col-md-4"> 
                                        <span class="icon icon-circle icon-primary icon-lg"><i class="ti-desktop"></i></span>
                                    </div>
                                    <div class="col-md-4"> 
                                        <span class="icon icon-circle icon-primary"><i class="ti-desktop"></i></span>
                                    </div>
                                    <div class="col-md-4"> 
                                        <span class="icon icon-circle icon-primary icon-sm"><i class="ti-desktop"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
<pre class="prettyprint html-code">
<span class="icon icon-circle icon-primary icon-lg"><i class="ti-desktop"></i></span>
<span class="icon icon-circle icon-primary"><i class="ti-desktop"></i></span>
<span class="icon icon-circle icon-primary icon-sm"><i class="ti-desktop"></i></span>
</pre>
                        <h3>Colors</h3>
                        <p>Each icon may be used in any color from <a href="#colors" class="text-primary">Available Colors</a> section. Please use <code>.icon-[color-name]</code> - for example:</p>
                        <div class="example-box">
                            <div class="example-box-title">Example</div>
                            <div class="example-box-content">
                                <span class="icon icon-success"><i class="ti-desktop"></i></span>
                                <span class="icon icon-circle icon-warning"><i class="ti-desktop"></i></span>
                            </div>
                        </div>
<pre class="prettyprint html-code">
<span class="icon icon-success"><i class="ti-desktop"></i></span>
<span class="icon icon-circle icon-warning"><i class="ti-desktop"></i></span>
</pre>
					<h3>Social Icons</h3>
                    <p>This product supports lots of social icon types.</p>
                    <div class="example-box">
                        <div class="example-box-title">Example</div>
                        <div class="example-box-content">
                            <a href="#" class="icon icon-facebook"><i class="ti-facebook"></i></a>
							<a href="#" class="icon icon-twitter"><i class="ti-twitter-alt"></i></a>
							<a href="#" class="icon icon-google"><i class="ti-google"></i></a>
							<a href="#" class="icon icon-dribbble"><i class="ti-dribbble"></i></a>
							<a href="#" class="icon icon-flickr"><i class="ti-flickr"></i></a>
							<a href="#" class="icon icon-instagram"><i class="ti-instagram"></i></a>
							<a href="#" class="icon icon-linkedin"><i class="ti-linkedin"></i></a>
							<a href="#" class="icon icon-skype"><i class="ti-skype"></i></a>
							<a href="#" class="icon icon-tumblr"><i class="ti-tumblr-alt"></i></a>
							<a href="#" class="icon icon-vimeo"><i class="ti-vimeo-alt"></i></a>
							<a href="#" class="icon icon-youtube"><i class="ti-youtube"></i></a>
                        </div>
                    </div>
<pre class="prettyprint html-code">
<a href="#" class="icon icon-facebook"><i class="ti-facebook"></i></a>
<a href="#" class="icon icon-twitter"><i class="ti-twitter-alt"></i></a>
<a href="#" class="icon icon-google"><i class="ti-google"></i></a>
<a href="#" class="icon icon-dribbble"><i class="ti-dribbble"></i></a>
<a href="#" class="icon icon-flickr"><i class="ti-flickr"></i></a>
<a href="#" class="icon icon-instagram"><i class="ti-instagram"></i></a>
<a href="#" class="icon icon-linkedin"><i class="ti-linkedin"></i></a>
<a href="#" class="icon icon-skype"><i class="ti-skype"></i></a>
<a href="#" class="icon icon-tumblr"><i class="ti-tumblr-alt"></i></a>
<a href="#" class="icon icon-vimeo"><i class="ti-vimeo-alt"></i></a>
<a href="#" class="icon icon-youtube"><i class="ti-youtube"></i></a>
</pre>
					<div class="example-box">
                        <div class="example-box-title">Example</div>
                        <div class="example-box-content">
                            <a href="#" class="icon icon-circle icon-facebook"><i class="ti-facebook"></i></a>
                            <a href="#" class="icon icon-circle icon-twitter"><i class="ti-twitter-alt"></i></a>
                            <a href="#" class="icon icon-circle icon-google"><i class="ti-google"></i></a>
                            <a href="#" class="icon icon-circle icon-dribbble"><i class="ti-dribbble"></i></a>
                            <a href="#" class="icon icon-circle icon-flickr"><i class="ti-flickr"></i></a>
                            <a href="#" class="icon icon-circle icon-instagram"><i class="ti-instagram"></i></a>
                            <a href="#" class="icon icon-circle icon-linkedin"><i class="ti-linkedin"></i></a>
                            <a href="#" class="icon icon-circle icon-skype"><i class="ti-skype"></i></a>
                            <a href="#" class="icon icon-circle icon-tumblr"><i class="ti-tumblr-alt"></i></a>
                            <a href="#" class="icon icon-circle icon-vimeo"><i class="ti-vimeo-alt"></i></a>
                            <a href="#" class="icon icon-circle icon-youtube"><i class="ti-youtube"></i></a>
                        </div>
                    </div>
<pre class="prettyprint html-code">
<a href="#" class="icon icon-circle icon-facebook"><i class="ti-facebook"></i></a>
<a href="#" class="icon icon-circle icon-twitter"><i class="ti-twitter-alt"></i></a>
<a href="#" class="icon icon-circle icon-google"><i class="ti-google"></i></a>
<a href="#" class="icon icon-circle icon-dribbble"><i class="ti-dribbble"></i></a>
<a href="#" class="icon icon-circle icon-flickr"><i class="ti-flickr"></i></a>
<a href="#" class="icon icon-circle icon-instagram"><i class="ti-instagram"></i></a>
<a href="#" class="icon icon-circle icon-linkedin"><i class="ti-linkedin"></i></a>
<a href="#" class="icon icon-circle icon-skype"><i class="ti-skype"></i></a>
<a href="#" class="icon icon-circle icon-tumblr"><i class="ti-tumblr-alt"></i></a>
<a href="#" class="icon icon-circle icon-vimeo"><i class="ti-vimeo-alt"></i></a>
<a href="#" class="icon icon-circle icon-youtube"><i class="ti-youtube"></i></a>
</pre>
                    </div>

                </div>
                <!-- Content Elements / End -->

                <!-- Components -->
                <div id="components" class="py-5">

                    <h1 class="border-bottom pb-3">Components</h1>
                    <p class="lead">Thanks to the prepared components you will be able to create really cool and effective, easy to use websites. Let's start exploring them!</p>

                    <!-- Alerts -->
                    <div id="alerts" class="py-3">
                        <h2>Alerts</h2>
                        <div class="example-box">
                            <div class="example-box-title">Example</div>
                            <div class="example-box-content">
                                <div class="alert alert-success" role="alert">
                                    <strong>Well done!</strong> You successfully read this important alert message.
                                </div>
                                <div class="alert alert-info" role="alert">
                                    <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                </div>
                                <div class="alert alert-warning" role="alert">
                                    <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                </div>
                                <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                </div>
                            </div>
                        </div>
<pre class="prettyprint">
&lt;div class="alert alert-success" role="alert"&gt;
    ...
&lt;/div&gt;
&lt;div class="alert alert-info" role="alert"&gt;
    ...
&lt;/div&gt;
&lt;div class="alert alert-warning" role="alert"&gt;
    ...
&lt;/div&gt;
&lt;div class="alert alert-danger" role="alert"&gt;
    ...
&lt;/div&gt;
</pre>
                    </div>

                    <!-- Buttons -->
                    <div id="buttons" class="py-3">
                        <h2>Buttons</h2>
                        <h3>Button Types</h3>
                        <div class="example-box">
                            <div class="example-box-title">Example - available colors</div>
                            <div class="example-box-content">
                                <button type="button" class="btn btn-primary"><span>Primary</span></button>
                                <button type="button" class="btn btn-secondary"><span>Secondary</span></button>
                                <button type="button" class="btn btn-success"><span>Success</span></button>
                                <button type="button" class="btn btn-info"><span>Info</span></button>
                                <button type="button" class="btn btn-warning"><span>Warning</span></button>
                                <button type="button" class="btn btn-danger"><span>Danger</span></button>
                                <button type="button" class="btn btn-link"><span>Link</span></button>
                            </div>
                        </div>
<pre class="prettyprint html-code">
<button type="button" class="btn btn-primary"><span>Primary</span></button>
<button type="button" class="btn btn-secondary"><span>Secondary</span></button>
<button type="button" class="btn btn-success"><span>Success</span></button>
<button type="button" class="btn btn-info"><span>Info</span></button>
<button type="button" class="btn btn-warning"><span>Warning</span></button>
<button type="button" class="btn btn-danger"><span>Danger</span></button>
<button type="button" class="btn btn-link"><span>Link</span></button>
</pre>
                        <h3>Outline Buttons</h3>
                        <div class="example-box">
                            <div class="example-box-title">Example - available colors</div>
                            <div class="example-box-content">
                                <button type="button" class="btn btn-outline-primary"><span>Primary</span></button>
                                <button type="button" class="btn btn-outline-secondary"><span>Secondary</span></button>
                                <button type="button" class="btn btn-outline-success"><span>Success</span></button>
                                <button type="button" class="btn btn-outline-info"><span>Info</span></button>
                                <button type="button" class="btn btn-outline-warning"><span>Warning</span></button>
                                <button type="button" class="btn btn-outline-danger"><span>Danger</span></button>
                            </div>
                        </div>
<pre class="prettyprint html-code">
<button type="button" class="btn btn-outline-primary"><span>Primary</span></button>
<button type="button" class="btn btn-outline-secondary"><span>Secondary</span></button>
<button type="button" class="btn btn-outline-success"><span>Success</span></button>
<button type="button" class="btn btn-outline-info"><span>Info</span></button>
<button type="button" class="btn btn-outline-warning"><span>Warning</span></button>
<button type="button" class="btn btn-outline-danger"><span>Danger</span></button>
</pre>
                        <h3>Button Sizes</h3>
                        <p>Want to create bigger or smaller buttons? Just use <code>.btn-lg</code>, <code>.btn-sm</code>, <code>.btn-xs</code> classes.</p>
                        <div class="example-box">
                            <div class="example-box-title">Example</div>
                            <div class="example-box-content">
                                <button type="button" class="btn btn-lg btn-primary"><span>Button Large</span></button>
                                <button type="button" class="btn btn-primary"><span>Button Default</span></button>
                                <button type="button" class="btn btn-sm btn-primary"><span>Button Small</span></button>
                            </div>
                        </div>
<pre class="prettyprint html-code">
<button type="button" class="btn btn-lg btn-primary"><span>Button Large</span></button>
<button type="button" class="btn btn-primary"><span>Button Default</span></button>
<button type="button" class="btn btn-sm btn-primary"><span>Button Small</span></button>
</pre>
                        <h3>Button Groups</h3>
                        <p>Arrange awesome button groups!</p>
                        <div class="example-box">
                            <div class="example-box-title">Example</div>
                            <div class="example-box-content">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-dark"><span>Button Dark</span></button>
                                    <button type="button" class="btn btn-primary"><span>Button Primary</span></button>
                                </div>
                            </div>
                        </div>
<pre class="prettyprint">
&lt;div class=&quot;btn-group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot;&gt;&lt;span&gt;Button Dark&lt;/span&gt;&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;&lt;span&gt;Button Primary&lt;/span&gt;&lt;/button&gt;
&lt;/div&gt;
</pre>
                    </div> 

                    <!-- Forms -->
                    <div id="forms" class="py-3">
                        <h2>Forms</h2>
                        <p>To validate the form please add <code>data-validate</code> attribute and <code>required</code> atribute to <code>input</code> / <code>textarea.</code></p>
                        <div class="example-box">
                            <div class="example-box-title">Example</div>
                            <div class="example-box-content">
                                <form action="#" class="validate-form">
                                    <div class="form-group">
                                        <label>Your e-mail</label>
                                        <input name="email" type="email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Your message</label>
                                        <textarea name="message" id="message" cols="30" rows="5" class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group form-submit">
                                        <button type="submit" class="btn btn-primary btn-block"><span>Send message!</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
<pre class="prettyprint">
&lt;form action=&quot;#&quot; class=&quot;validate-form&quot;&gt;
    &lt;div class=&quot;form-group&quot;&gt;
        &lt;label&gt;Your e-mail&lt;/label&gt;
        &lt;input name=&quot;email&quot; type=&quot;email&quot; class=&quot;form-control&quot; required&gt;
    &lt;/div&gt;
    &lt;div class=&quot;form-group&quot;&gt;
        &lt;label&gt;Your message&lt;/label&gt;
        &lt;textarea name=&quot;message&quot; id=&quot;message&quot; cols=&quot;30&quot; rows=&quot;5&quot; class=&quot;form-control&quot; required&gt;&lt;/textarea&gt;
    &lt;/div&gt;
    &lt;div class=&quot;form-group form-submit&quot;&gt;
        &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary btn-block&quot;&gt;&lt;span&gt;Send message!&lt;/span&gt;&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;
</pre>
                    </div>

                    <!-- Pagination -->
                    <div id="pagination" class="py-3">
                        <h2>Pagination</h2>
                        <div class="example-box">
                            <div class="example-box-title">Example</div>
                            <div class="example-box-content">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <i class="ti-angle-left"></i>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <i class="ti-angle-right"></i>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
<pre class="prettyprint">
&lt;ul class="pagination"&gt;
    &lt;li class="page-item"&gt;
        &lt;a class="page-link" href="#" aria-label="Previous"&gt;
            &lt;i class="ti-angle-left"&gt;&lt;/i&gt;
            &lt;span class="sr-only"&gt;Previous&lt;/span&gt;
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item active"&gt;&lt;a class="page-link" href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;4&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;5&lt;/a&gt;&lt;/li&gt;
    &lt;li class="page-item"&gt;
        &lt;a class="page-link" href="#" aria-label="Next"&gt;
            &lt;i class="ti-angle-right"&gt;&lt;/i&gt;
            &lt;span class="sr-only"&gt;Next&lt;/span&gt;
        &lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;
</pre>
                    </div>

                    <!-- Tabs -->
                    <div id="tabs" class="py-3">
                        <h2>Tabs</h2>
                        <p class="lead">Feel free to use the tabs for dynamic content.</p>
                        <div class="example-box">
                            <div class="example-box-title">Example</div>
                            <div class="example-box-content">
                            	<!-- Nav Pills -->
								<ul class="nav nav-pills nav-fill mb-3" role="tablist">
									<li class="nav-item"><a class="nav-link active" href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                               	 	<li class="nav-item"><a class="nav-link" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                                	<li class="nav-item"><a class="nav-link" href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
								</ul>
                                <!-- Tab Panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active" id="home">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</div>
                                    <div role="tabpanel" class="tab-pane fade" id="profile">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. </div>
                                    <div role="tabpanel" class="tab-pane fade" id="messages">Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</div>
                                </div>
                            </div>
                        </div>
<pre class="prettyprint">
&lt;!-- Nav Pills --&gt;
&lt;ul class=&quot;nav nav-pills nav-fill mb-3&quot; role=&quot;tablist&quot;&gt;
    &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link active&quot; href=&quot;#home&quot; aria-controls=&quot;home&quot; role=&quot;tab&quot; data-toggle=&quot;tab&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#profile&quot; aria-controls=&quot;profile&quot; role=&quot;tab&quot; data-toggle=&quot;tab&quot;&gt;Profile&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#messages&quot; aria-controls=&quot;messages&quot; role=&quot;tab&quot; data-toggle=&quot;tab&quot;&gt;Messages&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;!-- Tab Panes --&gt;
&lt;div class="tab-content"&gt;
    &lt;div role="tabpanel" class="tab-pane fade in active" id="home"&gt;...&lt;/div&gt;
    &lt;div role="tabpanel" class="tab-pane fade" id="profile"&gt;...&lt;/div&gt;
    &lt;div role="tabpanel" class="tab-pane fade" id="messages"&gt;...&lt;/div&gt;
&lt;/div&gt;</pre> 
                    </div>

                    <!-- Modal -->
                    <div id="modal" class="py-3">
                        <h2>Modal</h2>
                        <p class="lead">Modal window is perfect place for any kind of content.</p>
                        <div class="example-box">
                            <div class="example-box-title">Example</div>
                            <div class="example-box-content">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#demoModal"><span>Launch demo modal</span></button>
                            </div>
                        </div>
                        <!-- Modal / Demo -->
						<div class="modal fade" id="demoModal" role="dialog">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
									</div>
									<div class="modal-body">
										...
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-dark" data-dismiss="modal"><span>Close</span></button>
										<button type="button" class="btn btn-primary"><span>Save changes</span></button>
									</div>
								</div>
							</div>
						</div>
<pre class="prettyprint">
&lt;!-- Button trigger modal --&gt;
&lt;button type="button" class="btn btn-blue btn-lg" data-toggle="modal" data-target="#demoModal"&gt;&lt;span&gt;Launch demo modal&lt;/span&gt;&lt;/button&gt;

&lt;!-- Modal / Demo --&gt;
&lt;div class="modal fade" id="demoModal" role="dialog"&gt;
	&lt;div class="modal-dialog" role="document"&gt;
		&lt;div class="modal-content"&gt;
			&lt;div class="modal-header"&gt;
				&lt;h4 class="modal-title" id="myModalLabel"&gt;Modal title&lt;/h4&gt;
                &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;&lt;i class="ti-close"&gt;&lt;/i&gt;&lt;/button&gt;
			&lt;/div&gt;
			&lt;div class="modal-body"&gt;
				...
			&lt;/div&gt;
			&lt;div class="modal-footer"&gt;
				&lt;button type="button" class="btn btn-dark" data-dismiss="modal"&gt;Close&lt;/button&gt;
				&lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</pre> 
                        <h3>Sizes</h3>
                        <p>Modals have three optional sizes <code>.modal-sm</code>, <code>.modal-lg</code> available via modifier classes to be placed on a .modal-dialog.</p>
                    </div>

                    <!-- Video Modal -->
                    <div id="videoModal" class="py-3">
                        <h2>Video Modal</h2>
                        <p class="lead">Video Modal was created to place video in popup window. Use <code>data-video</code> attribute to place url to your video.</p>
                        <div class="example-box">
                            <div class="example-box-title">Example</div>
                            <div class="example-box-content">
                                <!-- Button trigger modal -->
                                <a href="#" class="btn-play-2" data-toggle="video-modal" data-target="#modalVideo" data-video="https://www.youtube.com/embed/F32P-LVXonM"><span></span>Check it now!</a>
                            </div>
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
<pre class="prettyprint">
&lt;!-- Button trigger modal --&gt;
&lt;a href="#" class="btn-play-2" data-toggle="video-modal" data-target="#modalVideo" data-video="https://www.youtube.com/watch?v=F32P-LVXonM&t=5s"&gt;&lt;span&gt;&lt;/span&gt;Check it now!&lt;/a&gt;

&lt;!-- Video Modal / Demo --&gt;
&lt;div class="modal modal-video fade" id="modalVideo" role="dialog"&gt;
    &lt;button class="close" data-dismiss="modal"&gt;&lt;i class="ti-close"&gt;&lt;/i&gt;&lt;/button&gt;
    &lt;div class="modal-dialog modal-lg" role="document"&gt;
        &lt;div class="modal-content"&gt;
            &lt;iframe height="500"&gt;&lt;/iframe&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre> 
                    </div>

                    <!-- Carousel -->
                    <div id="carousel" class="py-3">
                        <h2>Carousel</h2>
                        <p class="lead">Carousel is a component perfect to preset any kind of content like photos, icons, texts, etc. Go to the <a class="text-primary" href="http://kenwheeler.github.io/slick/" target="_blank">Slick's page</a> to see full documentation of this components. </p>
                        <div class="example-box">
                            <div class="example-box-title">Example</div>
                            <div class="example-box-content">
                                <!-- Carousel -->
                                <div class="carousel carousel-items" data-slick='{
                                    "slidesToShow": 3, 
                                    "slidesToScroll": 1,
                                    "dots": true,
                                    "arrows": false,
                                    "responsive": [
                                        {
                                            "breakpoint": 991,
                                            "settings": {
                                                "slidesToShow": 2
                                            }
                                        },
                                        {
                                            "breakpoint": 575,
                                            "settings": {
                                                "slidesToShow": 1
                                            }
                                        }
                                    ]
                                    }'>
                                    <div class="carousel-item">
                                        <img src="../assets/img/posts/post01.jpg" class="rounded" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../assets/img/posts/post02.jpg" class="rounded" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../assets/img/posts/post03.jpg" class="rounded" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../assets/img/posts/post04.jpg" class="rounded" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
<pre class="prettyprint">
&lt;!-- Carousel --&gt;
&lt;div class="carousel carousel-items" data-slick='{
    "slidesToShow": 3, 
    "slidesToScroll": 1,
    "dots": true,
    "arrows": false,
    "responsive": [
        {
            "breakpoint": 991,
            "settings": {
                "slidesToShow": 2
            }
        },
        {
            "breakpoint": 575,
            "settings": {
                "slidesToShow": 1
            }
        }
    ]
    }'&gt;
    &lt;div class="carousel-item"&gt;
        ...
    &lt;/div&gt;
    &lt;div class="carousel-item"&gt;
        ...
    &lt;/div&gt;
    &lt;div class="carousel-item"&gt;
        ...
    &lt;/div&gt;
    &lt;div class="carousel-item"&gt;
        ...
    &lt;/div&gt;
    &lt;div class="carousel-item"&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                    </div>

                    <!-- Badges -->
                    <div id="badges" class="py-3">
                        <h2>Badges</h2>
                        <div class="example-box">
                            <div class="example-box-title">Example</div>
                            <div class="example-box-content">
                                <span class="badge badge-default">Default</span>
                                <span class="badge badge-primary">Primary</span>
                                <span class="badge badge-success">Success</span>
                                <span class="badge badge-info">Info</span>
                                <span class="badge badge-warning">Warning</span>
                                <span class="badge badge-danger">Danger</span>
                            </div>
                        </div>
<pre class="prettyprint html-code">
<span class="badge badge-default">Default</span>
<span class="badge badge-primary">Primary</span>
<span class="badge badge-success">Success</span>
<span class="badge badge-info">Info</span>
<span class="badge badge-warning">Warning</span>
<span class="badge badge-danger">Danger</span>
</pre>
                    </div>

                    <!-- Tooltip -->
                    <div id="tooltip" class="py-3">
                        <h2>Tooltips</h2>
                        <p class="lead">Hover the buttons to see the tooltips.</p>
                        <div class="example-box">
                            <div class="example-box-title">Example</div>
                            <div class="example-box-content">
                                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="left" title="Tooltip on left"><span>Tooltip on left</span></button>
                                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><span>Tooltip on top</span></button>
                                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom"><span>Tooltip on bottom</span></button>
                                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="right" title="Tooltip on right"><span>Tooltip on right</span></button>
                            </div>
                        </div>
<pre class="prettyprint html-code">
<button type="button" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="left" title="Tooltip on left"><span>Tooltip on left</span></button>
<button type="button" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><span>Tooltip on top</span></button>
<button type="button" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom"><span>Tooltip on bottom</span></button>
<button type="button" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="right" title="Tooltip on right"><span>Tooltip on right</span></button>
</pre> 
                    </div>


                </div>
                <!-- Components / End -->

                <!-- Utilities -->
                <div id="utilities" class="py-5">
    
                    <h1 class="border-bottom pb-3">Utilities</h1>
                    <p class="lead">Below are listed important configuration options for whole template.</p>

                    <!-- Colors -->
                    <div id="colors" class="py-3">
                        <h2>Available Colors</h2>
                        <h3>Colour scheme:</h3>
                        <div class="row">
                            <!-- Color -->
                            <div class="col-lg-2 col-sm-3 col-xs-6">
                                <div class="text-center">
                                    <span class="shape square bg-primary mb-2"></span>
                                    <h6 class="text-muted">primary</h6>
                                </div>
                            </div>
                            <!-- Color -->
                            <div class="col-lg-2 col-sm-3 col-xs-6">
                                <div class="text-center">
                                    <span class="shape square bg-secondary mb-2"></span>
                                    <h6 class="text-muted">secondary</h6>
                                </div>
                            </div>
                        </div>
                        <h3>Other:</h3>
                        <div class="row">
                            <!-- Color -->
                            <div class="col-lg-2 col-sm-3 col-xs-6">
                                <div class="text-center">
                                    <span class="shape square bg-info mb-2"></span>
                                    <h6 class="text-muted">info</h6>
                                </div>
                            </div>
                            <!-- Color -->
                            <div class="col-lg-2 col-sm-3 col-xs-6">
                                <div class="text-center">
                                    <span class="shape square bg-success mb-2"></span>
                                    <h6 class="text-muted">success</h6>
                                </div>
                            </div>
                            <!-- Color -->
                            <div class="col-lg-2 col-sm-3 col-xs-6">
                                <div class="text-center">
                                    <span class="shape square bg-warning mb-2"></span>
                                    <h6 class="text-muted">warning</h6>
                                </div>
                            </div>
                            <!-- Color -->
                            <div class="col-lg-2 col-sm-3 col-xs-6">
                                <div class="text-center">
                                    <span class="shape square bg-danger mb-2"></span>
                                    <h6 class="text-muted">danger</h6>
                                </div>
                            </div>
                            <!-- Color -->
                            <div class="col-lg-2 col-sm-3 col-xs-6">
                                <div class="text-center">
                                    <span class="shape square bg-light mb-2"></span>
                                    <h6 class="text-muted">light</h6>
                                </div>
                            </div>
                            <!-- Color -->
                            <div class="col-lg-2 col-sm-3 col-xs-6">
                                <div class="text-center">
                                    <span class="shape square bg-white border mb-2"></span>
                                    <h6 class="text-muted">white</h6>
                                </div>
                            </div>
                            <!-- Color -->
                            <div class="col-lg-2 col-sm-3 col-xs-6">
                                <div class="text-center">
                                    <span class="shape square bg-dark mb-2"></span>
                                    <h6 class="text-muted">dark</h6>
                                </div>
                            </div>
                            <!-- Color -->
                            <div class="col-lg-2 col-sm-3 col-xs-6">
                                <div class="text-center">
                                    <span class="shape square bg-black mb-2"></span>
                                    <h6 class="text-muted">black</h6>
                                </div>
                            </div>
                        </div>
                    </div>  

                    <!-- Helper Classes -->
                    <div id="classes" class="py-3">
                        <h2>Helper Classes</h2>
                        <h3>Text Colors</h3>
                        <p>It is possible to add any color form <a href="#colors" class="text-primary">Available Colors</a> section by <code>.text-[color-name]</code> class</p>
                        <div class="example-box">
                            <div class="example-box-title">Example</div>
                            <div class="example-box-content">
                                <span class="text-primary">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</span>
                            </div>
                        </div>
<pre class="prettyprint html-code">
<span class="text-primary">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</span>
</pre>
                        <h3>Backgrounds</h3>
                        <p>Similar to text colors it is possible to add backgorund color from <a href="#colors" class="text-primary">Available Colors</a> section by <code>.bg-[color-name]</code> class. <br><br>
                        For dark background colors it is necessary to add <code>dark</code> class to adjust font colors and other styles. Sometimes, if inside dark element is placed element with light background you should add <code>light</code> class to such element.</p> 
                        <div class="example-box">
                            <div class="example-box-title">Example</div>
                            <div class="example-box-content">
                                <p class="bg-success dark p-2">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
                            </div>
                        </div>
<pre class="prettyprint">
&lt;p class="bg-success dark p-2"&gt;Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.&lt;/p&gt;
</pre>
                        <h3>Border</h3>
                        <p>It is possible to add border to any of html elements by adding proper class:</p>
                         <ul class="list-unstyled">
                            <li><code>.border</code> - adds border to element</li>
                            <li><code>.border-top</code> - adds top border to element</li>
                            <li><code>.border-bottom</code> - adds bottom border to element</li>
                        </ul>
                        <div class="example-box">
                            <div class="example-box-title">Example</div>
                            <div class="example-box-content">
                                <div class="border-bottom">Element with border-bottom.</div>
                            </div>
                        </div>
<pre class="prettyprint">
&lt;div class="pb-10 border-bottom"&gt;Element with border-bottom.&lt;/div&gt;
</pre>
                        <h3>Heights &amp; vertical center position</h3>
                        <p>The template allows to set minimial height of block html element. It is possible by using <code>.h-[value]</code> class.<br>
                        <small>[value] is a number from 100 to 900 with 100 gap or sm (40% of viewport), md (60% of viewport) and lg (80% of viewport)</small>.</p>
                        <p>By <code>.fullheight</code> class you set elements height equal to the browser viewport height.</p>
                        <p>Using <code>.v-center</code> class makes element positioned vertically center in relation to the parent.</p>
                        <div class="example-box">
                            <div class="example-box-title">Example</div>
                            <div class="example-box-content">
                                <div class="bg-light h-200">
                                    <h2 class="text-center v-center mb-0">H2 inside 200px container.</h2>
                                </div>
                            </div>
                        </div>
<pre class="prettyprint">
&lt;div class="bg-light h-200"&gt;
    &lt;h2 class="text-center mb-0 v-center"&gt;H2 inside 200px container.&lt;/h2&gt;
&lt;/div&gt;
</pre> 
                        <p class="lead">More useful helper classes are listed on <a href="http://v4-alpha.getbootstrap.com/css/#helper-classes" target="_blank" class="text-primary">Bootstrap's 4 website</a>!</p>
                    </div>

                </div>

                <!-- Configuration -->
                <div id="configuration" class="py-5">

                    <h1 class="border-bottom pb-3">Configuration</h1>
                    <p class="lead">The template includes some configurable elements - here you will find informations how to use them!</p>

                    <!-- Google Maps -->
                    <div id="googleMap" class="py-3">
                        <h2>Google Map</h2>
                        <p>To configure Google Map it is necessary to set latitude and longitude parameters by <code>data-latitude</code> and <code>data-longitude</code> attributes of <code>#google-map</code> element. To get it please visit site like <a href="http://itouchmap.com/latlong.html" class="text-primary" target="_blank">this</a>.</p>
                        <div class="example-box">
                            <div class="example-box-title">Example</div>
                            <div class="example-box-content">
                                <div id="google-map" class="h-400" data-latitude="-6.875009" data-longitude="107.568773" data-style="apple"></div>
                            </div>
                        </div>
<pre class="prettyprint">
&lt;div id="google-map" class="h-400" data-latitude="-6.875009" data-longitude="107.568773" data-style="dream"&gt;&lt;/div&gt;</pre>
                        <p>Map supports few color themes - to set it please use <code>data-style</code> attribute.</p>
                        <h5>Available Themes</h5>
                        <ul>
                            <li>wy</li>
                            <li>apple</li>
                            <li>dark</li>
                        </ul>
                    </div>

                    <!-- Contact Form -->
                    <div id="bookingForm" class="py-3">
                        <h2>Booking Form</h2>
                        <p>To configure booing form please open <strong>booking-form.php</strong> file from <strong>/assets/php</strong> directory and go the line with an e-mail address to change it to your own - like this.</p>
<pre class="prettyprint">
$emailTo = 'your@email.com';</pre> 
                        <p>After that you will recieve the messages from your websites to this e-mail address.</p>
                        <div class="alert alert-warning"><strong>SentMail</strong> function must be enabled on your hositng. Otherway I recommend use and configure plugin like "PHPMailer".</div>
                    </div>

                    <!-- Sign Up Form -->
                    <div id="signupForm" class="py-3">
                        <h2>SignUp Form</h2>
                        <img src="https://static.mailchimp.com/web/brand-assets/logo-script-dark.svg" width="200" alt="">
                        <p class="lead">SignUp form is made with <a href="http://mailchimp.com/" class="text-primary" target="_blank">Mailchimp</a> API.</p>
                        <h3>How to create the form?</h3>
                        <div class="alert alert-info">To create Sign Up form you have to have an account on <a href="http://mailchimp.com/" target="_blank"><strong>Mailchimp</strong></a> site.</div>
                        <ol>
                            <li>Log into the <a href="http://mailchimp.com/" class="text-primary" target="_blank">Mailchimp</a> site.</li>
                            <li>Create subscribers list.
                            <img src="../assets/img/docs/signup01.png" alt="" class="block"></li>
                            <li>Get into the list and go to "Signup forms" tab.
                            <img src="../assets/img/docs/signup02.png" alt="" class="block"></li>
                            <li>Pick "Embedded forms".
                            <img src="../assets/img/docs/signup03.png" alt="" class="block"></li>
                            <li>Pick "Classic version" and copy / paste somewhere generated code (don't change anything).</li>
                            <li>Find <code>form</code> selector and copy <code>action</code> atribute valuse into your form. Remember to add <code>method="POST"</code> attribute.</li>
                            <li>Modify action URI by changing <code>.../post?...</code> to <code>.../post-json?...</code>. It should look like this <code>action="//suelo.us12.list-manage.com/subscribe/post-json?u=ed47dbfe167d906f2bc46a01b&amp;id=24ac8a22ad"</code></li>
                            <li>Find email input and copy <code>type</code>, <code>name</code> and <code>id</code> to your input - it should look like this: <code>&lt;input type="email" value="" name="EMAIL" class="form-control input-lg" id="mce-EMAIL"&gt;</code></li>
                            <li>Find input which prevents bot signups and paste it somewhere in the form - it should be hidden!
                            <img src="../assets/img/docs/signup04.png" alt="" class=" mt-20 mb-20 block"></li>
                            <li>Add submit button and enjoy your working Sign Up form!</li>
                        </ol>
                    </div>

                    <!-- Local Scroll -->
                    <div id="localScroll" class="py-3">
                        <h2>Local Scroll</h2>
                        <p>If you want to use local scroll somewhere in the content please add <code>data-local-scroll</code> attribute in the parent selector of a link to local selector.</p>
                    </div>

                    <!-- Animations -->
                    <div id="animations" class="py-3">
                        <h2>Aniamtions</h2>
                        <p class="lead">The template allows to add really cool animations for each of html elements. Let's check how to use it!</p>
                        <h3>Entrance animation</h3>
                        <p>This animation fires when element appears in the browser viewport. To add such animation you need to place <code>.animated</code> class in the animted element and preciese which animation do you want to use by <code>data-animation</code>attribute. It is also possible to add some delay to the animation (in ms) by <code>data-animation-delay</code> attribute.</p>
                        <div class="example-box">
                            <div class="example-box-title">Example</div>
                            <div class="example-box-content">
                                <span class="icon icon-lg icon-secondary icon-circle animated" data-animation="fadeInRight"><i class="ti-heart"></i></span>
                                <span class="icon icon-lg icon-primary icon-circle animated" data-animation="bounceIn" data-animation-delay="400"><i class="ti-star"></i></span>
                            </div>
                        </div>
<pre class="prettyprint html-code">
<span class="icon icon-lg icon-secondary icon-circle animated" data-animation="fadeInRight"><i class="ti-heart"></i></span>
<span class="icon icon-lg icon-primary icon-circle animated" data-animation="bounceIn" data-animation-delay="400"><i class="ti-star"></i></span></pre>
                    </div>

                    <!-- Developer Tools -->
                    <div id="developerTools" class="py-3">
                        <h2>Developer Tools</h2>
                        <p class="lead">The template was made with <strong>NPM</strong> package manager and <strong>Grunt.js</strong> task manager.</p>
                        <h3>NPM</h3>
                        <p>The template includes two <code>package.json</code> files:</p>
                        <h4><code>package.json</code></h4>
                        <p>This file includes necessary grunt tasks to make developemnt process nice and easy. Run <code>npm install</code> task to install them.</p>
                        <h4><code>assets/plusings/package.json</code></h4>
                        <p>This file includes all plugins used in this theme. To install those plugins you need to run <code>npm install</code> as previously but after that you have to run <code>grunt copy</code> and <code>grunt remove</code>tasks to move them into right directory</p>.
                        <h3>Grunt.js</h3>
                        <p>The package includes some grunt tasks to make development process easier:</p>
                        <ul class="list-unstyled">
                            <li><code>grunt</code> - runs <code>grunt sass</code> tasks after each .scss file change</li>
                            <li><code>grunt sass</code> - compiles all .scss files</li>
                            <li><code>grunt validation</code> - makes HTML5 validation of each .html file</li>
                        </ul>
                    </div>

                </div>

                <!-- Files & Credits -->
                <div id="files" class="py-5">
    
                    <h1 class="border-bottom pb-3">Files &amp; Credits</h1>

                    <!-- CSS Files -->
                    <div id="cssFiles" class="py-3">
                        <h2>CSS Files</h2>
                        <p class="lead">The template uses couple of CSS files:</p>
<pre class="prettyprint">
&lt;!-- CSS Plugins --&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;assets/plugins/bootstrap/dist/css/bootstrap.min.css&quot; /&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;assets/plugins/slick-carousel/slick/slick.css&quot; /&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;assets/plugins/animate.css/animate.min.css&quot; /&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;assets/plugins/animsition/dist/css/animsition.min.css&quot; /&gt;

&lt;!-- CSS Icons --&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;assets/css/themify-icons.css&quot; /&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;assets/plugins/font-awesome/css/font-awesome.min.css&quot; /&gt;

&lt;!-- CSS Theme --&gt;
&lt;link id=&quot;theme&quot; rel=&quot;stylesheet&quot; href=&quot;assets/css/themes/theme-[color].min.css&quot; /&gt;
</pre>
                        <p class="lead">CSS Theme has  - was divided into some important sections:</p>
<pre class="prettyprint">
1. Setup
2. Basic
3. Header 
-- 4.1 Header Mobile
-- 4.2 Navigation Desktop
4. Content 
-- 4.1 Blog
-- 4.2 Features
-- 4.3 Menu
-- 4.4 Other
-- 4.5 Page Title
-- 4.6 Sections
5. Footer
6. Elements 
-- 6.1 Alerts
-- 6.2 Backgrounds
-- 6.3 Badges
-- 6.4 Buttons
-- 6.5 Carousel
-- 6.6 Forms 
-- 6.7 Icons
-- 6.8 Loader
-- 6.9 Modals
-- 6.10 Navigations
-- 6.11 Notification Bar
-- 6.12 Other
-- 6.13 Pagination
-- 6.14 Testimonials
-- 6.15 Typography
7. Widgets 
8. Animations 
</pre>
                        <p>CSS Theme is also available in couple of diffrent color versions:</p>
<pre class="prettyprint">
theme-beige.css
theme-blue.css
theme-green.css
theme-mint.css
theme-orange.css
theme-red.css
theme-teal.css
</pre>
                        <p>Documentation uses one addiotional <code>prettify.css</code> stylesheet for code highlighter.</p>
                    </div>

                    <!-- SASS Files -->
                    <div id="sassFiles" class="py-3">
                        <h2>SASS Files</h2>
                        <p class="lead">CSS files are generated thanks to well organized SCSS files.</p>
<pre class="prettyprint">
├── _animations.scss
├── _base.scss
├── _basics.scss
├── _config.scss
├── _content
│   ├── _blog.scss
│   ├── _features.scss
│   ├── _menu.scss
│   ├── _other.scss
│   ├── _page-title.scss
│   └── _sections.scss
├── _content.scss
├── _elements
│   ├── _alerts.scss
│   ├── _backgrounds.scss
│   ├── _badges.scss
│   ├── _buttons.scss
│   ├── _carousel.scss
│   ├── _forms.scss
│   ├── _icons.scss
│   ├── _loader.scss
│   ├── _modals.scss
│   ├── _navs.scss
│   ├── _notification-bar.scss
│   ├── _other.scss
│   ├── _pagination.scss
│   ├── _panel-cart.scss
│   └── _typography.scss
├── _elements.scss
├── _footer.scss
├── _header
│   ├── _header-mobile.scss
│   └── _navigation-desktop.scss
├── _header.scss
├── _setup.scss
├── _widgets.scss
├── package.json
├── theme-beige.scss
├── theme-blue.scss
├── theme-green.scss
├── theme-mint.scss
├── theme-orange.scss
├── theme-red.scss
└── theme-teal.scss
</pre>
                        <ul class="list-unstyled">
                            <li><code>theme-[color-scheme].scss</code> is a main SCSS file where main colors have been set.</li>
                            <li><code>_base.css</code> file is a base for each theme which imports other partials.</li>
                            <li><code>_config.css</code> file with SASS variables which configure colors, fonts and more.</li>
                        </ul>
                        <div class="alert alert-info" data-local-scroll>
                            Go to <a href="#developerTools" class="font-italic">Developer Tools</a> to check how to compile SASS in the easiest way.
                        </div>
                    </div>

                    <!-- JS Files -->
                    <div id="jsFiles" class="py-3">
                        <h2>JavaScript Files</h2>
                        <p class="lead">On the end of the body of each html file there are placed 4 JavaScrpt files:</p>
                        <ul class="list-unstyled">
                            <li><code>plugins-bundle.js</code> - compressed file with all necessary plugins sources <small>(more at credicts)</small></li>
                            <li><code>core.js</code> - <strong>main JavaScript file</strong></li>
                            <li><code>https://maps.googleapis.com/maps/api/js</code> Google Map API</li>
                        </ul>
                        <p>Instead of <code>plugins-bundle.js</code> it is also possible to use full plugins list:</p>
<pre class="prettyprint">
&lt;script src=&quot;assets/plugins/jquery/dist/jquery.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;assets/plugins/tether/dist/js/tether.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;assets/plugins/bootstrap/dist/js/bootstrap.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;assets/plugins/slick-carousel/slick/slick.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;assets/plugins/jquery.appear/jquery.appear.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;assets/plugins/jquery.scrollto/jquery.scrollTo.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;assets/plugins/jquery.localscroll/jquery.localScroll.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;assets/plugins/jquery-validation/dist/jquery.validate.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;assets/plugins/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;assets/plugins/twitter-fetcher/js/twitterFetcher_min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;assets/plugins/skrollr/dist/skrollr.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;assets/plugins/animsition/dist/js/animsition.min.js&quot;&gt;&lt;/script&gt;
</pre>
                        <p>Elements page uses one addiotional <code>assets/js/prettify.js</code> plugin for code highlighter.</p>
                    </div>

                    <!-- PHP Files -->
                    <div id="phpFiles" class="py-3">
                        <h2>PHP Files</h2>
                        <p class="lead">The template includes few PHP scripts:</p>
                        <ul class="list-unstyled">
                            <li><code>/php/booking-form.php</code> - configuration file for contact form</li>
                        </ul>
                    </div>

                    <!-- Credits -->
                    <div id="credits" class="py-3">
                        <h2>Credits</h2>
                        <h3>Fonts:</h3>
                        <ol>
                            <li><strong>Oswald</strong> - <a href="https://fonts.google.com/specimen/Oswald" class="text-primary" target="_blank">https://fonts.google.com/specimen/Oswald</a></li>
                            <li><strong>Raleway</strong> - <a href="https://fonts.google.com/specimen/Raleway" class="text-primary" target="_blank">https://fonts.google.com/specimen/Raleway</a></li>
                        </ol>
                        <h3>Icons:</h3>
                        <ol>
                            <li><strong>Themify Icons</strong> - <a href="http://themify.me/themify-icons" class="text-primary" target="_blank">http://themify.me/themify-icons</a></li>
                            <li><strong>Font Awesome</strong> - <a href="fontawesome.io/" class="text-primary" target="_blank">fontawesome.io/</a></li>
                        </ol>
                        <h3>Libraries:</h3>
                        <ol>
                            <li><strong>jQuery</strong> - <a href="http://jquery.com/" class="text-primary" target="_blank">http://jquery.com/</a></li>
                            <li><strong>Bootstrap 4</strong> - <a href="http://v4-alpha.getbootstrap.com/" class="text-primary" target="_blank">http://v4-alpha.getbootstrap.com/</a></li>
                        </ol>
                        <h3>Plugins:</h3>
                        <ol>
                            <li><strong>Tether</strong> - <a href="http://tether.io/" class="text-primary" target="_blank">http://tether.io/</a></li>
                            <li><strong>Moment</strong> - <a href="http://momentjs.com/" class="text-primary" target="_blank">http://momentjs.com/</a></li>
                            <li><strong>Appear</strong> - <a href="http://morr.github.io/appear.html" class="text-primary" target="_blank">http://morr.github.io/appear.html</a></li>
                            <li><strong>LocalScroll</strong> - <a href="http://flesler.blogspot.com/2007/10/jquerylocalscroll-10.html" class="text-primary" target="_blank">http://flesler.blogspot.com/2007/10/jquerylocalscroll-10.html</a></li>
                            <li><strong>ScrollTo</strong> - <a href="https://github.com/flesler/jquery.scrollTo" class="text-primary" target="_blank">https://github.com/flesler/jquery.scrollTo</a></li>
                            <li><strong>Validate</strong> - <a href="https://jqueryvalidation.org/" class="text-primary" target="_blank">https://jqueryvalidation.org/</a></li>
                            <li><strong>Twitter Post Fetcher</strong> - <a href="https://github.com/jasonmayes/Twitter-Post-Fetcher" class="text-primary" target="_blank">https://github.com/jasonmayes/Twitter-Post-Fetcher</a></li>
                            <li><strong>Slick</strong> - <a href="http://kenwheeler.github.io/slick/" class="text-primary" target="_blank">http://kenwheeler.github.io/slick/</a></li>
                            <li><strong>jquery.mb.YTPlayer</strong> - <a href="http://pupunzi.open-lab.com/mb-jquery-components/jquery-mb-ytplayer/" class="text-primary" target="_blank">http://pupunzi.open-lab.com/mb-jquery-components/jquery-mb-ytplayer/</a></li>
                            <li><strong>Prettify</strong> - <a href="https://github.com/google/code-prettify" class="text-primary" target="_blank">https://github.com/google/code-prettify</a></li>
                            <li><strong>Skrollr</strong> - <a href="https://github.com/Prinzhorn/skrollr" class="text-primary" target="_blank">https://github.com/Prinzhorn/skrollr</a></li>
                            <li><strong>Animsition</strong> - <a href="http://git.blivesta.com/animsition/" class="text-primary" target="_blank">http://git.blivesta.com/animsition/</a></li>
                        </ol>
                        <div class="alert alert-info">
                            All plugins my be installed by <code>npm install; grunt copy; grunt remove</code> tasks in <code>/assets/plugins/</code>.
                        </div>
                        <h3>Images:</h3>
                        <p class="lead">Some images used in the template was free and have been <strong>included in a package</strong>. Rest of them was blurred becouse of licensing reasons.</p>
                        <h5>Included images:</h5>
                        <ul class="list-unstyled text-xs">
                                                <li><a href="https://www.pexels.com/photo/sliced-oranges-kiwi-melon-blueberry-and-dragonfruit-on-white-ceramic-platter-218844/">https://www.pexels.com/photo/sliced-oranges-kiwi-melon-blueberry-and-dragonfruit-on-white-ceramic-platter-218844/</a></li>
                                                <li><a href="https://www.pexels.com/photo/white-ceramic-round-plate-on-round-brown-ornament-24859/">https://www.pexels.com/photo/white-ceramic-round-plate-on-round-brown-ornament-24859/</a></li>
                                                <li><a href="https://www.pexels.com/photo/pasta-with-vegetable-on-white-ceramic-round-plate-169743/">https://www.pexels.com/photo/pasta-with-vegetable-on-white-ceramic-round-plate-169743/</a></li>
                                                <li><a href="https://www.pexels.com/photo/table-in-vintage-restaurant-6267/">https://www.pexels.com/photo/table-in-vintage-restaurant-6267/</a></li>
                                                <li><a href="https://www.pexels.com/photo/chocolate-and-cherry-top-cake-129893/">https://www.pexels.com/photo/chocolate-and-cherry-top-cake-129893/</a></li>
                                                <li><a href="https://www.pexels.com/photo/red-drink-on-clear-glass-with-lemon-on-top-160150/">https://www.pexels.com/photo/red-drink-on-clear-glass-with-lemon-on-top-160150/</a></li>
                                                <li><a href="https://www.pexels.com/photo/top-view-of-silver-macbook-beside-pumpkin-and-brown-wooden-tray-204693/">https://www.pexels.com/photo/top-view-of-silver-macbook-beside-pumpkin-and-brown-wooden-tray-204693/</a></li>
                                                <li><a href="https://www.pexels.com/photo/food-pizza-slice-fast-food-7907/">https://www.pexels.com/photo/food-pizza-slice-fast-food-7907/</a></li>
                                                <li><a href="https://www.pexels.com/photo/chopsticks-food-meal-sushi-80841/">https://www.pexels.com/photo/chopsticks-food-meal-sushi-80841/</a></li>
                                                <li><a href="https://www.pexels.com/photo/food-restaurant-meal-chicken-106343/">https://www.pexels.com/photo/food-restaurant-meal-chicken-106343/</a></li>
                                                <li><a href="https://www.pexels.com/photo/burger-in-white-textile-52570/">https://www.pexels.com/photo/burger-in-white-textile-52570/</a></li>
                                                <li><a href="https://www.pexels.com/photo/pasta-dish-on-white-plate-26646/">https://www.pexels.com/photo/pasta-dish-on-white-plate-26646/</a></li>
                                                <li><a href="https://www.pexels.com/photo/avocado-ceramic-plate-chopsticks-culture-343870/">https://www.pexels.com/photo/avocado-ceramic-plate-chopsticks-culture-343870/</a></li>
                                                <li><a href="https://www.pexels.com/photo/person-holding-clear-shot-glass-in-front-of-black-wooden-table-63943/">https://www.pexels.com/photo/person-holding-clear-shot-glass-in-front-of-black-wooden-table-63943/</a></li>
                                                <li><a href="https://www.pexels.com/photo/wine-glass-on-restaurant-table-225228/">https://www.pexels.com/photo/wine-glass-on-restaurant-table-225228/</a></li>
                                                <li><a href="https://www.pexels.com/photo/table-with-plates-and-flowers-filed-neatly-selective-focus-photography-169190/">https://www.pexels.com/photo/table-with-plates-and-flowers-filed-neatly-selective-focus-photography-169190/</a></li>
                                                <li><a href="https://www.pexels.com/photo/bar-blur-candle-celebration-299550/">https://www.pexels.com/photo/bar-blur-candle-celebration-299550/</a></li>
                                                <li><a href="https://www.pexels.com/photo/black-and-copper-pen-169657/">https://www.pexels.com/photo/black-and-copper-pen-169657/</a></li>
                                                <li><a href="https://www.pexels.com/photo/board-bread-breakfast-bunch-349610/">https://www.pexels.com/photo/board-bread-breakfast-bunch-349610/</a></li>
                                                <li><a href="https://www.pexels.com/photo/restaurant-people-alcohol-bar-2286/">https://www.pexels.com/photo/restaurant-people-alcohol-bar-2286/</a></li>
                                                <li><a href="https://www.pexels.com/photo/restaurant-bottles-dinner-lunch-66640/">https://www.pexels.com/photo/restaurant-bottles-dinner-lunch-66640/</a></li>
                                                <li><a href="https://www.pexels.com/photo/brown-city-bike-near-person-wearing-white-and-black-shirt-white-sitting-outside-store-126371/">https://www.pexels.com/photo/brown-city-bike-near-person-wearing-white-and-black-shirt-white-sitting-outside-store-126371/</a></li>
                                                <li><a href="https://www.pexels.com/photo/city-restaurant-table-pavement-4309/">https://www.pexels.com/photo/city-restaurant-table-pavement-4309/</a></li>
                                                <li><a href="https://www.pexels.com/photo/close-up-of-hand-holding-coffee-cup-302902/">https://www.pexels.com/photo/close-up-of-hand-holding-coffee-cup-302902/</a></li>
                        </ul>
                    </div>

                    <!-- Credits -->
                    <div id="changelog" class="py-3">
                        <h2>Changelog</h2>
                        <p class="lead">What has changed since first version?</p>
                        <div class="alert alert-info">Updates are cooming soon!</div>
                    </div>

                </div>
                <!-- Files & Credits / End -->

            </div>
            <div class="col-md-3 hidden-sm hidden-xs">

                <nav id="side-navigation" class="stick-to-content pt-5" data-local-scroll>
                    <ul class="nav nav-vertical">
                        <li class="nav-item">
                            <a class="nav-link" href="#start"><span>Getting Started</span></a>
                            <ul>
                                <li class="nav-item"><a class="nav-link" href="#htmlStructure"><span>HTML Structure</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#grid"><span>Grid System</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#content-elements"><span>Content</span></a>
                            <ul>
                                <li class="nav-item"><a class="nav-link" href="#typography"><span>Typography</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#code"><span>Code</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#images"><span>Images</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#icons"><span>Icons</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#components"><span>Components</span></a>
                            <ul>
                                <li class="nav-item"><a class="nav-link" href="#alerts"><span>Alerts</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#buttons"><span>Buttons</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#forms"><span>Forms</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#pagination"><span>Pagination</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#tabs"><span>Tabs</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#modal"><span>Modal</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#videoModal"><span>Video Modal</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#carousel"><span>Carousel</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#badges"><span>Badges</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#tooltip"><span>Tooltip</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#utilities"><span>Utilities</span></a>
                            <ul>
                                <li class="nav-item"><a class="nav-link" href="#colors"><span>Available Colors</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#classes"><span>Helper Classes</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#configuration"><span>Configuration</span></a>
                            <ul>
                                <li class="nav-item"><a class="nav-link" href="#googleMap"><span>Google Map</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#bookingForm"><span>Booking Form</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#signupForm"><span>Sign Up Form</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#localScroll"><span>Local Scroll</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#animations"><span>Animations</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#developerTools"><span>Developer Tools</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#files"><span>Files &amp; Credits</span></a>
                            <ul>
                                <li class="nav-item"><a class="nav-link" href="#cssFiles"><span>CSS Files</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#sassFiles"><span>SASS Files</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#jsFiles"><span>JavaScript Files</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#phpFiles"><span>PHP Files</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#credits"><span>Credits</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#changelog"><span>Changelog</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div> 

    </section> 

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

    </footer>
    <!-- Footer / End -->

</div>
<!-- Content / End -->

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

<!-- JS Google Map -->
<script src="https://maps.googleapis.com/maps/api/js"></script>

<!-- JS CodeHighlighter -->
<script src="../assets/js/prettify.js"></script>

<!-- Additional Initializations -->
<script>
    // Pretty Print Init
    !function ($) {
        $(function(){
          window.prettyPrint && prettyPrint()   
        })
    }(window.jQuery)

    // Html Markups 
    $('.html-code').each(function(){
        var innerHtml = $(this).html();
        innerHtml = innerHtml.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
        $(this).html(innerHtml);
    });

    Core.Component.tooltip();
</script>

</body>

</html>
