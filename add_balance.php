<?php
require 'dbconnect.php';
/*echo $_GET['user'];
echo $_GET['type'];
echo $_GET['weight'];*/
$sql = "SELECT rate from seller_price where type = \"".$_GET['type']."\"";
$result = $conn->query($sql);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $y = $row['rate'];
    }
    }
$x = +$_GET['weight']*$y;
$sql = "INSERT INTO seller_transaction (mobile, weight, type, amount)
VALUES ('".$_GET['user']."', ".$_GET['weight'].", '".$_GET['type']."', ".$x.")";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>