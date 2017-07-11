<?php
include('dbconnection.php');

$no_of_items = $_GET['noofitems'];
$category_product_id = $_GET['category_id'];
?>
<ul class="products-grid row even">
                                                        
                                                        
                                                         <?php
                                                 $latest_wear_product=changeLeftCategoryItemShow($no_of_items,$category_product_id);
                                                 if($latest_wear_product>0)
                                                 {
                                                     while($latest_wear_product_list=  mysql_fetch_array($latest_wear_product))
                                                     {
                                                ?> 
     
                                                        <li class="item col-md-3 col-sm-6 col-sms-6 col-smb-12 ">
                                                            <div class="item-inner">
                                                                <div class="box-images">
                                                                    <a class="product-image" title="<?php echo $latest_wear_product_list['product_name']; ?>" href="product-details?productid=<?php echo $latest_wear_product_list['product_id']; ?>">
                                                                        <img alt="Product Title 02" src="products/product_color/<?php echo $latest_wear_product_list['product_image']; ?>">
                                                                    </a>
                                                                    <ul class="add-to-links">

                                                                        
                                                                        <li><a href="product-details?productid=<?php echo $latest_wear_product_list['product_id']; ?>" class="view-detail" data-original-title="Quick View" data-tip="left"><i class="fa fa-search"></i></a>
                                                                        </li>

                                                                        <li>
                                                                            <button onclick="addtocart(<?php echo $latest_wear_product_list['product_id']; ?>,<?php echo $latest_wear_product_list['product_price']; ?>)" class="button btn-cart" type="button" data-original-title="Add to Bag" data-tip="left"><span><span><i class="fa fa-shopping-cart"></i></span></span>
                                                                            </button>
                                                                        </li>

                                                                    </ul>
                                                                    
                                                                <div class="product-shop">
                                                                    <h2 class="product-name"><a title="<?php echo $latest_wear_product_list['product_name']; ?>" href="product-details?productid=<?php echo $latest_wear_product_list['product_id']; ?>"> <?php echo $latest_wear_product_list['product_name']; ?></a></h2>



                                                                    <div class="price-box">

                                                                       

                                                                        <p class="special-price">
                                                                            <span class="price-label">Special Price</span>
                                                                            <span class="price">
                    <?php echo $latest_wear_product_list['product_price']; ?> PKR               </span>
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

?>
