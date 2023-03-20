

<?php include '../config.php'; 
$customerID=$_SESSION["userid"] ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
     
    <title>Event Planner</title>
</head>
<body>
   
  

<!-- nav bar  -->
<div class="navbar">

<a href="../logout.php">Logout</a>

</div>

<h1>Welcome   </h1><?php echo $customerID;?>


</div>
<div class="footer">
    
    </div>
</body>
</html>