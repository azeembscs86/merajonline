<?php
session_start();
if(isset($_POST['submit']))
{
    include("dbconnection.php");
    $province_id  = mysql_real_escape_string($_POST['province_id']);
    $city_name    = mysql_real_escape_string($_POST['city_name']);
    addNewCity($province_id, $city_name);
    header("location:cities.php?add");
}else {
    header("location:add-new-city.php");
}
?>