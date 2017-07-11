<?php
session_start();
include('dbconnection.php');


$productid = $_GET['productid'];
    
    // Product Detail Add To Cart Button
    if(isset($_GET['productcolor']) && isset($_GET['productsize']))
        {
            $product_quantity = $_GET['productquantity'];
            $product_color = $_GET['productcolor'];
            $product_size = $_GET['productsize'];
            $already_product_add_check = false;
            
            // Already Product added check By All Check
            while (list ($key, $val) = each ($_SESSION['cartproductid']))
             { 
                  if($productid == $val && $_SESSION['cartproductquantity'][$key] == $product_quantity && $_SESSION['cart_product_color'][$key] == $product_color && $_SESSION['cart_product_size'][$key] == $product_size)
                 {
                      
                     $already_product_add_check = true;
                }   
            }
            
            
            
             
             if($already_product_add_check == true)
                 {
                     // Already Product Added
                 }else
                     {
                     array_push($_SESSION['cartproductid'],$productid);
                    array_push($_SESSION['cartproductquantity'],$product_quantity);
                    array_push($_SESSION['cart_product_color'],$product_color);
                    array_push($_SESSION['cart_product_size'],$product_size);
                       
                     }
         
        }else
            {
                $productprice = $_GET['productprice'];
                $alreadyproductadded = false;

                $_SESSION['totalprice'] += $productprice;

                // Already Product added check
                while (list ($key, $val) = each ($_SESSION['cartproductid']))
                { 
                 if($productid == $val)
                 {
                     $alreadyproductadded = true;
                 }   
                }

             if($alreadyproductadded == false)
             {
                  array_push($_SESSION['cartproductid'],$productid);
                  array_push($_SESSION['cartproductquantity'],1);
                  
                  $product_color = getProductColorDetails($productid);
                  $productcolordetails=mysql_fetch_array($product_color);
                  
                  array_push($_SESSION['cart_product_color'],$productcolordetails['product_color_name']);
                  
                  $product_size = getProductSizeDetails($_REQUEST['productid']);
                  $productsizedetails=mysql_fetch_array($product_size);
                  
                  array_push($_SESSION['cart_product_size'],$productsizedetails['product_size_name']);
             }
             
             
            }
?>