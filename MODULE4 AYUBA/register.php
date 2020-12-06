<?php 
include_once('connection.php');
$database = new database();
if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    if($database->register($name,$email,$no_hp,$password))
    {
      header('location:login.php');
    }
}
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <title>Document</title>
</head>

<nav class="navbar navbar-primary bg-primary justify-content-between">
  <a class="navbar-brand" style="color:#fff; font-weight: bold">WAD Beauty</a>
  <form class="form-inline" action="create.php">
      <a  href="login.php" class="mr-sm-2" style="color:#fff">LogIn</a>
      <a href="register.php" class="btn btn-outline-primary my-2 my-sm-0" type="submit" style="color:#fff; border: solid 1px #fff">Register</a>
</form>
</nav>

  <style>
    a:focus {
      color: #ffffff ;
    }
  
  .btn_booking{
    text-align: right;
  }
  .header_color {
    color: cadetblue;
  }
  .sub_header_color {
    color: cadetblue;
  }
  h5{
    color: royalblue;
  }
  
  </style>
  <body>
      <div class="container" style="padding-top:10%">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="col-sm-6">
      <div class="card" style="background-color: #fff">
      <div class="card-header">
      <h3 class="text-center mt-2">Register</h3>
      <div class="card-body">
      <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" placeholder="input name" name="full_name" required>
      </div>
      <div class="form-group">
        <label>E-mail</label>
        <input type="text" class="form-control" placeholder="input email" name="email" required>
      </div>
      <div class="form-group">
      <label>Phone No.</label>
      <input type="number" class="form-control" placeholder="input name" name="full_name" required>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" placeholder="input email" name="email" required>
      </div>
      <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" class="form-control" placeholder="input email" name="email" required>
      </div>
      <div class="button" style="text-align:center">
      <a href="index.php" class="btn btn-lg btn-primary">Register</a>
        </div>
        <div class="signup-link" style="text-align:center;">Already have a account? <a href="login.php">SignIn</a></div>
      </div>
      </div>
      </div>
      </div>

      </div>
      </div>
  </body>
  </html>