<?php
session_start();
include("dbconnection.php");
$totalamnt = $_SESSION['totalamountproduct']+250;
//message
$message = "<center><h3>Product Details</h3></center>";
//mail body - image position, background, font color, font size...
$cartdescription = "";
       while (list ($key, $val) = each ($_SESSION['cartproductid'])) { 
       $get_product_details = getProductDetail($val);
       $get_product=  mysql_fetch_array($get_product_details);       
       $cartdescription .= '<tr>';       
       $cartdescription .= '<td><img src="http://merajonline.com/products/product_color/'.$get_product['product_image'].'" width="70px" height="70px" /></td>';
       $cartdescription .= '<td> '.$get_product['product_name'].' </td>';
       $cartdescription .= '<td> '.$_SESSION['cartproductquantity'][$key].' </td>';
       $cartdescription .= '<td> '.$get_product['product_price']*$_SESSION['cartproductquantity'][$key].' </td>';       
       $cartdescription .= '<tr>';       
       }                                                      

$body ='<html>
<head>
<style>
body
{
background: #fff;
font-family: "Arial", tahoma, verdana;
font-size:16px;
font-weight: bold;
color: #fff;
}
h3 { font-size:20px;}
.content{
overflow:hidden;
background-color: #336699;
margin: 10px;
padding:10px;
}
table tr th { background:#772E6E; padding:10px; color:#FFF; text-align:center;}
table tr td { border:1px solid #CCC; padding:10px; text-align:center;}
button { padding:10px; text-align:center; background:#af2018; color:#FFF; border-radius:5px; border:0px;}
</style>
</head>
<body>
<div class="content">
<center><h1><img src="http://merajonline.com/images/logo.png"  /></h1></center>
'.$message.'<br />
   <table width="100%">
    <tr>
    <th>Image</th>
    <th>Product Name</th>
    <th>Quantity</th>
    <th>Price</th>
    </tr>
    
    '.$cartdescription.'

    </table>
    <br />
    <h4>Shipping Charges : 250 PKR</h4>
    <h4>Your Total Charges Will Be : '.$totalamnt.' PKR</h4>
    <br />
      <h5> Please Confirm Your Order  <br><br><a href="http://merajonline.com/confirm_message.php?confirm='.$_SESSION['latestordernumber'].'" >
      <button type="button" title="Proceed to Checkout"><span><span>Confirm</span></span></button> </a>
                                                                <a href="http://merajonline.com/confirm_message.php?cancel='.$_SESSION['latestordernumber'].'" > <button type="button" title="Proceed to Checkout"><span><span>Cancel</span></span>
                                                                </button> </a></h5>
                                                                
</div>
</body>';
//to send HTML mail, the Content-type header must be set:
$headers='MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html;charset=iso-8859-1' . "\r\n";
$headers .= 'From: System Admin <info@incredibles.com>' . "\r\n";
$to = $_SESSION['loged_email'];
$subject = "Product Purchase Payment Details";
//mail function
$mail = mail($to, $subject, $body, $headers);
if(!$mail) { 
echo "Error sending email"; 
} else {
header("location:payment-receipt");
}
?>