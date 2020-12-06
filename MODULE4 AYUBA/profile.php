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
      <a href="" class="fas fa-cart-plus"></a>
      <a  href="home.php" class="mr-sm-2" style="color:#fff">LogIn</a>
      <a href="create.php" class="btn btn-outline-primary my-2 my-sm-0" type="submit" style="color:#fff; border: solid 1px #fff">Register</a>
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
  .card-header{
      hight=:80px;
      
  }
  </style>
 <body class="d-flex flex-column h-100">
    <!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
    <h2 class="mt-5" style="text-align: center;">Profile</h2>
    <hr/>
    <form method="post" action="">
    <div class="form-group row">
      <label for="e-mail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="username" name="e-mail">
      </div>
    </div>
 
    <div class="form-group row">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
      </div>
    </div>
 
 
  <div class="form-group row">
    <label for="phone" class="col-sm-2 col-form-label">Phone Number</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="phone" name="phone_no">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Confirm Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Navbar Color</label>
    <div class="col-sm-10">
                    <select id="navber_color col">
                        <option value="Light">Light</option>
                        <option value="Dark">Dark</option>
                    </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-12">
    <button type="button" class="btn btn-primary btn-block">Save</button>
    <button type="button" class="btn btn-primary btn-block" disabled>Cancel</button>
    </div>
  </div>
</form>
  </div>
</main>
 
<footer class="footer mt-auto py-3">
  <div class="container">
    <!-- <span class="text-muted">Warung Belajar@2019</span> -->
    <span class="far fa-copyright"> 2020 Copyright.<span style="color: #648EDB"> WAD Beauty.</span></span>
  </div>
</div>
</footer>
</body>
</html>