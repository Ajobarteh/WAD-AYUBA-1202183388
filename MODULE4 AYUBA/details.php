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


<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "events";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


	if (isset($_GET['details'])) {
		$id = $_GET['details'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM event WHERE id=$id");

		if (count(array($record)) > 0) {
      $row = mysqli_fetch_array($record);

      $id = $row["id"];
      $full_name = $row["full_name"];
      $description = $row["description"];
      $category = $row["category"];
      $event_date = $row["event_date"];
      $start_time = $row["start_time"];
      $end_time = $row["end_time"];
      $place = $row["place"];
      $price = $row["price"];
      $benefit = $row["benefit"];


		}
  }


	
		$id = $row['id']; 
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM event WHERE id=$id");

		if (count(array($record)) > 0) {
      $row = mysqli_fetch_array($record);

      $id = $row["id"];
      $full_name = $row["full_name"];
      $description = $row["description"];
      $category = $row["category"];
      $event_date = $row["event_date"];
      $start_time = $row["start_time"];
      $end_time = $row["end_time"];
      $place = $row["place"];
      $price = $row["price"];
      $benefit = $row["benefit"];


		}

?>



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter?edit=<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg " style="width:100%">
    <div class="modal-content"  style="width:100%">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Content Event </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row ">
  <div class="col-sm-6 pr-7">
    <div class="card">
      <div class="card-header" style="background:red"></div>
      <div class="card-body">
      <form action="update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" id="" value="<?php echo $row["id"]; ?>">
          <div class="form-group col">
              <label>Nama :</label>
              <input type="text" class="form-control" value="<?php echo $row["full_name"]; ?>" placeholder="Masukkan Nama" name="full_name"
                  required="required">
          </div>
          <div class="form-group col">
              <label>Discription :</label>
              <textarea class="form-control"  name="description" required="required"><?php echo $description ?></textarea>
          </div>
          <div class="form-group col">
              <label>Upload Foto :</label>
              <input type="file" name="picture" class="form-control" required="required">
              <!-- <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p> -->
          </div>
          <div class="form-group">
            <label for="">Category</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio"  <?php if ( $category == 1) {
                               echo 'checked';
       } 
       ?>  name="category" id="inlineRadio1" value="1">
            <label class="form-check-label" for="inlineRadio1">Online</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="hidden"  id="inlineRadio2" >
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio"name="category"  <?php if ( $category == 2) {
                               echo 'checked';
       } 
       ?> id="inlineRadio3" value="0" >
            <label class="form-check-label" for="inlineRadio3">Offline</label>
          </div>
          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
      
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
    <div class="card-header" style="background:blue"></div>
      <div class="card-body">
  
      <div class="form-row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="">Event Date</label>
          <input type="date" name="event_date"  value="<?php echo $event_date ?>"  class="form-control" placeholder="">
        </div>
        </div>
        <div class="col">
        <div class="form-group">
          <label for="">Start Time</label>
          <input type="time" name="start_time"  value="<?php echo $start_time ?>"  class="form-control" placeholder="First name">
        </div>
        </div>
        <div class="col">
        <div class="form-group">
          <label for="">End Time</label>
          <input type="time" name="end_time"  value="<?php echo $end_time ?>"  class="form-control" placeholder="Last name">
        </div>
        </div>
        <div class="col-md-12">
        <div class="form-group">
          <label for="">Place</label>
          <input type="text" name="place" class="form-control" value="<?php echo $place ?>"  placeholder="Zoom Meeting">
        </div>
        </div>
        <div class="col-md-12">
        <div class="form-group">
          <label for="">Price</label>
          <input type="text" name="price" value="<?php echo $price ?>"  class="form-control" placeholder="Price">
        </div>
        </div>
        <div class="form-group">
          <label for="">Benefits</label><br>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" <?php if ( $benefit == 1) {
                               echo 'checked';
       } 
       ?> value="1">
        <label class="form-check-label" name="benefit" for="inlineCheckbox1">Snack</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input"  name="benefit" type="checkbox" id="inlineCheckbox2" <?php if ( $benefit == 2) {
                               echo 'checked';
       } 
       ?> value="2">

        <label class="form-check-label" for="inlineCheckbox2">Certificate</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input"  name="benefit" type="checkbox" id="inlineCheckbox3" <?php if ( $benefit == 3) {
                               echo 'checked';
       } 
       ?> value="3" >
        <label class="form-check-label" for="inlineCheckbox3">Souvenir</label>
      </div>
    
      </div>
      </div>
      </div>
    </div>
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" name="update" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
      </div>
        </div>
      </div>
    </div>

  

<body style="background-color: #ffff;">
  <div class="container">
    <h2 class="text-center mt-2 header_color">EVENT DETAILS</h2>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <br><br><br>
    <style>

.stretch {
    width:685px;
    height:300px;
    display: block;
    margin-right:auto;
    margin-left:auto;
    padding-left:-40px;
    
}

.card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
}

    </style>

    <div class="col-md-8 col-sm-12 col-xs-12">
      <div class="card">
        <!-- <div class="card-header"> -->
          <div class="card-box">
            <img src="images/openm.png" alt="logo"  class="stretch">
          </div>
          <hr>
          <div class="col-md-12">
            <div class="form-group">
             <h3 for="" class="col-md-12 text-left"> <?php echo $row['full_name']; ?></h3>
            </div>
            <hr>
            <div class="form-group">
            <b>Description</b>
             <p for="" class="col-md-12 text-left"> <?php echo $row['description']; ?></p>
            </div>
            <hr>
            <div class="row">
            <div class="form-group col-md-6">
            <b>Event Information</b>
             <label for="" class="col-md-12 text-left"><i class="fa fa-calendar" style="color:orange"> &nbsp &nbsp   </i><?php echo date('Y-m-d', strtotime($row['event_date'])); ?> </label>
             </div>
             <div class="form-group col-md-6">
             <b>Benefits</b>
             <label for="" class="col-md-12 text-left">  </i><?php if ($benefit == 1) {
               echo 'Snack
               ';
             }elseif ($benefit == 2) {
              echo 'Certificate

              ';
             }else {
              echo 'Souvenir
              ';
             } ?> </label>
            </div>
            </div>
            <hr>
            <div class="form-group c">
              <label for=""></label>
             <label for="" class="col-md-12 text-left"><i class="fa fa-clock-o" style="color:orange"> &nbsp &nbsp   </i><?php echo date('H:i A', strtotime($row['start_time'])); ?> -  <?php echo date('H:i A', strtotime($row['end_time'])); ?></label>
            </div>
            <hr>
            <div class="form-group c">
             <label for="" class="col-md-12 text-left"><i class="fa fa-map-marker" style="color:orange">    
            </i>  <?php echo $row['place']; ?> </label> 
            </div>
            <hr>
            <div class="form-group ">
              <label for="" class="col-md-12 text-left"><b>Category</b> : &nbsp &nbsp </i><?php if ($category == 1) {
               echo 'Online';
              }else {
                echo 'Offline';
              } ?> </label>
             </div>
             <div class="form-group ">
             <label for="" class="col-md-12 text-left"> <b>HTM</b> : &nbsp &nbsp Rp <?php echo number_format($row['price'],2); ?> </label> 
            </div>
            <hr>
        </div>
        <div class="text-center">
        <a href="#" type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#exampleModalCenter?edit=<?php echo $row['id']; ?>">Edit</a>
       
        <a class="btn btn-danger btn-md" href="delete.php?del=<?php echo $row['id']; ?>" title='Delete' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span>Delete</a>
        </div>

        </div>
      </div>
    </div>
  </div>
<br><br>
</body>






<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>