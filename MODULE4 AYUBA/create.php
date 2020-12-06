

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <title>Document</title>
</head>

<nav class="navbar navbar-primary bg-primary justify-content-between">
  <a class="navbar-brand" style="color:#fff; font-weight: bold">EAD EVENT</a>
  <form class="form-inline" action="create.php">
      <a  href="home.php" class="mr-sm-2" style="color:#fff">Home</a>
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" style="color:#fff; border: solid 1px #fff">Create Event</button>
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

<div class="container-fluid" style="margin-top:2%">
<h3 style="color:blue">Create Event</h3>
<div class="row ">
  <div class="col-sm-6 pr-7">
    <div class="card">
      <div class="card-header" style="background:red"></div>
      <div class="card-body">
      <form action="save.php" method="post" enctype="multipart/form-data">
          <div class="form-group col">
              <label>Nama :</label>
              <input type="text" class="form-control" placeholder="Masukkan Nama" name="full_name"
                  required="required">
          </div>
          <div class="form-group col">
              <label>Discription :</label>
              <textarea class="form-control" name="description" required="required"></textarea>
          </div>
          <div class="form-group col">
              <label>Upload Foto :</label>
              <input type="file" name="picture" class="form-control" required="required">
              <!-- <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p> -->
          </div>
          <div class="form-group">
            <label for="">Category</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="category" id="inlineRadio1" value="1">
            <label class="form-check-label" for="inlineRadio1">Online</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="hidden"  id="inlineRadio2" >
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio"name="category" id="inlineRadio3" value="0" >
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
          <input type="date" name="date" data-format="yyy/mm/dd" class="form-control" placeholder="">
        </div>
        </div>
        <div class="col">
        <div class="form-group">
          <label for="">Start Time</label>
          <input type="time" name="start_time"   class="form-control" placeholder="First name">
        </div>
        </div>
        <div class="col">
        <div class="form-group">
          <label for="">End Time</label>
          <input type="time" name="end_time"   class="form-control" placeholder="Last name">
        </div>
        </div>
        <div class="col-md-12">
        <div class="form-group">
          <label for="">Place</label>
          <input type="text" name="place" class="form-control" placeholder="Zoom Meeting">
        </div>
        </div>
        <div class="col-md-12">
        <div class="form-group">
          <label for="">Price</label>
          <input type="text" name="price" class="form-control" placeholder="Price">
        </div>
        </div>
        <div class="form-group">
          <label for="">Benefits</label><br>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1">
        <label class="form-check-label" name="benefit" for="inlineCheckbox1">Snack</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input"  name="benefit" type="checkbox" id="inlineCheckbox2" value="2">
        <label class="form-check-label" for="inlineCheckbox2">Certificate</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input"  name="benefit" type="checkbox" id="inlineCheckbox3" value="3" >
        <label class="form-check-label" for="inlineCheckbox3">Souvenir</label>
      </div>
      </div>
      </div>
      <div class="modal-footer">
      <input type="submit" name="" value="Save" class="btn btn-primary">
      <input type="submit" style="background-color: red;" name="" value="Delete" class="btn btn-primary">
      </div>
    </form>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>