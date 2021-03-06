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
        <link href="css/login.css" rel="stylesheet">
        <link href="css/footer.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
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

                    <a href="http://localhost/FastFood/loguser.php" class="navbar-brand">Fast Food</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">

                    <a href="http://localhost/FastFood/logout.php" class="btn btn-warning navbar-btn navbar-right" data-toggle="modal">Log out</a>
                    <ul class="nav navbar-nav">
                       <li><a href="http://localhost/FastFood/loguser.php">Home</a> 
                        <li><a href="http://localhost/FastFood/logusergallery.php">Gallery</a> 
                        <li><a href="http://localhost/FastFood/logusermenu.php">Menus</a> 
                        <li><a href="http://localhost/FastFood/logusercontact.php">Contact Us</a> 
                        <li><a href="http://localhost/FastFood/cart.php">Shopping Cart</a> 
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <br>

        <div class="container">
            <section>
                <div class="page-header" id="gallery">
                    <h2>Gallery.<small> Check out our latest food events</small></h2>
                </div>

                <div class="carousel slide" id="screenshot-carousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#screenshot-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#screenshot-carousel" data-slide-to="1"></li>
                        <li data-target="#screenshot-carousel" data-slide-to="2"></li>
                        <li data-target="#screenshot-carousel" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="pics/donuts.jpg" alt="Text of the image">
                            <div class="carousel-caption">
                                <h3>Donuts</h3>
                                <p>Food festival 2016</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="pics/cup_cakes.jpg" alt="Text of the image">
                            <div class="carousel-caption">
                                <h3>Cup cakes</h3>
                                <p>Food festival 2016</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="pics/strawberry.jpg" alt="Text of the image">
                            <div class="carousel-caption">
                                <h3>Strawberry with chocolate</h3>
                                <p>Food festival 2016</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="pics/coffee.jpg" alt="Text of the image">
                            <div class="carousel-caption">
                                <h3>Coffee</h3>
                                <p>Food festival 2016</p>
                            </div>
                        </div>

                    </div><!-- End Carousel inner -->
                    <a href="#screenshot-carousel" class="left carousel-control" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a href="#screenshot-carousel" class="right carousel-control" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div><!-- End Carousel -->

            </section>
        </div>

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