<?php
session_start();
include("dbconnection.php");
$userId   = $_REQUEST['userId'];
$email    = $_REQUEST['email'];
$password = md5($_REQUEST['password']);
$appaskey=$_REQUEST['passkey'];
$verificationcode=generateCode(8);
$result=getUserByEmail($email);
$user=mysql_fetch_array($result);
if($appaskey==$user['verificationcode'])
{
resetPassword($userId,$password,$verificationcode);
header("location:http://merajonline.com/password-reset-message.php");
}else
{
 header("location:http://merajonline.com/password-link-expire.php");
}
?>