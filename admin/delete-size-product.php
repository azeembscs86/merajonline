<?php
session_start();
include("dbconnection.php");
$product_size_id  =  mysql_real_escape_string($_REQUEST['id']);

$product_id  =  mysql_real_escape_string($_REQUEST['product_idd']);

deleteProductSize($product_size_id);
header("location:view-product-detail.php?id=$product_id");
?>