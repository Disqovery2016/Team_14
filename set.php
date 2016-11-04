
<?php
 $dbc = mysqli_connect('mysql.hostinger.in', 'u272468780_bob', '8341769092', 'u272468780_bob')
    or die('Error connecting to MySQL server.');
  $input = $_GET['led'];
  //$last_name = $_GET['lastname'];
  

  

          $sql = "UPDATE w SET led=$input WHERE id=1";

  mysqli_query($dbc, $sql)
    or die('Error querying database.');
	
	 
  


  mysqli_close($dbc);
?>
