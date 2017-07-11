<?php
session_start();
include('dbconnection.php');

        
    

if(isset($_SESSION['cartproductid']))
    {
    $total_amount_updated = 0;
        $_SESSION['totalamount']=0;
        if(sizeof($_SESSION['cartproductid']) != 0)
                {
                    while (list ($key, $val) = each ($_SESSION['cartproductid']))
                    { 
                   
                    $product_new_update=  getProductDetail($val);
                    $product_price_new = mysql_fetch_array($product_new_update);
                    $total_amount_updated += $product_price_new['product_price']*$_SESSION['cartproductquantity'][$key];


                    }
                    $_SESSION['totalamountproduct'] = $total_amount_updated;
                    echo $total_amount_updated," PKR";
                }
        else
        {
             echo "0.00 PKR";
        }
    
    }else
        {
             echo "0.00 PKR";
        }
?>