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

session_start();

if (isset($_POST['update'])) {
  $id = $_POST['id'];
		$update = true;
    $resi_number = $_POST["resi_number"];
    $product_id = $_POST["product_id"];
    $user_id = $_POST["user_id"];
    $status = $_POST["status"];
    $current_location = $_POST["current_location"];


    // echo $event_date; exit;

	mysqli_query($conn, "UPDATE booking SET resi_number= '$resi_number', product_id = '$product_id',
    user_id = '$user_id', status = '$status', current_location= '$current_location' WHERE id=$id");
	header('location: index.php');
}

$conn->close();
?>