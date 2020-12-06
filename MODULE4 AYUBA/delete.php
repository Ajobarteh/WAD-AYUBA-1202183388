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


if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM event WHERE id=$id");
	$_SESSION['message'] = "Event Deleted Successfully!"; 
	header('location: home.php');
}
?>