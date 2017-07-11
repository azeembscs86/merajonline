<?php
session_start();
$size_value = $_GET['size_value'];
$size_key = $_GET['size_key'];
$_SESSION['cart_product_size'][$size_key] = $size_value;
?>

