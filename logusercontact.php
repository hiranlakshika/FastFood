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

                    <a href="http://localhost/FastFood/logout.php" class="btn btn-warning navbar-btn navbar-right" data-toggle="modal" >Log out</a>
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

        <div class="container">
            <section>
                <div class="page-header" id="contact" >
                    <h2 style="margin-top: 2cm">Contact Us.<small> Contact us for more.</small></h2>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <p>Send us a message, or contact us from the address below</p>


                        <address>
                            <strong>Fast Food Restaurant</strong></br>
                            111, High level road </br>
                            Gangodavila</br>
                            Nugegoda</br>
                            Sri Lanka</br>
                            +94112248963
                        </address>
                    </div>

                    <div class="col-lg-8">
                        <form action="contactus.php" class="form-horizontal" method="post">
                            <div class="form-group">
                                <label for="user-name" class="col-lg-2 control-label">Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="user-name" placeholder="Enter you name" name="name" required>
                                </div>
                            </div><!-- End form group -->

                            <div class="form-group">
                                <label for="user-email" class="col-lg-2 control-label">Email</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="user-email" placeholder="Enter you Email Address" name="email" required>
                                </div>
                            </div><!-- End form group -->

                            <div class="form-group">
                                <label for="user-url" class="col-lg-2 control-label">Your Website</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="user-email" placeholder="If you have Any." name="web">
                                </div>
                            </div><!-- End form group -->

                            <div class="form-group">
                                <label for="user-message" class="col-lg-2 control-label">Your Message</label>
                                <div class="col-lg-10">
                                    <textarea id="user-message" class="form-control" 
                                              cols="20" rows="10" placeholder="Enter your Message" name="message" required></textarea>
                                </div>
                            </div><!-- End form group -->

                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>



                        </form>
                    </div>
                </div><!-- End the row -->
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

