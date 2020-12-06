
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
  .card-header{
      hight=:80px;
      
  }
  </style>
<body">
  <div class="container-fluid" style="margin-top:2%">
    <div class="card">
        <div class="card-header" style="background:#B1E86A">
        <h3 style="text-align: center; ">WAD Beauty</h3>
        <p style="text-align: center;">Best products for all your skeen care uses</p>
        </div>
        <div class="row">
            <div class="col md-4">
                <img src="images/pic1.jpg" alt="" width="480px">
                <h4 style="text-align: center; ">WAD Beauty</h4>
                <p style="text-justify: center;">Find organic skin care stock images in HD and millions of <br> other royalty-free stock photos, illustrations and vectors in the Shutterstock collection. Thousands of new, <br> high-quality pictures added every day.</p>
                <p style="text-align: left;">Rp168.000</p>
                <!-- <button type="button" class="btn btn-primary btn-block" href="cart.php">Add to Cart</button> -->
                <a href="cart.php" class="btn btn-primary btn-block">Add to Cart</a>
            </div>
            <div class="col md-4">
            <img src="images/pic2.jpg" alt="" width="500px">
            <h4 style="text-align: center; ">WAD Beauty</h4>
                <p style="text-justify: center;">Find organic skin care stock images in HD and millions of <br> other royalty-free stock photos, illustrations and vectors in the Shutterstock collection. Thousands of new, <br> high-quality pictures added every day.</p>
                <p style="text-align: left;">Rp168.000</p>
                <button type="button" class="btn btn-primary btn-block">Add to Cart</button>
            </div>
            <div class="col md-4">
            <img src="images/pic2.jpg" alt="" width="500px">
            <h4 style="text-align: center; ">WAD Beauty</h4>
                <p style="text-justify: center;">Find organic skin care stock images in HD and millions of <br> other royalty-free stock photos, illustrations and vectors in the Shutterstock collection. Thousands of new, <br> high-quality pictures added every day.</p>
                <p style="text-align: left;">Rp168.000</p>
                <button type="button" class="btn btn-primary btn-block">Add to Cart</button>
            </div>
        </div>
    </div>
  </div>
</body>
</html>