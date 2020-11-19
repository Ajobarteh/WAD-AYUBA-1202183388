<?php 

// $conn = mysqli_connect("localhost:3307", "root", "", "events");

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//     }


// $full_name = $_POST['name'];
// $description = $_POST['description'];
// $category = $_POST['category'];
// $event_date = $_POST['date'];
// $start_time = $_POST['start'];
// $end_time = $_POST['end'];
// $place = $_POST['place'];
// $price = $_POST['price'];
// $benefit = $_POST['benefit'];
 

// $rand = rand();
// $econnection =  array('png','jpg','jpeg','gif');
// $filename = $_FILES['picture']['name'];
// $size = $_FILES['picture']['size'];
// $ext = pathinfo($filename, PATHINFO_EXTENSION);
 
// if(!in_array($ext,$econnection) ) {
// 	header("location:home.php?alert=error_econnection");
// }else{
// 	if($size < 1044070){		
// 		$xx = $rand.'_'.$filename;
// 		move_uploaded_file($_FILES['picture']['tmp_name'], 'image/'.$rand.'_'.$filename);
// 		mysqli_query($connection, "INSERT INTO event VALUES (NULL,'$full_name','$description','$category','$event_date','$start_time','$end_time','$place','$price','$benefit')");
// 		header("location:home.php?alert=successful");
// 	}else{
// 		header("location:home.php?alert=error_size");
// 	}
// }

// $rand = rand();
// $econnection =  array('png','jpg','jpeg','gif');
// $filename = $_FILES['picture']['name'];
// $size = $_FILES['picture']['size'];
// $ext = pathinfo($filename, PATHINFO_EXTENSION);
 
// if(!in_array($ext,$econnection) ) {
// 	header("location:home.php?alert=error_econnection");
// }else{
// 	if($size < 1044070){		
// 		$xx = $rand.'_'.$filename;
// 		move_uploaded_file($_FILES['picture']['tmp_name'], 'image/'.$rand.'_'.$filename);
// 		mysqli_query($connection, "INSERT INTO event VALUES (NULL,'$full_name','$description','$category','$event_date','$start_time','$end_time','$place','$price','$benefit')");
// 		header("location:home.php?alert=successful");
// 	}else{
// 		header("location:home.php?alert=error_size");
// 	}
// }

?>


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


$full_name = $_POST['full_name'];
$description = $_POST['description'];
$category = $_POST['category'];
$event_date = $_POST['date'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];
$place = $_POST['place'];
$price = $_POST['price'];
$benefit = $_POST['benefit'];


$sql = "INSERT INTO events (full_name, description, category, event_date, start_time, end_time, place, price, benefit)
VALUES ('$full_name','$description','$category','$event_date','$start_time','$end_time','$place','$price','$benefit')";

if (mysqli_query($conn, $sql)) {
   echo "<br/><h2><font color='green' style='font-size:15px;float:right'>New record created successfully !</font></h2>";
   header("Location: home.php");

} else {
   echo "Error: " . $sql . "
" . mysqli_error($conn);
}
mysqli_close($conn);

?>