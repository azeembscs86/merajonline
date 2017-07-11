<?php
session_start();
include("dbconnection.php");
$email_address = $_GET['email_id'];
$check_email_query = checkEmailAddress($email_address);

$result = mysql_fetch_array($check_email_query);

if($result['email'] != "")
    {
        echo 'Email Address Already Exists';
    }
?>

