<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <title>Output_get.php</title>
</head>

<body>
    <?php
        
        $name = $_GET['name'];
        $check_in = $_GET['check_in'];
        $duration = $_GET['duration'];
        $room_type = $_GET['room_type'];
        $phone_number_ = $_GET['phone_number'];
    
    ?>
    <div class="container-sm">
        <h2 style="text-align: center;">MyBooking </h2>
        <fieldset>
            <table class="table">
                <tr>
                    <td>Name: </td>
                    <td><?= $name?> </td>
                </tr>
                <tr>
                    <td>chick In: </td>
                    <td><?= $check_in?> </td>
                </tr>
                <tr>
                    <td>Duration: </td>
                    <td><?= $duration?> </td>
                </tr>
                <tr>
                    <td>Room Type: </td>
                    <td><?= $room_type?> </td>
                </tr>
                <tr>
                    <td>Phone Number: </td>
                    <td><?= $phone_number_?> </td>
                </tr>
            </table>
            <div style="text-align: cetnter;">
                <a href="input_get.php" class="btn btn-primary mb-2"> Back</a>
            </div>
        </fieldset>
    </div>
</body>

</html>