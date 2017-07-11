<?php
session_start();
$color_value = $_GET['color_value'];
$color_key = $_GET['color_key'];
$_SESSION['cart_product_color'][$color_key] = $color_value;
?>

