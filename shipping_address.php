<?php
session_start();
include("dbconnection.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $web_title;?> Shiping Address</title>
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

   function changeaddress(status)
   {            
                     
                     if(status=='emptytextbox')
                     {
                        xhr =  new XMLHttpRequest();
			xhr.open('GET','changeaddresspage.php?statusmsg='+status,true);
			xhr.send();
			
			xhr.onreadystatechange=function()
			{
				if(xhr.readyState == 4 && xhr.status == 200)
				{
                                    document.getElementById("changeaddressdynamic").innerHTML = xhr.responseText;
					
				}
                            }
                        }else if(status=='changetextdone')
                        {
                            
                        
                          var changenewtext=document.getElementById("changetext").value;
                        xhr =  new XMLHttpRequest();
			xhr.open('GET','changeaddresspage.php?statusmsg='+status+'&changetextresult='+changenewtext,true);
			xhr.send();
			
			xhr.onreadystatechange=function()
			{
				if(xhr.readyState == 4 && xhr.status == 200)
				{
                                    document.getElementById("changeaddressdynamic").innerHTML = xhr.responseText;
					
				}
                            }
                        }else if(status=='cancel')
                        {

                        xhr =  new XMLHttpRequest();
			xhr.open('GET','changeaddresspage.php?statusmsg='+status,true);
			xhr.send();
			
			xhr.onreadystatechange=function()
			{
				if(xhr.readyState == 4 && xhr.status == 200)
				{
                                    document.getElementById("changeaddressdynamic").innerHTML = xhr.responseText;
					
				}
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
                                        <div class="cart display-single-price">
                                            <div class="page-title title-buttons">
                                                <div class="col-lg-8">
                                                <h1>SELECT YOUR ADDRESS</h1>
                                            <form action="#" method="post">
                                                <p><strong>Name :- </strong><?php echo $shipping_user_result['firstname']." ".$shipping_user_result['lastname']; ?></p>
                                                <p><strong>Number :- </strong><?php echo $shipping_user_result['mobile_number'] ?></p>
                                                <p><strong>City :- </strong><?php echo $shipping_city_result['city_name'] ?></p>
                                                <span id="changeaddressdynamic">
                                                    
                                                    <?php $_SESSION['canceleditaddress'] = $shipping_user_result['shippment_address']; ?>
                                                <p><strong>Address :- </strong><?php echo $shipping_user_result['shippment_address'] ?></p>
                                                <hr>
                                                    <button type="button" title="Edit Address"  onclick="changeaddress('emptytextbox')" class="button"><span><span>Edit Address</span></span>
                                                                </button>
                                                </span>
                                                    <hr>
                                                
                                                <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout btn-checkout" onclick="window.location='shipping';"><span><span>Continue</span></span>
                                                                </button>
                                                    
                                                    
                                                  
                                            </form>
                                            </div>
                                            <div class="col-lg-4">
        
    <?php 
                                        include("includes/sidebarcart.php");
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
                </div>
            </section>
                
            <!-- ================= Footer Static ================== -->
            
            <!-- ================= Footer ================== -->
            <?php include("includes/footer.php");?>
        </div>
    </div>
    

</body>

</html>