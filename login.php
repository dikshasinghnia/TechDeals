<?php
$con= mysqli_connect("localhost","root","","techdeals") or die ("could not connect to mysql");
$db= mysqli_select_db($con, "techdeals") or die ("no database");   
$error="";
$result="";
if($con) {
 session_start();
 if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myemail = $_POST['email'];
      $mypassword = $_POST['password']; 
      
      //$sql = "SELECT username FROM user WHERE email = '$myemail' and password = '$mypassword'";
      $result = $con->query("SELECT username FROM user WHERE email = '$myemail' and password = '$mypassword'");
      $row=$result->fetch_assoc();
      $count = (int)mysqli_num_rows($result);
      //$row = mysqli_fetch_array($result);
      //$active = $row['active'];
      
     // $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count ==1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myemail;
         $newemail=trim($myemail);
         $newemail=stripslashes($newemail);
         $newemail=htmlspecialchars($newemail);
         $uname=$row["username"];
         header("location: index1.php?email=$newemail&uname=$uname");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
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
                    <a class="navbar-brand" href="index1.php">TechDeals</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup1.php"><span ></span> Sign Up</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row row-style" style="margin-top: 140px; margin-left: 450px;">
            
            <div class="col-xs-6" >
                <div class="panel panel-primary" >
                    <div class="panel-heading">
                        <p>Login </p>
                    </div>
                    <div class="panel-body">
                        <p class="text-warning"> Login to make a purchase</p>       
                        <form method="post" action="">
                            <div class="form-group">
                                Email:<input type="email" class="form-control" name="email" placeholder="E-mail" required="true">
                            </div>

                            <div class="form-group">
                                Password:<input type="password" class="form-control" name="password" placeholder="Password" required="true">
                            </div>


                            <input type="submit" value="submit" class="btn btn-primary">
                            <span class="error" id="error"  style="color:red"><?php echo $error ?></span>
                        </form>
                    </div>                
                    <div class="panel-footer">
                        <center>
                            <p><a href="signup.html">Don't have an account? Register</a></p>
                        </center>
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

    </body>
</html>
