<?php
$con = mysqli_connect("localhost", "root", "", "techdeals") or die("could not connect to mysql");
$db = mysqli_select_db($con, "techdeals") or die("no database");


if ($con) {
    //echo '<h1>Connected to MySQL</h1>';
//if connected then Select Database.
    session_start();
    //$var_value = $_GET['op'];
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
    $stringtobeappended = "";
    $stringtobeappended1 = "";
    //$str = "lenovo.php?op=".$op."&email=".$email."&uname=".$user;
    if (isset($_GET['email']) && isset($_GET['uname'])) {
        $email = $_GET['email'];
        $uname = $_GET['uname'];
        if (isset($_GET['delete']))
        {
            $del = $_GET['delete'];
            $result1=mysqli_query($con,"DELETE FROM cart WHERE transaction_id='$del'");
        }        
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
        $logout = "logout.php?$stringtobeappended";
        $index = "index1.php?$stringtobeappended";
        $db = mysqli_select_db($con, "techdeals");
       // $result = $con->query("SELECT  `Pro_id`, `Pro_name`, `Price`, `Pro_qty` FROM `cart` WHERE User_id='$uname')");
        $result=mysqli_query($con,"SELECT  transaction_id,cost,time FROM payment_details WHERE user_name='$uname'");
        $rowcount=mysqli_num_rows($result);
        $checkout = "checkout.php?$stringtobeappended";
        $logout = "logout.php";
        
        
        
    }
    
    
}
    ?>
    <html>
        <head>
            <title>e-commerce web page</title>
<!--            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
            <meta name="viewport" content="width=device-width, initial scale=1">
            <link rel="stylesheet" type="text/css" href="style.css"> 
            <link rel="stylesheet" type="text/css" href="style1.css">
            <style>
                th,td
                {
                    color:white;
                    text-align: center;
                }
                body
                {
                    background: url(newbg1.jpg) no-repeat center center;
                    background-size: cover;
                    overflow-x:hidden;
                }
                tr{
                    background-color:  black;
                }
            </style>
            <SCRIPT type="text/javascript">
                window.history.forward();
                function noBack() { window.history.forward(); }
            </SCRIPT>
        </head>
        <body onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="<?php echo $index ?>">Lifestyle Store</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li <?php echo $style1 ?>><a href="<?php echo $cart ?>"><span ></span>Cart</a></li>
                            <li <?php echo $style1 ?>><a href="<?php echo $settings ?>"><span ></span> Settings</a></li>
                            <li <?php echo $style1 ?>><a href="<?php echo $logout ?>"><span ></span> Logout</a></li> 
                            <li <?php echo $style ?>><a href="<?php echo $signup ?>"><span ></span> Sign Up</a></li>    
                            <li ><a href="<?php echo $login ?>" ><span  <?php echo $style ?>></span> <?php echo $uname ?></a></li>             
                    </ul>                               
                        </ul>

                    </div>
                </div>
            </nav>


            <div class="tcart"  >
                <div class="container" style="margin-top:240px;">
                    <table class="table  table-bordered">
                        <tbody style="color:black;">
                            <tr id="row0">
                                <th>Transaction_id</th>
                                <th>Total cost</th>
                                <th>Time</th>
                                
                            </tr>
                            <?php
                            
                                 
                            while ($row = mysqli_fetch_assoc($result)) {

                                echo "<tr>";
                                $y=$row['transaction_id'];
                                $x= $cart.'&delete='.$y;
                                echo "<td>" . $row['transaction_id'] . "</td>";
                                //$x=$row['Pro_id'];

                                echo "<td>" . $row['cost'] . "</td>";

                                echo "<td>" . $row['time'] . "</td>";

                                
                               
                                echo "</tr>";
                            }
                            
                            ?>

                        
                    </tbody>

                </table>
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
                    <p>Copyright © TechDeals. All Rights Reserved | Contact Us: +91 90000 00000</p>
                </center>
            </div>            
        </footer>
    </body>
</html>