<?php
session_start();
$_SESSION['totalamountproduct'] = " 0.00";
if(sizeof($_SESSION['cartproductid']) != 0)
                {
                    while (list ($key, $val) = each ($_SESSION['cartproductid']))
                    { 
                        unset($_SESSION['cartproductid'][$key]);
                        unset($_SESSION['cartproductquantity'][$key]);
                        unset($_SESSION['cart_product_color'][$key]);
                        unset($_SESSION['cart_product_size'][$key]);
                        header('Location: cart_page');
                    }
                }else
                    {
                          header('Location: cart_page');
                    }
?>