<?php
include('dbconnection.php');
//   Boys Dynamic Diplay Item
if(isset($_GET['girlsitemshow']))
    {  ?>
<ul class="products-grid row even">
<?php
    $girls_wear_product=changeWatchesProductList($_GET['girlsitemshow']);
    if($girls_wear_product>0)
    {
      while($girls_wear_product_list=  mysql_fetch_array($girls_wear_product))
      {
    ?> 
    <li class="item col-md-3 col-sm-6 col-sms-6 col-smb-12 ">
                    <div class="item-inner">
                        <div class="box-images">
                            <a class="product-image" title="Product Title 02" href="#">
                                <img alt="Product Title 02" src="products/product_color/<?php echo $girls_wear_product_list['product_image']; ?>" width="237" height="231">
                            </a>
                            <ul class="add-to-links">


                                <li><a href="product-details?productid=<?php echo $girls_wear_product_list['product_id']; ?>" class="view-detail" data-original-title="Quick View" data-tip="left"><i class="fa fa-search"></i></a>
                                </li>

                                <li>
                                    <button onclick="addtocart(<?php echo $girls_wear_product_list['product_id']; ?>,<?php echo $girls_wear_product_list['product_price']; ?>)" class="button btn-cart" type="button" data-original-title="Add to Bag" data-tip="left"><span><span><i class="fa fa-shopping-cart"></i></span></span>
                                    </button>
                                </li>

                            </ul>

                            <div class="product-shop">
                                <h2 class="product-name"><a title="Product Title 02" href="#"> <?php echo $girls_wear_product_list['product_name']; ?></a></h2>



                                <div class="price-box">



                                    <p class="special-price">
                                        <span class="price-label">Special Price</span>
                                        <span class="price">
                                            <?php echo $girls_wear_product_list['product_price']; ?> PKR               </span>
                                    </p>


                                </div>

                            </div>



                        </div>
                </li>
                                                        
<?php         
 }
}
?> 
</ul>
    <?php
    }    
?>

