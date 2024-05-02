    <?php
    session_start();
    error_reporting(0);
    include('connection.php');

    if(isset($_POST['sub'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];

        $query=mysqli_query($con, "INSERT into contact1(name,email,message) VALUE ('$name','$email','$message')");

        if($query){
            echo "<script>alert('Your message was sent successfully!.');</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else{
            echo '<script>alert("Something went wrong,Please try again")</script>';
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

    <div class="section section-contact" style="background-image: url(img/bgg.jpg);">
    <div class="center" style="padding-top:80px;padding-bottom:50px">
     <h1 style="font-size: 35px;">Contact Us</h1>
  <div class="container d-flex justify-content-center">
  <form name="contact" method="post">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control text-white" id="">
	</div>
  <div class="mb-3">
    <label>Email</label>
    <input type="text" name="email" class="form-control text-white" id="">
  </div>
  <textarea class="form-control text-white" name="message" cols="30" rows="4">Message</textarea><br>
  <button type="submit" name="sub"  class="btn btn-light">Submit</button>
</form>
  </div>
</div>
<h6>&copy;ORION</h6>
</div>

    <script src="js/jquery.min.js"></script>
    </body>
    </html>