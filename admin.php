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
        
        function AutoRefresh( t ) {
               setTimeout("location.reload(true);", t);
            }
    </script>
    
    <style>
        h5{
            overflow-y:hidden;
        }
    </style>
    
</head>
<body class="body" onload = "JavaScript:AutoRefresh(5000);">
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
    <h1 class="wlcmtxt" style="overflow:hidden;">Hello Admin Welcome</h1>
    <p class="text">From here you can easily manage your website. Want to insert someting into Menu? No worries it's easy click on <b class="text">Add To Menu</b> Same you can Delete something from Menu or Read customer's review.</p>
    <p class="text">Want to see who ordered what? Just click here <br>
        <button type="button" class="btnn btn btn-primary" onclick="myFunction()">View Orders</button></p>
</center>
<!-- VIEW ORDER -->
<div class="vieworder" id="vieworder">
    <div class="menu container-fluid  table-responsive" id="menu" style="padding-top:70px;padding-bottom:70px">
        <br>
        
        <!--*******************************************************************************************-->
        <form action="" method="POST">
         <div class="menu container-fluid bg-info table-responsive" id="menu" style="padding-top:70px;padding-bottom:70px">
            
            <h2 style="overflow-y:hidden;">View your order</h2>
            <input type="text" name="search" class="form-control" placeholder="Enter Order No Or Name Or Order Status" style="width:50%; float:left;">
             <button type="submit" class="btn btn-primary" name="goo">view Order</button>
            <br><br>
             <table class='table table-dark table-hover'>
   
      <tr>
         <th>ID</th>
                <th>Order no</th>
                <th>dish</th>
                <th>Quantity</th>
                <th>name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Current Status</th>
                <th>Update Status</th>
                <th>Send Update Status On What's App</th>

        </tr> 
                 <?php
             if(isset($_POST['goo'])){
    
                 $srch=$_POST['search'];
                  $querry11 = "SELECT * FROM orders WHERE ORDERNO = '$srch' OR NAME = '$srch' OR STATUS = '$srch'";
                  $querry22 = mysqli_query($link,$querry11);
            $i = 0;
            while($querry33 = mysqli_fetch_assoc($querry22)){
                $id = $querry33['ID'];
                $orderno= $querry33['ORDERNO'];
                $status= $querry33['STATUS'];
                $title = $querry33['ORDERS'];
                $sbtitle = $querry33['NAME'];
                $content = $querry33['PHONE'];
                $contentt = $querry33['ADDRESS'];
                $quantity = $querry33['QUANTITY'];
                $total = $querry33['TOTAL'];
                echo "           
            <tr>
            <td><h5 style='overflow:hidden;'>$id</h5></td>
            <td><h5 style='overflow:hidden;'>".$querry33['ORDERNO']."</h5> </td>
            <td><h5 style='overflow:hidden;'>".$querry33['ORDERS']."</h5> </td>
            <td><h5 style='overflow:hidden;'>".$querry33['QUANTITY']."</h5></td>
            <td><h5 style='overflow:hidden;'>".$querry33['NAME']."</h5></td>
            <td><h5 style='overflow:hidden;'>".$querry33['PHONE']." </h5></td>
            <td><h5 style='overflow:hidden;'>".$querry33['ADDRESS']." </h5></td>
            <td><h5 style='overflow-y:hidden;'>".$querry33['STATUS']." </h5></td>
             <td>
                <form action='' method='post'>
                   <input type='radio' name='status' onclick='getRadioVaal($i)' value='CONFIRMED'> CONFIRMED <br>
                    <input type='radio' name='status' onclick='getRadioVaal($i)' value='PREPARING'> PREPARING <br>
                    <input type='radio' name='status' onclick='getRadioVaal($i)' value='DISPATCHED'> DISPATCHED <br>
                    <input type='radio' name='status' onclick='getRadioVaal($i)' value='COMPLETED'> COMPLETED <br>
                    <input type='hidden' name='order_number' value='$orderno'>
                    <input type='hidden' name='order_id' value='$id'>
                    <input type = 'submit' class = 'btn-primary' value = 'Submit' name = 'submit'>         
                </form>   
              </td> 
              <td>";
              echo "
              <a href='https://api.whatsapp.com/send?phone=+91$content&text= your order $title has been $status amount to be paid is $total'>Send This Update On What's App</a>
             </td>
              
            </tr>
             ";

                $i++;
            }

            if (isset($_POST['submit'])){
                echo print_r($_POST);
                if($_POST['order_id']){
                $status=$_POST['status'];
                    $orderno = $_POST['order_number'];
                    $select = mysqli_query($link,"SELECT * FROM orders WHERE ORDERNO = $orderno");
                    $datainsert = "UPDATE orders SET STATUS = '$status' WHERE ORDERNO = '$orderno'";
                    $execute = mysqli_query($link, $datainsert);
                    if($execute){
                        echo "<h1>.$id.</h1>";
                        echo "<script>alert('Order Status Updated')</script>";
                       
                    }
                }

                else{
                    echo "<script>alert('ERROR OCCOURED')</script>";
                }

            }
             }
            ?>
        
        
        </table>
        
            
            
        
        </div>
        
        </form>
        <!--*******************************************************************************************-->
        
        <br><br>
        <table class='table table-dark table-hover'>

            <tr>
                <th>ID</th>
                <th>Order no</th>
                <th>dish</th>
                <th>Quantity</th>
                <th>name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Current Status</th>
                <th>Update Status</th>
                <th>Send Update Status On What's App</th>

            </tr>
            <input type="hidden" value="" name="ids" id="ids" />
            <?php



            $querry11 = "SELECT * FROM orders WHERE STATUS != 'COMPLETED'";
            $querry22 = mysqli_query($link,$querry11);
            $i = 0;
            while($querry33 = mysqli_fetch_assoc($querry22)){
                $id = $querry33['ID'];
                $orderno= $querry33['ORDERNO'];
                $status= $querry33['STATUS'];
                $title = $querry33['ORDERS'];
                $sbtitle = $querry33['NAME'];
                $content = $querry33['PHONE'];
                $contentt = $querry33['ADDRESS'];
                $quantity = $querry33['QUANTITY'];
                $total = $querry33['TOTAL'];
                ?>

                <?php
                echo "           
    
            <tr>
            <td><h5>$id</h5></td>
            <td> <h5>".$querry33['ORDERNO']."</h5> </td>
            <td> <h5>".$querry33['ORDERS']."</h5> </td>
            <td><h5>".$querry33['QUANTITY']."</h5></td>
            <td><h5>".$querry33['NAME']."</h5></td>
            <td><h5>".$querry33['PHONE']." </h5></td>
             <td><h5>".$querry33['ADDRESS']." </h5></td>
             <td><h5 style='overflow-y:hidden;'>".$querry33['STATUS']." </h5></td>
             <td>
                <form action='' method='post'>
                   <input type='radio' name='status' onclick='getRadioVaal($i)' value='CONFIRMED'> CONFIRMED <br>
                    <input type='radio' name='status' onclick='getRadioVaal($i)' value='PREPARING'> PREPARING <br>
                    <input type='radio' name='status' onclick='getRadioVaal($i)' value='DISPATCHED'> DISPATCHED <br>
                    <input type='radio' name='status' onclick='getRadioVaal($i)' value='COMPLETED'> COMPLETED <br>
                    <input type='hidden' name='order_number' value='$orderno'>
                    <input type='hidden' name='order_id' value='$id'>
                    <input type = 'submit' class = 'btn-primary' value = 'Submit' name = 'submit'>         
                </form>   
              </td> 
              <td>";
              if($status = 'DISPACHED'){
                echo "  <a href='https://api.whatsapp.com/send?phone=+91$content&text= your order $title has been $status Total amout to be paid is $total'>Send This Update On What's App If Order Dispached</a>";
              }
              echo "
              <a href='https://api.whatsapp.com/send?phone=+91$content&text= your order $title has been $status'>Send This Update On What's App</a>
              </td>
            </tr>
             ";

                $i++;
            }

            if (isset($_POST['submit'])){
                echo print_r($_POST);
                if($_POST['order_id']){
//                    $ids = explode(",",$_POST['ids']);
                    $status=$_POST['status'];
                    $orderno = $_POST['order_number'];
                    //if($querry33['ID'] == $id){
                    $select = mysqli_query($link,"SELECT * FROM orders WHERE ORDERNO = $orderno");
                    $datainsert = "UPDATE orders SET STATUS = '$status' WHERE ORDERNO = '$orderno'";
                    $execute = mysqli_query($link, $datainsert);
                    if($execute){
                        echo "<h1>.$id.</h1>";
                        echo "<script>alert('Order Status Updated')</script>";
                       
                    }
                }
//}
                else{
                    echo "<script>alert('ERROR OCCOURED')</script>";
                }

            }
            /*}
                     else{
                         echo '<script>alert("Enter Correct Order No")</script>';
                     }*/

            ?></table>



    </div>

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
<script>
    function getRadioVaal(i){
        alert("I'm here with : "+i);
        var updatedValue = document.getElementById('ids').value;
        if(updatedValue == ""){
            updatedValue = updatedValue + i;
        } else {
            updatedValue = updatedValue + "," + i;
        }
        document.getElementById('ids').value = updatedValue;
    }
    
</script>
</html>