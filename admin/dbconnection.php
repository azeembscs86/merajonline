<?php
error_reporting(E_ALL ^ E_DEPRECATED);
//------------------------Variable for Server name,Database,User name,Password--------------------------------
    $adb ="meraj_online";
    $db_server ="localhost";
    $db_user = "root";
    $db_password = "";
    //$db_password = "*yC,QmJ6$N-#";
    $web_title="Meraj online";
 $link_db=mysql_connect($db_server,$db_user,$db_password);
 if(!$link_db) {
        die('Failed to connect to server: ' . mysql_error());
    }
 $db=mysql_select_db($adb,$link_db);    
    if(!$db) {
        die('Unable to select database:'.mysql_error());
    }
    
//-------------------------------sql injection and remove space and slashes---------------------------------------
function clean($str){
$str = @trim($str);
if(get_magic_quotes_gpc()) {
$str = stripslashes($str);
}
return mysql_real_escape_string($str);
}
  
//--------------------------------Admin login--------------------------------------------------------------------
function adminLogin($email,$password)
{
    $query="select user_id,email,password,fullname,secretequestion,secreteanswer,verificationcode,createdAt,updateAt,userRole,isactive,description from incredibles_admin where email='$email' and password='$password'";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}
//----------------------------get all product catogries--------------------------------------------------------
function getAllProductCatgories()
{
    $query="select catogry_id,catogery_name,createdAt,isActive from product_catogries";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}
//-----------------------add new product catogries--------------------------------------------------------------
function addNewProductCatgories($Clothing_type_name,$clothing_seo_name,$clothing_type_title,$meta_keywords,$meta_description,$catogery_description)
{
    $createdAt=  date("Y-m-d");
    $updatedAt=  date("Y-m-d");
    $query="insert into product_catogries(catogery_name,clothing_seo_name,createdAt,updatedAt,clothing_type_title,meta_keywords,meta_description,catogery_description) values ('$Clothing_type_name','$clothing_seo_name','$createdAt','$updatedAt','$clothing_type_title','$meta_keywords','$meta_description','$catogery_description')";
    mysql_query($query) or die(mysql_error());  
}

//-----------------------update product catgories--------------------------------------------------------------
function updateProductCatgoryType($clothing_type_id,$Clothing_type_name,$clothing_seo_name,$clothing_type_title,$meta_keywords,$meta_description,$catogery_description)
{
  $updatedAt=  date("Y-m-d");
  $query="update product_catogries set catogery_name='$Clothing_type_name',updatedAt='$updatedAt',clothing_seo_name='$clothing_seo_name',clothing_type_title='$clothing_type_title',meta_keywords='$meta_keywords',meta_description='$meta_description',catogery_description='$catogery_description' where catogry_id=$clothing_type_id";
  mysql_query($query) or die(mysql_error());  
}

//-------------------------get All Clothing Type----------------------------------------------------------------
function getAllClothingTypes()
{
    $query="select clothing_type_id,Clothing_type_name,clothing_type_gender,createdAt,updatedAt,isActive,clothing_seo_name,clothing_type_title,meta_keywords,meta_description from funkids_clothingtype";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}

//-------------------------get All Clothing Type----------------------------------------------------------------
function getAllProductCatgoryById($clothing_type_id)
{
    $query="select catogry_id,catogery_name,createdAt,isActive,clothing_seo_name,clothing_type_title,meta_keywords,meta_description,catogery_description from product_catogries where catogry_id=$clothing_type_id";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}
//--------------------------------delete clothing types----------------------------------------------------
function deleteProductCatgoryType($clothing_type_id)
{
  $query="delete from product_catogries where catogry_id=$clothing_type_id";   
   mysql_query($query) or die(mysql_error());
}

//---------------------------------------update clothing type status-----------------------------------------
function updateProductCatgoryStatus($clothing_type_id,$clothing_type_stauts)
{
    $updatedAt=  date("Y-m-d");
   if($clothing_type_stauts=='yes')
   {
     $query="update product_catogries set isActive='no',updatedAt='$updatedAt' where catogry_id=$clothing_type_id";  
     mysql_query($query) or die(mysql_error());
   }
   if($clothing_type_stauts=='no')
   {
     $query="update product_catogries set isActive='yes',updatedAt='$updatedAt' where catogry_id=$clothing_type_id";   
     mysql_query($query) or die(mysql_error());
   }
}


//----------------------------get All Products---------------------------------------------------------------
function getAllProducts()
{
    $query="select product_id,product_name,product_image,product_price,prduct_description,createdAt,updatedAt,isActive,isFeatured,isFeatured,meta_keywords,meta_description,product_type_title from incre_products";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}

//-------------------------------add new Product ---------------------------------------------------------
function addNewProduct($clothing_type_id,$product_name,$product_price,$product_description,$product_title,$meta_tag_keyword,$meta_tag_description,$product_color_image,$product_quantity,$product_code,$product_seo)
{
    $createdAt=  date("Y-m-d");
    $updatedAt=  date("Y-m-d");
    $query="insert into incre_products (catogry_id,product_name,product_price,product_code,product_quantity,prduct_description,createdAt,updatedAt,isActive,isFeatured,product_seo_name,meta_keywords,meta_description,product_type_title,product_image) values($clothing_type_id,'$product_name',$product_price,'$product_code',$product_quantity,'$product_description','$createdAt','$updatedAt','yes','yes','$product_seo','$meta_tag_keyword','$meta_tag_description','$product_title','$product_color_image')";
    mysql_query($query) or die(mysql_error());    
}

//---------------------------update product status-------------------------------------------------------------
function updateProductActive($product_id,$product_status)
{
    $updatedAt=  date("Y-m-d");
   if($product_status=='yes')
   {
     $query="update incre_products set isActive='no',updatedAt='$updatedAt' where product_id=$product_id";  
     mysql_query($query) or die(mysql_error());
   }
   if($product_status=='no')
   {
     $query="update incre_products set isActive='yes',updatedAt='$updatedAt' where product_id=$product_id";   
     mysql_query($query) or die(mysql_error());
   }
}

//---------------------------update product is featured-------------------------------------------------------------
function updateProductFeatured($product_id,$product_status)
{
    $updatedAt=  date("Y-m-d");
   if($product_status=='yes')
   {
     $query="update incre_products set isFeatured='no',updatedAt='$updatedAt' where product_id=$product_id";  
     mysql_query($query) or die(mysql_error());
   }
   if($product_status=='no')
   {
     $query="update incre_products set isFeatured='yes',updatedAt='$updatedAt' where product_id=$product_id";   
     mysql_query($query) or die(mysql_error());
   }
}
//-----------------------------update product color-------------------------------------------------
function updateProductColor($product_id,$product_color_display_image)
{
    $updatedAt=  date("Y-m-d");
     $query="update incre_products set product_image='$product_color_display_image',updatedAt='$updatedAt' where product_id=$product_id";   
     mysql_query($query) or die(mysql_error());
}
//--------------------------------get Product by Id---------------------------------------------------
function getProductById($product_id)
{
    $query="select catogry_id,product_id,product_name,product_price,product_code,product_quantity,product_image,prduct_description,createdAt,updatedAt,isActive,isFeatured,product_seo_name,product_type_title,meta_keywords,meta_description from incre_products where product_id=$product_id";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}

function updateProduct($product_id,$clothing_type_id,$product_name,$product_gender,$product_price,$product_quantity,$product_code,$product_description,$meta_tag_keyword,$meta_tag_description,$product_meta_tag_title,$product_seo)
{
    $updatedAt=  date("Y-m-d");
    $query="update incre_products set catogry_id=$clothing_type_id, product_name='$product_name',product_gender='$product_gender',product_price=$product_price,product_quantity=$product_quantity,product_gender='$product_gender',product_code='$product_code',prduct_description='$product_description',updatedAt='$updatedAt',meta_keywords='$meta_tag_keyword',meta_description='$meta_tag_description',product_seo_name='$product_seo',product_type_title='$product_meta_tag_title' where product_id=$product_id";
    mysql_query($query) or die(mysql_error());    
}
//--------------------------------delete product-------------------------------------------------------
function deleteProduct($id)
{
    $query="delete from funkids_products where product_id=$id";
    mysql_query($query) or die(mysql_error());
}
//------------------get produt color by product id----------------------------------------------------
function getAllProductsColorByProductId($product_id)
{
    $query="select product_id,product_color_id,product_color_name,product_color_image,product_color_display_image,createdAt,updatedAt,isActive,product_color_description from incre_product_colors where product_id=$product_id";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}
//---------------------------------------add new product color--------------------------------------------
function addNewProductColor($product_id,$product_color_name,$product_color_image,$product_color_display_image)
{
    $createdAt=  date("Y-m-d");
    $updatedAt=  date("Y-m-d");
    $query="insert into incre_product_colors(product_id,product_color_name,createdAt,updatedAt,product_color_image,product_color_display_image) values($product_id,'$product_color_name','$createdAt','$updatedAt','$product_color_image','$product_color_display_image')";
    mysql_query($query) or die(mysql_error());    
}
//--------------------------update product color---------------------------------------------------------
function updateProductColors($product_color_id,$product_color_name,$product_color_image,$product_color_display_image)
{
    $updatedAt=  date("Y-m-d");
    $query="update incre_product_colors set product_color_name='$product_color_name',product_color_image='$product_color_image',product_color_display_image='$product_color_display_image' where product_color_id=$product_color_id";
     mysql_query($query) or die(mysql_error());   
}
//------------------------get product color by id------------------------------------------------------
function getProductColorById($product_color_id)
{
    $query="select product_id,product_color_id,product_color_name,product_color_image,product_color_display_image,createdAt,updatedAt,isActive,product_color_description from incre_product_colors where product_color_id=$product_color_id";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}
//----------------------get prodcut sizes----------------------------------------------------------------
function getAllProductsSizesByProductId($product_id)
{
    $query="select product_id,product_size_id,product_size_name,createdAt,updatedAt,isActive from incre_products_sizes where product_id=$product_id";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}

//----------------------Add Product Size----------------------------------------------------------------
function addNewProductSize($product_id,$product_size_name)
{   $createdAt=  date("Y-m-d");
    $updatedAt=  date("Y-m-d");
    $query="INSERT INTO incre_products_sizes VALUES('$product_id','','$product_size_name','$createdAt','$updatedAt','yes') ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}


//----------------------Delete prodcut sizes----------------------------------------------------------------
function deleteProductSize($product_size_id )
{
    $query="DELETE FROM incre_products_sizes  where product_size_id='$product_size_id' ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}

//----------------------Update prodcut sizes----------------------------------------------------------------
function updateProductSizeName($product_size_id,$product_size_name)
{
    $query="UPDATE incre_products_sizes SET product_size_name='$product_size_name' where product_size_id='$product_size_id' ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}
//-----------------------------------get all provinces--------------------------------------------------
function getAllProvinces()
{
    $query="select province_id,province_name,createdAt,updatedAt,isActive from incredibles_provinces";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}
//------------------------------------add new province------------------------------------------------------
function addNewProvince($province_name)
{
    $createdAt=  date("Y-m-d");
    $updatedAt=  date("Y-m-d");
    $query="insert into incredibles_provinces (province_name,createdAt,updatedAt) values('$province_name','$createdAt','$updatedAt')";
    mysql_query($query) or die(mysql_error());
}
//--------------------------get province by id------------------------------------------------------------
function getProvinceById($province_id)
{
    $query="select province_id,province_name,createdAt,updatedAt,isActive from incredibles_provinces where province_id=$province_id";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}
//------------------------update province-------------------------------------------------------------------
function updateprovince($province_id,$province_name)
{
    $updatedAt=  date("Y-m-d");
    $query="update incredibles_provinces set province_name='$province_name',updatedAt='$updatedAt' where province_id=$province_id";
    mysql_query($query) or die(mysql_error());
}
//---------------------------delete province----------------------------------------------------------------
function deleteProvince($province_id)
{
    $query="DELETE FROM incredibles_provinces  where province_id=$province_id";
    mysql_query($query) or die(mysql_error());  
}
//-------------------------------get all cities---------------------------------------------------------------
function getAllCities()
{
    $query="select province_id,city_id,city_name,createdAt,updatedAt,isActive from incredibles_cities";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}
//--------------------get city by id--------------------------------------------------------------------------
function getCitiesById($city_id)
{
    $query="select province_id,city_id,city_name,createdAt,updatedAt,isActive from incredibles_cities where city_id=$city_id";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}
//----------------------add new city------------------------------------------------------------------------
function addNewCity($province_id,$city_name)
{
  $createdAt=  date("Y-m-d");
  $updatedAt=  date("Y-m-d");
  $query="insert into incredibles_cities (province_id,city_name,createdAt,updatedAt) values($province_id,'$city_name','$createdAt','$updatedAt')";
  mysql_query($query) or die(mysql_error());  
}
?>