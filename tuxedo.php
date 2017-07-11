<?php
session_start();
include("dbconnection.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $web_title;?> </title>
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
    

   // Dynamic Change List Of Products
   function NoOfItemslist(nooflist)
   {
                        xhr =  new XMLHttpRequest();
			xhr.open('GET','no_of_item_display.php?tuxedolist='+nooflist,true);
			xhr.send();
			
			xhr.onreadystatechange=function()
			{
				if(xhr.readyState == 4 && xhr.status == 200)
				{
					document.getElementById("changedynamicitems").innerHTML = xhr.responseText;
				}
			}
   }


// Sorting List

 function Sorting(sortingtype)
   {            
                     var   totaldisplayitemnum = document.getElementById("nolistcount").value;
                     
                        xhr =  new XMLHttpRequest();
			xhr.open('GET','sorting-item-page.php?sortingtypeval='+sortingtype+'&totalitemdisplay='+totaldisplayitemnum+'&tuxedosorting=tuxedoproduct',true);
			xhr.send();
			
			xhr.onreadystatechange=function()
			{
				if(xhr.readyState == 4 && xhr.status == 200)
				{
					document.getElementById("changedynamicitems").innerHTML = xhr.responseText;
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
                                    <?php include("includes/maincart.php");?>

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
            <main class="main-wrapper">
            <div class="page">
                <div class="container">
                    <div class="container-inner">
                        <section class="main-page">

                            <div class="main-container col2-left-layout">
                                <div class="main">

                                    <div class="row">
                                        
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="col-main">

                                                <div class="category-products">
                                                    <div class="toolbar">


                                                         <?php
                                                $latest_wear_product=getTuxedoProducts();
                                                 $latest_wear_product_list=  mysql_fetch_array($latest_wear_product);
                                                 if($latest_wear_product_list['product_id'] != '')
                                                 { ?>
                                                        <div class="sorter">

                                                            <div class="sort-by hidden-xs hidden-sm">
                                                                <label>Sort By</label>
                                                                <select onchange="Sorting(this.value)">
                                                                    <option selected="selected" value="">
                                                                        Select </option>
                                                                    <option value="productname">
                                                                        Name </option>
                                                                    <option value="productprice">
                                                                        Price </option>
                                                                    
                                                                </select>
                                                                <a title="Set Descending Direction" href="#"><img class="v-middle" alt="Set Descending Direction" src="images/i_asc_arrow.gif">
                                                                </a>
                                                            </div>

                                                            <div class="limiter hidden-xs hidden-sm">
                                                                <label>Show</label>
                                                                <select id="nolistcount"  onchange="NoOfItemslist(this.value)">
                                                                    <option selected="selected" value="10">
                                                                        10 </option>
                                                                    <option value="20">
                                                                        20 </option>
                                                                    <option value="30">
                                                                        30 </option>
                                                                    
                                                                    <option value="900000000000000">
                                                                        All </option>
                                                                </select> per page </div>
                                                        </div>
                                                 <?php }else{ ?> <center><h1>No Product Found</h1></center> <?php } ?>

                                                        
                                                    </div>

                                                    <div id="changedynamicitems">
                                                    <ul class="products-grid row even">
                                                        
                                                        
                                                         <?php
                                                 $latest_wear_product=getTuxedoProducts();
                                                 if($latest_wear_product>0)
                                                 {
                                                     while($latest_wear_product_list=  mysql_fetch_array($latest_wear_product))
                                                     {
                                                ?> 
     
                                                        <li class="item col-md-3 col-sm-6 col-sms-6 col-smb-12 ">
                                                            <div class="item-inner">
                                                                <div class="box-images">
                                                                    <a class="product-image" title="Product Title 02" href="#">
                                                                        <img alt="Product Title 02" src="products/product_color/<?php echo $latest_wear_product_list['product_image']; ?>">
                                                                    </a>
                                                                    <ul class="add-to-links">

                                                                        
                                                                        <li><a href="product-details?productid=<?php echo $latest_wear_product_list['product_id']; ?>" class="view-detail" data-original-title="Quick View" data-tip="left"><i class="fa fa-search"></i></a>
                                                                        </li>

                                                                        <li>
                                                                            <button onclick="addtocart(<?php echo $latest_wear_product_list['product_id']; ?>,<?php echo $latest_wear_product_list['product_price']; ?>)" class="button btn-cart" type="button" data-original-title="Add to Bag" data-tip="left"><span><span><i class="fa fa-shopping-cart"></i></span></span>
                                                                                </button> 
                                                                        </li>

                                                                    </ul>
                                                                    
                                                                <div class="product-shop">
                                                                    <h2 class="product-name"><a title="Product Title 02" href="#"> <?php echo $latest_wear_product_list['product_name']; ?></a></h2>



                                                                    <div class="price-box">

                                                                       

                                                                        <p class="special-price">
                                                                            <span class="price-label">Special Price</span>
                                                                            <span class="price">
                    <?php echo $latest_wear_product_list['product_price']; ?> PKR               </span>
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

                                                    <div class="toolbar-bottom">
                                                        <div class="toolbar">


                                                            

                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>
            <!-- ================= Footer Static ================== -->
            
            <!-- ================= Footer ================== -->
            <?php include("includes/footer.php");?>
        </div>
    </div>
    

</body>

</html>