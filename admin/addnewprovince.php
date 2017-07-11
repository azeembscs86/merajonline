<?php
session_start();
if(isset($_POST['submit']))
{
    include("dbconnection.php");
    $province_name  = mysql_real_escape_string($_POST['province_name']);
    addNewProvince($province_name);
    header("location:provinces.php?add");
}  else {
    header("location:add-new-province.php");
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

