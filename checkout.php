<?php 
include "php/nav.php";
include "php/connect.php";
error_reporting(0);
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>My Cart</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded my-5">
                <h1 class="card-title">My Cart</h1>
            </div>
            <div class="col-lg-6">
                <table class="table">
                    
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                   
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php

                        //$_SESSION['username'] = $name;
                        $total = 0;
                            if (isset($_SESSION['cart'])) 
                            {
                          
                                foreach($_SESSION['cart'] as $key => $value)
                                {
                                 
                                    $z = $value['item_name'];
                                    $total = $total+$value['item_price'];
                                    $i = $key+1;
                                    
                                 echo "
                                 <tr>
                                 <td>".$i."</td>
                                 <td>".$value['item_name']."</td>
                                 <td>".$value['item_price']."</td>
                                 <td>".$value['item_quantity']."</td>
                          
                                 <form action='manage_cart.php' method='POST'>
                                 
                                 <input type='hidden' name='item_name' value='".$value['item_name']."'>
                             
                                 </form>
                                 </tr>
                                 "   ;
                                 $pr = $value['item_price'];
                                 $in = $value['item_name'];
                                }
                            }    
                            
                        ?>
                    
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6">
                <div class="border bg-light rounded p-4">
                <h4>Total</h4>
                <h5 class="text-right"><?php echo $total;?></h5>
                <form action="" method="POST">
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" checked name="optradio">COD
                        </label>
                    </div>  
                        <input type="text" class="form-control mt-2 text-center" value="<?php echo $_SESSION['username'];?>" disabled> 
                      <?php  foreach($_SESSION['cart'] as $key => $value)
                                {
?>                        <input type="text" class="form-control mt-2 text-center" name="" value="<?php echo $value['item_name'], $value['item_price'];?>" disabled> 
                            
                                <?php } ?>
                        
                        <input type="text" class="form-control mt-2 text-center" placeholder="Enter Mobile Number: " name="mobno">
                        <textarea name="address" id="" cols="30" rows="5" class="form-control mt-2 text-center" placeholder="Enter Address: "></textarea>                
                    <br><br> 
                   <button class="btn btn-primary btn-block" type="submit" name="checkout">Checkout</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php

if (isset($_POST['checkout']) && isset($_POST['mobno']) && isset($_POST['address'])) 
{
    $uid = uniqid();
    echo $uid;
    $mobno = $_POST['mobno'];
    $address = $_POST['address'];
    $name = $_SESSION['username'];
    foreach($_SESSION['cart'] as $key => $value)
                                {
                                   
                                    $qu = $value['item_quantity'];
                                    $pr = $value['item_price'];
                                 $in = $value['item_name'];
                                 $i = 0;
                                 $i = $key + 1;

                                    $querry1 = "SELECT QUANTITY FROM menu WHERE NAME = '$in'";
                                    $querry2 = mysqli_query($link,$querry1);
                                    $i = 0;
                                    
                                    while($querry3 = mysqli_fetch_assoc($querry2)){
                                        $i++;
                                       $quantityy = $querry3['QUANTITY'] - $qu;
                                        
                                    }
                                    $quryy = "UPDATE menu SET QUANTITY = '$quantityy' WHERE NAME = '$in'";
                                    $exee = mysqli_query($link, $quryy);
                                    //$a[0] = array('quantity_i' => $_POST['quantity']);
                                  
                                $qury = "INSERT INTO orders (USERNAME,UID, ORDERS, PRICE, QUANTITY, MNO, ADDRESS) VALUES ('$name','$uid', '$in', '$pr', '$qu', '$mobno', '$address')";
                                
                                $exe = mysqli_query($link, $qury);
                               
                                }
                                
                                    
                                

    if($exe)
    {
        echo '<script>alert("Ordered Successfully. You will recieve a call from us shortly for order confirmation")</script>';   

    }

    else{
        echo '<script>alert("Failed")</script>';
    }

}

}
else{

    echo "
    <script>
    alert('Please Login To Continue');
    window.location.href = 'login.php';
    </script>
    
    ";
}
?>
