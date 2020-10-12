<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$check_in = $_POST['check_in_date'];
$duration = $_POST['duration'];
$room_type = $_POST['room_type'];
$room_service = $_POST['room_service'];
$break_fast = $_POST['break_fast'];
$phone_number = $_POST['phone_number'];
$total_price = $_POST['total_price'];
$booking_number = $_POST['booking_number'];


$sql = "INSERT INTO bookings (full_name, booking_number ,check_in_date,check_out_date,room_types,phone,services, breakfast, total_price)
VALUES ('$name', '$booking_number','$check_in','$duration','$room_type','$room_service','$break_fast','$phone_number','$total_price')";

if (mysqli_query($conn, $sql)) {
   echo "New record created successfully !";
} else {
   echo "Error: " . $sql . "
" . mysqli_error($conn);
}
mysqli_close($conn);

?>