<?php
    session_start();
    error_reporting(0);
    include('connection.php');

    if(isset($_POST['login'])) {
        $admin_user=$_POST['username'];
        $password=$_POST['password'];

        $query=mysqli_query($con,"select id from admin1 where name='$admin_user' && password='$password' ");
        $ret=mysqli_fetch_array($query);

        if($ret>0){
            $_SESSION['aid']=$ret['id'];
            header('location: index.php');
        } else {
        $msg="Invalid Details.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="admin-login">
<div class="section">
  <div class="center" style="padding-top:100px;padding-bottom:100px">
     <h1>LOG IN</h1>
  <div class="container d-flex justify-content-center">
  <form method="post">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" name="username" class="form-control text-white" id="">
	</div>
  <div class="mb-3">
    <label>Password</label>
    <input type="password" name="password" class="form-control text-white" id="">
  </div>
  <button type="submit" name="login"  class="btn btn-light">Log In</button>
</form>
  </div>
</div>
<h6>&copy;ORION</h6>
  </div>
</body>

</html>