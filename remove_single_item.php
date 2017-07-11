<?php
session_start();
include('dbconnection.php');

$removeitemnum = $_GET['removeitemnum'];

$query = getProductDetail($_SESSION['cartproductid'][$removeitemnum]);
$result = mysql_fetch_array($query);

$_SESSION['totalamountproduct'] -= $result['product_price']*$_SESSION['cartproductquantity'][$removeitemnum];
 



unset($_SESSION['cartproductid'][$removeitemnum]);
unset($_SESSION['cartproductquantity'][$removeitemnum]);
unset($_SESSION['cart_product_color'][$removeitemnum]);
unset($_SESSION['cart_product_size'][$removeitemnum]);


//unset($_SESSION['min-cart-item'][$removeitemnum]);
//unset($_SESSION['cart-item-display'][$removeitemnum]);
header('Location: cart_page');
?>
