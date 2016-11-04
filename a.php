
<?php
 $dbc = mysqli_connect('localhost', 'web', '8341769092', 'web')
    or die('Error connecting to MySQL server.');
  $first_name = $_GET['led'];
  $last_name = $_GET['temp'];
  

  

  echo $first_name.'<br/>';
  echo $last_name.'<br/>';
  
  $query = "INSERT INTO w (led,temp)  VALUES ('$first_name','$last_name')";
  mysqli_query($dbc, $query)
    or die('Error querying database.');

  echo 'Customer added.';

  mysqli_close($dbc);
?>
