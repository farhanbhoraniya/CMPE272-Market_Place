<?php 
    session_start();
    require_once("send_email.php");
    if(!empty($_GET["email"])) {
        $email = $_GET["email"];
        echo $email;
        $subject = "You have been subscribed to Newsletter";
        $message = "Thank you for subscribing to our Newsletter";
        $retval = send_email($email, $subject, $message);
        if( $retval == true ) {
            echo "Subscribed successfully";
        }else {
            echo "Error while subscribing";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>MARXET PLACE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <?php
            if(isset($_SESSION['name'])){
                echo "<a class='navbar-brand' href='index.php'>WELCOME ". $_SESSION['name']."</a>";
            }
            else{
                echo "<a class='navbar-brand' href='index.php'>MARXETPLACE</a>";
            }
        ?>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item active"><a href="shop.php" class="nav-link">Products</a></li>
                <li class="nav-item active"><a href="login.php" class="nav-link">Log In</a></li>
                <?php
                    if(isset($_SESSION['name'])){
                        echo "<li class='nav-item active'><a href='marketProfileUpdate.php' class='nav-link'>Update Profile</a></li>";
                        echo "<li class='nav-item active'><a href='logout.php' class='nav-link'>Logout</a></li>";
                    }
                ?>
                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span><?php echo isset($_SESSION["cart_item"]) ? sizeof($_SESSION["cart_item"]):0;?></a></li>

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<div class="hero-wrap js-fullheight" style="background-image: url('images/ecommerce_1.jpg');">
<!--    <div class="overlay"></div>-->
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <h3 class="v">MARXET PLACE - Time to buy at one place</h3>
            <h3 class="vr">Since - 2019</h3>
            <div class="col-md-11 ftco-animate text-center">
                <h1 style="color: lightgreen">Get Abundance</h1>
<!--                <h2><span>Ready with Cart</span></h2>-->
            </div>
            <div class="mouse">
                <a href="#" class="mouse-icon">
                    <div class="mouse-wheel"><span class="ion-ios-arrow-down"></span></div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="goto-here"></div>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big">Products</h1>
                <h2 class="mb-4">Our Products</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm col-md-6 col-lg ftco-animate">
                <div class="product">
                    <a href="http://farhanbhoraniya.com/" class="img-prod"><img class="img-fluid" src="images/house.jpg" alt="Colorlib Template"></a>
                    <div class="text py-3 px-3">
                        <h3><a href="http://farhanbhoraniya.com/">House</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg ftco-animate">
                <div class="product">
                    <a href="http://varshitbuilds.com/fwa1/" class="img-prod"><img class="img-fluid" src="images/destination.jpg" alt="Colorlib Template"></a>
                    <div class="text py-3 px-3">
                        <h3><a href="http://varshitbuilds.com/fwa1/">Travel Destination</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg ftco-animate">
                <div class="product">
                    <a href="http://kpsjsuprojects.com/" class="img-prod"><img class="img-fluid" src="images/server.jpg" alt="Colorlib Template"></a>
                    <div class="text py-3 px-3">
                        <h3><a href="http://kpsjsuprojects.com/">Cloud Service</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg ftco-animate">
                <div class="product">
                    <a href="http://yumbox.site/" class="img-prod"><img class="img-fluid" src="images/chocolates.jpg" alt="Colorlib Template"></a>
                    <div class="text py-3 px-3">
                        <h3><a href="http://yumbox.site/">Chocolates</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg ftco-animate">
                <div class="product">
                    <a href="http://manavrajvanshi.com/#products" class="img-prod"><img class="img-fluid" src="images/robot.jpg" alt="Colorlib Template"></a>
                    <div class="text py-3 px-3">
                        <h3><a href="http://manavrajvanshi.com/#products">Marvel Products</a></h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/server2.jpg);">
                <a href="https://www.youtube.com/watch?v=4V7p6lIOFE4" class="icon popup-vimeo d-flex justify-content-center align-items-center">
                    <span class="icon-play"></span>
                </a>
            </div>
            <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                <div class="heading-section-bold mb-5 mt-md-5">
                    <div class="ml-md-0">
                        <h2 class="mb-4">MARXET PLACE <br>Online <br> <span>All in One Store</span></h2>
                    </div>
                </div>
                <div class="pb-md-5">
                    <p>E-commerce is revolutionizing the way we all shop. Why do you want to hop from one store to another in search of the latest phone when you can find it on the Internet in a single click? Not only mobiles. MARXETPLACE houses everything you can possibly imagine, from Trending Technology Stuff, Scalable Cloud Services, Delicious Chocolates, Trusted Real Estate,  and amazing Travel Services, we got them all covered. You name it, and you can stay assured about finding them all here. For those of you with erratic working hours, MARXETPLACE is your best bet. Shop in your PJs, at night or in the wee hours of the morning. This e-commerce never shuts down.</p>
                    <p>What's more, with our year-round shopping festivals and events, our prices are irresistible. We're sure you'll find yourself picking up more than what you had in mind. If you are wondering why you should shop from MARXETPLACE when there are multiple options available to you, well, a look at our products will answer your question.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big">Testimony</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 ftco-animate">
                <div class="row ftco-animate">
                    <div class="col-md-12">
                        <div class="carousel-testimony owl-carousel ftco-owl">
                            <div class="item">
                                <div class="testimony-wrap py-4 pb-5">
                                    <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
                                    </div>
                                    <div class="text text-center">
                                        <p class="mb-4">This site has a fresh, beautiful and engaging overall design. My favorite attribute is the color scheme and photography. From the layout to the color scheme and product images, the website’s design complements the brand promise that inner happiness leads to outward beauty.</p>
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Customer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4 pb-5">
                                    <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
                                    </div>
                                    <div class="text text-center">
                                        <p class="mb-4">This is an energetic and personable site that does an excellent job of going beyond a template feel.</p>
                                        <p class="name">James Noah</p>
                                        <span class="position">Customer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4 pb-5">
                                    <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
                                    </div>
                                    <div class="text text-center">
                                        <p class="mb-4">They really have me interested in buying one of these things! The site couldn’t be more clear what the product is and how to buy it.</p>
                                        <p class="name">Joh Liam</p>
                                        <span class="position">Customer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4 pb-5">
                                    <div class="user-img mb-4" style="background-image: url(images/person_4.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
                                    </div>
                                    <div class="text text-center">
                                        <p class="mb-4">It’s always a challenge organizing large numbers of products, but The Mountain does a great job with this, allowing visitors to quick drill down and find what they are looking for.</p>
                                        <p class="name">Robert Mason</p>
                                        <span class="position">Customer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);">
    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="5000000">0</strong>
                                <span>Happy Customers</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="16584">0</strong>
                                <span>Branches</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="2165">0</strong>
                                <span>Partner</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="34">0</strong>
                                <span>Awards</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light ftco-services">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big">Services</h1>
                <h2>We want you to express yourself</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-4">
                        <span class="flaticon-002-recommended"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Refund Policy</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-4">
                        <span class="flaticon-001-box"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Premium Packaging</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-4">
                        <span class="flaticon-003-medal"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Superior Quality</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h1 class="big">Subscribe</h1>
                    <h2>Subcribe to our Newsletter</h2>
                    <div class="row d-flex justify-content-center mt-5">
                        <div class="col-md-8">
                            <form action="index.php?action=email" class="subscribe-form" method="GET">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control" placeholder="Enter email address" name="email">
                                    <input type="submit" value="Subscribe" class="submit px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="ftco-footer bg-light ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">MARXET PLACE</h2>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Menu</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">Shop</a></li>
                        <li><a href="#" class="py-2 d-block">About</a></li>
                        <li><a href="#" class="py-2 d-block">Journal</a></li>
                        <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Help</h2>
                    <div class="d-flex">
                        <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                            <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                            <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                            <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                            <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                        </ul>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">FAQs</a></li>
                            <li><a href="#" class="py-2 d-block">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>