<?php
$con = mysqli_connect("localhost", "root", "", "techdeals") or die("could not connect to mysql");
$db = mysqli_select_db($con, "techdeals") or die("no database");
if ($con) {
    $var_value = $_GET['option'];
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
    if ($var_value == 1) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        $result = $con->query("SELECT NAME,img_src,next_link FROM company where CAT_ID=1");
        $count = (int) mysqli_num_rows($result);
        $cnt = (int) 0;
        $result1 = $con->query("SELECT NAME FROM Category where ID=1");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 2) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        $result = $con->query("SELECT NAME,img_src,next_link FROM company where CAT_ID=2");
        $result1 = $con->query("SELECT NAME FROM Category where ID=2");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 3) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM cat_of_mob_accessories")or die(mysqli_error($con));
        $result = $con->query("SELECT Name,img_src,next_link FROM cat_of_mob_accessories where cat_id=3");
        $result1 = $con->query("SELECT NAME FROM Category where ID=3");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 4) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        $result = $con->query("SELECT NAME,img_src,next_link FROM company where CAT_ID=4");
        $result1 = $con->query("SELECT NAME FROM Category where ID=4");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 5) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT NAME FROM company where CAT_ID=5");
        $result1 = $con->query("SELECT NAME FROM Category where ID=5");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 6) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT NAME FROM company where CAT_ID=6");
        $result = $con->query("SELECT Name,img_src,next_link FROM cat_of_home_accessories where cat_id=6");
        $result1 = $con->query("SELECT NAME FROM Category where ID=6");
        $row1 = $result1->fetch_assoc();
    }



    if (isset($_GET['email']) && isset($_GET['uname'])) {
        $email = $_GET['email'];
        $uname = $_GET['uname'];
        $stringtobeappended = "email=$email&uname=$uname";
        $stringtobeappended1 = "&email=$email&uname=$uname";
        $view = "view.php?$stringtobeappended";
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
            body
            {
                background: url(newbg1.jpg) no-repeat center center;
                background-size: cover
            }
            h3
            {
                color: whitesmoke;
            }
            p{
                color: white;
            }
        </style>
    </head>

    <body style="overflow-x:hidden">

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
                        <li <?php echo $style1 ?>><a href="<?php echo $logout?>"><span ></span> Logout</a></li> 
                        <li <?php echo $style ?>><a href="<?php echo $signup ?>"><span ></span> Sign Up</a></li>    
                        <li ><a href="<?php echo $login ?>" ><span  <?php echo $style ?>></span> <?php echo $uname ?></a></li>                
                    </ul>                    
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="jumbotron" style="width:100%;padding-bottom: 5px;padding-left: 20px">
                <center><h1><?php echo $row1["NAME"] ?></h1></center>

            </div>
        </div>
        

            

<div class="container" style="overflow-x:hidden">
    <center>
        <div class="row">
            <div class="col-sm-6">
                <a href="<?php $result->data_seek(0);$row = $result->fetch_row();$row[2] = $row[2] .$stringtobeappended1;echo $row[2]; ?>" class="thumbnail" style="height: 265px; width:350px; margin-left:100px">
                    <img src="<?php $result->data_seek(0);$row = $result->fetch_row();echo $row[1]; ?>" alt="responsive image" style="height: 255px; width:350px">
                </a>
                <div class="caption">
                    <h3><?php $result->data_seek(0);$row = $result->fetch_row();echo $row[0]; ?></h3>
                </div>
            </div>
            <div class="col-sm-6">
                <a href="<?php $result->data_seek(1);$row = $result->fetch_row();$row[2] = $row[2] .$stringtobeappended1;echo $row[2]; ?>" class="thumbnail" style="height: 265px; width:350px">
                    <img src="<?php $result->data_seek(1);$row = $result->fetch_row();echo $row[1]; ?> " alt="responsive image" style="height: 255px; width:350px">
                </a>
                <div class="caption"  >
                    <h3><?php $result->data_seek(1);$row = $result->fetch_row();echo $row[0]; ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a href="<?php $result->data_seek(2);$row = $result->fetch_row();$row[2] = $row[2] .$stringtobeappended1;echo $row[2]; ?>" class="thumbnail" style="height: 265px; width:350px; margin-left:100px">
                    <img src="<?php $result->data_seek(2);$row = $result->fetch_row();echo $row[1]; ?>" alt="responsive image" style="height: 255px; width:350px">
                </a>
                <div class="caption"  >
                    <h3><?php $result->data_seek(2);$row = $result->fetch_row();echo $row[0]; ?></h3>
                </div>
            </div>
            <div class="col-sm-6">
                <a href="<?php $result->data_seek(3);$row = $result->fetch_row();$row[2] = $row[2] .$stringtobeappended1;echo $row[2]; ?>" class="thumbnail" style="height: 265px; width:350px">
                    <img src="<?php $result->data_seek(3);$row = $result->fetch_row();echo $row[1]; ?> " alt="responsive image" style="height: 255px; width:350px">
                </a>
                <div class="caption"  >
                    <center>
                    <h3><?php $result->data_seek(3);$row = $result->fetch_row();echo $row[0]; ?></h3>
                    </center>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a href="<?php $result->data_seek(4);$row = $result->fetch_row();$row[2] = $row[2] .$stringtobeappended1;echo $row[2]; ?>" class="thumbnail" style="height: 265px; width:350px; margin-left:100px">
                    <img src="<?php $result->data_seek(4);$row = $result->fetch_row();echo $row[1]; ?>" alt="responsive image" style="height: 255px; width:350px">
                </a>
                <div class="caption"  >
                    <h3><?php $result->data_seek(4);$row = $result->fetch_row();echo $row[0]; ?></h3>
                </div>
            </div>
            <div class="col-sm-6">
                <a href="<?php $result->data_seek(5);$row = $result->fetch_row();$row[2] = $row[2] .$stringtobeappended1;echo $row[2]; ?>" class="thumbnail" style="height: 265px; width:350px">
                    <img src="<?php $result->data_seek(5);$row = $result->fetch_row();echo $row[1]; ?>" alt="responsive image" style="height: 255px; width:350px">
                </a>
                <div class="caption"  >
                    <center>
                    <h3><?php $result->data_seek(5);$row = $result->fetch_row();echo $row[0]; ?></h3>
                    </center>
                </div>
            </div>
        </div>
    </center>
</div>
<div class="links" style="margin-top: 20px">
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

