<?php
session_start();
error_reporting(0);
include('connection.php');

if(isset($_POST['reg'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];

    $ret=mysqli_query($con, "SELECT * from user1 WHERE email='$email'");
    $result=mysqli_fetch_array($ret);

    if($result != null){
        echo "<script>alert('This email is already existed with another account!');</script>";
    }else {
        $query=mysqli_query($con, "INSERT into user1(name,email,password,phone) VALUE('$name','$email','$password','$phone')");
         
        if($query){
            echo "<script>alert('You have successfully registered'); window.location.href='index.php';</script>";
        } else{
            echo "<script>alert ('Something went wrong');</script>";
        }
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
          <a class="nav-link" href="index.php">Home</a>
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

<div id="home" class="section section-reg" style="background-image: url(img/bgg.jpg);">
  <div class="center" style="padding-top:50px;padding-bottom:50px">
     <h1 style="font-size: 35px;">REGISTER FORM</h1>
  <div class="container d-flex justify-content-center">
  <form method="post">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control text-white" id="">
	</div>
  <div class="mb-3">
    <label>Email</label>
    <input type="text" name="email" class="form-control text-white" id="">
  </div>
  <div class="mb-3">
    <label>Password</label>
    <input type="text" name="password" class="form-control text-white" id="">
  </div>
  <div class="mb-3">
    <label>Phone</label>
    <input type="text" name="phone" class="form-control text-white" id="">
  </div>
  <button type="submit" name="reg"  class="btn btn-light">Register</button>
</form>
  </div>
</div>
  </div>

<script src="js/jquery.min.js"></script>
</body>
</html>