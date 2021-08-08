<?php 
include "php/nav.php";
include "php/connect.php";
error_reporting(0);
session_start();
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
            <div class="col-lg-9">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Price</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
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
                                 <form action='manage_cart.php' method='POST'>
                                 <td>".$i."</td>
                                 <td>".$value['item_name']."</td>
                                 <td>".$value['item_price']."</td>
                                 <td><input type='text' name='item_quantity' class='text-center' placeholder='Enter Quantity'></td>
                                 ";
                                 
                                $x = $value['item_quantity'] + $_POST['item_quantity'] - $value['item_quantity'] ;


                                 echo "                          
                                 
                                 <td><button name='remove_item' class='btn btn-outline-danger btn-sm'>Remove</button></td>
                                 <input type='hidden' name='item_name' value='".$value['item_name']."'>
                                 <input type='hidden' name='item_quantity' value='".$value['item_quantity']."'>
                                 </form>
                                 </tr>
                                 "   ;
                                }
                            }    
                        ?>
                    
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                <h4>Total</h4>
                <h5 class="text-right"><?php echo $total;?></h5>
                <form action="checkout.php" method="POST">
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" checked name="optradio">COD
                        </label>
                    </div>  
                                        
                    <br><br> 
                   <button class="btn btn-primary btn-block" type="submit" name="checkout">Checkout</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>