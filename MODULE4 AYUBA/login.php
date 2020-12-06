<?php 
session_start();
include_once('connection.php');
$database = new database();
 
if(isset($_SESSION['is_login']))
{
    header('location:index.php');
}
 
if(isset($_COOKIE['email']))
{
  $database->relogin($_COOKIE['email']);
  header('location:index.php');
}
 
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      $remember = TRUE;
    }
    else
    {
      $remember = FALSE;
    }
 
    if($database->login($name,$password,$remember))
    {
      header('location:index.php');
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
      <div class="container" style="padding-top:10%; backgroung-color: #A0D2D4;">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="col-sm-6">
      <div class="card">
      <div class="card-header">
      <h3 class="text-center mt-2">LogIn</h3>
      <div class="card-body">
      <div class="form-group">
        <label>E-mail</label>
        <input type="text" class="form-control" placeholder="input email" name="email" required>
      </div>
      
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" placeholder="input email" name="email" required>
      </div>
        <input type="checkbox">
        <label>Remember me</label>
        
    
     
     
      <div class="button" style="text-align:center">
      <a href="index.php" class="btn btn-lg btn-primary">Register</a>
        </div>
        <div class="signup-link" style="text-align:center;">Not a Member yet? <a href="register.php">SignUp now</a></div>
      </div>
      </div>
      </div>
      </div>

      </div>
      </div>
  </body>
  </html>