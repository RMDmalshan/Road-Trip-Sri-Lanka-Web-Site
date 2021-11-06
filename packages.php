<?php
session_start();
$message="";
if(isset($_POST['submit'])) {
	
 include 'connection.php';
 
 $email=$_POST["email"];
 $password=$_POST["password"];


 $sql="SELECT * FROM registration WHERE email='$email' and password='$password'";

$result = mysqli_query($conn,$sql);

$row= mysqli_fetch_array($result);

   $_SESSION['user']=$row['email'];
   
	if(mysqli_num_rows($result) == 1) {
         
       	header("location: packagesDetails.php");
      }else 
	  {
        $msg = "Your Login Email or Password is invalid";		 
      }
	  
	  echo "<script type='text/javascript'>alert('$msg');</script>";
}

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ROAD TRIP SRILANKA </title>


<style type="text/css">

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.nav {
  overflow: hidden;
  background-color:#ABA3A3;
    position: fixed;
  top: 5;
  width: 100%;
   
}

.nav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
   
}

.nav a:hover {
background-color:#719DAC;
  color: black;
}

body  
{  
    margin: 0;  
    padding: 0;
	background-image: url(../image/iii.jpg);
	background-size:cover;
    font-family: 'Arial';  
}  
.login{  
        width: 382px;
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 450px;
		background-color:#A3A8A2;  
        padding: 40px; 
        border-radius: 15px ;      
}  

label{  
    color: #092CD0; 
    font-size: 30px;  
}  
#email{  
    width: 300px;  
    height: 50px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}  
#password{  
    width: 300px;  
    height: 50px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
      
}  
#submit{  
    width: 300px;  
    height: 50px;  
    border: none;  
    border-radius: 17px; 
	  cursor: pointer;  
    padding-left: 7px;  
    color: blue; 

}  
span{  
    color: #030303;  
    font-size: 17px;  
} 


.h1{
	font-size:24px;
	text-align:center;
	color:#E90B0F;
	background-color:#B1A7A7;

	} 

</style>
</head>




<body>
<div class="nav">
  <nav>
   <img src="../image/road trip final logo.png" width="150" height="80">
 <a class="active" href="gallery.html">Gallery</a>
 <a class="active" href="contactus.html">Contact Us</a>
 <a class="active" href="register.html">Register</a>
 <a class="active" href="login.php">Login</a>
 <a class="active" href="packages.php"> Packages</a>
 <a class="active" href="aboutus.html"> About Us</a>
 <a class="active" href="home.html">Home</a></nav>
</div>

<br><br><br><br><br>

<div class="h1">
<h1><center>Login Here To See More Packages</center></h1>
</div>

<br><br><br><br>
 
      <div class="login">    
    <form name="Login" id="login" method="post" action="">    
        <label><b>Email   
        </b>    
        </label>    
        <input type="text" name="email" id="email" placeholder="Email">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="password" name="password" id="password" placeholder="Password">    
        <br><br>    
        <input type="submit" name="submit" id="submit" value="Log In Here">       
        <br><br>    
        <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <br><br>
      
<center><a href ="register.html">Register</a></center>
    </form>     
</div>    
</body>
</html>