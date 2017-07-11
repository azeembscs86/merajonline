<?php
session_start();
if($_POST['submit'])
{
    include("dbconnection.php");
    $product_id    =  mysql_real_escape_string($_REQUEST['product_id']);
    $clothing_type_id    =  mysql_real_escape_string($_REQUEST['clothing_type_id']);
    $product_name    =  mysql_real_escape_string($_POST['product_name']);
    $product_price   =  mysql_real_escape_string($_POST['product_price']);
    $product_quantity  =  mysql_real_escape_string($_POST['product_quantity']);
    $product_description   =  mysql_real_escape_string($_POST['product_description']);    
    $product_gender  =  mysql_real_escape_string($_POST['product_gender']);   
    $product_code   =  mysql_real_escape_string($_POST['product_code']);
    $product_meta_tag_title =  mysql_real_escape_string($_POST['product_title']);  
    $meta_tag_keyword  =  mysql_real_escape_string($_POST['meta_tag_keyword']); 
    $meta_tag_description  =  mysql_real_escape_string($_POST['meta_tag_description']); 
    $product_seo=  str_replace(" ","-", strtolower($product_name));    
    updateProduct($product_id,$clothing_type_id,$product_name,$product_gender,$product_price,$product_quantity,$product_code,$product_description,$meta_tag_keyword,$meta_tag_description,$product_meta_tag_title,rtrim($product_seo,"-"));            
    header("location:products.php");
}  else {
    header("location:edit-product.php?err=Unknown Error Occured please try again&id=$product_id");
}
?>