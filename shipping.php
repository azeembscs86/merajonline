<?php
session_start();
include("dbconnection.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $web_title;?> Shiping</title>
    <meta name="description" content="Default Description" />
    <meta name="keywords" content="Magento, Varien, E-commerce" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <!-- ================= Favicon ================== -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <!--[if lt IE 7]>
    <script type="text/javascript">
    //<![CDATA[
        var BLANK_URL = 'js/blank.html';
        var BLANK_IMG = 'js/spacer.gif';
    //]]>
    </script>
    <![endif]-->
    <!-- ================= Style Sheets ================== -->
    <!-- fancybox CSS -->
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="all" />
    <!-- Bx Slider CSS -->
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="all" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" media="all" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all" />
    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="all" />
    <!-- Ajaxcart CSS -->
    <link rel="stylesheet" type="text/css" href="css/ajaxcart.css" media="all" />
    <!-- Megamenu CSS -->
    <link rel="stylesheet" type="text/css" href="css/megamenu.css" media="all" />
    <!-- Vmegamenu CSS -->
    <link rel="stylesheet" type="text/css" href="css/vmegamenu.css" media="all" />
    <!-- Testimonial CSS -->
    <link rel="stylesheet" type="text/css" href="css/testimonial.css" media="all" />
    <!-- Imageslider CSS -->
    <link rel="stylesheet" type="text/css" href="css/imageslider.css" media="all" />
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="css/styles.css" media="all" />
    <!-- Mobileresponsive CSS -->
    <link rel="stylesheet" type="text/css" href="css/mobileresponsive.css" media="all" />
  
    
</head>

<body class=" cms-index-index cms-homepage2">
    <!-- ================= Main Wrapper ================== -->
    <div class="wrapper">
        <!-- ================= No Script ================== -->
        <noscript>
            <div class="global-site-notice noscript">
                <div class="notice-inner">
                    <p>
                        <strong>JavaScript seems to be disabled in your browser.</strong>
                        <br /> You must have JavaScript enabled in your browser to utilize the functionality of this website. </p>
                </div>
            </div>
        </noscript>
        <div class="page">
            <!-- ================= Header Wrapper ================== -->
            <header class="header-wrapper">
                <!-- ================= Header ================== -->
                <?php include("includes/header.php"); ?>
                <div class="header-menu-bar">
                    <div class="container">
                        <div class="container-inner">
                            <!-- ================= Menu Toolbar ================== -->
                            <div class="menu-toolbar">
                                <div class="search-cart-top">
                                    <!-- ================= Header Top Links ================== -->
                                    <?php
                                    include("includes/user-settings.php");
                                    ?>
                                    <!-- ================= Header Cart Mini================== -->
                                    <?php  include("includes/maincart.php");?>

                                </div>
                                <!-- ================= Nav Container ================== -->
                                <nav class="nav-container">
                                    <!-- ================= Menu Mobile ================== -->
                                    <div class="nav-mobilemenu-container visible-xs">
                                        <?php 
                                        include("includes/mainnav.php");
                                        ?>
                                    </div>
                                    <!-- ================= Nav Megamenus ================== -->
                                    <?php include("includes/topmenu.php")?>

                                </nav>
                                <div class="nav-vcontainer hidden-xs hidden-sm">
                                    <div class="nav-inner">
                                        <div class="vmegamenu-title">
                                            <h2><i class="fa fa-bars"></i></h2>
                                        </div>
                                        <?php 
                                        include("includes/leftcatogries.php");
                                        ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </header>
            <!-- ================= Main Section ================== -->
            <?php
                    $shipping_user_address = getUserDetails($_SESSION['user_loged_id']);
                    $shipping_user_result = mysql_fetch_array($shipping_user_address);
                    
                    $shipping_city = getAllCities($shipping_user_result['city_id']);
                    $shipping_city_result = mysql_fetch_array($shipping_city);
            ?>
              <section class="main-wrapper">
                <div class="container">
                    <div class="container-inner">
                        <div class="main-page">
                            <div class="main-container col1-layout">
                                <div class="main">
                                    <div class="col-main">
                                        <div class="cart display-single-price">
                                            <div class="col-lg-8"><div class="page-title title-buttons">
                                                <h1>SHIPPING</h1>
                                            </div>
                                            <form action="#" method="post">
                                               
                                                
                                                <h3><strong>Shipping Time:</strong> 1 - 5 days</h3>
                                             <table id="shopping-cart-table" class="cart-table data-table">
                                                    <thead>
                                                        <tr>
                                                            

                                                            <th rowspan="1">Product name</th>

                                                            

                                                            <th rowspan="1" class="a-center">
                                                                Qty

                                                            </th>
                                                             
                                                              

                                                            <th class="a-center cart-total-head" colspan="1">
                                                                <!--                            <div class="cart-total-placeholder">-->
                                                                Subtotal
                                                                <!--                            </div>-->
                                                            </th>

                                                           

                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        
                                              
                                                    </tfoot>
                                                    <tbody>
                                                        
                                                       <!-------- Show Cart Items -------->
                                                       
                                                       <?php
                                                       $counter = 0;
                                                       while (list ($key, $val) = each ($_SESSION['cartproductid'])) { 
                                                       $counter++;
                                                       $get_product_details = getProductDetail($val);
                                                       $get_product=  mysql_fetch_array($get_product_details);
                                                       ?>
                                                        
                                                        <tr>
                                                           

                                                            <td class="product-cart-info">

                                                                <a href="#" title="Remove Item" class="btn-remove btn-remove2">Remove Item</a>

                                                                <h2 class="product-name">
                    <a href="#"><?php echo $get_product['product_name']; ?></a>
                </h2>

                                                            </td>


                                                            
                                                            <!-- inclusive price starts here -->
                                                            <td class="product-cart-actions" data-rwd-label="Qty">
                                                                <span class="price"><?php echo $_SESSION['cartproductquantity'][$key]; ?></span>
                                                                
                                                               

                        

                                                            </td>
                                                            
                                                            <!-- Product Size -->
                                                            
                                                            
                                                            <!-- Product Color -->
                                                            

                                                            <!--Sub total starts here -->
                                                            <td class="product-cart-total" data-rwd-label="Subtotal">
                                                                <span class="cart-price" id="change_quantity<?php echo $counter; ?>">
        
                                                <span class="price" ><?php echo $get_product['product_price']*$_SESSION['cartproductquantity'][$key] ?> PKR</span>
                                                                </span>
                                                            </td>
                                                            
                                                            
                                                        </tr>
                                                       
                                                        <?php
                                                       }
                                                       ?>

                                                    </tbody>
                                                </table>
                                                
                                                
                                                <h4 style="float:right">SUBTOTAL AMOUNT :- <?php echo $_SESSION['totalamountproduct']; ?> PKR</h4>

                                                <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout btn-checkout" onclick="window.location='create-customer-order';"><span><span>COMPLETE YOUR ORDER</span></span>
                                                                </button>
                                                  
                                            </form></div>
<div class="col-lg-4">
        
    <?php 
                                        include("includes/sidebarcart2.php");
                                        ?>
    </div>
                                                    
                                                </div>
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                
            <!-- ================= Footer Static ================== -->
            
            <!-- ================= Footer ================== -->
            <?php include("includes/footer.php");?>
        </div>
    </div>
    

</body>

</html>