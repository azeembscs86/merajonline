<?php
session_start();
if(isset($_SESSION['cartproductid']))
    {
        echo sizeof($_SESSION['cartproductid']);
    }else
        {
            echo '0';
        }

?>
