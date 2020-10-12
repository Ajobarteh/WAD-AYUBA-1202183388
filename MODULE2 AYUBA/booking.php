<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <title>Document</title>
</head>




<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="booking.php">Booking</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="mybooking.php">My Booking</a>
            </li>
        </ul>

    </div>
</nav>
<style>
a:focus {
    color: #ffffff;
}
</style>

<?php 

// $booking_rand = rand(11111, 99999);

$random_number=rand(10000, 99999);
// echo $random_number;

?>

<body style="background-color: rgba(169, 169, 169, 0.76);">

    <div class="container-fluid" style="margin-top: 15px;">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="card">
                    <div class="card-header">
                        <!-- <div class="row"> -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <form action="connection.php" method="post">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" placeholder="Enter name" name="name"
                                                class="form-control">

                                            <input type="hidden" placeholder="Enter name" name="booking_number"
                                                class="form-control" value="<?php echo $random_number; ?>">

                                        </div>
                                        <div class="form-group">
                                            <label for="">Check in </label>
                                            <input type="date" placeholder="Enter Check In Date" name="check_in_date"
                                                class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Duration </label>
                                            <input type="date" placeholder="Enter Duration" name="duration"
                                                class="form-control">
                                            <span>Day(s)</span>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Room Type</label>
                                            <select name="room_type" id="" class="form-control">
                                                <option value="standard" selected>Standard</option>
                                                <option value="superio">Superio</option>
                                                <option value="luxury">Luxury</option>
                                            </select>
                                            <span>Add service(s)</span><br>$ 20/service
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Room service</label>
                                                <input type="checkbox" name="room_service" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Breakfast</label>
                                                <input type="checkbox" name="break_fast" value="1"
                                                    class="form-control pull-left">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Phone Number</label>
                                                <input type="text" placeholder="Enter Phone Number" name="phone_number"
                                                    class="form-control">
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Total Price</label>
                                                    <input type="text" placeholder="Enter Total Price"
                                                        name="total_price" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4">
                                    <div class="card">
                                        <img src="images/room5.jpg" alt="img" height="500px">
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

</body>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

</html>