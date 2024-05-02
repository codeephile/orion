<?php
session_start();
error_reporting(0);
include('connection.php');
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
          <a class="nav-link" href="games.php">Games</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="index.php">About</a>
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
<div class="section section-accessory">
<h1 style="padding-top: 20px;">ORION Accessories</h1>
<div class="container" style="padding-top: 70px;">
    <div class="row">
    <?php 
    $ret=mysqli_query($con, "SELECT * FROM accessory1");
    while($row=mysqli_fetch_array($ret)){ ?>
     <div class="col-md-6">
                <img src="admin/img/<?php echo $row['image']?>" class="card-img-top" alt=""/>
                <div class="card">
                    <h5 class="card-title"><?php  echo $row['name'];?></h5>
                    <p class="card-text"><?php  echo $row['description'];?></p>
                    <p class="card-text"><?php  echo $row['price'];?></p>
                    <a href="order.php?orderid=<?php  echo $row['id'];?>&type=a" class="btn btn-light" style="margin-left:40%;">Buy</a>
                </div>
                </div>
    <?php } ?>
</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
</body>
</html>