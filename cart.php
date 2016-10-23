<?php

session_start();

$username = $_SESSION["uname"];

echo '<!DOCTYPE html>

<html>
    <head>
        <title>Shopping Cart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/cartstyles.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/footer.css" rel="stylesheet">
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
        <br> <br><br> <br>
        <div class="container">
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th style="width:50%">Product</th>
                        <th style="width:10%">Price</th>
                        <th style="width:8%">Quantity</th>
                        <th style="width:22%" class="text-center">Subtotal</th>
                        <th style="width:10%"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-2 hidden-xs"><img src="pics/foodlogo.jpg" alt="..." class="img-responsive"/></div>
                                <div class="col-sm-10">
                                    <h4 class="nomargin">Item</h4>
                                    <p>No Items available</p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">Rs. 00.00</td>
                        <td data-th="Quantity">
                            <input type="number" class="form-control text-center" value="1">
                        </td>
                        <td data-th="Subtotal" class="text-center">Rs. 00.00</td>
                        <td class="actions" data-th="">
                            <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="visible-xs">
                        <td class="text-center"><strong>Rs. 00.00</strong></td>
                    </tr>
                    <tr>
                        <td><a href="http://localhost/FastFood/logusermenu.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                        <td colspan="2" class="hidden-xs"></td>
                        <td class="hidden-xs text-center"><strong>Rs. 00.00</strong></td>
                        <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <br> <br><br> <br>
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