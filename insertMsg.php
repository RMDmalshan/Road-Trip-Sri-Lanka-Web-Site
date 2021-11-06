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
  
   $name=$_POST['name'];
   $days=$_POST['days'];
   $email=$_POST['email'];
   $pax=$_POST['pax'];
   $mode=$_POST['mode'];
    
   
   if(!empty($errorMessage))
	  {
	    echo("<p>There was an error with your form:</p>\n");

	    echo("<ul>" . $errorMessage . "</ul>\n");

	  }
   else{//if(!empty($errorMessage))
    
	$sql = "INSERT INTO sendmessage". "(name,days,email,pax,mode) ". "VALUES ('$name','$days','$email','$pax','$mode')";
	
	$results = mysqli_query($conn, $sql);
            
            if(!$results) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
			else
			{
            echo "Message Send Successfully !!!\n";
			}	
     } 
   
}else {//if(isset($_POST['submit'])) {  

    echo "Your form is not submitted yet please fill the form and visit again";
  } 
?>
</body>
</html>