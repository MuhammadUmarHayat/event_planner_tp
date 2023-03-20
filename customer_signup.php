
<!-- php script  -->

<?php include 'config.php';?>
<?php 


if(isset($_POST['done']))
{
if(!empty($_POST)) 
{
    if(!empty($_POST['userid'])&& !empty($_POST['password']))
	{
          $userid = $_POST['userid'];
            $name = $_POST['name'];
			 $password = $_POST['password'];
			          $email = $_POST['email'];
           
			          $mobile = $_POST['mobile'];
            $address = $_POST['address'];
			$usertype="Customer";
			
            if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
  echo "Invalid email format"; 
}
else
{


			
			
			$q1="INSERT INTO `users`(`userid`, `name`, `password`, `email`, `mobile`, `address`, `usertype`) VALUES ('$userid', '$name', '$password', '$email', '$mobile', '$address', '$usertype')";
			$query = mysqli_query($con,$q1);
 
 
 echo 'User is registered successfully';
}
		
	}
	else
	{
		
		echo "Please enter user name and password";
		
	}
}
else{
	
	
	
	echo "Please fill the form first";
}
}



?>


<!-- GUI  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="banner.js"></script>
    
    <title>Event Planner</title>
</head>
<body>
   
  

<!-- nav bar  -->
<div class="navbar">

<a href="index.php">Dashboard </a>
<a href="about.php">About Us</a>
<a href="contactus.php">Contact Us </a>
<a href="login.php">Login</a>
<a href="admin_signup.php">Register AS Admin  </a>
<a href="customer_signup.php">Register As Customer  </a>
</div>

<h1>Admin Registration Page </h1>
<div class="center">
<form method="POST" action="customer_signup.php">
				
                <table border=1>
                
                <tr><td>Enter User ID: </td><td><input type="text" name="userid"></td></tr>	
                    
                    
            <tr><td>Enter  User Name:</td><td><input type="text" name="name" ></td></tr>			
      
    
        <tr><td>Enter  Password:</td><td><input type="password" name="password" ></td></tr>				
                     
        <tr><td>Enter  Email:</td><td><input type="text" name="email" ></td></tr>			
     
                    <tr><td>Enter  Mobile Number:</td><td><input type="text" name="mobile" ></td></tr>	
                     
     <tr><td>Enter  address:</td><td><input type="text" name="address" ></td></tr>	
                     
     
                        <tr><td></td><td><button type="submit" name="done">Submit</button></td></tr>
                        
                        </table>
                    </form>
    
</div>
</div>
<div class="footer">
    
    </div>
</body>
</html>