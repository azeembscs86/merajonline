<?php
session_start();
include("dbconnection.php");
 $product_id           = mysql_real_escape_string($_REQUEST['product_id']);
 $product_color_id         = mysql_real_escape_string($_REQUEST['product_color_id']);
 $product_color_name   =  mysql_real_escape_string($_REQUEST['product_color_name']);       
 $product_display      = mysql_real_escape_string($_REQUEST['product_display']);   
 $smallimage = $_FILES['product_color_image'];
	if ($smallimage['name'] == "")
	$product_color_image = $_REQUEST['prev_image'];
else
	$product_color_image = $smallimage['name'];
	if (!$smallimage['error']) 
		{
			if (!@move_uploaded_file($smallimage['tmp_name'],"../products/product_color/" . $smallimage['name']) ) 
			{
				header("location:edit-product-color.php?err=Unknown Error Occured please try again&id=$product_color_id");
				exit();
			}
			else
			{
                            $work = new ImgResizer("../products/product_color/". $smallimage['name']);
	 		}
		}
$smallimage1 = $_FILES['product_color_display_image'];
	if ($smallimage1['name'] == "")
	$product_color_display_image = $_REQUEST['prev_image1'];
else
	$product_color_display_image = $smallimage1['name'];
	if (!$smallimage1['error']) 
		{
			if (!@move_uploaded_file($smallimage1['tmp_name'],"../products/product_color/" . $smallimage1['name']) ) 
			{
				header("location:edit-product-color.php?err=Unknown Error Occured please try again&id=$product_color_id");
				exit();
			}
			else
			{
                            $work = new ImgResizer("../products/product_color/". $smallimage1['name']);
	 		}
		}
updateProductColors($product_color_id,$product_color_name,$product_color_image,$product_color_display_image);                
if($product_display=='yes')    
{    
    updateProductColor($product_id,$product_color_display_image);
}

header("location:view-product-detail.php?id=$product_id");               
class ImgResizer {
	var $originalFile = '';
	function ImgResizer($originalFile = '') {
		$this -> originalFile = $originalFile;
	}
	function resize($newWidth, $targetFile) {
		if (empty($newWidth) || empty($targetFile)) {
			return false;
		}
		$src = imagecreatefromjpeg($this -> originalFile);
		list($width, $height) = getimagesize($this -> originalFile);
		$newHeight = ($height / $width) * $newWidth;
		$tmp = imagecreatetruecolor($newWidth, $newHeight);
		imagecopyresampled($tmp, $src, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
		if (file_exists($targetFile)) {
			unlink($targetFile);
		}
		imagejpeg($tmp, $targetFile, 85);
	}
}