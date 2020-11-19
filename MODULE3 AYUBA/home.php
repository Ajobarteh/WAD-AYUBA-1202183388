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
  <a class="navbar-brand" style="color:#fff; font-weight: bold">EAD EVENT</a>
  <form class="form-inline" action="create.php">
      <a  href="home.php" class="mr-sm-2" style="color:#fff">Home</a>
      <a href="create.php" class="btn btn-outline-primary my-2 my-sm-0" type="submit" style="color:#fff; border: solid 1px #fff">Create Even</a>
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

<body style="background-color: #ffff;">
  <div class="container">
    <h2 class="text-center mt-2 header_color">WELCOME TO EAD EVENTS</h2>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <?php
    $conn = mysql_connect("localhost", "root", "", "events");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        
    $sql = "SELECT * FROM event"; 

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      
       ?>

<div class="row">
  <?php
while($row = $result->fetch_assoc()) {
  ?>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <img src="images/openm.png" alt="logo"  width="260px">
      <div class="col-md-12">
            <div class="form-group">
             <h3 for="" class="col-md-12 text-center"><?php echo $row['full_name']; ?></h3>
            </div>
            <hr>
            <div class="form-group c">
             <label for="" class="col-md-12 text-left"><i class="fa fa-calendar" style="color:orange"> &nbsp &nbsp   </i><?php echo date('Y-m-d', strtotime($row['event_date'])); ?> </label>
            </div>
            <hr>
            <div class="form-group c">
             <label for="" class="col-md-12 text-left"><i class="fa fa-map-marker" style="color:orange">    
            </i>  <?php echo$row['place']; ?> </label> 
            </div>
            <hr>
            <div class="form-group ">
              <label for="" class="col-md-12 text-left">Category : &nbsp &nbsp </i><?php if ($row['category'] == 1) {
              echo 'Online';
              }else {
                echo 'Offline';
              } ?> </label>
             </div>
        </div>
        <div class="modal-footer">
        <a class="btn btn-primary btn-sm" href="details.php?details=<?php echo $row['id']; ?>" title='Details' data-toggle='tooltip'><span class='glyphicon glyphicon-eye'></span>Details</a>
        </div>
      </div>
    </div>
  </div>
  <?php
    }
  }
    $conn->close();
    ?>
</div>

<style>
  .c[label]{
    text-align:left !important;
  }
</style>

<!--     
<div class="row">
<div class="col-md-12">
  <div class="col-md-4">
        <div class="card">
        <div class="card-header">
          <div class="card-body">
            <img src="images/openm.png" alt="logo"  width="260px">
            <div class="card-title text-center mt-5">
            
            </div>
          </div>
          <hr>
          <div class="col-md-12">
            <div class="form-group">
             <label for="" class="col-md-12 text-center"><?php echo $row['full_name']; ?></label>
            </div>
            <hr>
            <div class="form-group">
             <label for="" class="col-md-12 text-center"><i class="fa fa-calendar" style="color:orange">    </i><?php echo date('Y-m-d', strtotime($row['description'])); ?> </label>
            </div>
            <hr>
            <div class="form-group">
             <label for="" class="col-md-12 text-center"><i class="fa fa-map-marker" style="color:orange">    
            </i><?php echo$row['place']; ?> </label>
            </div>
            <hr>
            <div class="form-group">
              <label for="" class="col-md-12 text-center">Category : </i><?php echo $row['category']; ?> </label>
             </div>
             <hr>
            <div class="card-footer btn_booking">
            <a href='details.php?id=<?php echo $row['id']; ?>' title='Details' data-toggle='tooltip'><span class='glyphicon glyphicon-eye'></span>Details</a>
            </div>
        </div>
        </div>
      </div>
      </div>
      </div>
      </div>
        

  
        </div>
      </div>
    </div>
  </div>
<br><br> -->
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>