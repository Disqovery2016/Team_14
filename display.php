
<?php
 $dbc = mysqli_connect('mysql.hostinger.in', 'u272468780_bob', '8341769092', 'u272468780_bob')
    or die('Error connecting to MySQL server.');
 
	
	  $query = "SELECT led FROM w WHERE id = 1 ";

	   $result = mysqli_query($dbc, $query)
    or die('Error querying database.');
	
	  while ($row = mysqli_fetch_array($result)){
    $led = $row['led'];
    
    echo 'led: ' . $led . '<br />';
  } 

header("Refresh:20");

  mysqli_close($dbc);
?>
