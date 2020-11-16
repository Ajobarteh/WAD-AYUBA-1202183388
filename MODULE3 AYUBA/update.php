<?php

$servername = "localhost:3307";
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
    $full_name = $_POST["full_name"];
    $description = $_POST["description"];
    $category = $_POST["category"];
    $event_date = $_POST["event_date"];
    $start_time = $_POST["start_time"];
    $end_time = $_POST["end_time"];
    $place = $_POST["place"];
    $price = $_POST["price"];
    $benefit = $_POST["benefit"];

    // echo $event_date; exit;

	mysqli_query($conn, "UPDATE event SET full_name= '$full_name', description = '$description',
    category = '$category', event_date = '$event_date', start_time= '$start_time', end_time= '$end_time', place= '$place', price= '$price',
    benefit = '$benefit' WHERE id=$id");
	$_SESSION['message'] = "Event updated!"; 
	header('location: home.php');
}

$conn->close();
?>