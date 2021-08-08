<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST")
{
    if (isset($_POST['add_to_cart'])) 
{
      if (isset($_SESSION['cart'])) 
      {
        $myitems = array_column($_SESSION['cart'],'item_name'); 
        if (in_array($_POST['name'],$myitems)) 
        {
        
            echo "<script>
                alert('Item Is Already Added');
                window.location.href='cart.php';
                </script>";
               
        }
        else
        {
    
            $count= count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('item_name'=> $_POST['name'],'item_price'=> $_POST['price'],'item_quantity'=> 1);
            echo "<script> 
                    alert('Item Is Successfully Added');
                    window.location.href='cart.php';
                    </script>";
        }
        
    }
    
      else
      {
        $_SESSION['cart'][0]=array('item_name'=> $_POST['name'],'item_price'=> $_POST['price'],'item_quantity'=> 1);
       
        echo "<script>
                alert('Item Is Successfully Added');
                window.location.href='cart.php';
                </script>";
        
      }
}

    if (isset($_POST['remove_item'])) 
    {
     foreach($_SESSION['cart'] as $key => $value)
     {
        if($value['item_name']==$_POST['item_name'])
        {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart']=array_values($_SESSION['cart']);
            echo"
            <script>
            alert('Item Removed');
            window.location.href='cart.php';
            </script>
            ";
        }
     }
    }

}
print_r($_SESSION['cart']);
?>