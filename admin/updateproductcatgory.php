<?php
  session_start();
  if(isset($_POST['submit']))
  {
    include("dbconnection.php");
    $clothing_type_id         =  mysql_real_escape_string($_REQUEST['clothing_type_id']);
    $catogery_description   =  mysql_real_escape_string($_REQUEST['catogery_description']);
    $Clothing_type_name       =  mysql_real_escape_string($_REQUEST['Clothing_type_name']);   
    $clothing_type_title      =  mysql_real_escape_string($_REQUEST['clothing_type_title']);
    $meta_keywords            =  mysql_real_escape_string($_REQUEST['meta_keywords']);
    $meta_description         =  mysql_real_escape_string($_REQUEST['meta_description']);   
    $clothing_seo_name        =  str_replace(" ","-", strtolower($Clothing_type_name));    
    $clothing_seo_name=rtrim($clothing_seo_name,"-");
    updateProductCatgoryType($clothing_type_id,$Clothing_type_name,$clothing_seo_name,$clothing_type_title,$meta_keywords,$meta_description,$catogery_description);            
    header("location:product_catogries.php?success");         
  }else
  {
    header("location:add-new-product-catgory.php");
  }
?>