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
    $index ="index1.php";
    $uname = "Login";
    $product = "product.php";
    $style = "style='display:inline;'";
    $style1 = "style='display:none;'";
    $stringtobeappended = "";


    if (isset($_GET['email']) && isset($_GET['uname'])) {
        
        if (isset($_GET['error1']))
        {
             echo "<script type='text/javascript'>alert('Invalid Password');</script>";
        }
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
    <head>  
<!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
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
                    <a class="navbar-brand" href="index.php">Tech Deals</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li><a href="login.php"><span ></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
    <div class="sign_up" style="margin-top: 40px; ">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <center> <h1>Sign Up</h1>
                    <form  method="get">
                    <div class="form-group">
                    <input type="text" class="form-control" name="fname" placeholder="First Name" id="fname">
                    <span class="error" id="fname_error" style="color:red"></span>
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control" name="lname" placeholder="Last Name" id="lname">
                    <span class="error" id="lname_error"  style="color:red"></span>               
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control" name="uname" placeholder="User Name" id="uname">
                    <p class="error" id="uname_error"  style="color:red"></p>           
                    </div>
                    <div class="form-group" >
                    <p>
                    Gender:
                                      <input type="radio" id="gender" name="gender" value="female">Female
                                      <input type="radio" id="gender" name="gender"  value="male">Male
                                      <input type="radio" id="gender" name="gender" checked  value="other">Other  
                                      <span class="error"  style="color:red"></span>    
                                      <br>
                                      </p>
                                      </div>          
                    <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                    <span class="error" id="email_error"  style="color:red"></span>
                    </div>
                    <div class="form-group">
                    <input type="password" class="form-control" name="pass" placeholder="Password" id="password">
                    <span class="error" id="password_error"  style="color:red"></span>
                    </div>
                    <p>*a password between 7 to 16 characters which contain only characters, numeric digits, underscore and first character must be a letter</p>
                    <div class="form-group">
                    <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" id="cpassword">
                    <span class="error" id="cpassword_error"  style="color:red"></span>
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control" name="phone" placeholder="phone" id="phone">
                    <span class="error" id="phone_error" style="color:red"></span>
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control" name="city" placeholder="City" id="city">
                    <span class="error" id="city_error"  style="color:red"></span>
                    </div>
                    <input type="button" value="submit" class="btn btn-primary" onclick="validate()" >           
            </form>  
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
        <script>
            
         function validate()
         {
            var is_valid_fu_name = check_fname_lname_uname_validity();
            var is_valid_phone_number = validate_phone_number();
            var is_valid_mailid = validate_email();
            var is_check_password = CheckPassword();
            var is_retype_password = check_retype_password();
            var is_valid_city =check_city();

            if (is_valid_fu_name && is_valid_phone_number && is_valid_mailid && is_check_password && is_retype_password && is_valid_city) {
                //alert("SUCCESS!");
                var newloc="index1.php?fname="+fname.value+"&lname="+lname.value+"&uname="+uname.value+"&ph="+phone.value+"&password="+password.value+"&email="+email.value+"&city="+city.value+"&gender="+document.getElementById("gender").value;
                window.location.href = newloc;
                //var sql= "INSERT INTO `user`(`firstname`, `lastname`, `email`, `username`, `phone`, `password`, `gender`, `city`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])"
            }
         }
         
         function check_city()
         {
             
             if ((city.value.length > 20) || (city.value.length <=3)) {
                document.getElementById("city_error").innerHTML = "*Enter a valid city";
                return 0;
            } 
            else
            {
                return 1;
            }
         }
         
         
    function check_retype_password() {
        var is_valid_password = CheckPassword();
        if ((is_valid_password) && (password.value === cpassword.value)) {
            return 1;
        } else {
            document.getElementById("cpassword_error").innerHTML = "*Passwords not matching!";
            return 0;
        }
    }
    function validate_gender() {
        var x = document.getElementById("gender").value;
        // alert(x);
        return 1;
    }
         
         
        function validate_email() {
        var error = 0;
        var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!email.value.match(regex)) {
            error = 1;
        }
        if (error == 1) {
            document.getElementById("email_error").innerHTML = "*Invalid email!";
            return 0;
        } else {
            return 1;
        }
    }
    function CheckPassword() { 
            var error = 0;
            var passw=  /^[A-Za-z]\w{7,14}$/;
            if(password.value.match(passw)) 
            { 
                //alert('Correct, try another...');
                error=0;
                
                return true;
            }
            else
            { 
                //alert('Wrong...!');
                error=1;
                document.getElementById("password_error").innerHTML = "*Invalid Password!";
                return false;
            }     
            
        }

    function validate_phone_number() {
        var error = 0;
        // var phoneno = /^(?:(?:\+|0{0,2})91(\s*[\ -]\s*)?|[0]?)?[789]\d{9}|(\d[ -]?){10}\d$/;
        var phoneno = /^[5-9]{1}[0-9]{9}$/;
        //alert("value is " + f_phone.value);
        if (!phone.value.match(phoneno)) {
            //alert("False");
            error = 1;
        }
        if (error == 1) {
            document.getElementById("phone_error").innerHTML = "*Invalid phone number!";
            return 0;
        } else {
            //document.getElementById("phone_error").innerHTML = "*valid phone number!";
            return 1;
        }
    }
         
        function check_fname_lname_uname_validity() {
            var error = 0;
            var regex = /^[a-zA-Z]+$/;
            if ((fname.value.length > 20) || (fname.value.length < 3) || (fname.value.match(regex) === false)) {
                document.getElementById("fname_error").innerHTML = "*First name should have 3-20 characters without any digit!";
                error = 1;
            } 
            if ((lname.value.length > 20) || (lname.value.length < 3) || (lname.value.match(regex) === false)) {
                document.getElementById("lname_error").innerHTML = "*Last name should have 3-20 characters without any digit!";
                error = 1;
            } 
            if ((uname.value.length > 30) || (uname.value.length < 3)) {
                document.getElementById("uname_error").innerHTML = "*Username should have 3-30 characters!";
                error = 1;
            }
            if (error == 1) {
                return 0;
            } else {
                return 1;
            }
        }
        
        
</script>
    </body>
</html>


