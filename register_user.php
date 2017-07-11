<?php
if(isset($_POST['submit']))
{
    include("dbconnection.php");
    $firstname        = mysql_real_escape_string($_POST['firstname']);
    $lastname         = mysql_real_escape_string($_POST['lastname']);
    $email            = mysql_real_escape_string($_POST['email']);
    $user_name        = mysql_real_escape_string($_POST['user_name']);
    $password         = mysql_real_escape_string(md5($_POST['passwordd']));
    $gender           = mysql_real_escape_string($_POST['gender']);
    $mobile_number    = mysql_real_escape_string($_POST['mobile_number']);
    $phone_number     = "";
    $billing_address   ="";
    if($_POST['phone_number']=='')
    {
    $phone_number     = " ";
    }else
    {
       $phone_number  = mysql_real_escape_string($_POST['phone_number']); 
    }
    $address          = mysql_real_escape_string($_POST['address']);
    $shippingaddress          = mysql_real_escape_string($_POST['shippingaddress']);
    
    $province_id      = mysql_real_escape_string($_POST['province_id']);
    $city_id          = mysql_real_escape_string($_POST['city_id']);
    if($_POST['is_subscribed']==1)
    {
       $billing_address = mysql_real_escape_string($_POST['address']);
    }  else {
        $billing_address   ="";
    }    
   
    $verificationcode=generateCode(1);
    $activation=md5($email.time());  
    registerUser($firstname,$lastname,$email,$user_name,$password,$gender,$mobile_number,$phone_number,$address,$province_id,$city_id,$activation,$verificationcode,$billing_address,$shippingaddress);
	
	// Verification Email Sended
	//$base_url="http://funkid.com/activation.php?code=".$activation;
	 $base_url="http://merajonline.com/activation.php?code=".$activation;
    $subject="Registration successful, please activate email at Meraj online";
    $from = "info@merajonline.com";
    $email_server="info@merajonline.com"; 
    $to = $email;
    $mail_body="Dear $firstname,<br/><br/> Welcome to Merajonline.<br/></br>Activation Link<br/><br/>$base_url<br/><br/>The Merajonline Team";    
    $body = wordwrap($mail_body,2000);
    //$body_user = wordwrap($mail_body_user,70);
    $headers = "MIME-Version: 1.0" . "\r\n";
	    $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
  	    $headers .= "From: " . $from ."\r\n";
            $headers .= 'Bcc:info@merajonline.com.pk'. "\r\n";
            $headers .= "Reply-To: " . $email . "\r\n";   
            mail($to,$subject,$body,$headers);
    //------------------------Thanks You Email-------------------------------------------------------------------  
	
    header("location:thanks-register");
}  else {
    
   header("location:register-new-user");
}
?>