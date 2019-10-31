<?php
$con = mysqli_connect("localhost", "root", "", "techdeals") or die("could not connect to mysql");
$db = mysqli_select_db($con, "techdeals") or die("no database");
if ($con) {
    $db = mysqli_select_db($con, "techdeals");
    $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
    session_start();
    $view = "view.php";
    $login = "login.php";
    $signup = "signup1.php";
    $cart = "cart.php";
    $settings = "settings.php";
    $logout = "logout.php";
    $uname = "Login";
    $product = "product.php";
    $style = "style='display:inline;'";
    $style1 = "style='display:none;'";
    $index = "index1.php";
    $stringtobeappended = "";
    if (isset($_GET['email']) && isset($_GET['uname']) && isset($_GET['oldpassword']) && isset($_GET['newpassword'])) {
        $email = $_GET['email'];
        $uname = $_GET['uname'];
        $oldpassword=$_GET['oldpassword'];
        $newpassword=$_GET['newpassword'];
        $result = $con->query("SELECT firstname,lastname,username,email,gender,phone,city FROM user where username='$uname' ");
        $result->data_seek(0);
        $row = $result->fetch_row();
        $stringtobeappended = "email=$email&uname=$uname";
        $view = "view.php$stringtobeappended";
        $login = "#";
        $signup = "#";
        $style = "style='display:none;'";
        $style1 = "style='display:inline;'";
        $product = "product.php?$stringtobeappended";
        $index = "index1.php?$stringtobeappended";
        $cart = "cart.php?$stringtobeappended";
        $settings = "settings.php?$stringtobeappended";
        $logout = "logout.php";
        $result2=$con->query("SELECT * FROM user WHERE email='$email' AND password = '$oldpassword' " );
        $row=$result2->fetch_assoc();
        $count = (int)mysqli_num_rows($result2);
        if ($count==0) {
          header("location: settings.php?email=$email&uname=$uname&error=invalid");  
        }else {
            $result1=$con->query("UPDATE user SET password ='$newpassword' WHERE email='$email'");
            if ($result1)
            {
                echo "<script type='text/javascript'>alert('Password Succesfully changed');</script>";
                $email = $_GET['email'];
                $uname = $_GET['uname'];
                $result = $con->query("SELECT firstname,lastname,username,email,gender,phone,city FROM user where username='$uname' ");
                $result->data_seek(0);
                $row = $result->fetch_row();
                $stringtobeappended = "email=$email&uname=$uname";
                $view = "view.php$stringtobeappended";
                $login = "#";
                $signup = "#";
                $style = "style='display:none;'";
                $style1 = "style='display:inline;'";
                $product = "product.php?$stringtobeappended";
                $cart = "cart.php?$stringtobeappended";
                $settings = "settings.php?$stringtobeappended";
                $logout = "logout.php";
                $index = "index1.php?$stringtobeappended";
            }
            else {
                echo "<script type='text/javascript'>alert('Please try later');</script>";
                $email = $_GET['email'];
        $uname = $_GET['uname'];
        $result = $con->query("SELECT firstname,lastname,username,email,gender,phone,city FROM user where username='$uname' ");
        $result->data_seek(0);
        $row = $result->fetch_row();
        $stringtobeappended = "email=$email&uname=$uname";
        $view = "view.php$stringtobeappended";
        $login = "#";
        $signup = "#";
        $style = "style='display:none;'";
        $style1 = "style='display:inline;'";
        $product = "product.php?$stringtobeappended";
        $cart = "cart.php?$stringtobeappended";
        $settings = "settings.php?$stringtobeappended";
        $logout = "logout.php";
        $index = "index1.php?$stringtobeappended";
            }
        }
        
    } elseif (isset($_GET['email']) && isset($_GET['uname'])) {

        $email = $_GET['email'];
        $uname = $_GET['uname'];
        $result = $con->query("SELECT firstname,lastname,username,email,gender,phone,city FROM user where username='$uname' ");
        $result->data_seek(0);
        $row = $result->fetch_row();
        $stringtobeappended = "email=$email&uname=$uname";
        $view = "view.php$stringtobeappended";
        $login = "#";
        $signup = "#";
        $style = "style='display:none;'";
        $style1 = "style='display:inline;'";
        $product = "product.php?$stringtobeappended";
        $cart = "cart.php?$stringtobeappended";
        $settings = "settings.php?$stringtobeappended";
        $logout = "logout.php";
        $index = "index1.php?$stringtobeappended";
    }
}
?>

<html>
    <head >
        <title>e-commerce web page</title>
<!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
        <meta name="viewport" content="width=device-width, initial scale=1">
        <link rel="stylesheet" type="text/css" href="style.css"> 
        <link rel="stylesheet" type="text/css" href="style1.css">
        <style>
            .error {color: #FF0000;}
            body
            {
                background: url(newbg1.jpg) no-repeat center center;
                background-size: cover;
                overflow-x:hidden;
            }
            h1
            {
                color: whitesmoke;
            }
            p{
                color: white;
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
                    <a class="navbar-brand" href="<?php echo $index ?>">Tech Deals</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li <?php echo $style1 ?>><a href="<?php echo $cart ?>"><span></span>Cart</a></li>
                        <li <?php echo $style1 ?>><a href="<?php echo $settings ?>"><span ></span> Settings</a></li>
                        <li <?php echo $style1 ?>><a href="<?php echo $logout ?>"><span ></span> Logout</a></li> 
                        <li <?php echo $style ?>><a href="<?php echo $signup ?>"><span ></span> Sign Up</a></li>    
                        <li ><a href="<?php echo $login ?>" ><span <?php echo $style ?>></span> <?php echo $uname ?></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="sign_up" style="margin-top: 140px; margin-left: 450px;">
            <div class="container">
                <div class="row">
                    <center>
                    <div class="col-xs-6">
                        <center> <h1>Account details</h1></center>
                        <br>
                        <p style="font-size: 20px;">
                            <b>First Name:</b>&nbsp;&nbsp;<?php echo $row[0] ?><br>
                            <b>Last Name: </b>&nbsp;&nbsp;<?php echo $row[1] ?><br>
                            <b>User Name:  </b>&nbsp;&nbsp;   <?php echo $row[2] ?><br>
                            <b>Email:</b>&nbsp;&nbsp;   <?php echo $row[3] ?><br>
                            <b>Gender: </b>&nbsp;&nbsp;   <?php echo $row[4] ?><br>
                            <b>Contact: </b>&nbsp;&nbsp;  <?php echo $row[5] ?><br>
                            <b>City: </b>&nbsp;&nbsp;  <?php echo $row[6] ?><br>
                        </p>
                    </div>
                    </center>
                </div>
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
