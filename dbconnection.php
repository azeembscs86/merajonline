<?php
error_reporting(E_ALL ^ E_DEPRECATED);
//------------------------Variable for Server name,Database,User name,Password--------------------------------
    $adb ="meraj_online";
    $db_server ="localhost";
    $db_user = "root";
    $db_password = "";
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

function generateCode($characters) {
		/* list all possible characters, similar looking characters and vowels have been removed */
		$possible = '1234567890abcdfghjkmnpqrstvwxyz';
		$code = '';
		$i = 0;
		while ($i < $characters) { 
			$code .= substr($possible, mt_rand(0, strlen($possible)-1), 4);
			$i++;
		}
		return $code;
	}
//--------------------get all clothing type catogries---------------------------------------------------------
function getClothingTypeCatogries()
{
    $query="select catogry_id,catogery_name,clothing_seo_name from product_catogries";
    $result=  mysql_query($query) or die(mysql_error());
    return $result;
}
//----------------------get latest product---------------------------------------------------------------
function getLatestProducts()
{
    $query="select product_id, product_name,product_image,product_price from incre_products order by product_id DESC limit 0,5";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}

function getClothesProducts()
{
    $query="select product_id, product_name,product_image,product_price from incre_products where catogry_id=12 order by product_id DESC limit 0,5";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}

function getLatestJweleryProducts()
{
    $query="select product_id, product_name,product_image,product_price,product_image from incre_products where catogry_id=10 order by product_id DESC limit 0,5";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}


function getLatestHandbagsProducts()
{
    $query="select product_id, product_name,product_image,product_price,product_image from incre_products where catogry_id=9 order by product_id DESC limit 0,5";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}

function getLatestWatchesProducts()
{
    $query="select product_id, product_name,product_image,product_price,product_image from incre_products where catogry_id=11 order by product_id DESC limit 0,5";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}


function getHandBagsProducts()
{
    $query="select product_id, product_name,product_image,product_price,product_image from incre_products where catogry_id=9 order by product_id DESC";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}


function getWatchesProducts()
{
    $query="select product_id, product_name,product_image,product_price,product_image from incre_products where catogry_id=11 order by product_id DESC";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}


function getJewelleryProducts()
{
    $query="select product_id, product_name,product_image,product_price,product_image from incre_products where catogry_id=10 order by product_id DESC";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}
//---------------------------get male products------------------------------------------------------------
function getMaleLatestProducts()
{
    $query="select product_id, product_name,product_image,product_price,product_image from incre_products where product_gender='boys' order by product_id DESC limit 0,5";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}
//---------------------------get female products------------------------------------------------------------
function getFemaleLatestProducts()
{
    $query="select product_id, product_name,product_image,product_price,product_image from incre_products where product_gender='girls' order by product_id DESC limit 0,5";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}

//---------------------------get female products------------------------------------------------------------
function getKidsLatestProducts()
{
    $query="select product_id, product_name,product_image,product_price,product_image from incre_products where product_gender='kids' order by product_id DESC limit 0,5";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}




//---------------------------get Boys Wear products------------------------------------------------------------
function getJwelleryProducts()
{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where catogry_id=10 AND isActive='yes' order by product_id DESC";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}

//---------------------------get Boys Wear products------------------------------------------------------------
function getBoysWearProducts()
{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where product_gender='boys' AND isActive='yes' order by product_id DESC";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}

//---------------------------get Kids Wear products------------------------------------------------------------
function getKidssWearProducts()
{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where product_gender='kids' AND isActive='yes' order by product_id DESC";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}


//---------------------------get Girls Wear products------------------------------------------------------------
function getGirlsWearProducts()
{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where 	catogry_id=11 and isActive='yes' order by product_id DESC";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}


//---------------------------get Latest Wear products------------------------------------------------------------
function getLatestWearProductsList()
{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where catogry_id=12 and isActive='yes' order by product_id DESC";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}



//---------------------------get Latest Wear products------------------------------------------------------------
function getClothesProductsList()
{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where catogry_id=12 and isActive='yes' order by product_id DESC";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}

//---------------------------Dynamic change List of Boys Wear products------------------------------------------------------------
function changeJwelleryProductList($noofitem)
{
    if($noofitem == 'all')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where catogry_id=10 AND isActive='yes' order by product_id DESC   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where catogry_id=10 AND isActive='yes' order by product_id DESC LIMIT 0,$noofitem  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }
}


//---------------------------Dynamic change List of Boys Wear products------------------------------------------------------------
function changeClothesProductList($noofitem)
{
    if($noofitem == 'all')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  catogry_id=12 AND isActive='yes' order by product_id DESC   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  catogry_id=12 AND isActive='yes' order by product_id DESC LIMIT 0,$noofitem  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }
}

//---------------------------Dynamic change List of Girls Wear products------------------------------------------------------------
function changegirlsProductList($noofitem)
{
    if($noofitem == 'all')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where product_gender='girls' AND isActive='yes' order by product_id DESC   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where product_gender='girls' AND isActive='yes' order by product_id DESC LIMIT 0,$noofitem  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }
}


//---------------------------Dynamic change List of Girls Wear products------------------------------------------------------------
function changeWatchesProductList($noofitem)
{
    if($noofitem == 'all')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where catogry_id=11 AND isActive='yes' order by product_id DESC   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where catogry_id=11  AND isActive='yes' order by product_id DESC LIMIT 0,$noofitem  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }
}

//---------------------------Dynamic change List of Kids Wear products------------------------------------------------------------
function changeKidsProductList($noofitem)
{
    if($noofitem == 'all')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where product_gender='kids' AND isActive='yes' order by product_id DESC   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where product_gender='kids' AND isActive='yes' order by product_id DESC LIMIT 0,$noofitem  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }
}

//---------------------------Dynamic change List of Latest Wear products------------------------------------------------------------
function changeLatestProductList($noofitem)
{
    if($noofitem == 'all')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' order by product_id DESC   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where isActive='yes' order by product_id DESC LIMIT 0,$noofitem  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }
}

//---------------------------Sorting Query Latest Wear products------------------------------------------------------------
function sortingLatestProductList($sortingtype,$noofitemshow)
{
    if($sortingtype == 'productname')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' order by product_name DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else if($sortingtype == 'productprice'){
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where isActive='yes' order by product_price DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else if($sortingtype == 'boys'){
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where product_gender='boys' AND isActive='yes' order by product_id DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else if($sortingtype == 'girls'){
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where product_gender='girls' AND isActive='yes' order by product_id DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else if($sortingtype == 'kids'){
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where product_gender='kids' AND isActive='yes' order by product_id DESC LIMIT 0,$noofitemshow   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else
            {
            $query="select product_id, product_name,product_price,product_code,product_image from incre_products where isActive='yes' order by product_id DESC LIMIT 0,$noofitemshow   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
            }
}



//---------------------------Sorting Query Latest Wear products------------------------------------------------------------
function sortingClothesLatestProductList($sortingtype,$noofitemshow)
{
    if($sortingtype == 'productname')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where catogry_id=12 and isActive='yes' order by product_name DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else if($sortingtype == 'productprice'){
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where catogry_id=12 and isActive='yes' order by product_price DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else if($sortingtype == 'boys'){
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where catogry_id=12 AND isActive='yes' order by product_id DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else if($sortingtype == 'girls'){
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where catogry_id=12 AND isActive='yes' order by product_id DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else if($sortingtype == 'kids'){
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where catogry_id=12 AND isActive='yes' order by product_id DESC LIMIT 0,$noofitemshow   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else
            {
            $query="select product_id, product_name,product_price,product_code,product_image from incre_products where catogry_id=12 and isActive='yes' order by product_id DESC LIMIT 0,$noofitemshow   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
            }
}


//---------------------------Sorting Query Latest Wear products------------------------------------------------------------
function sortingJwelleryProductList($sortingtype,$noofitemshow)
{
    if($sortingtype == 'productname')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where catogry_id=10 and  isActive='yes' order by product_name DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else if($sortingtype == 'productprice'){
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where catogry_id=10 and isActive='yes' order by product_price DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else if($sortingtype == 'boys'){
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where catogry_id=10 and isActive='yes' order by product_id DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else if($sortingtype == 'girls'){
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where catogry_id=10 and isActive='yes' order by product_id DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else if($sortingtype == 'kids'){
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where catogry_id=10 and isActive='yes' order by product_id DESC LIMIT 0,$noofitemshow   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else
            {
            $query="select product_id, product_name,product_price,product_code,product_image from incre_products where catogry_id=10 and isActive='yes' order by product_id DESC LIMIT 0,$noofitemshow   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
            }
}



//---------------------------Sorting Query Boys Wear products------------------------------------------------------------
function sortingBoysProductList($sortingtype,$noofitemshow)
{
    if($sortingtype == 'productname')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where product_gender='boys' AND isActive='yes' order by product_name DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else if($sortingtype == 'productprice'){
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where product_gender='boys' AND isActive='yes' order by product_price DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else
            {
            $query="select product_id, product_name,product_price,product_code,product_image from incre_products where product_gender='boys' AND isActive='yes' order by product_id DESC LIMIT 0,$noofitemshow   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
            }
}

//---------------------------Sorting Query Kids Wear products------------------------------------------------------------
function sortingKidsProductList($sortingtype,$noofitemshow)
{
    if($sortingtype == 'productname')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where product_gender='kids' AND isActive='yes' order by product_name DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else if($sortingtype == 'productprice'){
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where product_gender='kids' AND isActive='yes' order by product_price DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else
            {
            $query="select product_id, product_name,product_price,product_code,product_image from incre_products where product_gender='kids' AND isActive='yes' order by product_id DESC LIMIT 0,$noofitemshow   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
            }
}

//---------------------------Sorting Query Girls Wear products------------------------------------------------------------
function sortingGirlsProductList($sortingtype,$noofitemshow)
{
    if($sortingtype == 'productname')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where product_gender='girls' AND isActive='yes' order by product_name DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else if($sortingtype == 'productprice'){
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where product_gender='girls' AND isActive='yes' order by product_price DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else
            {
            $query="select product_id, product_name,product_price,product_code,product_image from incre_products where product_gender='girls' AND isActive='yes' order by product_id DESC LIMIT 0,$noofitemshow   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
            }
}

//---------------------------Sorting Query Girls Wear products------------------------------------------------------------
function sortingWatchestList($sortingtype,$noofitemshow)
{
    if($sortingtype == 'productname')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where catogry_id=11 AND isActive='yes' order by product_name DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else if($sortingtype == 'productprice'){
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where catogry_id=11 AND isActive='yes' order by product_price DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else
            {
            $query="select product_id, product_name,product_price,product_code,product_image from incre_products where catogry_id=11 AND isActive='yes' order by product_id DESC LIMIT 0,$noofitemshow   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
            }
}




//---------------------------get products Details------------------------------------------------------------
function getProductDetail($product_id)
{
   $query="select catogry_id,product_id,product_name,product_price,product_code,product_quantity,product_image,prduct_description from incre_products where isActive='yes' AND product_id=$product_id";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}


//---------------------------get Color Details------------------------------------------------------------
function getProductColorDetails($product_id)
{
  $query="select product_color_name from incre_product_colors where product_id=$product_id";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}



//---------------------------get Color Details------------------------------------------------------------
function getProductSizeDetails($product_id)
{
  $query="select product_size_name from incre_products_sizes where product_id=$product_id GROUP BY product_size_name";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}

//---------------------------get Frocks products------------------------------------------------------------
function getFrocksProducts()
{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where isActive='yes' AND catogry_id=1 order by product_id DESC LIMIT 0,10 ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}


function getProductsByCategories($category_id)
{
    $query="select catogry_id,product_id, product_name,product_price,product_code,product_image from incre_products where catogry_id=$category_id AND isActive='yes' order by rand() LIMIT 0,5 ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}

//---------------------------Sorting Query Frocks products------------------------------------------------------------
function sortingFrocksProductList($sortingtype,$noofitemshow)
{
    if($sortingtype == 'productname')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=1 order by product_name DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else if($sortingtype == 'productprice'){
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=1 order by product_price DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else
            {
            $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=1 order by product_id DESC LIMIT 0,$noofitemshow   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
            }
}

//---------------------------Dynamic change List of Frocks  products------------------------------------------------------------
function changeFrocksProductlist($noofitem)
{
    if($noofitem == 'all')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=1 order by product_id DESC   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where isActive='yes' AND catogry_id=1 order by product_id DESC LIMIT 0,$noofitem  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }
}

//---------------------------End Frocks products------------------------------------------------------------

//---------------------------Get Rompers products------------------------------------------------------------
function getRompersProducts()
{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where isActive='yes' AND catogry_id=2 order by product_id DESC LIMIT 0,10 ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}

//---------------------------Sorting Query Rompers products------------------------------------------------------------
function sortingRompersProductList($sortingtype,$noofitemshow)
{
    if($sortingtype == 'productname')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=2 order by product_name DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else if($sortingtype == 'productprice'){
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=2 order by product_price DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else
            {
            $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=2 order by product_id DESC LIMIT 0,$noofitemshow   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
            }
}

//---------------------------Dynamic change List of Rompers  products------------------------------------------------------------
function changeRompersProductlist($noofitem)
{
    if($noofitem == 'all')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=2 order by product_id DESC   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where isActive='yes' AND catogry_id=2 order by product_id DESC LIMIT 0,$noofitem  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }
}

//---------------------------End Rompers products------------------------------------------------------------


//---------------------------Get Tshirt products------------------------------------------------------------
function getTshirtProducts()
{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where isActive='yes' AND catogry_id=3 order by product_id DESC LIMIT 0,10 ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}

//---------------------------Sorting Query Tshirt products------------------------------------------------------------
function sortingTshirtProductList($sortingtype,$noofitemshow)
{
    if($sortingtype == 'productname')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=3 order by product_name DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else if($sortingtype == 'productprice'){
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=3 order by product_price DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else
            {
            $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=3 order by product_id DESC LIMIT 0,$noofitemshow   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
            }
}

//---------------------------Dynamic change List of Tshirt  products------------------------------------------------------------
function changeTshirtProductlist($noofitem)
{
    if($noofitem == 'all')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=3 order by product_id DESC   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where isActive='yes' AND catogry_id=3 order by product_id DESC LIMIT 0,$noofitem  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }
}

//---------------------------End Tshirt products------------------------------------------------------------


//---------------------------Get ShortsKnicker products------------------------------------------------------------
function getShortsKnickerProducts()
{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where isActive='yes' AND catogry_id=4 order by product_id DESC LIMIT 0,10 ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}

//---------------------------Sorting Query ShortsKnicker products------------------------------------------------------------
function sortingShortsKnickerProductList($sortingtype,$noofitemshow)
{
    if($sortingtype == 'productname')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=4 order by product_name DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else if($sortingtype == 'productprice'){
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=4 order by product_price DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else
            {
            $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=4 order by product_id DESC LIMIT 0,$noofitemshow   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
            }
}

//---------------------------Dynamic change List of ShortsKnicker  products------------------------------------------------------------
function changeShortsKnickerProductlist($noofitem)
{
    if($noofitem == 'all')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=4 order by product_id DESC   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where isActive='yes' AND catogry_id=4 order by product_id DESC LIMIT 0,$noofitem  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }
}

//---------------------------End ShortsKnicker products------------------------------------------------------------


//---------------------------Get Hoodies products------------------------------------------------------------
function getHoodiesProducts()
{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where isActive='yes' AND catogry_id=5 order by product_id DESC LIMIT 0,10 ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}

//---------------------------Sorting Query Hoodies products------------------------------------------------------------
function sortingHoodiesProductList($sortingtype,$noofitemshow)
{
    if($sortingtype == 'productname')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=5 order by product_name DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else if($sortingtype == 'productprice'){
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=5 order by product_price DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else
            {
            $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=5 order by product_id DESC LIMIT 0,$noofitemshow   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
            }
}

//---------------------------Dynamic change List of Hoodies  products------------------------------------------------------------
function changeHoodiesProductlist($noofitem)
{
    if($noofitem == 'all')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=5 order by product_id DESC   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where isActive='yes' AND catogry_id=5 order by product_id DESC LIMIT 0,$noofitem  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }
}

//---------------------------End Hoodies products------------------------------------------------------------


//---------------------------Get Tuxedo products------------------------------------------------------------
function getTuxedoProducts()
{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where isActive='yes' AND catogry_id=6 order by product_id DESC LIMIT 0,10 ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}

//---------------------------Sorting Query Tuxedo products------------------------------------------------------------
function sortingTuxedoProductList($sortingtype,$noofitemshow)
{
    if($sortingtype == 'productname')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=6 order by product_name DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else if($sortingtype == 'productprice'){
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=6 order by product_price DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else
            {
            $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=6 order by product_id DESC LIMIT 0,$noofitemshow   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
            }
}

//---------------------------Dynamic change List of Tuxedo  products------------------------------------------------------------
function changeTuxedoProductlist($noofitem)
{
    if($noofitem == 'all')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=6 order by product_id DESC   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where isActive='yes' AND catogry_id=6 order by product_id DESC LIMIT 0,$noofitem  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }
}

//---------------------------End Tuxedo products------------------------------------------------------------


//---------------------------Get Jackets products------------------------------------------------------------
function getJacketsProducts()
{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where isActive='yes' AND catogry_id=7 order by product_id DESC LIMIT 0,10 ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}

//---------------------------Sorting Query Tuxedo products------------------------------------------------------------
function sortingJacketsProductList($sortingtype,$noofitemshow)
{
    if($sortingtype == 'productname')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=7 order by product_name DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else if($sortingtype == 'productprice'){
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=7 order by product_price DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else
            {
            $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=7 order by product_id DESC LIMIT 0,$noofitemshow   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
            }
}

//---------------------------Dynamic change List of Tuxedo  products------------------------------------------------------------
function changeJacketsProductlist($noofitem)
{
    if($noofitem == 'all')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id=7 order by product_id DESC   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where isActive='yes' AND catogry_id=7 order by product_id DESC LIMIT 0,$noofitem  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }
}

//---------------------------End Jackets products------------------------------------------------------------


//----------------------------------------User Login And Register Query--------------------
//----------------------------------------get app provinces----------------------------------------------
function getAllProvinces()
{
    $query="select province_id,province_name,createdAt,updatedAt,isActive from incredibles_provinces";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}
//------------------------------get cities by province id ------------------------------------------
function getCitiesByProvinceId($province_id)
{
   $query="select province_id,city_id,city_name,createdAt,updatedAt,isActive from incredibles_cities where province_id=$province_id";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}
//-------------------------------get all cities--------------------------------------------------------
function getAllCities()
{
    $query="select province_id,city_id,city_name,createdAt,updatedAt,isActive from incredibles_cities";
    $result=mysql_query($query) or die(mysql_error());
    return $result;   
}
//--------------------------------register new user----------------------------------------------------
function registerUser($firstname,$lastname,$email,$user_name,$password,$gender,$mobile_number,$phone_number,$address,$province_id,$city_id,$activation,$verificationcode,$billing_address,$shippmentaddress)
{
   $createdAt=  date("Y-m-d");
   $updatedAt=  date("Y-m-d");
   $query="insert into incredibles_users (firstname,lastname,email,user_name,password,gender,mobile_number,phone_number,address,province_id,city_id,createdAt,updatedAt,isActive,activation,verificationcode,billing_address,shippment_address) values('$firstname','$lastname','$email','$user_name','$password','$gender','$mobile_number','$phone_number','$address',$province_id,$city_id,'$createdAt','$updatedAt','no','$activation','$verificationcode','$billing_address','$shippmentaddress')";
   mysql_query($query) or die(mysql_error());
}
//------------------------------user login---------------------------------------------------------------
function userLogin($email,$password)
{
    $query="select user_id,firstname,lastname,email,user_name,password,gender,mobile_number,phone_number,address,province_id,city_id,createdAt,updatedAt,isActive,activation,verificationcode,billing_address from incredibles_users where (email='$email' or user_name='$email') and password='$password'";
    $result=mysql_query($query) or die(mysql_error());
    return $result; 
}
//-----------------------------------get user by email----------------------------------------------------
function getUserByEmail($email)
{
    $query="select user_id,firstname,lastname,email,user_name,password,gender,mobile_number,phone_number,address,province_id,city_id,createdAt,updatedAt,isActive,activation,verificationcode,billing_address from incredibles_users where email='$email'";
    $result=mysql_query($query) or die(mysql_error());
    return $result; 
}
//-------------------------------reset password-------------------------------------------------------------
function resetPassword($userId,$password,$verificationcode)
{           	
   	$query="update incredibles_users set password='$password', verificationcode='$verificationcode' where user_id=$userId";
   	mysql_query($query) or die(mysql_error());
}

//---------------------------Check Activation Is Set------------------------------------------------------------
function getCheckActivation($code)
{
   $query="SELECT user_id FROM incredibles_users WHERE activation='$code'";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}
//---------------------------Check Already user Activated Or Not ------------------------------------------------------------
function getCheckAlreadyActivation($code)
{
   $query="SELECT user_id FROM incredibles_users WHERE activation='$code' and isActive='no'";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}
//---------------------------Activated User Account ------------------------------------------------------------
function activateUserAccount($code)
{
   $query="UPDATE incredibles_users SET isActive='yes' WHERE activation='$code'";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}

//---------------------------Get User Details------------------------------------------------------------
function getUserDetails($userid)
{
   $query="SELECT * FROM incredibles_users WHERE user_id='$userid'";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}

//-------------------------------Update User Profile--------------------------------------------------------
function updateUserProfile($firstname,$lastname,$email,$user_name,$mobile_number,$phone_number,$address,$userid)
{
    $query="UPDATE incredibles_users SET firstname='$firstname',lastname='$lastname',email='$email',user_name='$user_name',mobile_number='$mobile_number',phone_number='$phone_number',address='$address' WHERE user_id='$userid'";
    $result=mysql_query($query) or die(mysql_error());
    return $result;   
}

// Get Last Order ID
function getLastAddedOrder()
 {
     $query="SELECT order_id,order_number FROM product_orders ORDER BY order_id DESC LIMIT 1";
     $result=  mysql_query($query) or die(mysql_error());
     return $result;
 }
 
 // New Order
function addNewOrder($user_id,$order_number)
{
   $createdAt=  date("Y-m-d");
   $updatedAt=  date("Y-m-d");
   $query="insert into product_orders(user_id,order_number,createdAt,updatedAt,confirm_status) values($user_id,$order_number,'$createdAt','$updatedAt','no')";
   mysql_query($query) or die(mysql_error());    
}


// New Order
 function getLatestOrderId()
{
   $query="SELECT * FROM product_orders ORDER BY order_id DESC LIMIT 0,1 ";
   
   $result=mysql_query($query) or die(mysql_error());    
   return $result;
}


 // New Customer
 function addNewCustomerOrder($order_id,$product_id,$product_quantity,$product_size,$product_color,$product_price)
{
   $createdAt=  date("Y-m-d");
   $updatedAt=  date("Y-m-d");
   $query="insert into customer_orders values('$order_id','','$product_id','$product_quantity','$product_size','$product_color','$product_price','$createdAt','$updatedAt','no')";
   mysql_query($query) or die(mysql_error());    
}

// User New Number
 function getUserOrderNumber()
{
   $query="SELECT * FROM product_orders ORDER BY order_id DESC LIMIT 0,1 ";
   
   $result=mysql_query($query) or die(mysql_error());    
   return $result;
}

// Update User Shipping Address
 function updateShippingAddress($userid,$addresstext)
{
   $query="UPDATE incredibles_users SET shippment_address='$addresstext' WHERE user_id='$userid' ";
   
   $result=mysql_query($query) or die(mysql_error());    
   return $result;
}

// Check Email Address already or not
 function checkEmailAddress($email)
{
  $query="SELECT * FROM incredibles_users WHERE email='$email' ";
   
   $result=mysql_query($query) or die(mysql_error());    
   return $result;
}
//-------------------------------------------get products colors--------------------------------------------
function getProductColorsByProductId($product_id)
{
	$query="select product_id,product_color_id,product_color_name,product_color_image,product_color_display_image from incre_product_colors where product_id=$product_id";
	$result=mysql_query($query) or die(mysql_error());    
   return $result;
	
}
//---------------------------Get Left Category Type Items------------------------------------------------------------
function getLeftCategoryItems($category_id)
{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where isActive='yes' AND catogry_id=$category_id order by product_id DESC ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
}

//---------------------------Left Category No tof item display------------------------------------------------------------
function changeLeftCategoryItemShow($noofitem,$category_id)
{
  
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where isActive='yes' AND catogry_id='$category_id' order by product_id DESC LIMIT 0,$noofitem ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        
}

//---------------------------Sorting Left Category------------------------------------------------------------
function sortingLaftCategory($sortingtype,$noofitemshow,$category_id)
{
    if($sortingtype == 'productname')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id='$category_id' order by product_name DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else if($sortingtype == 'productprice'){
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id='$category_id' order by product_price DESC LIMIT 0,$noofitemshow  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else
            {
            $query="select product_id, product_name,product_price,product_code,product_image from incre_products where  isActive='yes' AND catogry_id='$category_id' order by product_id DESC LIMIT 0,$noofitemshow   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
            }
}

//---------------------------Confirm Order------------------------------------------------------------
function checkConfirmOrderStatus($orderid)
{
  
    $query="UPDATE product_orders SET confirm_status='yes' WHERE order_number='$orderid' ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        
}
//---------------------------Cancel Order------------------------------------------------------------
function checkCancelOrderStatus($orderid)
{
  
    $query="UPDATE product_orders SET confirm_status='no' WHERE order_number='$orderid' ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        
}

//---------------------------Dynamic change List of Girls Wear products------------------------------------------------------------
function changeHandbagsProductList($noofitem)
{
    if($noofitem == 'all')
        {
        $query="select product_id, product_name,product_price,product_code,product_image from incre_products where category=9 AND isActive='yes' order by product_id DESC   ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }else{
    $query="select product_id, product_name,product_price,product_code,product_image from incre_products where category=9 AND isActive='yes' order by product_id DESC LIMIT 0,$noofitem  ";
    $result=mysql_query($query) or die(mysql_error());
    return $result;
        }
}

?>