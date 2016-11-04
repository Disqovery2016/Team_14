<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "disq";

$pass=$_POST['pass'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$username=$_POST['user'];
$sql = "SELECT phone, password FROM seller_login WHERE phone='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         if(($_POST['user']==$row["phone"] && $pass==$row["password"]))
         {
		$_SESSION['seller'] = $_POST['user'];
		$conn->close();
		header('location: seller_dash.php?message=Successfully%20Logged%20in.');
	}
	if(($_POST['user']==$row["user"] && $pass!=$row["password"]))
	header('location: index.php?message=Invalid%20Username%20or%20password');
	}
} 
else {
    header('location: index.php?message=You%20are%20not%20registered');
}
$conn->close();
?>
