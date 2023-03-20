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
   
  
<!-- carousel  -->
 <div class ="center">  
<div class="carousel-container">
  <div class="carousel-item active">
    <img src="e1.bmp" alt="Image 1">
  </div>

  <div class="carousel-item">
    <img src="e2.bmp" alt="Image 2">
  </div>
  <div class="carousel-item">
    <img src="e3.bmp" alt="Image 3">
  </div>
</div>

<button class="carousel-control prev" onclick="prevSlide()">&#10094;</button>
<button class="carousel-control next" onclick="nextSlide()">&#10095;</button>
</div>

<!-- nav bar  -->
<div class="navbar">

<a href="index.php">Dashboard </a>
<a href="about.php">About Us</a>
<a href="contactus.php">Contact Us </a>
<a href="login.php">Login</a>
<a href="admin_signup.php">Register AS Admin  </a>
<a href="customer_signup.php">Register As Customer  </a>
<input type="text" name="userid" required> <button type="submit" name="login"> Search </button>
</div>
<div class="container">
<div class="gallery">
    <h1>Future Products</h1>
<img src="e1.bmp" alt="Image 1"> 
<img src="e2.bmp" alt="Image 1"> 
<img src="e3.bmp" alt="Image 1"> 
</div>

<div class="gallery">
    <h1>Budget Products</h1>
<img src="e1.bmp" alt="Image 1"> 
<img src="e2.bmp" alt="Image 1"> 
<img src="e3.bmp" alt="Image 1"> 
</div>
    

</div>
<div class="footer">
    
    </div>
</body>
</html>