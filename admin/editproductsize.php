<?php
session_start();
include("dbconnection.php");
$product_size_id  =  mysql_real_escape_string($_REQUEST['product_size_id']);
$product_size_name  =  mysql_real_escape_string($_REQUEST['product_size_name']);
$product_id  =  mysql_real_escape_string($_REQUEST['product_id']);

updateProductSizeName($product_size_id,$product_size_name);
header("location:view-product-detail.php?id=$product_id");
?>