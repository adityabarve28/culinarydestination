<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dessert || Culinary Destination</title>
  <meta charset="utf-8">
  <meta name="og:image" content="http://theculinarydestination.000webhostapp.com/img/Untitled-1%20copy.jpg">
  <meta name ="title" content="The Culinary Destination">
  <meta name="description" content="This is the sample website for a resturant. If you like this website then do contact us to get this website at very affordable price">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,300&family=Caveat&family=Great+Vibes&family=Berkshire+Swash&family=Cormorant+Unicase:wght@300&family=Dancing+Script&family=Open+Sans+Condensed:wght@300&family=Redressed&family=Roboto:wght@100&display=swap" rel="stylesheet">
    
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
    
  <style>
  body {
      
  }
  .nav-text{
    color: white;
}
.nav-text :hover{
    color: white !important;
    font-size: 20px;
}
.dropdown-item :hover{
    color: black !important;
}
.td{
    font-family: 'Dancing Script', cursive;
}
.tdmar{
    font-family: 'Berkshire Swash', cursive;
}
.home{
    background-color:#a8adad;
   background-image: linear-gradient(250deg, #80b3ff, #ebccff);
}
.menu{
      background-image: linear-gradient(198deg, #336699, #e6ccff);
}
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- NAVBAR NORMAL -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark nav" > 
    <a class="navbar-brand text" href="#myModal"> <p style="font-family:cursive" data-toggle="modal" data-target="#myModal">The Culinary Destination</p> </a>
<!-- The Modal -->

  <ul class="navbar-nav nav-text"style="font-family: 'Roboto', sans-serif;">
    <li class="nav-item">
      <a class="nav-link" href="http://theculinarydestination.000webhostapp.com/index.html#home">Home</a>
    </li>
    <li class="nav-item">
<a class="nav-link" href="http://theculinarydestination.000webhostapp.com/index.html#menu">Menu</a>
    </li>

      
    <li class="nav-item ">
      <a class="nav-link" href="http://theculinarydestination.000webhostapp.com/index.html#feedback">Feedback</a>
       <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        More
      </a>
      <div class="dropdown-menu bg-dark">
           <a class="dropdown-item "style="color:white !important;" href="order.php">Order Now</a>
    
        <a class="dropdown-item "style="color:white !important;" href="cfsub.php">Customer's Review's</a>
      
      <!--<a class="dropdown-item" href="order.php">Order Now</a>
   -->
      </div>
    
    </li>
  </ul>
</nav>



<div class="menu container-fluid" id="menu" style="padding-top:70px;padding-bottom:70px">
   
   <div class='container'>
  <h2 style="font-family: 'Open Sans Condensed', sans-serif; overflow-y:hidden;">Menu</h2>
  <p style="font-family: 'Redressed', cursive; font-size:24px;"class="td">Find the cuisine you like</p>   
     <table class='table table-dark table-hover'>
   
      <tr>
        <th style="font-family: 'Cormorant Unicase', serif;">dish</th>
        <th style="font-family: 'Cormorant Unicase', serif;">name</th>
        <th style="font-family: 'Cormorant Unicase', serif;">price</th>
      </tr><?php    
    include 'config.php';
     
      $querry1 = "SELECT * FROM menu WHERE TYPE = 'DESSERT'";
        $querry2 = mysqli_query($link,$querry1);
        $i = 0;
        while($querry3 = mysqli_fetch_assoc($querry2)){
            $i++;
            $id = $querry3['ID'];
           
            $image = $querry3['IMAGEPATH'];
            $name = $querry3['NAME'];
            $cost = $querry3['COST'];
?>   
    
        
      
    
   
  
   
      <?php
        echo "           
  
   
            <tr>
            <td> <img src= '".$querry3['IMAGEPATH']."' height = '100px' width = '100px' /> </td>
            
            <td class='td'><h5>".$querry3['NAME']."</h5></td>
            <td class='td'><h5>".$querry3['COST']." rs</h5></td>
            
            </tr>
             ";
        ?>
        
      
      
  
  

    
          <?php
        }
 //$connection=mysqli_connect("localhost","root","","mycreation");
   // echo "<h1>$title</h1><br><h2>$sbtitle</h2>"; 
    ?></table></div>
    </div>
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