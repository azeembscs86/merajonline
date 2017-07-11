<?php
  session_start();
  if(isset($_POST['submit']))
  {
    include("dbconnection.php");
    $clothing_type_id     =  mysql_real_escape_string($_REQUEST['clothing_type_id']);      
    $product_name         =  mysql_real_escape_string($_REQUEST['product_name']);
    $product_quantity     =  mysql_real_escape_string($_REQUEST['product_quantity']);
    $product_description  =  mysql_real_escape_string($_REQUEST['product_description']);
    $product_code         =  mysql_real_escape_string($_REQUEST['product_code']);
    $product_title        =  mysql_real_escape_string($_REQUEST['product_title']);
    $product_price        =  mysql_real_escape_string($_REQUEST['product_price']);
    $meta_tag_keyword     =  mysql_real_escape_string($_REQUEST['meta_tag_keyword']);
    $meta_tag_description =  mysql_real_escape_string($_REQUEST['meta_tag_description']);
    $product_seo          =  str_replace(" ","-", strtolower($product_name));    
    $smallimage           = $_FILES['product_image'];
    $product_image  = $smallimage['name'];
    if (!$smallimage['error']) 
		{
			if (!@move_uploaded_file($smallimage['tmp_name'],"../products/product_color/".$smallimage['name']) ) 
			{
				header("location:add-new-product.php?err=Unknown Error Occured please try again");
				exit();
			}
			else
			{
                            $work = new ImgResizer("../products/product_color/". $smallimage['name']);
	 		}
		}     
    addNewProduct($clothing_type_id,$product_name,$product_price,$product_description,$product_title,$meta_tag_keyword,$meta_tag_description,$product_image,$product_quantity,$product_code,rtrim($product_seo,"-"));            
    header("location:products.php?success");         
  }else
  {
    header("location:add-new-product.php");
  } 
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
 
?>