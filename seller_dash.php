<?php
require 'dbconnect.php';
session_start();

if(!isset($_SESSION['seller']))
{
    header('location: index.php');
}?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Garbazon</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
 <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Garbazon</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
           <ul class="nav navbar-nav navbar-right">
                <li><a class="cover-nav-item" href="logout.php">Logout</a></li> 
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
<?php
if(isset($_GET['message']))
{
echo "<div class=\"alert alert-warning alert-dismissible\" role=\"alert\">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
  <strong>".$_GET['message']."</strong></div>";
}
?>
<h2>Welcome <?php echo $_SESSION['seller']; ?><br></h2><br>
<a class="btn btn-default" href="seller_dash.php?msg=db" role="button">Display Balance</a>
<a class="btn btn-default" href="#" role="button">Redeem to my Account</a>
<a class="btn btn-default" href="#" role="button">Change Password</a>
<a class="btn btn-default" href="#" role="button">Leave application</a>
<a class="btn btn-default" href="#" role="button">Update Profile</a>
<br><br>
<?php
    if(isset($_GET['msg']))
    {
        if($_GET['msg']=="db")
        {
            $sql = "SELECT balance FROM seller where phone = \"".$_SESSION['seller']."\"";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br>The Balance is Rs. ".$row['balance'];
    }
    } else echo "No records found!!";
        }
    }
?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

</html>
<?php

?>