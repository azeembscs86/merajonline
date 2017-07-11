<?php
session_start();
if(isset($_POST['submit']))
{
  include("dbconnection.php");
  $province_id= mysql_real_escape_string($_POST['province_id']);
  $province_name= mysql_real_escape_string($_POST['province_name']);
  updateprovince($province_id, $province_name);
  header("location:provinces.php?edit");
}else
{
    header("location:provinces.php");
}

