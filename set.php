
<?php
 $dbc = mysqli_connect('mysql.hostinger.in', 'u272468780_bob', '8341769092', 'u272468780_bob')
    or die('Error connecting to MySQL server.');
  $i = $_GET['weight'];
    $i1 = $_GET['user'];
    $i2 = $_GET['type'];
  

  

          $sql = "UPDATE w SET weight=$i,user=$i1, type=$i2 WHERE id=1";

  mysqli_query($dbc, $sql)
    or die('Error querying database.');
	
	 
  


  mysqli_close($dbc);
?>
