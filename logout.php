<?php
$con = mysqli_connect("localhost", "root", "", "techdeals") or die("could not connect to mysql");
$db = mysqli_select_db($con, "techdeals") or die("no database");
if ($con) {
session_start();
$style = "style='display:inline;'";
$style1 = "style='display:none;'";
$view = "view.php";
$login = "login.php";
$signup = "signup1.php";
$cart = "cart.php";
$index = "index1.php";
$settings = "settings.php";
$logout = "logout.php";
$uname = "Login";
$product = "product.php";
$style = "style='display:inline;'";
$style1 = "style='display:none;'";

}
?>
<html>
    <head>
        <title>e-commerce web page</title>
<!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
        <meta name="viewport" content="width=device-width, initial scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="style1.css">
        <style>
            body
            {
                background: url(newbg1.jpg) no-repeat center center;
                background-size: cover;
                overflow-x:hidden;
            }
            .success-page{
                max-width:300px;
                display:block;
                margin: 0 auto;
                text-align: center;
                position: relative;
                top: 50%;
                transform: perspective(1px) translateY(50%)
            }
            .success-page img{
                max-width:62px;
                display: block;
                margin: 0 auto;
            }

            .btn-view-orders{
                display: block;
                border:1px solid #47c7c5;
                width:100px;
                margin: 0 auto;
                margin-top: 45px;
                padding: 10px;
                color:#fff;
                background-color:#47c7c5;
                text-decoration: none;
                margin-bottom: 20px;
            }
            h2{
                color:#47c7c5;
                margin-top: 25px;

            }
            a{
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">Tech Deals</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li <?php echo $style1 ?>><a href="<?php echo $cart ?>"><span ></span>Cart</a></li>
                        <li <?php echo $style1 ?>><a href="<?php echo $settings ?>"><span ></span> Settings</a></li>
                        <li <?php echo $style1 ?>><a href="<?php echo $index ?>"><span ></span> Logout</a></li> 
                        <li <?php echo $style ?>><a href="<?php echo $signup ?>"><span ></span> Sign Up</a></li>    
                        <li ><a href="<?php echo $login ?>" ><span  <?php echo $style ?>></span> <?php echo $uname ?></a></li>             
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <br>


        <div class="container">
            <div class="success-page">
                <img  src="logout.png" class="center" alt="" />
                <h2>Logout Successful !</h2>
                <h3 style="color: white">Do return back soon. <br> Great Deals await you.</h3>
                <a href=<?php echo $index ?>>Continue Shopping</a>
            </div>
        </div>


        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        
        
    <div class="links" style="margin-top: 40px">
        <div class="row" >
            <div class="col-sm-2" style="margin-top: 100px" >
            </div>
            <div class="col-sm-2" style="margin-top: 100px">
                <div class="caption" Style="margin-top:20px">
                    <center>
                        <h5 Style="color:white">Get To Know Us</h5>
                    </center>
                </div>


            </div>
            <div class="col-sm-2" style="margin-top: 100px">

                <div class="caption" Style="margin-top:20px">
                    <center>
                        <h5 Style="color:white">Connect With Us</h5>
                    </center>
                </div>
            </div>
            <div class="col-sm-2"style="margin-top: 100px" >

                <div class="caption" Style="margin-top:20px">
                    <center>
                        <h5 Style="color:white">Make Money With Us</h5>
                    </center>
                </div>
            </div>
            <div class="col-sm-2" style="margin-top: 100px">

                <div class="caption" Style="margin-top:20px" >
                    <center>
                        <h5 Style="color:white">Let Us Help You</h5>
                    </center>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-2" Style="margin-bottom:80px">



            </div>
            <div class="col-sm-2" Style="margin-bottom:80px">

                <center><p>
                        <a href="#" Style="color:white">About us</a>
                        <br>
                        <a href="#" Style="color:white">Carrers</a>
                        <br>
                        <a href="#" Style="color:white">Press Release</a>
                    </p></center>
            </div>
            <div class="col-sm-2" Style="margin-bottom:80px">

                <center><p>
                        <a href="https://www.facebook.com/" Style="color:white">Facebook</a>
                        <br>
                        <a href="https://www.instagram.com/" Style="color:white">Instagram</a>
                        <br>
                        <a href="https://twitter.com/login?lang=en" Style="color:white">Twitter</a>
                    </p></center>
            </div>
            <div class="col-sm-2" Style="margin-bottom:80px">

                <center><p>
                        <a href="#" Style="color:white">Sell on TechDeals</a>
                        <br>
                        <a href="#" Style="color:white">Advertise Your Project</a>
                        <br>
                        <a href="#" Style="color:white">Returns</a>
                    </p></center>
            </div>
            <div class="col-sm-2" Style="margin-bottom:80px">
                <center><p>
                        <a href="#" Style="color:white">Your Account</a>
                        <br>
                        <a href="#" Style="color:white">Help</a>

                    </p></center>

            </div>
            <div class="col-sm-2" Style="margin-bottom:80px">



            </div>

        </div>
        <div class="logo">
            <center><img src="tech.png" height="100px" width="150px" style="margin-bottom:50px"></center>
        </div>

    </div>
    <footer>
        <div class="container">
            <center>
                <p>Copyright © TechDeals | All Rights Reserved | Contact Us: +91 90000 00000</p>
            </center>
        </div>            
    </footer>
</body>
</html>
 