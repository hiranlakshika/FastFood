<?php

session_start();

$username = $_SESSION["uname"];

echo '<!DOCTYPE html>

<html>
    <head>
        <title>Fast Food</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/footer.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/login.css" rel="stylesheet">
    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a href="index.html" class="navbar-brand">Fast Food</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">

                    <a href="http://localhost/FastFood/logout.php" class="btn btn-warning navbar-btn navbar-right" data-toggle="modal">Log out</a>
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a> 
                        <li><a href="gallery.html">Gallery</a> 
                        <li><a href="menus.html">Menus</a> 
                        <li><a href="contact.html">Contact Us</a> 
                    </ul>
                </div>
            </div>
        </nav>

        <div class="jumbotron">
            <div class="container text-center">
                <h1>Fast Food</h1>
                <p>Sri Lanka'."'".'s best and fast food delivering system</p>

                <div class="btn-group">
                    <a href="https://play.google.com/store/apps/details?id=com.ce.android.brand.uppercrust" target="_blank" class="btn btn-lg btn-info">Download App</a>
                </div>
            </div>
        </div>

        <!-- Feedback-->
        <div class="container">
            <section>
                <div class="page-header" id="feedback">
                    <h2>Latest news.<small> Check out the Food Trends for 2016</small></h2>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <blockquote>
                            <p>Sriracha has been the go-to hot sauce of choice these last few years, being used in everything from pasta to cheese dip to ice cream, but it'."'".'s about to be joined by some new, spicy friends. According to Technomic, diners with adventurous palates can look forward to ingredients found in cuisine from North Africa and Southeast Asia such as dukka, ghost pepper, gochujang, harissa sambal and sumac.</p>
                            <footer>The hotter the better.</footer>
                        </blockquote>
                    </div>
                    <div class="col-md-4">
                        <blockquote>
                            <p>For 2016, carbonated beverages are at your local watering hole, Technomic predicts that you'."'".'ll find a preponderance of champagne and Proseccos, soft drinks with a kick and sparkling teas -- not to be confused with bubble teas, which are accompanied by tapioca.</p>
                            <footer>Pass the bubbly, please.</footer>
                        </blockquote>
                    </div>
                    <div class="col-md-4">
                        <blockquote>
                            <p>In 2016, more diners will want to know where their food comes from and how it got onto their plates, according to Technomic. This clamoring for local and fresh ingredients means many restaurants will aim to streamline their supply chains and be as transparent as possible about their suppliers and food sources.</p>
                            <footer>Not the destination, but the journey.</footer>
                        </blockquote>
                    </div>
                </div>
            </section>
        </div>


        <link href="css/font-awesome.min.css" rel="stylesheet">
        <footer>
            <div class="footer" id="footer">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                            <h3>  </h3>
                            <ul>
                                <li>
                                    <div class="input-append newsletter-box text-center">
                                        <input type="text" class="full text-center" placeholder="Email ">
                                        <button class="btn  bg-gray" type="button"> Subscribe <i class="fa fa-long-arrow-right"> </i> </button>
                                    </div>
                                </li>
                            </ul>
                            <ul class="social">
                                <li> <a href="https://www.facebook.com/" target="blank"> <i class=" fa fa-facebook">   </i> </a> </li>
                                <li> <a href="https://twitter.com/" target="blank"> <i class="fa fa-twitter">   </i> </a> </li>
                                <li> <a href="https://plus.google.com/" target="blank"> <i class="fa fa-google-plus">   </i> </a> </li>
                                <li> <a href="https://www.pinterest.com/" target="blank"> <i class="fa fa-pinterest">   </i> </a> </li>
                                <li> <a href="https://www.youtube.com/" target="blank"> <i class="fa fa-youtube">   </i> </a> </li>
                            </ul>
                        </div>
                    </div>
                    <!--/.row--> 
                </div>
                <!--/.container--> 
            </div>
            <!--/.footer-->

            <div class="footer-bottom">
                <div class="container">
                    <p class="pull-left"> Copyright © Fast Food Restaurant 2016. All right reserved. </p>
                    <div class="pull-right">
                        <ul class="nav nav-pills payments">
                            <li><i class="fa fa-cc-visa"></i></li>
                            <li><i class="fa fa-cc-mastercard"></i></li>
                            <li><i class="fa fa-cc-amex"></i></li>
                            <li><i class="fa fa-cc-paypal"></i></li>
                        </ul> 
                    </div>
                </div>
            </div>
            <!--/.footer-bottom--> 
        </footer>
        <script src="jquery/jquery-3.1.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
';
?>
