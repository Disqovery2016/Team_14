
<?php
 $dbc = mysqli_connect('mysql.hostinger.in', 'u272468780_bob', '8341769092', 'u272468780_bob')
    or die('Error connecting to MySQL server.');
 
	
	  $query = "SELECT weight,user FROM w WHERE id = 1 ";

	   $result = mysqli_query($dbc, $query)
    or die('Error querying database.');
	
	  while ($row = mysqli_fetch_array($result)){
     $weight = $row['weight'];
	$user = $row['user'];
    
    echo 'weight: ' . $weight . '<br />';
	    echo 'user: ' . $user . '<br />';  } 

header("Refresh:20");

  mysqli_close($dbc);
?>
