<?php
$con = mysqli_connect("localhost", "root", "", "techdeals") or die("could not connect to mysql");
$db = mysqli_select_db($con, "techdeals") or die("no database");


if ($con) {
    //echo '<h1>Connected to MySQL</h1>';
//if connected then Select Database.
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
    $stringtobeappended = "";
    $index = "index1.php";
    $fdel = "finaldelete.php";
    $orders="orders.php?$stringtobeappended";


    if (isset($_GET['email']) && isset($_GET['uname'])) {
        if (isset($_GET['error']))
        {
             echo "<script type='text/javascript'>alert('Invalid Password');</script>";
        }
        $email = $_GET['email'];
        $uname = $_GET['uname'];
        $result = $con->query("SELECT firstname,lastname,username,email,gender,phone,city FROM user where username='$uname' ");
        $result->data_seek(0);
        $row = $result->fetch_row();
        $stringtobeappended = "email=$email&uname=$uname";
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
        $fdel = "finaldelete.php?$stringtobeappended";
        $orders="orders.php?$stringtobeappended";
        
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
                        <li <?php echo $style1 ?>><a href="<?php echo $cart ?>"><span ></span>Cart</a></li>
                        <li <?php echo $style1 ?>><a href="<?php echo $settings ?>"><span ></span> Settings</a></li>
                        <li <?php echo $style1 ?>><a href="<?php echo $logout ?>"><span ></span> Logout</a></li> 
                        <li <?php echo $style ?>><a href="<?php echo $signup ?>"><span ></span> Sign Up</a></li>    
                        <li ><a href="<?php echo $login ?>" ><span  <?php echo $style ?>></span> <?php echo $uname ?></a></li>                
                    </ul>
                </div>
            </div>
        </nav>
        <div class="set" style="margin-top: 140px; margin-left: 450px;">
            <div class="container">
            <div class="row">
            <div class="col-xs-6">
            <h1>Change Password</h1>
            <br><br>
                <form method="POST" action="">
                <div class="form-group">
                <input type="password" class="form-control" name="oldpassword" placeholder="Old password" id="oldpassword">
                <span class="error" id="oldpassword_error" style="color: red;"></span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="newpassword" placeholder="New Password" id="newpassword">
                <span class="error" id="newpassword_error" style="color: red;"></span>
                </div>
                <div class="form-group">
                <input type="password" class="form-control" name="retpyenewpassword" placeholder="Re-type password" id="retpyenewpassword">
                <span class="error" id="retypenewpassword_error" style="color: red;"></span>
                </div>
                    <input type="button" value="Change" class="btn btn-primary" onclick="validate()">
                </form>
                <a href="<?php echo $fdel ?>"><input type="submit" value="Delete my Account" class="btn btn-primary"> </a>
                &nbsp;
                &nbsp;

            <a href="<?php echo $view ?>"><input type="submit" value="view account details" class="btn btn-primary"> </a>
             &nbsp;
                &nbsp;
            
            <a href="<?php echo $orders ?>"><input type="submit" value="See Past Orders" class="btn btn-primary"> </a>
            </div>
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
        
        <script>
               
         function validate()
         {
            
            var is_valid_oldpassword = validate_oldpassword();
            var is_check_newpassword = ChecknewPassword();
            var is_retype_password = check_retype_password();
            

            if ( is_valid_oldpassword && is_check_newpassword && is_retype_password) {
               // alert("SUCCESS!");
                var email = "<?php echo $email ?>";
                var username= "<?php echo $uname?>";
                var str="view.php?email="+email+"&uname="+username+"&oldpassword="+oldpassword.value+"&newpassword="+newpassword.value;
                window.location.href = str;
            }
         }
      function check_retype_password() {
          //alert ("valid");
        var is_valid_password = ChecknewPassword();
        //alert ("valid");
        if ((is_valid_password) && (newpassword.value === retpyenewpassword.value)) {
            //alert ("valid");
            return 1;
        } else {
            document.getElementById("retypenewpassword_error").innerHTML = "*Passwords not matching!";
            return 0;
        }
    }
    function validate_oldpassword() { 
            var error = 0;
            var passw=  /^[A-Za-z]\w{7,14}$/;
            if(oldpassword.value.match(passw)) 
            { 
                //alert('Correct, try another...');
                error=0;
                
                return true;
            }
            else
            { 
                //alert('Wrong...!');
                error=1;
                document.getElementById("oldpassword_error").innerHTML = "*Invalid Password!";
                return false;
            }     
            
        }
   
    function ChecknewPassword() { 
            var error = 0;
            var passw=  /^[A-Za-z]\w{7,14}$/;
            if(newpassword.value.match(passw)) 
            { 
                //alert('Correct, try another...');
                error=0;
                
                return true;
            }
            else
            { 
                //alert('Wrong...!');
                error=1;
                document.getElementById("newpassword_error").innerHTML = "*Invalid Password!";
                return false;
            }     
            
        }

   
        
        
</script>
                 
            
        </body>
</html>
