<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "wad_modul4";

// <?php 
class database{
	var $host = "localhost:3307";
	var $username = "root";
	var $password = "";
	var $database = "wad_modul4";
	var $koneksi;
 
	function __construct(){
		$this->connection = mysqli_connect($this->name, $this->emaill, $this->no_hp, $this->password);
	}
 
 
	function register($name, $email, $no_hp, $password)
	{	
		$insert = mysqli_query($this->koneksi,"insert into user values ('','$name', '$email', '$no_hp','$password')");
		return $insert;
	}
 
	function login($name, $email, $no_hp, $password)
	{
		$query = mysqli_query($this->connection,"select * from user where name='$name'");
		$data_user = $query->fetch_array();
		if(password_verify($password,$data_user['password']))
		{
			
			if($remember)
			{
				setcookie('name', $name, time() + (60 * 60 * 24 * 5), '/');
				setcookie('name', $data_user['name'], time() + (60 * 60 * 24 * 5), '/');
			}
			$_SESSION['name'] = $name;
			$_SESSION['name'] = $data_user['name'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
	}
 
	function relogin($name)
	{
		$query = mysqli_query($this->connection,"select * from user where name='$name'");
		$data_user = $query->fetch_array();
		$_SESSION['name'] = $name;
		$_SESSION['name'] = $data_user['name'];
		$_SESSION['is_login'] = TRUE;
	}
} 
 
 
?>
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