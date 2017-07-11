<?php

session_start();
            unset($_SESSION['loged_email']);  
            unset($_SESSION['user_loged_id']);           
            unset($_SESSION['loged_user_name']); 
            header("location:index.php"); 

?>
