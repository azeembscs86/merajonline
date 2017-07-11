<?php
session_start();
include("dbconnection.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $web_title;?> Payment Receipt</title>
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
    
    <script>

    // Add To Cart 
   
   function addtocart(prodid,prodprice)
   {            
                     
                        xhr =  new XMLHttpRequest();
			xhr.open('GET','addtocartpage.php?productid='+prodid+'&productprice='+prodprice,true);
			xhr.send();
			
			xhr.onreadystatechange=function()
			{
				if(xhr.readyState == 4 && xhr.status == 200)
				{
					
				}
			}
   }
   
   

    </script>
    
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
                                        <div class="col-lg-8"><div class="cart display-single-price">
                                            <div class="page-title title-buttons">
                                                <h1>SUCCESS</h1>
                                            </div>
                                            <form action="#" method="post">
                                               
                                                
                                                <h3>WE'RE PROCESSING YOUR ORDER RIGHT NOW! </h3>
                                                <hr>
                                                <?php
                                                    $order_number = getUserOrderNumber();
                                                    $order_number_result = mysql_fetch_array($order_number);
                                                    
                                                    $send_to_name = getUserDetails($_SESSION['user_loged_id']);
                                                    $send_to_name_result = mysql_fetch_array($send_to_name);
                                                ?>
                                                <p><strong>Order number # </strong> <?php echo $order_number_result['order_number'] ?> , <?php echo date("Y-m-d"); ?> , will be sent to  <?php echo $send_to_name_result['firstname'] ?> <?php echo $send_to_name_result['lastname'] ?></p>
                                                
                                                
                                                <p><strong>Address :</strong> <?php echo $send_to_name_result['shippment_address']; ?> </p>
                                                    
                                                <p><strong>Payment Method: </strong>Cash On Delivery </p>
                                                <p><strong>Shipping Method:</strong> Universal Shipping Matrix </p>
                                                <hr>
                                                <h3>ITEMS</h3>
                                                <hr>
                                                <p><strong>Total Items :</strong> <?php echo sizeof($_SESSION['cartproductid']); ?></p>
                                                 <p><strong>SUBTOTAL AMOUNT : </strong><?php echo $_SESSION['totalamountproduct']; ?> PKR </p>
                                                <h4>Free Delivery</h4>
                                                <p><strong>Grand Total :</strong> <?php echo $_SESSION['totalamountproduct']; ?> PKR </p>
                                                <hr>
                                                <a href="index.php">Add More Items</a>
                                     
                                                  
                                            </form>
        
                                                </div></div>
                                                <div class="col-lg-4">
        
    <?php 
                                        include("includes/sidebarcart.php");
                                        
                                         // Empty Cart
                                                unset($_SESSION['cartproductid']);
                                                 unset($_SESSION['cartproductquantity']);
                                                 unset($_SESSION['cart_product_color']);
                                                 unset($_SESSION['cart_product_size']);
                                                 $_SESSION['totalamountproduct'] = 0;
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
            </section>
                
            <!-- ================= Footer Static ================== -->
            
            <!-- ================= Footer ================== -->
            <?php include("includes/footer.php");?>
        </div>
    </div>
    

</body>

</html>