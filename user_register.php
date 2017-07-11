<?php
session_start();
include("dbconnection.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Create New Customer Account</title>
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
    

   // Check Email Already Exsist Or Not
   function checkemail()
   {
       var email = document.getElementById("email_address").value;
     
                        xhr =  new XMLHttpRequest();
			xhr.open('GET','check_email.php?email_id='+email,true);
			xhr.send();
			
			xhr.onreadystatechange=function()
			{
				if(xhr.readyState == 4 && xhr.status == 200)
				{
					document.getElementById("email-address").innerHTML = xhr.responseText;
                                        
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
                                    <div class="account-create">                                        
                                        <form onsubmit="return validateForm()" id="form-validate" name="myForm" method="post" action="create-new-user">
                                            <div class="row">
                                                <div class="col-sm-2"></div>
                                                <div class="col-sm-8">
                                                    <div class="fieldset">                                                        
                                                        <h2 class="legend">CREATE AN ACCOUNT</h2>
                                                        
                                                        
                                                        
                                                        <ul class="form-list">
                                                            <li class="fields">
                                                                <div class="customer-name">
                                                                    <div class="field name-firstname">
                                                                        <label class="required" for="firstname"><em>*</em>First Name</label>
                                                                        <div class="input-box">
                                                                            <input type="text" class="input-text required-entry" maxlength="255" title="First Name" value="" name="firstname" id="firstname">
                                                                        </div>
                                                                        <span style="color:red" id="first-name"></span>
                                                                    </div>
                                                                    <div class="field name-lastname">
                                                                        <label class="required" for="lastname"><em>*</em>Last Name</label>
                                                                        <div class="input-box">
                                                                            <input type="text" class="input-text required-entry" maxlength="255" title="Last Name" value="" name="lastname" id="lastname">
                                                                        </div>
                                                                        <span style="color:red" id="last-name"></span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <label class="required" for="email_address"><em>*</em>Email Address</label>
                                                                <div class="input-box">
                                                                    <input type="email" onblur="checkemail()" class="input-text validate-email required-entry" title="Email Address" value="" id="email_address" name="email">
                                                                </div>
                                                                <span style="color:red" id="email-address"></span>
                                                            </li>
                                                            <li>
                                                                <label class="required" for="user_name"><em>*</em>User Name</label>
                                                                <div class="input-box">
                                                                    <input type="text" class="input-text validate-email required-entry" title="User Name" value="" id="user_name" name="user_name">
                                                                </div>
                                                                <span style="color:red" id="user-name"></span>
                                                            </li>
                                                            <li>
                                                                <label class="required" for="password"><em>*</em>Password</label>
                                                                <div class="input-box">
                                                                    <input id="pass" class="input-text required-entry validate-password" type="password" title="Password" title="password" name="passwordd">
                                                                </div>
                                                                <span style="color:red" id="password-message"></span>
                                                            </li>
                                                            
                                                            
                                                            <li>
                                                                <label class="required" for="password"><em>*</em>Confirm Password</label>
                                                                <div class="input-box">
                                                                   <input id="pass" class="input-text required-entry validate-password" type="password" title="Password" title="password" name="confirmpassword">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <label class="required" for="gender"><em>*</em>Gender</label>
                                                                <div class="input-box">
                                                                    <select name="gender" id="gender">
                                                                        <option value="">Select your gender</option>
                                                                        
                                                                        <option value="male"> Male</option>
                                                                    <option value="female"> Female</option>
                                                                    
                                                                    </select>
                                                                </div>
                                                                <span style="color:red" id="gender-message"></span>
                                                            </li>
                                                            
                                                            <li>
                                                                <label class="required" for="mobile_number"><em>*</em>Telephone Number</label>
                                                                <div class="input-box">
                                                                    <input type="number" class="input-text validate-email required-entry" title="Mobile Number" value="" id="mobile_number" name="mobile_number">
                                                                </div>
                                                                <span style="color:red" id="telephone_number"></span>
                                                            </li>
                                                            <li>
                                                                <label class="required" for="phone_number"><em>*</em>Additional phone number (optional)</label>
                                                                <div class="input-box">
                                                                    <input type="number" class="input-text validate-email required-entry" title="phone number" value="" id="phone_number" name="phone_number">
                                                                </div>
                                                                <span style="color:red" id="mobile_number"></span>
                                                            </li>
                                                            
                                                            <li>
                                                                <label class="required" for="address"><em>*</em>Address </label>
                                                                <div class="input-box">
                                                                    <textArea rows="10" cols="30" name="address" id="address"></textArea>                                                                   
                                                                </div>
                                                                <span style="color:red" id="address_id"></span>
                                                            </li>
                                                            
                                                            <li>
                                                                <label class="required" for="address"><em>*</em>Shipping Address </label>
                                                                <div class="input-box">
                                                                    <textArea rows="10" cols="30" name="shippingaddress"></textArea>                                                                   
                                                                </div>
                                                                 <span style="color:red" id="shipping_address"></span>
                                                            </li>
                                                            
                                                            <li>
                                                                <label class="required" for="email_address"><em>*</em>Province</label>
                                                                <div class="input-box">
                                                                    <select name="province_id" id="province_id" >
                                                                        <option value="">Select Province</option>
                                                                        <?php
                                                                        $provinces=  getAllProvinces();
                                                                        if($provinces>0)
                                                                        {
                                                                            while($province=  mysql_fetch_array($provinces))
                                                                            {
                                                                        ?>
                                                                        <option value="<?php echo $province['province_id']; ?>"> <?php echo $province['province_name']; ?></option>
                                                                        <?php
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                                <span style="color:red" id="province_message"></span>
                                                            </li>
                                                            
                                                           
                                                            <div id="provinces">
                                                                <li>
                                                                <label class="required" for="province_cities"><em>*</em>City</label>
                                                                <div class="input-box">
                                                                    <select name="city_id" id="city_id">
                                                                        <option value="">Select Cities</option>
                                                                        <?php
                                                                        $cities=  getAllCities();
                                                                        if($cities>0)
                                                                        {
                                                                            while($city=  mysql_fetch_array($cities))
                                                                            {
                                                                        ?>
                                                                        <option value="<?php echo $city['city_id']; ?>"> <?php echo $city['city_name']; ?></option>
                                                                        <?php
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                                <span style="color:red" id="city_message"></span>
                                                            </li>
                                                                
                                                            </div>
                                                            
                                                            
                                                             <div id="province_cities"></div>
                                                            
                                                            <li class="control">
                                                                <div class="input-box" style="display: none;">
                                                                    <input type="checkbox" checked="checked" class="checkbox pull-left" id="is_subscribed" value="1" title="Billing to the same address" name="is_subscribed">
                                                                
                                                                
                                                            </div></li>
                                                        </ul>
                                                        
                                                        <div class="buttons-set">
                                                        <p class="required">* Required Fields</p>
                                                     
                                                        <button name="submit" value="submit"  class="button validation-passed" title="Submit" type="submit"><span><span>Submit</span></span></button>
                                                        
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2"></div>
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
function validateForm() {
    
    
    var count = 0;
    var first_name = document.forms["myForm"]["firstname"].value;
    var last_name = document.forms["myForm"]["lastname"].value;
    var user_name = document.forms["myForm"]["user_name"].value;
    var password = document.forms["myForm"]["passwordd"].value;
    var confirm_password = document.forms["myForm"]["confirmpassword"].value;
    var gender = document.forms["myForm"]["gender"].value;
    var telephone_no = document.forms["myForm"]["mobile_number"].value;
    var address = document.forms["myForm"]["address"].value;
    var shipping_address_new = document.forms["myForm"]["shippingaddress"].value;
    
    var province = document.forms["myForm"]["province_id"].value;
    var city = document.forms["myForm"]["city_id"].value;
    var email_address = document.forms["myForm"]["email"].value;
    
  
   // var email_already = document.getElementById("email-address").innerHTML;
    
    
    
    if (email_address == null || email_address== "") {
       document.getElementById("email-address").innerHTML= 'Please Enter Email Address';
        count++;
    }
    
    if (first_name == null || first_name== "") {
       document.getElementById("first-name").innerHTML= 'Please Enter first name';
        count++;
    }else
    {
        document.getElementById("first-name").innerHTML= '';
    }
    if (last_name == null || last_name == "") {
       document.getElementById("last-name").innerHTML= 'Please Enter last name';
        count++;
    }else
    {
        document.getElementById("last-name").innerHTML= '';
    }
     if (user_name == null || user_name == "") {
       document.getElementById("user-name").innerHTML= 'Please Enter user Name';
      count++;
    }else
    {
        document.getElementById("user-name").innerHTML= '';
    }
     
       if (password  == null || password  == "") {
       document.getElementById("password-message").innerHTML= 'Please Enter Password';
      count++;
    }else if (password  != confirm_password  ) {
       document.getElementById("password-message").innerHTML= 'Password does not match';
      count++;
    }
    else
    {
        document.getElementById("password-message").innerHTML= '';
    }
    
    if (gender == "" ) {
       document.getElementById("gender-message").innerHTML= 'Please Select gender';
        count++;
    }else
    {
        document.getElementById("gender-message").innerHTML= '';
    }
    
    if (telephone_no == null || telephone_no == "") {
       document.getElementById("telephone_number").innerHTML= 'Please Enter Telephone Number';
        count++;
    }else
    {
        document.getElementById("telephone_number").innerHTML= '';
    }
    
    if (address == null || address == "") {
       document.getElementById("address_id").innerHTML= 'Please Enter Address';
        count++;
    }else
    {
        document.getElementById("address_id").innerHTML= '';
    }
    
    if (shipping_address_new== null || shipping_address_new == "") {
       document.getElementById("shipping_address").innerHTML= 'Please Enter Billing Address';
        count++;
    }else
    {
        document.getElementById("shipping_address").innerHTML= '';
    }
    
    
    if (province == "" ) {
       document.getElementById("province_message").innerHTML= 'Please Select Province';
        count++;
    }else
    {
        document.getElementById("province_message").innerHTML= '';
    }
    
    if (city == "" ) {
       document.getElementById("city_message").innerHTML= 'Please Select city';
        count++;
    }else
    {
        document.getElementById("city_message").innerHTML= '';
    }
   
   
    
    
    if(count >= 1)
    {
        return false;
    }

}
</script>
    
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