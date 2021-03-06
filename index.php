<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>

body,h1 {font-family: "Raleway", Arial, sans-serif}
h1 {letter-spacing:45px ; text-size:250px; text-shadow:2px 2px green }
.w3-row-padding img {margin-bottom:12px}
.w3-row-padding {margin-bottom:128px}
</style>

<style>
 {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}


.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}


@media only screen and (max-width: 300px ) {
  .text {font-size: 11px}
}
</style>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="http://guelph.ca/wp-content/uploads/GiveWaste_logo.jpg" style="width:100% ">
  </div>

<div class="mySlides fade">
  
  <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSYqJwM_I8t2k8aRLKV1xcoy4UR3o31XCocGHO9nqCTShilUDg8PA" style="width:100% ">
  
</div>

<div class="mySlides fade">
  
  <img src="http://www.ci.pittsburg.ca.us/Modules/ShowImage.aspx?imageid=1404" style="width:100% ">
  
</div>

<div class="mySlides fade">
  
  <img src="http://www.weeerecycle.in/images/ewaste_centres_box.gif" style="width:100% ">
  
</div>

<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); 
}
</script>

</body>


    
<div class="w3-content" style="max-width:1500px">

<header class="w3-panel w3-padding-500px w3-center w3-opacity">
  <h1 class="w3-xlarge"><b>GARBAZON<b></h1>
  
  
  <div class="w3-padding-32">
    <div class="w3-btn-bar w3-border w3-show-inline-block">
      <a href="buyer_login.php" class="w3-btn">BUYER</a>
      <a href="seller_login.php" class="w3-btn w3-light-grey">SELLER</a>
      <a href="#con" class="w3-btn">CONTACT US</a>
    </div>
  </div>
</header>

<div class="w3-row-padding">
    <img src="http://www.tiverton.ri.gov/img/content/publicworks/bins.jpg" style="width:100%">

<div class="w3-row-padding">
    <div class="w3-col l4 m6 w3-margin-bottom">
    <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQNTuTtokweGWvD9XbYZh0cHs0AFSx40_zW8ruN1_sP-AJwdsdK" style="width:100%">
      </div>
<div class="w3-col l8 m6 w3-margin-bottom">
<p> GARBAZONE also called as "Garbage IN Garbge OUT" process in which our mannagement involves improper disposal of garbage leading to air pollution & diseases.e are acting as an interface between buyers & sellers where Sellers are either from households or from hotels & buyers are any firms or fertilizers plant which can use trashes to make useful & efficient output products.</br> There are three main types of waste that you need to know about so you can put the right kind in the right bin for our collection teams:</br>>>Food and garden waste (green service)</br>>>Mixed dry recycling (blue service)</br>>>Non-recyclable waste (black service)
</p>
    </div>

  </div>

 </div>

<footer class="w3-container w3-padding-64 w3-light-grey w3-center">
  <a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
  <a href="#" class="w3-hover-text-red"><i class="fa fa-pinterest-p"></i></a>
  <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
  <a href="#" class="w3-hover-text-grey"><i class="fa fa-flickr"></i></a>
  <a href="#" class="w3-hover-text-indigo"><i class="fa fa-linkedin"></i></a></br>
  <a name="con" <div id="con"></div>></a>
  <a href="#" class="w3-hover-text-green"><i class="Garbazon99@gmail.com">garbazon99@gmail.com</i></a>
  <a href="#" class="w3-hover-text-indigo"><p>CONTACT NO.:+9188888-88888</p></a>
</footer>

</body>
</html>
