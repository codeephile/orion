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
          <a class="nav-link" href="index.php">Shop</a>
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

<?php
include('connection.php');
$oid=$_GET['orderid'];
$type=$_GET['type'];
if($type == 'a'){
    $data=mysqli_query($con, "select * from accessory1 where id='$oid'"); 
}else{
    $data=mysqli_query($con, "select * from game1 where id='$oid'");
}
$row=mysqli_fetch_array($data);

if(isset($_POST['sub'])){
    $name=$_POST['contact_name'];
    $email=$_POST['contact_email'];
    $address=$_POST['contact_address'];
    $ordno='od' .rand(100,500);
    $pname=$row['name'];
    $price=$row['price'];
    $query=mysqli_query($con, "insert into order1 value ('','$name','$email','$address','$ordno','$pname','$price')");
    if($query){
        echo "<script>window.location.href='ordersuccess.php'</script>";
    } else {
        echo "<sctipt>alert('Something went wrong .Please try again');</script>";
    }
}
?>
<!-- order form--> 
<div class="section section-order">
<h1>Order</h1>
  <div class="container d-flex justify-content-center">
  <form method="post">
  <div class="col-md-6">
                    <center>
                    <h2><?php echo $row['name']?></h2><br/>
                    <img src="admin/img/<?php echo $row['image'];?>" width="300" height="400" />
                    <h4 style="color:white;margin-top:20px;"><?php echo $row['price']?></h4>
                    </center>
                </div>
  <div class="mb-3">
    <label>Name</label>
    <input type="text" name="contact_name" class="form-control text-white" id="contact_name">
	</div>
  <div class="mb-3">
    <label>Email</label>
    <input type="text" name="contact_email" class="form-control text-white" id="contact_email">
  </div>
  <div class="mb-3">
    <label>Address</label>
    <input type="text" name="contact_address" class="form-control text-white" id="contact_address">
  </div>
  <button type="submit" name="sub"  class="btn btn-light">Order</button>
</form>
  </div> 
  </div>
<script src="js/jquery.min.js"></script>
</body>
</html>