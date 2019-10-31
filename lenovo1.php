<?php
$con = mysqli_connect("localhost", "root", "", "techdeals") or die("could not connect to mysql");
$db = mysqli_select_db($con, "techdeals") or die("no database");
if ($con) {
    //echo '<h1>Connected to MySQL</h1>';
//if connected then Select Database.
    session_start();
    if (isset($_GET['op'])) {
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
        $refresh = "lenovo1.php?op=".$var_value;
        $query;
        
        $stringtobeappended1 = "";
        //$str = "lenovo.php?op=".$op."&email=".$email."&uname=".$user;
    //echo $var_value;
        if ($var_value == 1) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM mobile_phones where comp_id=1";
            $result1 = $con->query("SELECT NAME FROM company where ID=1");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 2) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM mobile_phones where comp_id=2";
            $result1 = $con->query("SELECT NAME FROM company where ID=2");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 3) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM mobile_phones where comp_id=3";
            $result1 = $con->query("SELECT NAME FROM company where ID=3");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 4) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM mobile_phones where comp_id=4";
            $result1 = $con->query("SELECT NAME FROM company where ID=4");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 5) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM mobile_phones where comp_id=5";
            $result1 = $con->query("SELECT NAME FROM company where ID=5");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 6) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM mobile_phones where comp_id=6";
            $result1 = $con->query("SELECT NAME FROM company where ID=6");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 7) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM cameras where comp_id=7";
            $result1 = $con->query("SELECT NAME FROM company where ID=7");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 8) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM cameras where comp_id=8";
            $result1 = $con->query("SELECT NAME FROM company where ID=8");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 9) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM cameras where comp_id=9";
            $result1 = $con->query("SELECT NAME FROM company where ID=9");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 10) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM cameras where comp_id=10";
            $result1 = $con->query("SELECT NAME FROM company where ID=10");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 11) {
            $db = mysqli_select_db($con, "techdeals");
            $query ="SELECT Name,Pro_ID,Price,img_src FROM cameras where comp_id=11";
            $result1 = $con->query("SELECT NAME FROM company where ID=11");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 12) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM cameras where comp_id=12";
            $result1 = $con->query("SELECT NAME FROM company where ID=12");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 13) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM laptops where comp_id=13";
            $result1 = $con->query("SELECT NAME FROM company where ID=13");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 14) {
            $db = mysqli_select_db($con, "techdeals");
            $query ="SELECT Name,Pro_ID,Price,img_src FROM laptops where comp_id=14";
            $result1 = $con->query("SELECT NAME FROM company where ID=14");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 15) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM laptops where comp_id=15";
            $result1 = $con->query("SELECT NAME FROM company where ID=15");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 16) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM laptops where comp_id=16";
            $result1 = $con->query("SELECT NAME FROM company where ID=16");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 17) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM laptops where comp_id=17";
            $result1 = $con->query("SELECT NAME FROM company where ID=17");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 18) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM laptops where comp_id=18";
            $result1 = $con->query("SELECT NAME FROM company where ID=18");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 19) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM home where home_id=1";
            $result1 = $con->query("SELECT NAME FROM cat_of_home_accessories where ID=1");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 20) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM home where home_id=5";
            $result1 = $con->query("SELECT NAME FROM cat_of_home_accessories where ID=5");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 21) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM home where home_id=4";
            $result1 = $con->query("SELECT NAME FROM cat_of_home_accessories where ID=4");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 22) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM home where home_id=3";
            $result1 = $con->query("SELECT NAME FROM cat_of_home_accessories where ID=3");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 23) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM home where home_id=6";
            $result1 = $con->query("SELECT NAME FROM cat_of_home_accessories where ID=6");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 24) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM home where home_id=2";
            $result1 = $con->query("SELECT NAME FROM cat_of_home_accessories where ID=2");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 25) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM mobile where mob_id=1";
            $result1 = $con->query("SELECT NAME FROM cat_of_mob_accessories where ID=1");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 26) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM mobile where mob_id=2";
            $result1 = $con->query("SELECT NAME FROM cat_of_mob_accessories where ID=2");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 27) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM mobile where mob_id=3";
            $result1 = $con->query("SELECT NAME FROM cat_of_mob_accessories where ID=3");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 28) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM mobile where mob_id=4";
            $result1 = $con->query("SELECT NAME FROM cat_of_mob_accessories where ID=4");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 29) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM mobile where mob_id=5";
            $result1 = $con->query("SELECT NAME FROM cat_of_mob_accessories where ID=5");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 30) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM mobile where mob_id=6";
            $result1 = $con->query("SELECT NAME FROM cat_of_mob_accessories where ID=6");
            $row1 = $result1->fetch_assoc();
        } elseif ($var_value == 31) {
            $db = mysqli_select_db($con, "techdeals");
            $query = "SELECT Name,Pro_ID,Price,img_src FROM games where comp_id IN (20,21,19)";
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
            $refresh = "lenovo1.php?op=".$var_value.$stringtobeappended1;
        }
        
        function filter ($query) {
            if (isset($_POST['filter'])) {
                if ( isset($_POST['price']) && isset($_POST['condition'])) {
                    $f_price = $_POST['price'];
                    $f_condition = $_POST['condition'];
                    $query = $query ." and ".$f_price." and type = '".$f_condition."'";                     
                }
                elseif ( isset($_POST['price'])) {
                    $f_price = $_POST['price'];
                    $query = $query ." and ".$f_price; 
                }
                elseif (isset($_POST['condition'])) {
                    $f_condition = $_POST['condition'];
                    $query = $query ." and type = '".$f_condition."'";
                }
            }
        }
        if (isset($_POST['filter'])) {
        if ( isset($_POST['price']) && isset($_POST['condition'])) {
            $f_price = $_POST['price'];
            $f_condition = $_POST['condition'];
            $query = $query ." and ".$f_price." and  type = '".$f_condition."'";                     
        }
        elseif ( isset($_POST['price'])) {
            $f_price = $_POST['price'];
            $query = $query ." and ".$f_price; 
        }
        elseif (isset($_POST['condition'])) {
            $f_condition = $_POST['condition'];
            $query = $query ." and type = '".$f_condition."'";
        }
        
    }
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
                    <a class="navbar-brand" href="<?php echo $index ?>">TechDeals</a>
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
                <center><h1><?php echo $row1["NAME"];?></h1></center>

            </div>
        </div>
        <div class="row">

            <div class="col-sm-2" style="padding-left:90px;float: left;width: 20%">
                <p style="font-size:30px"><b>Filter By</b></p>
                <br>
                <form action="<?php echo $refresh;?>" method="post">
                    
                    <br>
                    <p style="font-size:20px">Price Range</p>
                    <p style="font-size:15px"><input type="radio" name="price" Value=" Price > 5000"> Below 5000<br></p>
                    <p style="font-size:15px"><input type="radio" name="price" Value=" Price <= 5000 && Price <10000"> 5000-10000<br></p>
                    <p style="font-size:15px"><input type="radio" name="price" Value=" Price <= 10000 && Price <15000"> 10000-15000<br></p>
                    <p style="font-size:15px"><input type="radio" name="price" Value=" Price <= 15000 && Price <20000"> 15000-20000<br></p>
                    <p style="font-size:15px"><input type="radio" name="price" Value=" Price >= 20000"> 20000 and above<br></p>
                    <br>
                    <p style="font-size:20px">Item Condition</p>
                    <p style="font-size:15px"><input type="radio" name="condition" value="New"> New<br></p>
                    <p style="font-size:15px"><input type="radio" name="condition" value="Renewed"> Renewed<br></p>
                    <p style="font-size:15px"><input type="radio" name="condition" value="Used"> Used<br></p>
                    <br>
                    
                    <input type="submit" name="filter" value="Filter">
                </form>
                <br>
                <br>

            </div>

            <div class="col-sm-10" style="margin-left:50px; width: 75%">
                
                
                
                
                            <?php
                            
                                    global $query,$con;
                                    //echo $query;
                                    $temp = 0;
                                    $result2 = mysqli_query($con,$query);

                            if (isset($result2)) {
                            while ($row = mysqli_fetch_assoc($result2)) {

                                            $pro_name = $row['Name'];
                                            $pro_id1 = $row['Pro_ID'];
                                            $pro_price = $row['Price'];
                                            $img = $row['img_src'];


                                            echo '<div style = "width: 27%; float: left; margin-right: 38px; margin-bottom: 38px;">';
                                            echo '<div class = "thumbnail">';
                                            echo '<img src="'.$img.'" alt="responsive image" style="width:380px; height:295px;">';
                                            echo '</div>';
                                            echo '<div class="caption">';
                                            echo '<center>';
                                            echo '<h3 id ="pro_name">'.$pro_name.'</h3>';
                                            echo '<p id = "pro_id1">Product ID-'.$pro_id1.'</P>';
                                            echo '<p id ="pro_price">price-'.$pro_price.'</p>';
                                            echo '<form id="form" action=""  method="post">';
                                            $x = 'quantity'.$temp;
                                            echo '<p> Quantity
                                            <select id="'.$x.'" style="color:black;" name="'.$x.'">
                                                <option value="1" selected>1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select> 
                                            </p> '  ;
                                            echo '<input type="hidden" name = "pro_id" value ="'.$pro_id1.'" id = "pro_id"  >';
                                            echo '<input type="hidden" name = "pro_price" value ="'.$pro_price.'" id = "pro_price"  >';
                                            echo '<input type="hidden" name = "pro_name" value ="'.$pro_name.'" id = "pro_name"  >';
                                            $str = 'Add_to_Cart' . $temp;
                                            echo '<input  style="color:white" type="submit" name="'.$str.'" value="Add to Cart" class ="btn btn-danger btn-lg active" style="padding:7px;font-size: 15px;" onclick = "'.atc($x,$str).'">';
                                            $temp += 1;                                            
                                            echo '</form>';
                                            echo '</center>';
                                            echo '</div>';
                                            echo '</div>';
                                         }
                                    }
                                    
                                    function atc($x,$str1) {
                                        if (isset($_POST["$str1"]) && isset($_GET['uname'])) {
                                        $user = $_GET['uname'];
                                        $name = $_POST['pro_name'];
                                        $cost = $_POST['pro_price'];
                                        $id = $_POST['pro_id'];
                                        $qty = $_POST["$x"];
                                        global  $cart,$con;
                                        $result3=$con->query("INSERT INTO cart (User_id,Pro_id,Price,Pro_name,Pro_qty) VALUES ('$user','$id','$cost','$name','$qty')");
                                        echo '<script> window.location.href="'.$cart.'";</script>';
                                        exit;

                                    }
                                }
                                        
                                ?>
                                   
                            

                       
                   
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