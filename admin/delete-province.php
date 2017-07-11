<?php
session_start();
if(isset($_REQUEST['id']))
{
    include("dbconnection.php");
    $province_id=  mysql_real_escape_string($_REQUEST['id']);
    deleteProvince($province_id);
    header("location:provinces.php?delete");
}else
{
    header("location:provinces.php");
}
?>