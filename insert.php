<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 

if(isset($_POST['submit'])) {  

include ("connection.php");
  
   $fullname=$_POST['fullname'];
   $username=$_POST['username'];
   $email=$_POST['email'];
   $phonenumber=$_POST['phonenumber'];
   $password=$_POST['password'];
   $country=$_POST['country'];   
   
   if(!empty($errorMessage))
	  {
	    echo("<p>There was an error with your form:</p>\n");

	    echo("<ul>" . $errorMessage . "</ul>\n");

	  }
   else{//if(!empty($errorMessage))
    
	$sql = "INSERT INTO registration". "(fullname,username,email,phonenumber,password,country) ". "VALUES ('$fullname','$username','$email','$phonenumber','$password','$country')";
	
	$results = mysqli_query($conn, $sql);
            
            if(!$results) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
			else
			{
            echo "Entered data successfully\n";
			}	
     } 
   
}else {//if(isset($_POST['submit'])) {  

    echo "Your form is not submitted yet please fill the form and visit again";
  } 
?>
</body>
</html>