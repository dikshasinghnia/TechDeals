<?php 
$con= mysqli_connect("localhost","root","","techdeals") or die ("could not connect to mysql");
$db= mysqli_select_db($con, "techdeals") or die ("no database");   
if($con) {
 //echo '<h1>Connected to MySQL</h1>';
//if connected then Select Database.
 $db= mysqli_select_db($con,"techdeals");
$query=mysqli_query($con,"SELECT ID FROM company")or die(mysqli_error($con));;
$result=$con->query("SELECT img_src FROM mobile_phones");
session_start();
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
        $logout = "logout.php"  ;
        $index = "index1.php?$stringtobeappended";
    }
}
?>
<html>
    <head >
        <title>e-commerce web page</title>
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
        <meta name="viewport" content="width=device-width, initial scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">        
        <link rel="stylesheet" type="text/css" href="style1.css">
	<style>
            .thumbnail{
                img {
  border: 1px solid #ddd; /* Gray border */
  border-radius: 4px;  /* Rounded border */
  padding: 5px; /* Some padding */
  width: 150px; /* Set a small width */
}

            }
	body
	{
	background: url(newbg1.jpg) no-repeat center center;
	background-size: cover
	}
	.sa{
	margin: 1em 0 0.5em 0;
	color: #343434;
	font-weight: normal;
	font-family: 'Ultra', sans-serif;   
	font-size: 50px;
	line-height: 62px;
	text-transform: uppercase;
	
	}
	#hed{
	font-family: 'Ultra', sans-serif; 
	color:purple;
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
                    <a class="navbar-brand" href="<?php echo $index?>">TechDeals</a>
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
        <div class="container">
            <div class="jumbotron" style="width:100%;padding-bottom: 5px;padding-left: 20px">
                <h2 class="sa" align="center">Techdeals Welcomes You!</h2>
                <p id="hed" align="center"> We have the best products for you. No need to hunt around, we have all in one place.</p>                
            </div>
        </div>
        <div class="container" style="margin-bottom:20px">
            <div class="row" style="color:#ffffff">
            <?php
            $db= mysqli_select_db($con,"techdeals");
            $query=mysqli_query($con,"SELECT NAME,img_src FROM category WHERE ID=1")or die(mysqli_error($con));;
            $result=$con->query("SELECT NAME,img_src FROM category WHERE ID=1");
            $row=$result->fetch_assoc();
            
            ?>
                
                <div class="col-sm-6" >
                    <a href="women.php?option=1<?php echo $stringtobeappended1 ?>" class="thumbnail" style="color:#e0ffff" onclick="<?php //$_SESSION['option'] = 1;?>">
                        <img src="<?php echo $row["img_src"] ?>" alt="responsive image" width="800" height="400">
                    </a>
                        <div class="caption" style="padding-bottom:20px">
                        <center>
                        <h3 style="color:whitesmoke"><?php echo $row["NAME"] ?></h3>
                        </center>
                        </div>
                </div>
                <div class="col-sm-6" >
            <?php
            $db= mysqli_select_db($con,"techdeals");
            $query=mysqli_query($con,"SELECT NAME,img_src FROM category WHERE ID=1")or die(mysqli_error($con));
            $result=$con->query("SELECT NAME,img_src FROM category WHERE ID=2");
            $row=$result->fetch_assoc();
            
            ?>
                    <a href="women.php?option=2&<?php echo $stringtobeappended1 ?>" class="thumbnail" onclick="<?php //$_SESSION['option'] = 2;?>">
                        <img src="<?php echo $row["img_src"] ?>" alt="responsive image" width="800" height="300">
                    </a>
                    <div class="caption" style="padding-bottom:20px" >
                        <center>
                        <h3 style="color:whitesmoke"><?php echo $row["NAME"] ?></h3>
                        </center>
                        </div>
                </div>
        </div>
            <div class="row">
                <div class="col-sm-6">
            <?php
            $db= mysqli_select_db($con,"techdeals");
            $query=mysqli_query($con,"SELECT NAME,img_src FROM category WHERE ID=1")or die(mysqli_error($con));;
            $result=$con->query("SELECT NAME,img_src FROM category WHERE ID=3");
            $row=$result->fetch_assoc();
            
            ?>
                    <a href="women.php?option=3&<?php echo $stringtobeappended1 ?>" class="thumbnail">
                        <img src="<?php echo $row["img_src"] ?>" alt="responsive image" width="800px" height="400px">
                    </a>
                        <div class="caption" style="padding-bottom:20px">
                        <center>
                        <h3 style="color:whitesmoke"><?php echo $row["NAME"] ?></h3>
                        </center>
                        </div>
                </div>
                <div class="col-sm-6">
                    <?php
                    $db= mysqli_select_db($con,"techdeals");
                    $query=mysqli_query($con,"SELECT NAME,img_src FROM category WHERE ID=1")or die(mysqli_error($con));;
                    $result=$con->query("SELECT NAME,img_src FROM category WHERE ID=4");
                    $row=$result->fetch_assoc();

                    ?>
                    <a href="women.php?option=4&<?php echo $stringtobeappended1 ?>" class="thumbnail">
                        <img src="<?php echo $row["img_src"] ?>" alt="responsive image" width="800px" height="400px">
                    </a>
                        <div class="caption" style="padding-bottom:20px">
                        <center>
                        <h3 style="color:whitesmoke"><?php echo $row["NAME"] ?></h3>
                        </center>
                        </div>
                </div>
        </div>
          <div class="row">
                <div class="col-sm-6">
                    <?php
                        $db= mysqli_select_db($con,"techdeals");
                        $query=mysqli_query($con,"SELECT NAME,img_src FROM category WHERE ID=1")or die(mysqli_error($con));;
                        $result=$con->query("SELECT NAME,img_src FROM category WHERE ID=5");
                        $row=$result->fetch_assoc();
            
                    ?>
                    <a href="lenovo1.php?op=31&<?php echo $stringtobeappended1 ?>" class="thumbnail">
                        <img src="<?php echo $row["img_src"] ?>" alt="responsive image" width="800px" height="400px">
                    </a>
                        <div class="caption" style="padding-bottom:20px">
                        <center>
                        <h3 style="color:whitesmoke"><?php echo $row["NAME"] ?></h3>
                        </center>
                        </div>
                </div>
                <div class="col-sm-6">
                    <?php
                    $db= mysqli_select_db($con,"techdeals");
                    $query=mysqli_query($con,"SELECT NAME,img_src FROM category WHERE ID=1")or die(mysqli_error($con));;
                    $result=$con->query("SELECT NAME,img_src FROM category WHERE ID=6");
                    $row=$result->fetch_assoc();

                    ?>
                    <a href="women.php?option=6&<?php echo $stringtobeappended1 ?>" class="thumbnail">
                        <img src="<?php echo $row["img_src"] ?>" alt="responsive image" width="800px" height="400px">
                    </a>
                        <div class="caption" style="padding-bottom:20px">
                        <center>
                        <h3 style="color:whitesmoke"><?php echo $row["NAME"] ?></h3>
                        </center>
                        </div>
                </div>
        </div>
            
            
            
        </div>
        
         <div class="links" style="margin-top: 30px">
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
