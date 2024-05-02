<?php
session_start();
error_reporting(1);
include('connection.php');

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query=mysqli_query($con, "SELECT * FROM user1 WHERE email='$email' AND password='$password'");
    $result=mysqli_fetch_assoc($query);

    if($result){
      $_SESSION['uid']=$result['id'];
      $_SESSION['un']=$result['name'];
      $_SESSION['email']=$result['email'];
      $_SESSION['phone']=$result['phone'];
      header('location: login.php');
      exit();
    } else{
      echo "<script> alert ('Invalid username or password');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
     <!--navbar start -->
     <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container fs-5 justify-content-center">
    <!-- logo --> 
    <a class="navbar-brand" href="#">ORION</a>

    <!-- button toggler--> 
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- toggler collapse --> 
    <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item mx-2">
          <a class="nav-link" href="#home">Home</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#shop">Shop</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- navbar -->
    
<!-- navbar end-->

<div id="home" class="section section-home" style="padding-top: 130px;">
  <h1>Where Imagination meet Reality</h1>
  <div class="center" style="padding-top:100px;padding-bottom:100px">
  <?php
    if (strlen($_SESSION['uid']) ==0){
      ?>
     <h1 style="font-size: 35px;">LOG IN</h1>
  <div class="container d-flex justify-content-center">
  <form method="post">
  <div class="mb-3">
    <label>Email</label>
    <input type="text" name="email" class="form-control text-white" id="">
	</div>
  <div class="mb-3">
    <label>Password</label>
    <input type="password" name="password" class="form-control text-white" id="">
  </div>
  <span>Create new account &emsp;</span><a href="register.php" id="register">Register</a><br><br>
  <button type="submit" name="login"  class="btn btn-light">Log In</button>
</form>
  </div>
  <?php
} else{
  echo"<h3 style='padding:5px; color:white;'>Welcome ".$_SESSION['un']."</h3><br>";
  echo "<h3 style='padding:5px; color:white;'><a href='logout.php'>Logout</a></h3>";
}
?>
</div>
  </div>


<div id="shop" class="section section-shop" style="padding-top:100px">
  <h1>SHOP</h1>
  <!-- card start--> 
  <div class="container" style="padding-top: 20px;">
        <div class="row">
          <div class="col-md-6">
            <div class="card h-100">
              <img src="img/a5.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Accessories</h5>
                <p class="card-text">Elegance meets innovation</p>
                <a href="accessories.php" class="btn btn-light">See more</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card h-100">
              <img src="img/game.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Games</h5>
                <p class="card-text">Gamer never die...</p>
                <a href="games.php" class="btn btn-light">See more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--card end --> 
</div>

<div id="about" class="section section-about" style="padding-top:150px;padding-bottom:100px">
  <h1>ABOUT US</h1>
  <div class="center2">
    <p>At ORION, we're not just about pixels and polygons;<br>
     we're about crafting unforgattable experiences.<br>
     Dive into worlds of imagination, where heros are made legends are forget,and friendships are formed<br>Start today... Tomorrow will be better
  </div>
  <h6>&copy;ORION</h6>
</div>


<script src="js/jquery.min.js"></script>
</body>
</html>