<?php
session_start();
if(isset($_POST['submit']))
{
    include("dbconnection.php");
    $email  = mysql_real_escape_string($_POST['email']);
    $hostname="http://".$_SERVER['HTTP_HOST'];
    $result = getUserByEmail($email);
    $user   = mysql_fetch_array($result);
    if(($user['email']==$email))
   {  
    $confirm_code=$user['verificationcode'];
    $subject="Your Password Reset Link";
    $from = "info@merajonline.com";
    $to = $email;
    $mail_body = "Hi ".$user['firstname']."<br/><br/> You have requested password for email: ".$email." <br/><br/>Please follow the link, you be will able to reset your password <a href='".$hostname."/reset-password?passkey=$confirm_code&email=$email'><b>Click Here</b></a><br /><br />Kind Regards,<br/><br/>Meraj online Team";
    $body = wordwrap($mail_body,70);
    $headers = "MIME-Version: 1.0" . "\r\n";
	    $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
  	    $headers .= "From: " . $from ."\r\n";
            //$headers .= 'Bcc: raheelaslam@golive.com.pk, azeem.akram78@gmail.com' . "\r\n";
            $headers .= "Reply-To: " . $email . "\r\n";   
    mail($to,$subject,$body,$headers);
    header("location:forgot-password?success");         
   }else
   {
    header("location:forgot-password?err");
   }
 }else {
    header("location:forgot-password");    
}
?>