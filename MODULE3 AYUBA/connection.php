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


$full_name = $_POST['name'];
$description = $_POST['description'];
$category = $_POST['category'];
$event_date = $_POST['date'];
$start_time = $_POST['start'];
$end_time = $_POST['end'];
$place = $_POST['place'];
$price = $_POST['price'];
$benefit = $_POST['benefit'];
 


$sql = "INSERT INTO event ( full_name, desciption, picture, category, event_date, start_time, end_date, place, price, benefit)
VALUES ('$name', '$description','$category','$date','$start','$end','$place','$price','$benefit')";

if (mysqli_query($conn, $sql)) {
   echo "New record created successfully !";
} else {
   echo "Error: " . $sql . "
" . mysqli_error($conn);
}
mysqli_close($conn);

?>