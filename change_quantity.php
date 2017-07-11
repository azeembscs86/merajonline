<?php
session_start();
$quantity_value = $_GET['quantity_value'];
$quantity_key = $_GET['quantity_key'];
$product_current_price = $_GET['product_current_price'];

$_SESSION['cartproductquantity'][$quantity_key] = $quantity_value;



?>

<span class="price" ><?php echo $quantity_value*$product_current_price ?> PKR</span>
                                                              