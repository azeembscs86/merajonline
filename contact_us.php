<?php
session_start();
include("dbconnection.php");
$errors = '';
$name = '';
$email = '';
$phone_number = '';
$message = '';
if(isset($_POST['submit']))
{	
 $name=  mysql_real_escape_string($_REQUEST['name']);
 $email=  mysql_real_escape_string($_REQUEST['email']);
 $phone_number=  mysql_real_escape_string($_REQUEST['phone_number']);
 $message=  mysql_real_escape_string($_REQUEST['message']);
	///------------Do Validations-------------
	if(empty($name)||empty($email))
	{
		$errors .= "\n Name and Email are required fields. ";	
	}
	if(IsInjected($email))
	{
		$errors .= "\n Bad email value!";
	}
	if(empty($_SESSION['6_letters_code'] ) ||
	  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{
	//Note: the captcha code is compared case insensitively.
	//if you want case sensitive match, update the check above to
	// strcmp()
		$errors .= "\n The captcha code does not match!";
	}
	
	if(empty($errors))
	{
		//send the email
		$to = $email;
 $subject="Contact us user details";
 $from = "info@merajonline.com"; 
 $mail_body="Dear $name,<br/><br/> Thank you for contacting us, we have received your message and will revert back in 48 working hours.<br/></br><br/></br>Best Regards <br/><br/>Meraj Online ";    
 $body = wordwrap($mail_body,2000);
 $mail_user_body="$name,<br/><br/> has contact us with follwing details, <br /><br/>Name:".$name."<br/><br/>Email:".$email."<br/><br/>Phone Number:".$phone_number."<br/></br>Message:".$message."<br/><br/>Regards & Love,<br/><br/>Meraj Online";    
 $body_user = wordwrap($mail_body,2000);
 $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';		
 $headers = "MIME-Version: 1.0" . "\r\n";
 $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
 $headers .= "From: " . $from ."\r\n";
 $headers .= 'Bcc:info@merajonline.com' . "\r\n";
 $headers .= "Reply-To: " . $email . "\r\n";   
 mail($to,$subject,$mail_body,$headers);
 mail($from,$subject,$mail_user_body,$headers);
 header("location:contact-us?thanks");
}
}

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $web_title;?> | Contact Us</title>
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
                                        <form name="contactForm" id="contactForm" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                                            <div class="row">
                                                <div class="col-sm-2"></div>
                                                <div class="col-sm-8">
                                                    <div class="fieldset">                                                        
                                                        <h2 class="legend">CONTACT US</h2>
                                                        
                                                        
                                                        
                                                        <ul class="form-list">
                                                            <li class="fields">
                                                                <div class="customer-name">
                                                                    <div class="field name-firstname">
                                                                        <label class="required" for="firstname"><em>*</em>Full Name</label>
                                                                        <div class="input-box">
                                                                            <input type="text" class="input-text required-entry" maxlength="255" title="Full Name" value="<?php echo htmlentities($name) ?>" name="name" id="name">
                                                                        </div>
                                                                        <span style="color:red" id="first-name"></span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <label class="required" for="email_address"><em>*</em>Email Address</label>
                                                                <div class="input-box">
                                                                    <input type="email" onblur="checkemail()" class="input-text validate-email required-entry" title="Email Address" name="email" id="email" value="<?php echo htmlentities($email) ?>">
                                                                </div>
                                                                <span style="color:red" id="email-address"></span>
                                                            </li>
                                                            <li>
                                                                <label class="required" for="mobile_number"><em>*</em>Telephone Number</label>
                                                                <div class="input-box">
                                                                    <input type="text" class="input-text validate-email required-entry" title="Mobile Number" name="phone_number" id="phone_number" value="<?php echo htmlentities($phone_number) ?>">
                                                                </div>
                                                                <span style="color:red" id="telephone_number"></span>
                                                            </li>
                                                            
                                                            
                                                            
                                                            <li>
                                                                <label class="required" for="address"><em>*</em>Message </label>
                                                                <div class="input-box">
                                                                    <textArea rows="10" cols="30" name="message" id="message"><?php echo htmlentities($message) ?></textArea>                                                                   
                                                                </div>
                                                                 <span style="color:red" id="Message"></span>
                                                            </li> 
                                                        </ul>
                                                        
														<p>
<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
<label for='message'>Enter the code above here :</label><br>
<input id="6_letters_code" name="6_letters_code" type="text"><br>
<div id='contact_form_errorloc' class='err'></div> 
<small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
</p>
<?php
if(!empty($errors)){
echo "<p class='err'>".nl2br($errors)."</p>";
}
?>
														
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
<script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("contact_form");
//remove the following two lines if you like error message box popups
frmvalidator.EnableOnPageErrorDisplaySingleBox();
frmvalidator.EnableMsgsTogether();

frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>
<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
 var img = document.images['captchaimg'];
 img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>

</body>

</html>