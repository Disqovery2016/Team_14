<?php
require 'dbconnect.php';
session_start();

if(!isset($_SESSION['buyer']))
{
    header('location: buyer_login.php');
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

<h2>Welcome <?php echo $_SESSION['buyer']; ?><br></h2><br>
<a class="btn btn-default" href="buyer_dash.php?message=po" role="button">Place order</a>
<a class="btn btn-default" href="buyer_dash.php?message=vo" role="button">View Orders</a>
<a class="btn btn-default" href="#" role="button">Change Password</a>
<a class="btn btn-default" href="#" role="button">Update Profile</a>
<br><br>
<?php
    if(isset($_GET['message']))
    {
        if($_GET['message']=="po")
        {
            echo "<form class=\"form-horizontal\" method=\"post\" action=\"placeorder.php\">
  <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Weight</label>
    <div class=\"col-sm-5\">
      <input type=\"number\" name=\"weight\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Weight of the waste\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Location</label>
    <div class=\"col-sm-5\">
      <input type=\"text\" name=\"location\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Enter Delivery Location\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Any specific instructions</label>
    <div class=\"col-sm-5\">
      <input type=\"text\" name=\"description\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Please specify any special instructions\">
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-sm-offset-2 col-sm-10\">
      <button type=\"submit\" class=\"btn btn-default\">Place Order</button>
    </div>
  </div>
  </form>";
        }
        if($_GET['message']=="vo")
        {
            $sql = "SELECT * FROM orders where phone = \"".$_SESSION['buyer']."\"";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    echo "<div class=\"table-responsive\">
            <table class=\"table table-striped\">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Weight</th>
                  <th>Location</th>
                  <th>Description</th>
                  <th>Time of Order</th>
                </tr>
              </thead>
              <tbody>";
   
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row['oid']."<td>".$row['weight']."<td>".$row['location']."<td>".$row['description']."<td>".$row['timestamp'];
    }
    echo " </tbody>
            </table>
          </div>";
    
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