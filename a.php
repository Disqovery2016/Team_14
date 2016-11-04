
<?php
 $dbc = mysqli_connect('mysql.hostinger.in', 'u272468780_bob', '8341769092', 'u272468780_bob')
    or die('Error connecting to MySQL server.');
  $weight = $_GET['weight'];
  $user = $_GET['user'];
  $type=$_GET['type'];
  

  

  echo $weight.'<br/>';
  echo $user.'<br/>';
    echo $type.'<br/>';

  
  $query = "INSERT INTO w (weight,user,type)  VALUES ('$weight','$user','$type')";
  mysqli_query($dbc, $query)
    or die('Error querying database.');

  echo 'Customer added.';

  mysqli_close($dbc);
?>
