<?php
session_start();
include("dbconnection.php");
$product_id = $_REQUEST['productid'];              
$product_details = getProductDetail($product_id);
$product=  mysql_fetch_array($product_details);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $web_title;?></title>
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
    <link rel="stylesheet" type="text/css" href="css/cloudzoom.css" media="all" />
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
			xhr.open('GET','no_of_item_display.php?allitemshow='+nooflist,true);
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
			xhr.open('GET','sorting-item-page.php?sortingtypeval='+sortingtype+'&totalitemdisplay='+totaldisplayitemnum+'&newproductsorting=newproduct',true);
			xhr.send();
			
			xhr.onreadystatechange=function()
			{
				if(xhr.readyState == 4 && xhr.status == 200)
				{
					document.getElementById("changedynamicitems").innerHTML = xhr.responseText;
				}
			}
   }
   
   // Add To Cart 
   
   function addtocartdetail(prodid)
   {            
   
                     var product_colorr=document.getElementById('select_2').value;
                        var product_sizee=document.getElementById('select_1').value;
                                            
                    var product_size = document.getElementById("select_1");
                    var product_color = document.getElementById("select_2");
                    var product_quantity = document.getElementById("qty").value;
                    var prodcolor = product_color.options[product_color.selectedIndex].value;
                    var prodsize = product_size.options[product_size.selectedIndex].value;
                    
                     xhr =  new XMLHttpRequest();
			xhr.open('GET','addtocartpage.php?productid='+prodid+'&productquantity='+product_quantity+'&productcolor='+prodcolor+'&productsize='+prodsize,true);
			xhr.send();
			document.getElementById('add_to_cart').style.display='block';
			
			xhr.onreadystatechange=function()
			{
				if(xhr.readyState == 4 && xhr.status == 200)
				{
					
				}
			}
                    
                        setTimeout(function(){ update_total_cart_amount(); }, 1000);
                        setTimeout(function(){ update_total_cart2(); }, 2000);
                        setTimeout(function () {document.getElementById('add_to_cart').style.display='none'}, 2000); return false
                        
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
            <!-- ================= Inner Section ================== -->
              <?php
                
              ?>
            
            <main class="main-wrapper">
                <div class="container">
                    <div class="container-inner">
                        <section class="main-page">
                            <div class="main-container col2-right-layout">
                                <div class="main">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                            <div class="col-main">
                                                <div class="breadcrumbs">
                                                    <ul>
                                                        <li class="home">
                                                            <a href="#" title="Go to Home Page">Home</a>
                                                            <span>/ </span>
                                                        </li>
                                                        <li class="product">
                                                            <strong><?php echo $product['product_name']; ?></strong>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div id="messages_product_view"></div>
                                                <div class="product-view">
                                                    <div class="product-essential">
                                                               <div class="row">
                                                                <div class="product-img-box col-sm-12 col-md-5 col-sms-12 col-sm-12 col-smb-12">
                                                                    <p class="product-image">
                                                                        <!-- images for lightbox -->
                                                                        <a href="products/product_color/<?php echo $product['product_image']; ?>" class="lightbox" rel="lightbox[rotation]"></a>
                                                                        <!--++++++++++++-->

                                                                        <a href="products/product_color/<?php echo $product['product_image']; ?>" class="cloud-zoom" id="cloudzoom">
                                                                            <img src="products/product_color/<?php echo $product['product_image']; ?>" alt="Product Title 01" title="Product Title 01" /> </a>
                                                                    </p>
                                                                    <div class="more-views thumbnail-container horizontal">
                                                                        <h2>More Views</h2>
                                                                        <ul class="bxslider">
                                                                        <?php
                                                         $product_colors=getProductColorsByProductId($product_id);
                                                         if($product_colors>0)
                                                         {
                                                            while($product_color=  mysql_fetch_array($product_colors))
                                                                                {
                                                                            ?>
 <li class="thumbnail-item">
<a href="products/product_color/<?php echo $product['product_image']; ?>" class="cloud-zoom-gallery" title="" name="" rel="useZoom: 'cloudzoom', smallImage: 'products/product_color/<?php echo $product_color['product_color_image']; ?>'">

                                  <img src="products/product_color/<?php echo $product_color['product_color_image']; ?>" alt="" />
                                                                                </a>
                                                                            </li>
                                                                            <?php        
                                                                                }
                                                                            }
                                                                            ?>
                                                                        
                                                                        
                                                                        
                                                                            
                                                                            
                                                                            

                                                                        </ul>
                                                                    </div>

                                                                </div>

                                                                <div class="col-sm-12 col-md-7 col-sms-12 col-sm-12 col-smb-12">
                                                                    <div class="product-shop">
                                                                        <div class="product-name">
                                                                            <h1><?php echo $product['product_name']; ?></h1>
                                                                        </div>
                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div class="rating" style="width:70%"></div>
                                                                            </div>
                                                                            
                                                                        </div>

                                                                        <p class="availability in-stock">Availability: <span>In stock</span>
                                                                        </p>



                                                                        <div class="price-box">

                                                                           

                                                                            <p class="special-price">
                                                                                <span class="price-label">Special Price</span>
                                                                                <span class="price">
                    <?php echo $product['product_price']; ?> PKR                </span>
                                                                            </p>


                                                                        </div>


                                                                        <div class="short-description">
                                                                            <!--<h2>Quick Overview</h2>-->
                                                                            <div class="std"><?php echo $product['prduct_description']; ?></div>
                                                                        </div>





                                                                        <div class="product-options" id="product-options-wrapper" style="display: none;">



                                                                            <dl>
                                                                                
                                                                                
                                                                                
                                                                                <dt><label class="required"><em>*</em>Color</label></dt>
                                                                                <dd>
                                                                                    <div class="input-box">
                                                                                        <select name="options[2]" id="select_2" class=" required-entry product-custom-option" title="" onchange="opConfig.reloadPrice()">
                                                                                            <option value="select">-- Please Select --</option>
                                                                                            <?php
                                                                                            // Get Color Of Products
                                                                                            $product_color = getProductColorDetails($_REQUEST['productid']);

                                                                                            while($productcolordetails=mysql_fetch_array($product_color)){
                                                                                            ?>
                                                                                            <option value="<?php echo  $productcolordetails['product_color_name']; ?>"><?php echo  $productcolordetails['product_color_name']; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </dd>

                                                                                <dt><label class="required"><em>*</em>Size</label></dt>
                                                                                <dd class="last">
                                                                                    <div class="input-box">
                                                                                        <select name="options[1]" id="select_1" class=" required-entry product-custom-option" title="" onchange="opConfig.reloadPrice()">
                                                                                            <option value="select">-- Please Select --</option>
                                                                                                                                                               <?php
                                                                                            // Get Size Of Products
                                                                                            $product_size = getProductSizeDetails($_REQUEST['productid']);

                                                                                            while($productsizedetails=mysql_fetch_array($product_size)){
                                                                                            ?>
                                                                                            <option value="<?php echo  $productsizedetails['product_size_name']; ?>"><?php echo  $productsizedetails['product_size_name']; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </dd>
                                                                            </dl>


                                                                            
                                                                        </div>

                                                                        <div class="product-options-bottom">



                                                                            <div class="price-box">

                                                       

                                                                                <p class="special-price">
                                                                                    <span class="price-label">Special Price</span>
                                                                                    <span class="price">
                <?php echo $product['product_price']; ?> PKR                </span>
                                                                                </p>


                                                                            </div>

                                                                            <div class="add-to-cart">
                                                                                <div class="input-content">
                                                                                    <label for="qty">Quantity</label>
                                                                                    <div class="box-qty">
                                                                                        <input type="number" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty" />
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                                <button type="button" onclick="addtocartdetail(<?php echo $product['product_id']; ?>)" title="Add to Cart" class="button btn-cart"><span><span>Add to Cart</span></span>
                                                                                </button>
                                                                            </div>


                                                                           
                                                                            
                                                                            <div class="addthis_native_toolbox"></div>
                                                                        </div>



                                                                    </div>
                                                                </div>
                                                            </div>
                                                      



                                                    </div>

                                                    
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                            <div class="col-right sidebar">
                                                <div class="more-products">
        <h2>More products from</h2>
        <div class="clearBoth"></div><br>
        <div class="row"> 
        <?php 
        $category_id=$product['catogry_id'];
        $similar_products=getProductsByCategories($category_id);
        if($similar_products>0)
        {
            while($similar_product=  mysql_fetch_array($similar_products))
            {
        ?>
            <div class="col-lg-12">        
           <img src="products/product_color/<?php echo $similar_product['product_image']; ?>">
           <h3><?php echo $similar_product['product_name']; ?></h3>
           <div class="more-product-price">Rs. <?php echo $similar_product['product_price']; ?></div>
           </div>
        <?php    
            }
        }
        ?>     
          
           

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
            </main>
            <!-- ================= Footer Static ================== -->
            
            <!-- ================= Footer ================== -->
            <?php include("includes/footer-product.php");?>
            
            <script>
             function addtocart(prodid,prodprice)
   {            
            xhr =  new XMLHttpRequest();
			xhr.open('GET','addtocartpage.php?productid='+prodid+'&productprice='+prodprice,true);
			xhr.send();
			document.getElementById('add_to_cart').style.display='block';
			
			xhr.onreadystatechange=function()
			{
				if(xhr.readyState == 4 && xhr.status == 200)
				{
					
				}
			}
			
			setTimeout(function(){ update_total_cart_amount(); }, 1000);
                        setTimeout(function(){ update_total_cart2(); }, 2000);
                        setTimeout(function () {document.getElementById('add_to_cart').style.display='none'}, 2000); return false
   }
            </script>
        </div>
    </div>
    

</body>

</html>