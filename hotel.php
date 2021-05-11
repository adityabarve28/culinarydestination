<?php
 //Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php

//error_reporting(0);
?>
<html lang="en">
<head>
  <title>UPDATE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--LINKING BS & JS-->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="jquery/jqery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <!--LINKING EXTERNAL STYLE SHEET-->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
    
    
    
    <link rel="apple-touch-icon" sizes="57x57" href="fav/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="fav/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="fav/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="fav/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="fav/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="fav/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="fav/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="fav/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="fav/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="fav/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="fav/favicon-16x16.png">
<link rel="manifest" href="fav/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    
</head>
    
 <style>

     body{
         background-color: #3377ff;
         color: #ffffff;
     }
     *{
	margin: 0;
	padding: 0;
	overflow-x: hidden;
	flex-wrap: wrap;
}

/*FOR RESPONSIVE IMAGES IN CARDS*/
img .responsive{
  width: 100%;
  max-width: 205px;
  height: auto;
}

  /*MENU CARDS*/
  .menu{
  	margin-top: 50px;
  	position: relative;
  	animation: mymove 10s;
   }
   .menuitem{
   	animation: mymove 10s;
   }
  .cardtxt{
  	font-size: 30px;
  	font-family: 'Roboto', sans-serif;
  }
  .cardtxt1{
  	font-size: 20px;
  	font-family: 'Roboto', sans-serif;
  }
.menuitem{
	animation-timing-function: ease-out;
}
@keyframes mymove {
  from {top: -500px;}
  to {top: 0px;}
}

.cardtext{
	font-family: 'Dancing Script', cursive;
	font-size: 25px;
}


.container {
  max-width: 80%;
  margin: 0 auto;
}

.box {
  display: flex;
  justify-content: space-around;
  margin-top: 100px;
}

.box img {
  max-height: 300px;
  width: auto;
  border-radius: 20px;
  margin: 20px;
}

.text {
  width: 50%;
}

.text h3 {
  font-size: 35px;
  padding: 30px 0;
  font-weight: 600;
}

.text p {
  font-size: 20px;
  font-weight: 400;
}

/* Media Query */
@media (max-width: 768px) {
  header h1 {
    font-size: 25px;
  }

  .box {
    display: flex;
    flex-wrap: wrap;
  }

  .box img {
    max-width: 80vw;
  }

  .text {
    width: 80%;
  }
}

@media screen and (max-width: 992px) {
  .switch {
   border: 2px solid black;
  border-radius: 50px;
  height: 15px;
  width: 15px;
  margin: 1px;
  cursor: pointer;
  }
}

/*RESPONSIVE CARD IMAGES*/
@media screen and (max-width: 992px) {
.responsive, .cardtxt, .cardtxt1{
  width: 100% !important;
  max-width: 205px !important;
  height: auto !important;
}
}

</style>
    
    <body>

    <div class="form-group">
     
      <a href="admin.php"><input type="button" lass="form-control" value="Back To Admin Panel"/></a>
    </div>
    <!-- INSERT INTO MENU -->
    
    <form action="" method="post" enctype="multipart/form-data">
        <h1 style="overflow-y:hidden;">INSERT NEW INTO MENU</h1>
    <div class="form-group">
     
      <input type="file" class="form-control" name="uploadfile" value="" required />
    </div>
        
         <div class="form-group">
     
      <input type="text" class="form-control" name="name" placeholder="Enter Dish Name" required />
    </div>
    <div class="form-group">
        
      <input type="text" class="form-control" name="cost" placeholder="Enter Dish Cost" required />
      </div>
     <div class="form-group">
        
        <select class="form-control" id="menu" name="menu">
        <option value="STARTER">STARTERS</option>
        <option value="MAINCOURSE">MAINCOURSE</option>
        <option value="DESSERT">DESSERT</option>
        <!--<option value="DRINKS">DRINKS</option>-->
        <option value="SNACK">SNACK</option>
      </select>
    </div>
    <div class="form-group">
     
      <input type="submit" class="form-control" name="submit" value="upload" />
    </div>
    </form>
 <!--   

<form action="" method="post" enctype="multipart/form-data">
        <h1 style="overflow-y:hidden;">INSERT NEW INTO SPECIAL</h1>
    <div class="form-group">
     
      <input type="file" class="form-control" name="uploadfilee" value="" />
    </div>
        
         <div class="form-group">
     
      <input type="text" class="form-control" name="namee" placeholder="Enter Dish Name"  />
    </div>
    <div class="form-group">
        
      <input type="text" class="form-control" name="costt" placeholder="Enter Dish Cost"  />
    </div>
    
     <div class="form-group">
        
      <input type="text" class="form-control" name="discost" placeholder="Enter Discounted Cost" />
    </div>
    
     <div class="form-group">
        
      <input type="text" class="form-control" name="discription" placeholder="Enter offer discription" />
    </div>
    
    <div class="form-group">
     
      <input type="submit" class="form-control" name="submitt" value="upload"/>
    </div>
    </form>
  -->  
     <!--FOOTER-->
    <footer class="page-footer font-small blue pt-4 bg-dark navbar-dark" style="font-family: 'Cormorant Garamond', serif;">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase" style="color:#f1f1f1">CONTACT : 9137818209</h5>
        <p  style="color:#f1f1f1">OR MAIL US AT : universecode24@gmail.com</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
           

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

      
        <ul class="list-unstyled">
         
          <li>
            <a href="index.html" style="color:white">Back to 1st page</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3"  style="color:#f1f1f1">© 2020 Copyright:
    <a href="http://universecode.ml" style="color:red"> UNIVERSE CODE</a><br>Created by : Aditya Barve
  </div>
  <!-- Copyright -->

</footer>
    </body>
    <script src="removeBanner.js"></script>
</html>



<!--MENU IMAGE PHP -->
<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];
$cost = $_POST['cost'];

$filename = $_FILES["uploadfile"] ["name"];
$tmpname = $_FILES["uploadfile"] ["tmp_name"];
/*print_r($_FILES["uploadfile"]);*/
$folder = "img/".$filename;
echo $folder;
move_uploaded_file($tmpname, $folder);
echo "<img src = '$folder' height='100em' width='100em' />";
$type = $_POST['menu'];
?>
<?php
include 'config.php';
$qury = "INSERT INTO menu (IMAGENAME, IMAGEPATH, NAME, COST, TYPE) VALUES ('$filename', '$folder', '$name', '$cost', '$type')";
$exe = mysqli_query($link, $qury);
if($exe)
{
 echo '<script>alert("Inserted")</script>';   
   
}
else{
    echo '<script>alert("Failed")</script>';
}
    }
?>
   


<!--SPECIAL MARQUEE PHP-->
<?php
if(isset($_POST['submitt'])){
$namee = $_POST['namee'];
$costt = $_POST['costt'];
$discost = $_POST['discost'];
$discription = $_POST['discription'];
$filenamee = $_FILES["uploadfilee"] ["name"];
$tmpnamee = $_FILES["uploadfilee"] ["tmp_name"];
/*print_r($_FILES["uploadfile"]);*/
$folderr = "img/".$filenamee;
echo $folderr;
move_uploaded_file($tmpnamer, $folderr);
echo "<img src = '$folderr' height='100em' width='100em' />";
?>
<?php
$conn = mysqli_connect("localhost","id10067721_theculinarydestination","adityabarve2802","id10067721_theculinarydestination");
$qury = "INSERT INTO special (IMAGENAME, IMAGEPATH, DISHNAME, DISHCOST, DISCOST, DISCRIPTION) VALUES ('$filenamee', '$folderr', '$namee', '$costt', '$discost', '$discription')";
$exe = mysqli_query($conn, $qury);
if($exe)
{
    
   
}
}


?>



