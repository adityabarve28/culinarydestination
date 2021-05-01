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
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
<a class="nav-link" href="index.php#menu">Menu</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php#special">Today's Special</a>
    </li>
      
    <li class="nav-item ">
      <a class="nav-link" href="index.php#feedback">Feedback</a>
       <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
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
    <strong>Note!</strong> This Page Is Under Development.
  </div> 
  <h2>Tip - </h2><h4>Place Your Order, Search Your Order Using Order No And Then Directly Send Your Order To Whats App By Clicking on Link And Also Copy Your Order No TO Search For Order</h4>
        
        
        
        
        
        
        <!--MENU-->
        <form action="" method="post">
      <div class="menu container-fluid bg-warning table-responsive" id="menu" style="padding-top:70px;padding-bottom:70px">
   
   <div class='container'>
  <h2>Menu</h2>
  <p>Find the cuisine you like</p>   
     <table class='table table-striped table-dark table-hover'>
   
      <tr>
          <th>Select</th>
        <th>dish</th>
        <th>name</th>
        <th>price</th>
        </tr><?php    
    
     include 'config1.php';
      $querry1 = "SELECT * FROM menu";
        $querry2 = mysqli_query($connection,$querry1);
        $i = 0;
        while($querry3 = mysqli_fetch_assoc($querry2)){
            $i++;
            $id = $querry3['ID'];
        
            $title = $querry3['IMAGEPATH'];
            $sbtitle = $querry3['NAME'];
            $content = $querry3['COST'];
            /*$quantity[] = $querry3['QUANTITY'];*/
?>   
    
        
      
    
   
  
   
      <?php
        echo "           
  
   
            <tr>
            <td><input type='checkbox' name='order[]' value='".$querry3['NAME']."' class='cb'></td>


            <td> <img src= '".$querry3['IMAGEPATH']."' height = '100px' width = '100px' /> </td>
            
            <td><h5>".$querry3['NAME']."</h5></td>
            <td><h5>".$querry3['COST']." rs</h5></td>
            
            </tr>
             "
        ?>
        
      
      
  
  

    
          <?php
        }
 //$connection=mysqli_connect("localhost","root","","mycreation");
   // echo "<h1>$title</h1><br><h2>$sbtitle</h2>"; 
    ?></table>
          
       <input type="text" class="name form-control" name="name" placeholder="Enter Name" required>   
       <input type="text" class="phn form-control" name="phn" placeholder="Enter Phone No" required>
       <textarea name="address" placeholder="Enter Adderss" class="add form-control" cols="10" required></textarea>
       <a href='https://api.whatsapp.com/send?phone=919137818209&text=$title $sbtitle $content $contentt $orderno'><button type="submit" class="btn btn-primary" name="go">Order</button></a> 
          </div>
    </div>
        <?php  
            if(isset($_POST['go'])){
           $name=	$_POST['name'];
           /*$quantityy=$_POST['quantity'];*/
$phn= $_POST['phn'];
$address= $_POST['address'];     
          $checkbox1=$_POST['order'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   } 

/*   $chkk="";  
foreach($quantityy as $qu1)  
   {  
      $chkk .= $qu1.",";  
   } */
         $order_no = $name.uniqid('_');
         
$in_ch=mysqli_query($connection,"insert into orders (ORDERNO,NAME,PHONE,ADDRESS,ORDERS) VALUES ('$order_no','$name','$phn','$address','$chk')" );  




if($in_ch==1)  
   {  
      echo'<script>alert("Ordered Successfully")</script>';
      //echo $order_no; ?> 
      
      <input type="text" class="form-control" name="orderno" value="<?php echo 'Your Order No: '. $order_no;?>" required>
      <?php
   }  
else  
   {  
      echo'<script>alert("Failed To Order")</script>';  
   }  
}   
    
            
            ?>
           
            
            </form><br>
        <!--MENU END-->
        <form action="" method="POST">
         <div class="menu container-fluid bg-info table-responsive" id="menu" style="padding-top:70px;padding-bottom:70px">
            
            <h2>View your order</h2>
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
          <th>Direct Order On What's App</th>
        </tr> 
                 <?php
             if(isset($_POST['goo'])){
           $srch=$_POST['search'];
                 
                  $querry11 = "SELECT * FROM orders WHERE ORDERNO = '$srch' OR NAME = '$srch'";
        $querry22 = mysqli_query($connection,$querry11);
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
             <td> <a href='https://api.whatsapp.com/send?phone=919137818209&text=$title $sbtitle $content $contentt $orderno'>Send This Order On What's App
            </a></td>
            
            </tr>
             ";
        ?>
        
      
      
  
  

    
          <?php
        }}
 //$connection=mysqli_connect("localhost","root","","mycreation");
   // echo "<h1>$title</h1><br><h2>$sbtitle</h2>"; 
    ?></table>
            
            
        
        </div>
        
        </form>
    </body>
    <script src="removeBanner.js"></script>
</html>
