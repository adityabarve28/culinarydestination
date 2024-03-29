<?php
 //Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta  name="viewport" content="width= device-width, initial-scale=1.0">
	<title>Admin || The Culinary Destination</title>
	 <link rel = "icon" href = 
"http://theculinarydestination.000webhostapp.com/img/Untitled-1 copy.jpg" 
        type = "image/x-icon">
	<!-- LINKING EXTERNAL CSS STYLESHEET -->
	<link rel="stylesheet" type="text/css" href="style1.css">
	<!-- LINKING FONT AWESOME -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- LINKING GOOGLE FONTS -->
	<!-- <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&display=swap" rel="stylesheet"> -->

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@200&family=Yusei+Magic&family=Hachi+Maru+Pop&family=Dancing+Script&display=swap" rel="stylesheet">
	<!-- LINKING BOOTSTRAP -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- FEEDBACK  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="css/style.css"> -->
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
	<link rel='stylesheet' href='https://raw.githubusercontent.com/kartik-v/bootstrap-star-rating/master/css/star-rating.min.css'>
<script>
function myFunction() {
  document.getElementById("vieworder").style.visibility = "visible";
}
</script>
</head>
<body class="body">
	<!-- NAV BAR -->
<nav class="nav">
	
	<a href="#home" class="navtxt active">Home</a>
	<a href="hotel.php" class="navtxt">Add To Menu</a>
	<a href="del.php" class="navtxt">Delete From Menu</a>
    <!--<a class="navtxt " href="#vieworder" onclick="return myFunction()">View Order's</a>-->
    <a class="navtxt " href="php/cfsub.php">Customer's Review's</a>
 
</nav>
<!-- WECOME MESSAGE -->
<center>
    <div class="form-group">
      <a href="logout.php"><input type="button" class="btn btn-primary form-control" value="Logout"/></a>
    </div>
<h1 class="wlcmtxt">Hello Admin Welcome</h1>
<p class="text">From here you can easily manage your website. Want to insert someting into Menu? No worries it's easy click on <b class="text">Add To Menu</b> Same you can Delete something from Menu or Read customer's review.</p>
<p class="text">Want to see who ordered what? Just click here <br>
<button type="button" class="btnn btn btn-primary" onclick="myFunction()">View Orders</button></p>
</center>
<!-- VIEW ORDER -->
        <form action="" method="POST" class="vieworder" id="vieworder">
         <div class="menu container-fluid  table-responsive" id="menu" style="padding-top:70px;padding-bottom:70px">
            <br><br>
             <table class='table table-dark table-hover'>
   
      <tr>
         <th>Order no</th> 
        <th>dish</th>
        
        <th>name</th>
        <th>Phone</th>
          <th>address</th>
          
        </tr> 
                 <?php
             
    
                
                  $querry11 = "SELECT * FROM orders";
        $querry22 = mysqli_query($link,$querry11);
        $i = 0;
        while($querry33 = mysqli_fetch_assoc($querry22)){
            $i++;
             
            
            $id = $querry33['ID'];
            $orderno= $querry33['ORDERNO'];
            /*$quantity= $querry33['QUANTITY'];*/
            $title = $querry33['ORDERS'];
            $sbtitle = $querry33['NAME'];
            $content = $querry33['PHONE'];
            $contentt = $querry33['ADDRESS'];
?>   
    
        
      
    
   
  
   
      <?php
        echo "           
  
   
            <tr>
            <td> <h5>".$querry33['ORDERNO']."</h5> </td>
            <td> <h5>".$querry33['ORDERS']."</h5> </td>
            
            <td><h5>".$querry33['NAME']."</h5></td>
            <td><h5>".$querry33['PHONE']." </h5></td>
             <td><h5>".$querry33['ADDRESS']." </h5></td>
             
            
            </tr>
             ";
       
        }/*}
                 else{
                     echo '<script>alert("Enter Correct Order No")</script>';
                 }*/
             
    ?></table>
            
            
        
        </div>
        
        </form>
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
            <a href="#home" style="color:white">Back to top of page</a>
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