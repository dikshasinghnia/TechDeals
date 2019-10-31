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
    $success ="sucess.php";
    $uname = "Login";
    $product = "product.php";
    $style = "style='display:inline;'";
    $style1 = "style='display:none;'";
    $stringtobeappended = "";
    $stringtobeappended1 = "";
    if (isset($_GET['email']) && isset($_GET['uname']) && isset($_GET['cost']))
    {
        $email = $_GET['email'];
        $uname = $_GET['uname'];
        $cost = $_GET['cost'];

        $stringtobeappended = "email=$email&uname=$uname";
        $stringtobeappended1 = "&email=$email&uname=$uname";
        $lenovo = "women.php?.$stringtobeappended";
        $view = "view.php?$stringtobeappended";
        $login = "#";
        $signup = "#";
        $style = "style='display:none;'";
        $style1 = "style='display:inline;'";
        $product = "product.php?$stringtobeappended";
        $cart = "cart.php?$stringtobeappended";
        $settings = "settings.php?$stringtobeappended";
        $success ="sucess.php?$stringtobeappended&cost=$cost";
        $index = "index1.php?$stringtobeappended";
        $db = mysqli_select_db($con, "techdeals");
        $checkout = "checkout.php?$stringtobeappended";
        $logout = "logout.php";
    }
    if (isset($_GET['uname']) && isset($_POST["pay"])) {
        $user = $_GET['uname'];
        $cost = $_GET['cost'];
        $email = $_GET['email'];
        $cardname = $_POST["cardname"];
        $cardnumber = $_POST["cardnumber"];
        $expmonth = $_POST["expmonth"];
        $expyr = $_POST["expyear"];
        $cvv = $_POST["cvv"];
        $number_length = strlen($cardnumber);
        $cvv_length = strlen($cvv);
        $expmonth_length=strlen("$expmonth");
        $expyr_length=strlen("$expyr");
        if (!($number_length == 16 && $cvv_length == 3 && $expmonth_length <3 && $expyr_length <5)) {
            print "<p>" ."<font color=\"red\">"."<b>". "Invalid Card Details". "</b>"."</font>"." </p>";

        } else {
            $result3 = $con->query("INSERT INTO payment_details (name_card,card_id, exp_month, exp_yr, cvv, cost,user_name) VALUES('$cardname','$cardnumber','$expmonth','$expyr','$cvv','$cost','$user')");
            print "<script>"."window.location.assign(http://localhost/sucess.php?email='$email'&user='$user'&cost='$cost'"."</script>";
            header("refresh:1, url='$success'");
            exit;
        }

    }
    }

?>
<html>
    <head>
<!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="style1.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
        <style>
            .s .row {
                display: -ms-flexbox; /* IE10 */
                display: flex;
                -ms-flex-wrap: wrap; /* IE10 */
                flex-wrap: wrap;
                margin: 0px -16px;
            }
            .s{
                margin-top: 20px;
            }
            .s .col-25 {
                -ms-flex: 25%; /* IE10 */
                flex: 25%;
            }

            .s .col-50 {
                -ms-flex: 50%; /* IE10 */
                flex: 50%;
            }

            .s .col-75 {
                -ms-flex: 75%; /* IE10 */
                flex: 75%;
            }

            .s .col-25,
            .s .col-50,
            .s .col-75 {
                padding: 0 16px;
            }

            .s .container {
                background-color: #f2f2f2;
                padding: 5px 20px 15px 20px;
                border: 1px solid lightgrey;
                border-radius: 3px;
            }

            input[type=text] {
                width: 100%;
                margin-bottom: 20px;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 3px;
            }

            .s label {
                margin-bottom: 10px;
                display: block;
            }

            .s .icon-container {
                margin-bottom: 20px;
                padding: 7px 0;
                font-size: 24px;
            }

            .s .btn {
                background-color: #4CAF50;
                color: white;
                padding: 12px;
                margin: 10px 0;
                border: none;
                width: 100%;
                border-radius: 3px;
                cursor: pointer;
                font-size: 17px;
            }

            .s .btn:hover {
                background-color: #45a049;
            }

            .s a {
                color: #2196F3;
            }

            .s hr {
                border: 1px solid lightgrey;
            }

            .s span.price {
                float: right;
                color: grey;
            }
            body
            {
                background: url(newbg1.jpg) no-repeat center center;
                background-size: cover;
                overflow-x:hidden;
            }
            h2
            {
                color: whitesmoke;
                margin-top: 100px;
                margin-left: 45=0px;
            }
            p{
                color: white;
            }
            /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
            @media (max-width: 800px) {
                .row {
                    flex-direction: column-reverse;
                }
                .col-25 {
                    margin-bottom: 20px;
                }
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
                        <li <?php echo $style1 ?>><a href="<?php echo $logout ?>"><span ></span> Logout</a></li> 
                        <li <?php echo $style ?>><a href="<?php echo $signup ?>"><span></span> Sign Up</a></li>    
                        <li ><a href="<?php echo $login ?>" ><span  <?php echo $style ?>></span> <?php echo $uname ?></a></li>             
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <br>
        <div class="s">


            <div class="container">
                <form action="" method="Post">

                        <h3>Payment</h3>
                       
                        <label for="cname">Name on Card</label>
                        <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                        <label for="ccnum">Credit card number</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="1111222233334444">
                        <label for="expmonth">Exp Month</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="9">
                        <div class="row">
                            <div class="col-50">
                                <label for="expyear">Exp Year</label>
                                <input type="text" id="expyear" name="expyear" placeholder="2018">
                            </div>
                            <div class="col-50">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="352">
                            </div>
                        </div>               
                        <input type="submit" value="Continue to checkout" name="pay" class="btn">                    
</form>
               

            </div>


        </div>
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
