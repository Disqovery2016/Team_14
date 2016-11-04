
<?php
 $dbc = mysqli_connect('localhost', 'web', '8341769092', 'web')
    or die('Error connecting to MySQL server.');
  $input = $_GET['led'];
    $input1 = $_GET['led1'];

  

  

          $sql = "UPDATE w SET led=$input and temp=$input1 WHERE id=1";

  mysqli_query($dbc, $sql)
    or die('Error querying database.');
	
	 
  


  mysqli_close($dbc);
?>
