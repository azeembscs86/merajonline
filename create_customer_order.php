<?php
session_start();
include("dbconnection.php");

$user_id = $_SESSION['user_loged_id'];
$result=getLastAddedOrder();
$orders=  mysql_fetch_array($result);

if($orders['order_number']>0){
$order_number=$orders['order_number']+1;
$_SESSION['latestordernumber'] = $order_number;
addNewOrder($user_id,$order_number);

$latest_order_id = getLatestOrderId();
$latest_order_resultt = mysql_fetch_array($latest_order_id);
// New Order ID
$new_order_id = $latest_order_resultt['order_id'];

    while (list ($key, $val) = each ($_SESSION['cartproductid']))
                    { 
                    
                    // Product Price of each product
                    $product_price = getProductDetail($val);
                    $product_price_result = mysql_fetch_array($product_price);
                    
                    // Add new customer product 
                    addNewCustomerOrder($new_order_id,$val,$_SESSION['cartproductquantity'][$key],$_SESSION['cart_product_size'][$key],$_SESSION['cart_product_color'][$key],$product_price_result['product_price']);

                    }
             


header("location:order_email_send.php");

}


?>