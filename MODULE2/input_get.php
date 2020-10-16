<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <title>Input_get.php</title>
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

<body>
    <div class="container-sm">
        <h2 style="text-align: center;">Booking</h2>
        <br>
        <form action="output_get.php" method="get">
            <fieldset class="form-group">
                <div class="form-group-row">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Name" name="name">
                    </div>
                </div>
                <div class="form-group-row">
                    <label class="col-sm-2 col-form-label">Check In</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" placeholder="Check in" name="check_in">
                    </div>
                </div>
                <div class="form-group-row">
                    <label class="col-sm-2 col-form-label">Duration</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="" name="duration">
                        <span>Day(s)</span>
                    </div>
                </div>
                <div class="form-group-row">
                    <label class="col-sm-2 col-form-label">Room type"</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="room_type">
                            <option value="Standard">Standard</option>
                            <option value="Superior">Superior</option>
                            <option value="Luxury">luxury</option>
                        </select>
                    </div>
                </div>
                <div class="form-group-row">
                    <label class="col-sm-2 col-form-label">Add Service(s)</label><br>
                    <span class="col-sm-10">$ 20/service</span>
                    <div class="col-sm-10">
                        <label class="col-form-label col-sm pt-0">Room Service</label>
                        <input type="checkbox">
                        <label class="col-form-label col-sm pt-0">Breakfast</label>
                        <input type="checkbox">

                    </div>
                </div>
                <div class="form-group-row">
                    <label class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="" name="phone_number">
                    </div>
                </div>
                <div style="text-align: center;">

                    <input type="submit" value="Send" class="btn btn-primary mb-2">

                </div>
            </fieldset>

        </form>
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