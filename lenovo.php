<?php
$con = mysqli_connect("localhost", "root", "", "techdeals") or die("could not connect to mysql");
$db = mysqli_select_db($con, "techdeals") or die("no database");
if ($con) {
    //echo '<h1>Connected to MySQL</h1>';
//if connected then Select Database.
    session_start();
    $var_value = $_GET['op'];
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
//echo $var_value;
    if ($var_value == 1) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        $result = $con->query("SELECT Name,Pro_ID,price,img_src FROM mobile_phones where comp_id=1");
        $count = (int) mysqli_num_rows($result);
        $cnt = (int) 0;
        $result1 = $con->query("SELECT NAME FROM company where ID=1");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 2) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        $result = $con->query("SELECT Name,Pro_ID,price,img_src FROM mobile_phones where comp_id=2");
        $result1 = $con->query("SELECT NAME FROM company where ID=2");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 3) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM cat_of_mob_accessories")or die(mysqli_error($con));
        $result = $con->query("SELECT Name,Pro_ID,price,img_src FROM mobile_phones where comp_id=3");
        $result1 = $con->query("SELECT NAME FROM company where ID=3");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 4) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        $result = $con->query("SELECT Name,Pro_ID,price,img_src FROM mobile_phones where comp_id=4");
        $result1 = $con->query("SELECT NAME FROM company where ID=4");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 5) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT Name,Pro_ID,price,img_src FROM mobile_phones where comp_id=5");
        $result1 = $con->query("SELECT NAME FROM company where ID=5");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 6) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT NAME FROM company where CAT_ID=6");
        $result = $con->query("SELECT Name,Pro_ID,price,img_src FROM mobile_phones where comp_id=6");
        $result1 = $con->query("SELECT NAME FROM company where ID=6");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 7) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT NAME FROM company where CAT_ID=6");
        $result = $con->query("SELECT Name,Pro_id,price,img_src FROM cameras where comp_id=7");
        $result1 = $con->query("SELECT NAME FROM company where ID=7");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 8) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT NAME FROM company where CAT_ID=6");
        $result = $con->query("SELECT Name,Pro_id,price,img_src FROM cameras where comp_id=8");
        $result1 = $con->query("SELECT NAME FROM company where ID=8");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 9) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT NAME FROM company where CAT_ID=6");
        $result = $con->query("SELECT Name,Pro_id,price,img_src FROM cameras where comp_id=9");
        $result1 = $con->query("SELECT NAME FROM company where ID=9");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 10) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT NAME FROM company where CAT_ID=6");
        $result = $con->query("SELECT Name,Pro_id,price,img_src FROM cameras where comp_id=10");
        $result1 = $con->query("SELECT NAME FROM company where ID=10");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 11) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT NAME FROM company where CAT_ID=6");
        $result = $con->query("SELECT Name,Pro_id,price,img_src FROM cameras where comp_id=11");
        $result1 = $con->query("SELECT NAME FROM company where ID=11");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 12) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT NAME FROM company where CAT_ID=6");
        $result = $con->query("SELECT Name,Pro_id,price,img_src FROM cameras where comp_id=12");
        $result1 = $con->query("SELECT NAME FROM company where ID=12");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 13) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT NAME FROM company where CAT_ID=6");
        $result = $con->query("SELECT Name,Pro_id,Price,img_src FROM laptops where comp_id=13");
        $result1 = $con->query("SELECT NAME FROM company where ID=13");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 14) {
        $db = mysqli_select_db($con, "techdeals");
        $result = $con->query("SELECT Name,Pro_id,Price,img_src FROM laptops where comp_id=14");
        $result1 = $con->query("SELECT NAME FROM company where ID=14");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 15) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT NAME FROM company where CAT_ID=6");
        $result = $con->query("SELECT Name,Pro_id,Price,img_src FROM laptops where comp_id=15");
        $result1 = $con->query("SELECT NAME FROM company where ID=15");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 16) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT NAME FROM company where CAT_ID=6");
        $result = $con->query("SELECT Name,Pro_id,Price,img_src FROM laptops where comp_id=16");
        $result1 = $con->query("SELECT NAME FROM company where ID=16");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 17) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT NAME FROM company where CAT_ID=6");
        $result = $con->query("SELECT Name,Pro_id,Price,img_src FROM laptops where comp_id=17");
        $result1 = $con->query("SELECT NAME FROM company where ID=17");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 18) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT NAME FROM company where CAT_ID=6");
        $result = $con->query("SELECT Name,Pro_id,Price,img_src FROM laptops where comp_id=18");
        $result1 = $con->query("SELECT NAME FROM company where ID=18");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 19) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT NAME FROM company where CAT_ID=6");
        $result = $con->query("SELECT Name,Pro_id,Price,img_src FROM home where home_id=1");
        $result1 = $con->query("SELECT NAME FROM cat_of_home_accessories where ID=1");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 20) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT NAME FROM company where CAT_ID=6");
        $result = $con->query("SELECT Name,Pro_id,Price,img_src FROM home where home_id=5");
        $result1 = $con->query("SELECT NAME FROM cat_of_home_accessories where ID=5");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 21) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT NAME FROM company where CAT_ID=6");
        $result = $con->query("SELECT Name,Pro_id,Price,img_src FROM home where home_id=4");
        $result1 = $con->query("SELECT NAME FROM cat_of_home_accessories where ID=4");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 22) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT NAME FROM company where CAT_ID=6");
        $result = $con->query("SELECT Name,Pro_id,Price,img_src FROM home where home_id=3");
        $result1 = $con->query("SELECT NAME FROM cat_of_home_accessories where ID=3");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 23) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT NAME FROM company where CAT_ID=6");
        $result = $con->query("SELECT Name,Pro_id,Price,img_src FROM home where home_id=6");
        $result1 = $con->query("SELECT NAME FROM cat_of_home_accessories where ID=6");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 24) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT NAME FROM company where CAT_ID=6");
        $result = $con->query("SELECT Name,Pro_id,Price,img_src FROM home where home_id=2");
        $result1 = $con->query("SELECT NAME FROM cat_of_home_accessories where ID=2");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 25) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT NAME FROM company where CAT_ID=6");
        $result = $con->query("SELECT Name,Pro_id,Price,img_src FROM mobile where mob_id=1");
        $result1 = $con->query("SELECT NAME FROM cat_of_mob_accessories where ID=1");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 26) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT NAME FROM company where CAT_ID=6");
        $result = $con->query("SELECT Name,Pro_id,Price,img_src FROM mobile where mob_id=2");
        $result1 = $con->query("SELECT NAME FROM cat_of_mob_accessories where ID=2");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 27) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT NAME FROM company where CAT_ID=6");
        $result = $con->query("SELECT Name,Pro_id,Price,img_src FROM mobile where mob_id=3");
        $result1 = $con->query("SELECT NAME FROM cat_of_mob_accessories where ID=3");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 28) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT NAME FROM company where CAT_ID=6");
        $result = $con->query("SELECT Name,Pro_id,Price,img_src FROM mobile where mob_id=4");
        $result1 = $con->query("SELECT NAME FROM cat_of_mob_accessories where ID=4");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 29) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT NAME FROM company where CAT_ID=6");
        $result = $con->query("SELECT Name,Pro_id,Price,img_src FROM mobile where mob_id=5");
        $result1 = $con->query("SELECT NAME FROM cat_of_mob_accessories where ID=5");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 30) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        ;
        $result = $con->query("SELECT NAME FROM company where CAT_ID=6");
        $result = $con->query("SELECT Name,Pro_id,Price,img_src FROM mobile where mob_id=6");
        $result1 = $con->query("SELECT NAME FROM cat_of_mob_accessories where ID=6");
        $row1 = $result1->fetch_assoc();
    } elseif ($var_value == 31) {
        $db = mysqli_select_db($con, "techdeals");
        $query = mysqli_query($con, "SELECT ID FROM company")or die(mysqli_error($con));
        $result = $con->query("SELECT NAME FROM company where CAT_ID=6");
        $result = $con->query("SELECT Name,Pro_id,Price,img_src FROM games where comp_id IN (20,21,19)");
        $result1 = $con->query("SELECT NAME FROM Category where ID=5");
        $row1 = $result1->fetch_assoc();
    }

    if (isset($_GET['email']) && isset($_GET['uname'])) {
        $email = $_GET['email'];
        $uname = $_GET['uname'];
        
        $stringtobeappended = "email=$email&uname=$uname";
        $stringtobeappended1 = "&email=$email&uname=$uname";
        $lenovo="women.php?.$stringtobeappended";
        $view = "view.php?$stringtobeappended";
        $login = "#";
        $signup = "#";
        $style = "style='display:none;'";
        $style1 = "style='display:inline;'";
        $product = "product.php?$stringtobeappended";
        $cart = "cart.php?$stringtobeappended";
        $settings = "settings.php?$stringtobeappended";
        $index = "index1.php?$stringtobeappended";
        $logout = "logout.php";
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
                        <li <?php echo $style1 ?>><a href="<?php echo $cart ?>"><span ></span>Cart</a></li>
                        <li <?php echo $style1 ?>><a href="<?php echo $settings ?>"><span ></span> Settings</a></li>
                        <li <?php echo $style1 ?>><a href="<?php echo $logout ?>"><span ></span> Logout</a></li> 
                        <li <?php echo $style ?>><a href="<?php echo $signup ?>"><span ></span> Sign Up</a></li>    
                        <li ><a href="<?php echo $login ?>" ><span  <?php echo $style ?>></span> <?php echo $uname ?></a></li>             
                    </ul>                    
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="jumbotron" style="width:100%;padding-bottom: 5px;padding-left: 20px">
                <center><h1> <?php echo $row1["NAME"] ?> </h1></center>
            </div>
        </div>
        <div class="container">
            <div class="row" style="margin-bottom:100px;">
                <div class="col-sm-4"  style="margin-bottom:100px; margin-right:5px;width:385px; height:300px;">
                    <a href="#" class="thumbnail">
                        <img src="<?php $result->data_seek(0);$row = $result->fetch_row();echo $row[3]; ?>" alt="responsive image" style="width:380px; height:295px;">
                    </a>
                    <div class="caption">
                        <center>
                        <h3 id ="pro_name"><?php $result->data_seek(0);$row = $result->fetch_row();echo $row[0]; ?></h3>
                            <p id = "pro_id1">Product ID-<?php $result->data_seek(0);$row = $result->fetch_row();echo $row[1]; ?></P>
                            <p id ="pro_price">price-<?php $result->data_seek(0);$row = $result->fetch_row();echo $row[2]; ?></p>
                            <form id="form" action=""  method="post">
                            <p> Quantity
                                <select id="quantity1" style="color:black;" name="quantity1">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select> 
                            </p>                            
                            <input  style="color:white" type="submit" name="Add_to_Cart" value="Add to Cart" class ="btn btn-danger btn-lg active" style="padding:7px;font-size: 15px;"
                                   onclick = <?php
                                   if (isset($_GET['uname']) && isset($_POST['Add_to_Cart']) )
                                   {
                                       $user = $_GET['uname'];
                                       $pro_name =$row[0];
                                       $pro_id1 = $row[1];
                                       $pro_price = $row[2];
                                       $selected_val = $_POST["quantity1"];
                                       echo $selected_val;
                                       $result3=$con->query("INSERT INTO cart (User_id,Pro_id,Price,Pro_name,Pro_qty) VALUES ('$user','$pro_id1','$pro_price','$pro_name','$selected_val')");
                                       //header("location: lenovo.php?");
                                       $op = $_GET['op'];
                                       $email= $_GET['email'];
                                       //$str = "cart.php?op=".$op."&email=".$email."&uname=".$user;
                                      
                                       
                                   }                                   
                                   ?>
                                   >
                            </form>
                                   </center>
                                   </div>
                                   </div>
                                   <div class="col-sm-4" style="margin-bottom:100px; margin-right:5px;width:385px; height:300px;">
                                   <a href="#" class="thumbnail">
                                   <img src="<?php $result->data_seek(1); $row = $result->fetch_row(); echo $row[3]; ?>" style="width:380px; height:295px;">
                                   </a>
                                   <div class="caption">
                                <center>
                                    <h3 id ="pro_name"><?php $result->data_seek(1);$row = $result->fetch_row();echo $row[0]; ?></h3>
                                    <p id = "pro_id">Product ID-<?php $result->data_seek(1);$row = $result->fetch_row();echo $row[1]; ?></P>
                                    <p id ="pro_price">price-<?php $result->data_seek(1);$row = $result->fetch_row();echo $row[2]; ?></p>
                                    <form id="form" action=""  method="post">
                                    <p>Quantity 
                                        <select id="quantity2" style="color:black;" name="quantity2">
                                        <option value="1" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        </select> 
                                    </p>
                            
                                <input type="submit" name="Add_to_Cart1" value="Add to Cart" class ="btn btn-danger btn-lg active" style="padding:7px;font-size: 15px;"
                                   onclick = <?php
                                   if (isset($_GET['uname']) && isset($_POST['Add_to_Cart1']) )
                                   {
                                       $user = $_GET['uname'];
                                       $pro_name =$row[0];
                                       $pro_id1 = $row[1];
                                       $pro_price = $row[2];
                                       $selected_val = $_POST["quantity2"];
                                       echo $selected_val;
                                       $result3=$con->query("INSERT INTO cart (User_id,Pro_id,Price,Pro_name,Pro_qty) VALUES ('$user','$pro_id1','$pro_price','$pro_name','$selected_val')");
                                       $op = $_GET['op'];
                                       $email= $_GET['email'];
                                     }
                                   
                                   ?>
                                </center>
                            </div>
                    </div>
                    <div class="col-sm-4" style="margin-bottom:100px; margin-right:5px;width:385px; height:300px;">
                        <a href="#" class="thumbnail">
                            <img src="<?php $result->data_seek(2);$row = $result->fetch_row();echo $row[3]; ?>" style="width:380px; height:295px;">
                        </a>
                        <div class="caption">
                            <center>
                                <h3 id ="pro_name"><?php $result->data_seek(2);$row = $result->fetch_row();echo $row[0]; ?></h3>
                                <p id = "pro_id">Product ID-<?php $result->data_seek(2);$row = $result->fetch_row();echo $row[1]; ?></P>
                                <p id ="pro_price">price-<?php $result->data_seek(2);$row = $result->fetch_row();echo $row[2]; ?></p>
                                <form id="form" action=""  method="post">
                                <p>Quantity 
                                <select id="quantity3" style="color:black;" name="quantity3">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                </p>
                            
                            <input type="submit" name="Add_to_Cart2" value="Add to Cart" class ="btn btn-danger btn-lg active" style="padding:7px;font-size: 15px;"
                                   onclick = <?php
                                   if (isset($_GET['uname']) && isset($_POST['Add_to_Cart2']) )
                                   {
                                       $user = $_GET['uname'];
                                       $pro_name =$row[0];
                                       $pro_id1 = $row[1];
                                       $pro_price = $row[2];
                                       $selected_val = $_POST["quantity3"];
                                       echo $selected_val;
                                       $result3=$con->query("INSERT INTO cart (User_id,Pro_id,Price,Pro_name,Pro_qty) VALUES ('$user','$pro_id1','$pro_price','$pro_name','$selected_val')");
                                       //header("location: lenovo.php?");
                                       $op = $_GET['op'];
                                       $email= $_GET['email'];
                                       //$str = "cart.php?op=".$op."&email=".$email."&uname=".$user;                                   
                                       
                                   }
                                   
                                   ?>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom:100px;">
                    <div class="col-sm-4"  style="margin-bottom:100px; margin-right:5px;width:385px; height:300px;">
                        <a href="#" class="thumbnail">
                            <img src="<?php $result->data_seek(3);$row = $result->fetch_row();echo $row[3]; ?>" alt="responsive image" style="width:380px; height:295px;">
                        </a>
                        <div class="caption">
                            <center>
                                <h3 id ="pro_name"><?php $result->data_seek(3);$row = $result->fetch_row();echo $row[0]; ?></h3>
                                <p id = "pro_id">Product ID-<?php $result->data_seek(3);$row = $result->fetch_row();echo $row[1]; ?></P>
                                <p id ="pro_price">price-<?php $result->data_seek(3);$row = $result->fetch_row();echo $row[2]; ?></p>
                                <form id="form" action=""  method="post">
                                <p>Quantity
                                    <select id="quantity4" style="color:black;" name="quantity4">
                                        <option value="1" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </p>                            
                            <input type="submit" name="Add_to_Cart3" value="Add to Cart" class ="btn btn-danger btn-lg active" style="padding:7px;font-size: 15px;"
                                   onclick = <?php
                                   if (isset($_GET['uname']) && isset($_POST['Add_to_Cart3']) )
                                   {
                                       $user = $_GET['uname'];
                                       $pro_name =$row[0];
                                       $pro_id1 = $row[1];
                                       $pro_price = $row[2];
                                       $selected_val = $_POST["quantity4"];
                                       echo $selected_val;
                                       $result3=$con->query("INSERT INTO cart (User_id,Pro_id,Price,Pro_name,Pro_qty) VALUES ('$user','$pro_id1','$pro_price','$pro_name','$selected_val')");
                                       //header("location: lenovo.php?");
                                       $op = $_GET['op'];
                                       $email= $_GET['email'];
                                       //$str = "cart.php?op=".$op."&email=".$email."&uname=".$user;                                     
                                       
                                   }
                                   
                                   ?>
                            </center>
                        </div>
                    </div>
                    <div class="col-sm-4" style="margin-bottom:100px; margin-right:5px;width:385px; height:300px;">
                        <a href="#" class="thumbnail">
                            <img src="<?php $result->data_seek(4);$row = $result->fetch_row();echo $row[3]; ?>" style="width:380px; height:295px;">
                        </a>
                        <div class="caption">
                            <center>
                                <h3 id ="pro_name"><?php $result->data_seek(4);$row = $result->fetch_row();echo $row[0]; ?></h3>
                                <p id = "pro_id">Product ID-<?php $result->data_seek(4);$row = $result->fetch_row();echo $row[1]; ?></P>
                                <p id ="pro_price">price-<?php $result->data_seek(4);$row = $result->fetch_row();echo $row[2]; ?></p>
                                <form id="form" action=""  method="post">
                                <p>Quantity
                                <select id="quantity5" style="color:black;" name="quantity5">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select> 
                                </p>
                            
                            <input type="submit" name="Add_to_Cart4" value="Add to Cart" class ="btn btn-danger btn-lg active" style="padding:7px;font-size: 15px;"
                                   onclick = <?php
                                   if (isset($_GET['uname']) && isset($_POST['Add_to_Cart4']) )
                                   {
                                       $user = $_GET['uname'];
                                       $pro_name =$row[0];
                                       $pro_id1 = $row[1];
                                       $pro_price = $row[2];
                                       $selected_val = $_POST["quantity5"];
                                       echo $selected_val;
                                       $result3=$con->query("INSERT INTO cart (User_id,Pro_id,Price,Pro_name,Pro_qty) VALUES ('$user','$pro_id1','$pro_price','$pro_name','$selected_val')");
                                       //header("location: lenovo.php?");
                                       $op = $_GET['op'];
                                       $email= $_GET['email'];
                                       //$str = "cart.php?op=".$op."&email=".$email."&uname=".$user;
                                      
                                       
                                   }
                                   
                                   ?>
                            </center>
                        </div>
                    </div>
                    <div class="col-sm-4" style="margin-bottom:100px; margin-right:5px;width:385px; height:300px;">
                        <a href="#" class="thumbnail">
                            <img src="<?php $result->data_seek(5);$row = $result->fetch_row();echo $row[3]; ?>" style="width:380px; height:295px;">
                        </a>
                        <div class="caption">
                            <center>
                                <h3 id ="pro_name"><?php $result->data_seek(5);$row = $result->fetch_row();echo $row[0]; ?></h3>
                                <p id = "pro_id">Product ID-<?php $result->data_seek(5);$row = $result->fetch_row();echo $row[1]; ?></P>
                                <p id ="pro_price">price-<?php $result->data_seek(5);$row = $result->fetch_row();echo $row[2]; ?></p>
                                <form id="form" action=""  method="post">
                                <p>Quantity 
                                <select id="quantity6" style="color:black;" name="quantity6">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select> </p>
                            
                            <input type="submit" name="Add_to_Cart5" value="Add to Cart" class ="btn btn-danger btn-lg active" style="padding:7px;font-size: 15px;"
                                   onclick = <?php
                                   if (isset($_GET['uname']) && isset($_POST['Add_to_Cart5']) )
                                   {
                                       $user = $_GET['uname'];
                                       $pro_name =$row[0];
                                       $pro_id1 = $row[1];
                                       $pro_price = $row[2];
                                       $selected_val = $_POST["quantity6"];
                                       echo $selected_val;
                                       $result3=$con->query("INSERT INTO cart (User_id,Pro_id,Price,Pro_name,Pro_qty) VALUES ('$user','$pro_id1','$pro_price','$pro_name','$selected_val')");
                                       //header("location: lenovo.php?");
                                       $op = $_GET['op'];
                                       $email= $_GET['email'];
                                       //$str = "cart.php?op=".$op."&email=".$email."&uname=".$user;
                                      
                                       
                                   }
                                   
                                   ?>
                            </center>
                        </div>
                    </div>
                </div>
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
                    <center><img src="tech.png" height="100px" width="150px" style="margin-bottom:50"></center>
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


