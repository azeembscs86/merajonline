<?php
include("dbconnection.php");
$msg='';
if(!empty($_GET['code']) && isset($_GET['code']))
{
	$code=$_GET['code'];
	$c=getCheckActivation($code);	
	if(mysql_num_rows($c) > 0)
	{
	$count=getCheckAlreadyActivation($code);
	if(mysql_num_rows($count) == 1)
	{
    activateUserAccount($code);
    header("location:linkactivatedmessage.php");
    }else
	{
		header("location:already_activated_account_message.php");
	}
    
	}else
	{
		header("location:invalid_activation_code_message.php");
	}
	header("location:linkactivatedmessage.php");
}

?>