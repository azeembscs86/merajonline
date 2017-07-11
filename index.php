<?php
session_start();
include("dbconnection.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $web_title; ?></title>
        <meta name="description" content="Default Description" />
        <meta name="keywords" content="Magento, Varien, E-commerce" />
        <meta name="robots" content="INDEX,FOLLOW" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

            <!-- 
            <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
            <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
            
            -->
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
                                        <?php include("includes/maincart.php"); ?>

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
                                        <?php include("includes/topmenu.php") ?>

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
                <!-- ================= Main Slider Section ================== -->
                <?php
                include("includes/mainslider.php");
                ?>
                <!-- ================= Top Banners ================== -->
                <?php include("includes/topbanners.php"); ?>
                <!-- ================= Main Section ================== -->
                <section class="main-wrapper">
                    <div class="container">
                        <div class="container-inner">
                            <div class="main-page">
                                <div class="main-container col1-layout">
                                    <div class="main">
                                        <div class="col-main">

                                            <div class="std">
                                                <div class="home-content">
                                                    <div class="producttabs-container">
                                                        <div class="producttabs-title bx-title">
                                                            <div class="bg-title">
                                                                <h2>Our Products</h2>
                                                            </div>
                                                            <ul id="tabs-title">
                                                                <li class="item active" data-type="random">
                                                                    <h3 class="title">Random Products</h3>
                                                                </li>

                                                                <li class="item " data-type="newproduct">
                                                                    <h3 class="title">New Arrivals</h3>
                                                                </li>
                                                            </ul>
                                                            <div class="ajax_loading" style="display:none"> <i class="fa fa-spinner fa-spin"></i> </div>
                                                        </div>

                                                        <div class="producttabs-products random">
                                                            <div class="products-wrap">

                                                                <div class="bx-wrapper">
                                                                    <div class="bx-viewport">
                                                                        <ul class="products-grid even">


                                                                            <?php
                                                                            $latest_wear_product = getLatestWearProductsList();
                                                                            if ($latest_wear_product > 0) {
                                                                                while ($latest_wear_product_list = mysql_fetch_array($latest_wear_product)) {
                                                                                    ?> 
                                                                                    <li class="item first bx-clone">
                                                                                        <div class="item-inner">
                                                                                            <div class="box-images">

                                                                                                <img alt="Product Title 04" src="products/product_color/<?php echo $latest_wear_product_list['product_image']; ?>">

                                                                                                    <ul class="add-to-links">
                                                                                                        <li><a href="product-details?productid=<?php echo $latest_wear_product_list['product_id']; ?>" class="view-detail" data-original-title="Quick View" data-tip="left"><i class="fa fa-search"></i></a>
                                                                                                        </li>

                                                                                                        <li>
                                                                                                            <button onclick="addtocart(<?php echo $latest_wear_product_list['product_id']; ?>,<?php echo $latest_wear_product_list['product_price']; ?>)" class="button btn-cart" type="button" data-original-title="Add to Bag" data-tip="left"><span><span><i class="fa fa-shopping-cart"></i></span></span>
                                                                                                            </button> 
                                                                                                        </li>
                                                                                                    </ul>

                                                                                                    <div class="product-shop">
                                                                                                        <h2 class="product-name">
                                                                                                            <a title="<?php echo $latest_wear_product_list['product_name']; ?>" href="product-details?productid=<?php echo $latest_wear_product_list['product_id']; ?>"><?php echo $latest_wear_product_list['product_name']; ?></a>
                                                                                                        </h2>

                                                                                                        <div class="price-box">

                                                                                                            <p class="special-price">
                                                                                                                <span class="price-label">Special Price</span>
                                                                                                                <span class="price">
                                                                                                                    <?php echo $latest_wear_product_list['product_price']; ?>   PKR         </span>
                                                                                                            </p>

                                                                                                        </div>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </li>

                                                                                    <?php
                                                                                }
                                                                            }
                                                                            ?> 


                                                                        </ul>
                                                                    </div>
                                                                </div>


                                                            </div>

                                                        </div>

                                                        <div class="producttabs-products newproduct" style="display:none">
                                                            <div class="products-wrap">

                                                                <div class="bx-wrapper">
                                                                    <div class="bx-viewport">
                                                                        <ul class="products-grid even">




                                                                            <?php
                                                                            $latest_wear_product = getLatestWearProductsList();
                                                                            if ($latest_wear_product > 0) {
                                                                                while ($latest_wear_product_list = mysql_fetch_array($latest_wear_product)) {
                                                                                    ?> 
                                                                                    <li class="item first bx-clone">
                                                                                        <div class="item-inner">
                                                                                            <div class="box-images">

                                                                                                <img alt="Product Title 04" src="products/product_color/<?php echo $latest_wear_product_list['product_image']; ?>">

                                                                                                    <ul class="add-to-links">
                                                                                                        <li><a href="product-details?productid=<?php echo $latest_wear_product_list['product_id']; ?>" class="view-detail" data-original-title="Quick View" data-tip="left"><i class="fa fa-search"></i></a>
                                                                                                        </li>

                                                                                                        <li>
                                                                                                            <button onclick="addtocart(<?php echo $latest_wear_product_list['product_id']; ?>,<?php echo $latest_wear_product_list['product_price']; ?>)" class="button btn-cart" type="button" data-original-title="Add to Bag" data-tip="left"><span><span><i class="fa fa-shopping-cart"></i></span></span>
                                                                                                            </button> 
                                                                                                        </li>
                                                                                                    </ul>

                                                                                                    <div class="product-shop">
                                                                                                        <h2 class="product-name">
                                                                                                            <a title="<?php echo $latest_wear_product_list['product_name']; ?>" href="product-details?productid=<?php echo $latest_wear_product_list['product_id']; ?>"><?php echo $latest_wear_product_list['product_name']; ?></a>
                                                                                                        </h2>

                                                                                                        <div class="price-box">

                                                                                                            <p class="special-price">
                                                                                                                <span class="price-label">Special Price</span>
                                                                                                                <span class="price">
                                                                                                                    <?php echo $latest_wear_product_list['product_price']; ?>   PKR         </span>
                                                                                                            </p>

                                                                                                        </div>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </li>

                                                                                    <?php
                                                                                }
                                                                            }
                                                                            ?> 




                                                                        </ul>
                                                                    </div>
                                                                </div>


                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="cattab_container">
                                                                    <div id="saxmrxzjhm">
                                                                        <!--<div class="bx-title"><div class="bg-title"><h2></h2></div></div>-->
                                                                        <ul class="cattabs">
                                                                            <li data-catid="9" class="item active">Clothes</li>
                                                                        </ul>
                                                                        <div class="cattabs-products">
                                                                            <div class="category-products mage-cattabs">
                                                                                <div class="bx-wrapper">
                                                                                    <div class="bx-viewport">
                                                                                        <ul class="products-grid odd even">


                                                                                            <?php
                                                                                            $clothes = getClothesProducts();
                                                                                            if ($clothes > 0) {
                                                                                                while ($cloth = mysql_fetch_array($clothes)) {
                                                                                                    ?>        


                                                                                                    <li class="item first item-animate">
                                                                                                        <div class="item-inner">
                                                                                                            <div class="box-images">                                                                                                        
                                                                                                                <img alt="<?php echo $cloth['product_name']; ?>" src="products/product_color/<?php echo $cloth['product_image']; ?>">                                                                                                       
                                                                                                                    <ul class="add-to-links">


                                                                                                                        <li><a href="product-details?productid=<?php echo $cloth['product_id']; ?>" id="fancybox9" class="view-detail" data-tip="left" data-original-title="Quick View"><i class="fa fa-search"></i></a>
                                                                                                                        </li>
                                                                                                                        <li>
                                                                                                                            <button onclick="addtocart(<?php echo $cloth['product_id']; ?>,<?php echo $cloth['product_price']; ?>)" class="button btn-cart" type="button" data-tip="left" data-original-title="Add to Bag"><span><span><i class="fa fa-shopping-cart"></i></span></span>
                                                                                                                            </button>
                                                                                                                        </li>

                                                                                                                    </ul>


                                                                                                            </div>
                                                                                                            <div class="product-shop">
                                                                                                                <h2 class="product-name"> <a title="<?php echo $cloth['product_name']; ?>" href="product-details?productid=<?php echo $cloth['product_id']; ?>"><?php echo $cloth['product_name']; ?></a></h2>




                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price">
                                                                                                                        <span class="price"><?php echo $cloth['product_price']; ?>   PKR</span> </span>

                                                                                                                </div>


                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <?php
                                                                                                }
                                                                                            }
                                                                                            ?>






                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>    

                                                            <div class="col-sm-6">
                                                                <div class="cattab_container">
                                                                    <div id="saxmrxzjhm">
                                                                        <!--<div class="bx-title"><div class="bg-title"><h2></h2></div></div>-->
                                                                        <ul class="cattabs">
                                                                            <li data-catid="9" class="item active">Jewellery</li>
                                                                        </ul>
                                                                        <div class="cattabs-products">
                                                                            <div class="category-products mage-cattabs">
                                                                                <div class="bx-wrapper">
                                                                                    <div class="bx-viewport">
                                                                                        <ul class="products-grid odd even">


                                                                                            <?php
                                                                                            $Jewellerys = getJewelleryProducts();
                                                                                            if ($Jewellerys > 0) {
                                                                                                while ($Jewellery = mysql_fetch_array($Jewellerys)) {
                                                                                                    ?>        


                                                                                                    <li class="item first item-animate">
                                                                                                        <div class="item-inner">
                                                                                                            <div class="box-images">                                                                                                        
                                                                                                                <img alt="<?php echo $Jewellery['product_name']; ?>" src="products/product_color/<?php echo $Jewellery['product_image']; ?>">                                                                                                       
                                                                                                                    <ul class="add-to-links">


                                                                                                                        <li><a href="product-details?productid=<?php echo $Jewellery['product_id']; ?>" id="fancybox9" class="view-detail" data-tip="left" data-original-title="Quick View"><i class="fa fa-search"></i></a>
                                                                                                                        </li>
                                                                                                                        <li>
                                                                                                                            <button onclick="addtocart(<?php echo $Jewellery['product_id']; ?>,<?php echo $Jewellery['product_price']; ?>)" class="button btn-cart" type="button" data-tip="left" data-original-title="Add to Bag"><span><span><i class="fa fa-shopping-cart"></i></span></span>
                                                                                                                            </button>
                                                                                                                        </li>

                                                                                                                    </ul>


                                                                                                            </div>
                                                                                                            <div class="product-shop">
                                                                                                                <h2 class="product-name"> <a title="<?php echo $Jewellery['product_name']; ?>" href="product-details?productid=<?php echo $Jewellery['product_id']; ?>"><?php echo $Jewellery['product_name']; ?></a></h2>




                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price">
                                                                                                                        <span class="price"><?php echo $Jewellery['product_price']; ?>   PKR</span> </span>

                                                                                                                </div>


                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <?php
                                                                                                }
                                                                                            }
                                                                                            ?>






                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>    

                                                            <div class="col-sm-6">
                                                                <div class="cattab_container">
                                                                    <div id="hrzedepnuu">
                                                                        <ul class="cattabs">
                                                                            <li data-catid="42" class="item active">Hand Bags</li>
                                                                        </ul>


                                                                        <div class="cattabs-products">
                                                                            <div class="category-products mage-cattabs">
                                                                                <div class="bx-wrapper">
                                                                                    <div class="bx-viewport">
                                                                                        <ul class="products-grid even odd">
                                                                                            <?php
                                                                                            $hand_bags = getHandBagsProducts();
                                                                                            if ($hand_bags > 0) {
                                                                                                while ($hand_bag = mysql_fetch_array($hand_bags)) {
                                                                                                    ?> 
                                                                                                    <li class="item first item-animate">
                                                                                                        <div class="item-inner">
                                                                                                            <div class="box-images">

                                                                                                                <img alt="Product Title 01" src="products/product_color/<?php echo $hand_bag['product_image']; ?>">

                                                                                                                    <ul class="add-to-links">


                                                                                                                        <li><a href="product-details?productid=<?php echo $hand_bag['product_id']; ?>" id="fancybox1" class="view-detail" data-tip="left" data-original-title="Quick View"><i class="fa fa-search"></i></a>
                                                                                                                        </li>
                                                                                                                        <li>
                                                                                                                            <button onclick="addtocart(<?php echo $hand_bag['product_id']; ?>,<?php echo $hand_bag['product_price']; ?>)" class="button btn-cart" type="button" data-original-title="Add to Bag" data-tip="left"><span><span><i class="fa fa-shopping-cart"></i></span></span>
                                                                                                                            </button> 
                                                                                                                        </li>

                                                                                                                    </ul>


                                                                                                            </div>
                                                                                                            <div class="product-shop">
                                                                                                                <h2 class="product-name"> <a title="<?php echo $hand_bag['product_name']; ?>" href="product-details?productid=<?php echo $hand_bag['product_id']; ?>"><?php echo $hand_bag['product_name']; ?></a></h2>





                                                                                                                <div class="price-box">



                                                                                                                    <p class="special-price">
                                                                                                                        <span class="price-label">Special Price</span>
                                                                                                                        <span class="price">
                                                                                                                            <?php echo $hand_bag['product_price']; ?>   PKR           </span>
                                                                                                                    </p>


                                                                                                                </div>


                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </li>




                                                                                                    <?php
                                                                                                }
                                                                                            }
                                                                                            ?>




                                                                                        </ul>
                                                                                    </div>
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="cattab_container">
                                                                    <div id="saxmrxzjhm">
                                                                        <!--<div class="bx-title"><div class="bg-title"><h2></h2></div></div>-->
                                                                        <ul class="cattabs">
                                                                            <li data-catid="9" class="item active">Watches</li>
                                                                        </ul>
                                                                        <div class="cattabs-products">
                                                                            <div class="category-products mage-cattabs">
                                                                                <div class="bx-wrapper">
                                                                                    <div class="bx-viewport">
                                                                                        <ul class="products-grid odd even">


                                                                                            <?php
                                                                                            $watches = getWatchesProducts();
                                                                                            if ($watches > 0) {
                                                                                                while ($watch = mysql_fetch_array($watches)) {
                                                                                                    ?>        


                                                                                                    <li class="item first item-animate">
                                                                                                        <div class="item-inner">
                                                                                                            <div class="box-images">                                                                                                        
                                                                                                                <img alt="<?php echo $watch['product_name']; ?>" src="products/product_color/<?php echo $watch['product_image']; ?>">                                                                                                       
                                                                                                                    <ul class="add-to-links">


                                                                                                                        <li><a href="product-details?productid=<?php echo $watch['product_id']; ?>" id="fancybox9" class="view-detail" data-tip="left" data-original-title="Quick View"><i class="fa fa-search"></i></a>
                                                                                                                        </li>
                                                                                                                        <li>
                                                                                                                            <button onclick="addtocart(<?php echo $watch['product_id']; ?>,<?php echo $watch['product_price']; ?>)" class="button btn-cart" type="button" data-tip="left" data-original-title="Add to Bag"><span><span><i class="fa fa-shopping-cart"></i></span></span>
                                                                                                                            </button>
                                                                                                                        </li>

                                                                                                                    </ul>


                                                                                                            </div>
                                                                                                            <div class="product-shop">
                                                                                                                <h2 class="product-name"> <a title="<?php echo $watch['product_name']; ?>" href="product-details?productid=<?php echo $watch['product_id']; ?>"><?php echo $watch['product_name']; ?></a></h2>




                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price">
                                                                                                                        <span class="price"><?php echo $watch['product_price']; ?>   PKR</span> </span>

                                                                                                                </div>


                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <?php
                                                                                                }
                                                                                            }
                                                                                            ?>






                                                                                        </ul>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ================= Band Logg Slider ================== -->



                        </div>
                    </div>
                </section>
                <!-- ================= Footer Static ================== -->

                <!-- ================= Footer ================== -->
                <?php include("includes/footer.php"); ?>
            </div>
        </div>


    </body>

</html>