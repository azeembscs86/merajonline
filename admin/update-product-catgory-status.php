<?php
session_start();
if(isset($_SESSION['admin_email']))
{
    include("dbconnection.php");
    $product_id=  mysql_real_escape_string($_REQUEST['id']);
    $product_status=mysql_real_escape_string($_REQUEST['status']);
    updateProductCatgoryStatus($product_id,$product_status);
    header("location:product_catogries.php");
}  else {
   header("location:index.php");  
}
?>