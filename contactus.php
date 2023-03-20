<!-- php script  -->
<?php include 'config.php';?>
<?php 


if(isset($_POST['done']))
{
if(!empty($_POST)) 
{
    if(!empty($_POST['name'])&& !empty($_POST['email']))
	{
       
      
            $name = $_POST['name'];
			
			          $email = $_POST['email'];
                      $message = $_POST['message'];
           
			         
			$date=date('d-m-y h:i:s');

      if (!filter_var($email, FILTER_VALIDATE_EMAIL))
      {
        echo "Invalid email format"; 
      }
      else
      {
		
			$q1="INSERT INTO `contactus`( `name`, `email`, `message`, `message_date`) VALUES (' $name',' $email',' $message','$date')";
			$query = mysqli_query($con,$q1);
 
 
 echo 'Thank you for your message';
      }
		
	}
	else
	{
		
		echo "Fields should not";
		
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

<h1>Contact US </h1>

<section>
        <h2>Contact Information</h2>
        <ul>
          <li>Address: 123 Main Street, Anytown USA</li>
          <li>Phone: (555) 555-5555</li>
          <li>Email: info@mycompany.com</li>
        </ul>
      </section>
      <section>
        <h2>Send Us a Message</h2>
        <form action="contactus.php" method="post">
<table>
<tr><td>Name</td><td> <input type="text" id="name" name="name" required></td></tr>
<tr><td>Email</td><td> <input type="text" id="email" name="email" required></td></tr>
<tr><td>Message</td><td><textarea id="message" name="message" required></textarea></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td> <button type="submit" name="done">Send</button></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
    
</table>



        
          
         
          
         
        </form>

</div>
<div class="footer">
    
    </div>
</body>
</html>