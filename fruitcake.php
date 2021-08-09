<?php 
include "php/nav.php"; 
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fruit Cakes</title>
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
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    
  <style>
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



 /*NAV BAR*/
nav {
	display: flex;
	justify-content: center;
	align-items: center;
	width: 100%;
	height: 30%;
	background-color: #666666;
	padding: 10px 10px 10px 10px;
}

.img{
	padding: 10px 10px;
	transition: width 2s, height 2s, transform 2s;
}
.img:hover {
  width: 300px;
  height: 300px;
  transform: rotate(360deg);
}
.navtxt{
	text-decoration: none;
	color: white;
	padding: 10px 10px;
	/*size: 30px;*/
	font-family: 'Yusei Magic', sans-serif;
    font-size: 18px;
}

.navtxt:hover{
	color: cyan;
	font-family: 'Hachi Maru Pop', cursive;
}

.icons{
	padding-right: 5px;
}
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">



<div class="menu container-fluid" id="menu" style="padding-top:70px;padding-bottom:70px">
   
   <div class='container'>
  <h2 style="font-family: 'Open Sans Condensed', sans-serif; overflow-y:hidden;">Fruit Cakes</h2>
  <div class="row">
     <?php    
    include 'php/connect.php';
     
      $querry1 = "SELECT * FROM menu WHERE TYPE = 'fruit_cake'";
        $querry2 = mysqli_query($link,$querry1);
        $i = 0;
        
        while($querry3 = mysqli_fetch_assoc($querry2)){
          
            $i++;
            $id = $querry3['ID'];
           
            $image = $querry3['IMAGEPATH'];
            $name = $querry3['NAME'];
           $cost = $querry3['PRICE'];
           $quantity = $querry3['QUANTITY'];
            
?>   
    
        
      
    <?php if($querry3['QUANTITY']>0){?>
<div class="col-md-3" style="float:left">
    <form action="manage_cart.php" method="POST">
        <div class="card mb-2">
        
  
   
      <?php
        echo "           
  
   
        
            <img class='card-img-top' src= '".$querry3['IMAGEPATH']."' height = '100px' width = '100px' /> 
            <div class='card-body'>
            <h4 class='card-title'>".$querry3['NAME']."</h4>
            <h4 class='card-title'>".$querry3['PRICE']." rs</h4>
            <h4 class='card-title'>".$querry3['QUANTITY']."</h4>
            <center><button type='submit' name='add_to_cart' class='btn btn-primary '> Add To Cart</button></center>
            <input type='hidden' name='name' value=".$querry3['NAME'].">
            <input type='hidden' name='price' value=".$querry3['PRICE'].">
            <input type='hidden' name='quantity' value=".$querry3['QUANTITY'].">
            </div>
            
            
             ";
        ?> 
        </div>
    </form>
</div>
        <?php
        }
      }
        //  $querry3['NAME'] = $itemname ;
        // $querry3['PRICE'] = $itemprice ;
        //  $_SESSION['i_name'] = $querry3['NAME'];
        //  $_SESSION['i_cost'] = $querry3['PRICE'];
 //$connection=mysqli_connect("localhost","root","","mycreation");
   // echo "<h1>$title</h1><br><h2>$sbtitle</h2>"; 
    ?>
    </div>
</div>
    </div>
   
</body>
<script src="removeBanner.js"></script>
</html>
