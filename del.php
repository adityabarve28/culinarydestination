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

error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Operations</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--LINKING BS & JS-->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="jquery/jqery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <!--LINKING EXTERNAL STYLE SHEET-->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
    
    
    
   <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
<link rel="manifest" href="img/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">   
</head>
<body style="background-color:#3377ff;" >
    
    
    
    
    
    
    <nav class="navbar navbar-expand-md bg-dark navbar-dark" id="nav" >
  <a class="navbar-brand" href="#" style="hover:font-family:cursive;"><!--<?php //echo $id; ?>--></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
     
      <li class="nav-item">
        <a class="nav-link" href="admin.php">Back To Admin Panel</a>
      </li>
     
</ul>
 </div>
</nav>
    
    <form method="GET" action="">
   <br>
     <div class="container post jumbotron" id="post"  style="margin-left:2%;margin-right:2%; background-color:#3377ff; color:#fff;">   
    <!--php starts-->
   <?php
   
    $connection = mysqli_connect("localhost","id10067721_theculinarydestination","adityabarve2802","id10067721_theculinarydestination");
    
       
  
         $qury = "SELECT * FROM menu  ";
           $exe = mysqli_query($connection,$qury);
     
           if(mysqli_num_rows($exe)> 0){
               
               
               
               
               
               
               
               
             

if(isset($_GET['id'])){
    $idval = $_GET['id'];
    $del1 = "DELETE FROM menu WHERE ID = '$idval'";
    $del2 = mysqli_query($connection,$del1);
    if($del2){
        echo "<script>alert('CONTENT DELETED')</script>";
        echo "<script>window.open('del.php','_self')</script>";
    }
        else{
            echo "<script>alert('ERROR OCCOURED')</script>";
        }
}
?>

      <div class="container">
<h1>
 MENU
    </h1>
    <table border="2px" class="table table-dark table-hover">
    <tr>
         <th>
       ID
        </th>
        <th>
        SR. NO
        </th>
        <th>
       IMAGE
        </th>
        <th>
       NAME
        </th>
        <th>
      COST
        </th>
        
         <th>
         OPERATION
        </th>
        </tr>
<?php

        
        $querry1 = "SELECT * FROM menu ";
        $querry2 = mysqli_query($connection,$querry1);
        $i = 0;
        while($querry3 = mysqli_fetch_assoc($querry2)){
            $i++;
            $id = $querry3['ID'];
            $name = $querry3['IMAGEPATH'];
            $email = $querry3['NAME'];
            $message = $querry3['COST'];
            
            echo "
            <tr>
             <td>".$id."</td>
            <td>".$i."</td>
            <td><img src=".$name." height='100px' width='100px'></td>
            <td>".$email."</td>
            <td>".$message." rs</td>
          
            <td><a href='del.php?id=$id;'>DELETE</a></td>
            "
        
?>
        
        <?php }} ?>
      </table>
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
</html>
       