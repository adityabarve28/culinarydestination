<?php
// Starting session
session_start();
?>
<!DOCTYPE html>
<html>
    
<!--HEAD-->
    <head>
<!--TITLE-->    
        <title>
            ORDER NOW
        </title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
    
  <style>
  body {
      position: relative; 
  }
      .cb{
          height:25px;
          width: 25px;
          color: green;
          
      }
      *{
         

      }
      
      
      .table-responsive {
    min-height: .01%;
    overflow-x: auto;
}

@media screen and (max-width: 767px) {
    .table-responsive {
        width: 100%;
        margin-bottom: 15px;
        overflow-y: hidden;
        -ms-overflow-style: -ms-autohiding-scrollbar;
        border: 1px solid #ddd;
    }
    .table-responsive > .table {
        margin-bottom: 0;
        margin-left:0;
    }
    .table-responsive > .table > thead > tr > th,
    .table-responsive > .table > tbody > tr > th,
    .table-responsive > .table > tfoot > tr > th,
    .table-responsive > .table > thead > tr > td,
    .table-responsive > .table > tbody > tr > td,
    .table-responsive > .table > tfoot > tr > td {
        white-space: nowrap;
    }
}
      
      
      
      table{
   
      }
      @media only screen and(max-width:600px){
          *{
          }
      }
  </style>
    </head>
    
    <!--BODY-->
    <body>
          
        <!--NAV-->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark nav" > 
    <a class="navbar-brand" href="#myModal"> <p style="font-family:cursive" data-toggle="modal" data-target="#myModal">The Culinary Destination</p> </a>
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">The Culinary Destination</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         <img src="img/Untitled-1%20copy.jpg" class="img-thumbnail" >
      </div>

      <!-- Modal footer -->
      

    </div>
  </div>
</div>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.html">Home</a>
    </li>
    <li class="nav-item">
<a class="nav-link" href="index.html#menu">Menu</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.html#special">Today's Special</a>
    </li>
      
    <li class="nav-item ">
      <a class="nav-link" href="index.html#feedback">Feedback</a>
       <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="overflow-y:hidden;">
        More
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="about.php">About</a>
        <a class="dropdown-item" href="cfsub.php">Customer's Review's</a>
      
      <a class="dropdown-item" href="#vieworder">View Your Order</a>
   
      </div>
    
    </li>
  </ul>
</nav>
        
        <div class="alert alert-warning">
    <strong>Note!</strong> This Page and Billing System Is Under Development.
  </div> 
  <h2 style="overflow-y:hidden;">Tip - </h2><h4 style="overflow-y:hidden;">Place Your Order, Search Your Order Using Order No And Then Directly Send Your Order To Whats App By Clicking on Link And Also Copy Your Order No TO Search For Order</h4>
        
        
        
        
        
        
        <!--MENU-->
        <form action="" method="post">
      <div class="menu container-fluid bg-warning table-responsive" id="menu" style="padding-top:70px;padding-bottom:70px">
   
   <div class='container'>
  <h2 style="overflow-y:hidden;">Menu</h2>
  <p>Find the cuisine you like</p>   
     <table class='table table-striped table-dark table-hover'>
   
      <tr>
          <th>Select</th>
        <th>dish</th>
        
        <th>name</th>
        <th>price</th>
        </tr><?php    
    
    include 'config.php';
      $querry1 = "SELECT * FROM menu";
        $querry2 = mysqli_query($link,$querry1);
        $i = 0;
        while($querry3 = mysqli_fetch_assoc($querry2)){
            $i++;
            $id = $querry3['ID'];
        
            $title = $querry3['IMAGEPATH'];
            $sbtitle = $querry3['NAME'];
            $content = $querry3['COST'];
?>   
    
        
      
    
   
  
   
      <?php
        echo "           
  
   
            <tr>
            <td><input type='checkbox' name='order[]' value='".$querry3['NAME']."' class='cb'></td>

        <input type='hidden' value='".$querry3['COST']."' name='costs[]' id='costs' />
            <td> <img src= '".$querry3['IMAGEPATH']."' height = '100px' width = '100px' /> </td>
            

            
            <td><h5 style='overflow-y:hidden;'>".$querry3['NAME']."</h5></td>
            <td><h5 style='overflow-y:hidden;'>".$querry3['COST']." rs</h5></td>
            
            </tr>
             "
        ?>
        
      
      
  
  

    
          <?php
        }
 //$link=mysqli_connect("localhost","root","","mycreation");
   // echo "<h1>$title</h1><br><h2>$sbtitle</h2>"; 
    ?></table>
          
       <input type="text" class="name form-control" name="name" placeholder="Enter Name" required>   
       <input type="text" class="phn form-control" name="phn" placeholder="Enter Phone No" required>
       <input type="text" class="phn form-control" name="pin" placeholder="Enter Pin Code" required>
       <textarea name="address" placeholder="Enter Adderss" class="add form-control" cols="10" required></textarea>
       <!--<a href='https://api.whatsapp.com/send?phone=919137818209&text=$title $sbtitle $content $contentt $orderno'>--><button type="submit" class="btn btn-primary" name="go">Order</button></a> 
          </div>
    </div>
        <?php  
            if(isset($_POST['go'])){
                if(isset($_POST['order'])&& $_POST['order']>1){
                    if(isset($_POST['pin'])&& $_POST['pin']==421605){
           $name=	$_POST['name'];
           $pin=$_POST['pin'];
$phn= $_POST['phn'];
$address= $_POST['address'];     
          $checkbox1=$_POST['order'];
          $costs = $_POST['costs'];

//$quantity = $_POST['quantity'];

/*$chkk="";
foreach($quantity as $chkk1){
    $chkk .= $chkk1.",";
    $chkk = $quantity;
    
}
*/
if($_POST['order'] == true){
$chkk = "";
foreach($costs as $chkk1){
    $chkk .=$chkk1.",";
}
    
}
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   } 

         $order_no = $id.uniqid('');
         
$in_ch=mysqli_query($link,"insert into orders (ORDERNO,NAME,PHONE,PINCODE,ADDRESS,ORDERS, STATUS, COSTS) VALUES ('$order_no','$name','$phn','$pin','$address','$chk','PENDING', '$chkk')" );  

//$in_chh=mysqli_query($link,"insert into suborder (ORDERNO,QUANTITY,COST) VALUES ('$order_no',)" );
//echo $in_ch;


if($in_ch==1)  
   {  
      echo'<script>alert("Ordered Successfully \nYou Can Expect Your Order In Next 30 mins")</script>';
      //echo $order_no; ?> 
      
      <input type="text" class="form-control" name="orderno" value="<?php echo 'Your Order No: '. $order_no;?>" required>
      <?php
   }  
else  
   {  
      echo'<script>alert("Failed To Order")</script>';  
   } 
                    
                }
   else{
       echo'<script>alert("We dont deliver at this location. For now we onlly deliver at 421605")</script>';
       
   }
                }
   else{
       echo'<script>alert("Select what to order")</script>';
   }
   
   
   
   
}   
    
            
            ?>
           
            
            </form><br>
        <!--MENU END-->
        <form action="" method="POST">
         <div class="menu container-fluid bg-info table-responsive" id="menu" style="padding-top:70px;padding-bottom:70px">
            
            <h2 style="overflow-y:hidden;">View your order</h2>
            <input type="text" name="search" class="form-control" placeholder="Enter Order No Or Name" style="width:50%; float:left;">
             <button type="submit" class="btn btn-primary" name="goo">view Order</button>
            <br><br>
             <table class='table table-dark table-hover'>
   
      <tr>
         <th>Order no</th> 
        <th>dish</th>
        
        <th>name</th>
        <th>Phone</th>
          <th>address</th>
          <th>Status</th>
          <th>Direct Order On What's App</th>
        </tr> 
                 <?php
             if(isset($_POST['goo'])){
    
                 $srch=$_POST['search'];
                  $querry11 = "SELECT * FROM orders WHERE ORDERNO = '$srch' OR NAME = '$srch'";
        $querry22 = mysqli_query($link,$querry11);
        $i = 0;
        while($querry33 = mysqli_fetch_assoc($querry22)){
            $i++;
             
            
            $id = $querry33['ID'];
            $orderno= $querry33['ORDERNO'];
            $status= $querry33['STATUS'];
            $title = $querry33['ORDERS'];
            $sbtitle = $querry33['NAME'];
            $content = $querry33['PHONE'];
            $contentt = $querry33['ADDRESS'];
?>   
    
        
      
    
   
  
   
      <?php
        echo "           
  
   
            <tr>
            <td> <h5 style='overflow-y:hidden;'>".$querry33['ORDERNO']."</h5> </td>
            <td> <h5 style='overflow-y:hidden;'>".$querry33['ORDERS']."</h5> </td>
            
            <td><h5 style='overflow-y:hidden;'>".$querry33['NAME']."</h5></td>
            <td><h5 style='overflow-y:hidden;'>".$querry33['PHONE']." </h5></td>
             <td><h5 style='overflow-y:hidden;'>".$querry33['ADDRESS']." </h5></td>
             <td><h5 style='overflow-y:hidden;'>".$querry33['STATUS']." </h5></td>
             <td> <a href='https://api.whatsapp.com/send?phone=919137818209&text=$title $sbtitle $content $contentt $orderno'>Send This Order On What's App
            </a></td>
            
            </tr>
             ";
       
        }/*}
                 else{
                     echo '<script>alert("Enter Correct Order No")</script>';
                 }*/
             }
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
