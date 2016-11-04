<?php
session_start();
require 'dbconnect.php';
$sql = "INSERT INTO orders (phone, weight, location, description)
VALUES ('".$_SESSION['buyer']."','".$_POST['weight']."', '".$_POST['location']."', '".$_POST['description']."')";

if ($conn->query($sql) === TRUE) {
    header('location: buyer_dash.php?message=Order%20Placed%20Successfully.');
    #echo "Order Placed successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>