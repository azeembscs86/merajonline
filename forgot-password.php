<?php
session_start();
include("dbconnection.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $web_title;?> User Login | Create New Customer Account</title>
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
			xhr.open('GET','sorting-item-page.php?sortingtypeval='+sortingtype+'&totalitemdisplay='+totaldisplayitemnum,true);
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
            <section class="main-wrapper">
            <div class="container">
                <div class="container-inner">
                    <div class="main-page">
                        <div class="main-container col1-layout">
                            <div class="main">
                                <div class="col-main">
                                    <div class="account-login">
                                        <div class="page-title">
                                            <h1>Forgot Your Password</h1>
                                        </div>
                                        
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="col2-set">
                                                        <div class="col-1 new-users">
                                                            <div class="content">
                                                                <h2>New Customers</h2>
                                                                <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-1 new-users">
                                                            <div class="buttons-set">
                                                                <a href="register-new-user"><button value="1" class="button" title="Create an Account" type="button"><span><span>Create an Account</span></span>
                                                                </button></a>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form id="login-form" method="post" action="paswword-forgot">
                                                <div class="col-sm-6">
                                                    <div class="col2-set">
                                                        <div class="col-2 registered-users">
                                                            <div class="content">
                                                                <h2>Forgot Password</h2> 
                                                                <?php
                                                                if(isset($_REQUEST['success']))
                                                                {
                                                                ?>
                                                                <p>Check your email-we sent an email for you reset your password</p>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php
                                                                if(isset($_REQUEST['err']))
                                                                {
                                                                ?>
                                                                <p>Email address not exists</p>
                                                                <?php
                                                                }
                                                                ?>
                                                                <ul class="form-list">
                                                                    <li>
                                                                        <label class="required" for="email"><em>*</em>Email Address</label>
                                                                        <div class="input-box">
                                                                            <input type="text" title="Email Address" class="input-text required-entry validate-email" id="email" value="" name="email">
                                                                        </div>
                                                                    </li>
                                                                    
                                                                </ul>



                                                                <p class="required">* Required Fields</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-2 registered-users">
                                                            <div class="buttons-set">
                                                                <a class="f-left" href="user-login">Suddenly Remember?Login Here</a>
                                                                <input id="send2" name="submit" title="Login" class="button" type="submit">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

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
    
   <script>
function getProvinces()
{
   var province_id=document.getElementById('province_id').value;  
   var optionValue =province_id;
   jQuery.ajax({
   	  type: "POST",
    	  url: "getcities.php",
    	  data: "province_id="+province_id,
    	  success: function(response){
	  jQuery("#province_cities").html(response);
  	   if(!optionValue)
  	   {
		jQuery("#province_cities").hide(); 
                jQuery("#provinces").show();                 
   	  }else
  	  {
		jQuery("#province_cities").show();  
                jQuery("#provinces").hide();  
          }
	}
        });	
}
</script>

<script type="text/javascript">
            jQuery().ready(function() {
                jQuery("#form-validate").validate({
                    rules: {
                        firstname: {
                            required: true,
                            minlength: 3
                        },
                        lastname: {
                            required: true,
                            minlength: 3
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        user_name: {
                            required: true,
                            minlength: 3
                        },
                        password: {
                            required: true
                        },
                        confirm_password: {
                            required: true,
                            equalTo: "#password"
                        },
                        phone_number: {
                            required: true,
                            digits: true,
                            minlength: 11
                        },
                        agree: "required"
                    },
                    messages: {
                        email: {
                            required: "Please enter email address",
                            email: "Email address must be in the format of name@domain.com"
                        },
                        firstname: {
                            required: "Please enter your name",
                            minlength: "Name must be atleast 3 letter"
                        },
                        lastname: {
                            required: "Please enter your name",
                            minlength: "Name must be atleast 3 letter"
                        },                        
                        user_name: {
                            required: "Please enter user name",
                            minlength: "user name must be atleast 3 letter"
                        },
                        password: {
                            required: "Please enter a password"
                        },
                        confirm_password: {
                            required: "Please enter confirm password",
                            equalTo: "Password does not match"
                        },
                        phone_number: {
                            required: "Please enter your mobile number",
                            digits: "Mobile number must be in the format of 03212828275",
                            minlength: "Mobile number must only 11 digits"
                        },
                        agree: "Please accept our policy",

                    }
                });
                $("#password").focus(function() {
                    var password = $("#password").val();
                    var email = $("#email_check").val();
                    if (password && email && !this.value) {
                        this.value = password + "." + email;
                    }
                });
            });
        </script> 
    <style>
.error {
	color: #FF0000;
	font-size: 11px;
	font-weight: normal;
	padding-left: 29px;
}
.error1 {
	color: #FF0000;
	font-size: 14px;
	font-weight: bold;
	padding-left: 29px;
}
</style>

</body>

</html>