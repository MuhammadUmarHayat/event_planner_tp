

<!-- php script  -->

<?php

 include 'config.php';


$query="";

if(isset($_POST['login']))
{
if(!empty($_POST)) 
{
    if(!empty($_POST['userid']))
	{
        if(!empty($_POST['password']))
	    {
			//"userType"
            $userid = $_POST['userid'];
            $password = $_POST['password'];
   
   
   
				
         $qry = "Select * from users where  userid= '$userid' and password='$password'";

            $results = mysqli_query($con, $qry);
            if ($results->num_rows> 0) //username and password is corract
			{
				$usertype="";
				$row = $results->fetch_assoc();//getting the single row only
				
					$usertype=$row['usertype'];//fetching the usertype
				
					$_SESSION['userid'] = $userid;//session
					if($usertype=="Admin")
					{
					session_start();
					header('Location:http://localhost/eventplannertp/admin/index.php');
					}
					else if($usertype=="Customer")
					{
						session_start();
					header('Location:http://localhost/eventplannertp/customer/index.php');
					}
					
            }
   
   			
			else 
			{
                echo "Invalid username or password.";
            }
   
        }
		else 
		{
           echo "Password field is empty.";
        }
    } 
	else 
	{
        echo "username field is empty";
    }
	
	
}	
	
	
}
?>



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

</div>

<h1>Login Here  </h1>
<form action="login.php" method="post">
<table>

<tr><td></td>
<td></td></tr>
<tr><td>Enter UserID </td><td><input type="text" name="userid"  id="username"></td></tr>
<tr><td>Enter User password  </td><td><input type="password" name="password"  id="password"></td></tr>
<tr><td></td><td><button class="button" type="submit"  name="login">Login</button></td></tr>


</table>
</form>
</div>
<div class="footer">
    
    </div>
</body>
</html>