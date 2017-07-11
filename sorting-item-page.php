<?php
include('dbconnection.php');

$sortingtype = $_GET['sortingtypeval'];
$noofitem = $_GET['totalitemdisplay'];

if(isset($_GET['newproductsorting']))
    { ?>
        <ul class="products-grid row even">
                                                        
                                                        
                                                         <?php
                                                 $latest_wear_product=sortingLatestProductList($sortingtype,$noofitem);
                                                 if($latest_wear_product>0)
                                                 {
                                                     while($latest_wear_product_list=  mysql_fetch_array($latest_wear_product))
                                                     {
                                                ?> 
     
                                                        <li class="item col-md-3 col-sm-6 col-sms-6 col-smb-12 ">
                                                            <div class="item-inner">
                                                                <div class="box-images">
                                                                    <a class="product-image" title="Product Title 02" href="#">
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
                                                                    <h2 class="product-name"><a title="Product Title 02" href="#"> <?php echo $latest_wear_product_list['product_name']; ?></a></h2>



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
<?php
    }else if(isset($_GET['boysproduct']))
    { ?>
        <ul class="products-grid row even">
                                                        
                                                        
                                                         <?php
                                                 $latest_wear_product=sortingBoysProductList($sortingtype,$noofitem);
                                                 if($latest_wear_product>0)
                                                 {
                                                     while($latest_wear_product_list=  mysql_fetch_array($latest_wear_product))
                                                     {
                                                ?> 
     
                                                        <li class="item col-md-3 col-sm-6 col-sms-6 col-smb-12 ">
                                                            <div class="item-inner">
                                                                <div class="box-images">
                                                                    <a class="product-image" title="Product Title 02" href="#">
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
                                                                    <h2 class="product-name"><a title="Product Title 02" href="#"> <?php echo $latest_wear_product_list['product_name']; ?></a></h2>



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
<?php
    }else if(isset($_GET['kidssproduct']))
    { ?>
        <ul class="products-grid row even">
                                                        
                                                        
                                                         <?php
                                                 $latest_wear_product=sortingKidsProductList($sortingtype,$noofitem);
                                                 if($latest_wear_product>0)
                                                 {
                                                     while($latest_wear_product_list=  mysql_fetch_array($latest_wear_product))
                                                     {
                                                ?> 
     
                                                        <li class="item col-md-3 col-sm-6 col-sms-6 col-smb-12 ">
                                                            <div class="item-inner">
                                                                <div class="box-images">
                                                                    <a class="product-image" title="Product Title 02" href="#">
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
                                                                    <h2 class="product-name"><a title="Product Title 02" href="#"> <?php echo $latest_wear_product_list['product_name']; ?></a></h2>



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
<?php
    }else if(isset($_GET['girlsproduct']))
    { ?>
        <ul class="products-grid row even">
                                                        
                                                        
                                                         <?php
                                                 $latest_wear_product=sortingGirlsProductList($sortingtype,$noofitem);
                                                 if($latest_wear_product>0)
                                                 {
                                                     while($latest_wear_product_list=  mysql_fetch_array($latest_wear_product))
                                                     {
                                                ?> 
     
                                                        <li class="item col-md-3 col-sm-6 col-sms-6 col-smb-12 ">
                                                            <div class="item-inner">
                                                                <div class="box-images">
                                                                    <a class="product-image" title="Product Title 02" href="#">
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
                                                                    <h2 class="product-name"><a title="Product Title 02" href="#"> <?php echo $latest_wear_product_list['product_name']; ?></a></h2>



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
<?php
    }else if(isset($_GET['frockproductsorting']))
    { ?>
        <ul class="products-grid row even">
                                                        
                                                        
                                                         <?php
                                                 $latest_wear_product=sortingFrocksProductList($sortingtype,$noofitem);
                                                 if($latest_wear_product>0)
                                                 {
                                                     while($latest_wear_product_list=  mysql_fetch_array($latest_wear_product))
                                                     {
                                                ?> 
     
                                                        <li class="item col-md-3 col-sm-6 col-sms-6 col-smb-12 ">
                                                            <div class="item-inner">
                                                                <div class="box-images">
                                                                    <a class="product-image" title="Product Title 02" href="#">
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
                                                                    <h2 class="product-name"><a title="Product Title 02" href="#"> <?php echo $latest_wear_product_list['product_name']; ?></a></h2>



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
<?php
    }else if(isset($_GET['romperproductsorting']))
    { ?>
        <ul class="products-grid row even">
                                                        
                                                        
                                                         <?php
                                                 $latest_wear_product=sortingRompersProductList($sortingtype,$noofitem);
                                                 if($latest_wear_product>0)
                                                 {
                                                     while($latest_wear_product_list=  mysql_fetch_array($latest_wear_product))
                                                     {
                                                ?> 
     
                                                        <li class="item col-md-3 col-sm-6 col-sms-6 col-smb-12 ">
                                                            <div class="item-inner">
                                                                <div class="box-images">
                                                                    <a class="product-image" title="Product Title 02" href="#">
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
                                                                    <h2 class="product-name"><a title="Product Title 02" href="#"> <?php echo $latest_wear_product_list['product_name']; ?></a></h2>



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
<?php
    }else if(isset($_GET['tshirtproductsorting']))
    { ?>
        <ul class="products-grid row even">
                                                        
                                                        
                                                         <?php
                                                 $latest_wear_product=sortingTshirtProductList($sortingtype,$noofitem);
                                                 if($latest_wear_product>0)
                                                 {
                                                     while($latest_wear_product_list=  mysql_fetch_array($latest_wear_product))
                                                     {
                                                ?> 
     
                                                        <li class="item col-md-3 col-sm-6 col-sms-6 col-smb-12 ">
                                                            <div class="item-inner">
                                                                <div class="box-images">
                                                                    <a class="product-image" title="Product Title 02" href="#">
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
                                                                    <h2 class="product-name"><a title="Product Title 02" href="#"> <?php echo $latest_wear_product_list['product_name']; ?></a></h2>



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
<?php
    }else if(isset($_GET['shortsknickersorting']))
    { ?>
        <ul class="products-grid row even">
                                                        
                                                        
                                                         <?php
                                                 $latest_wear_product=sortingShortsKnickerProductList($sortingtype,$noofitem);
                                                 if($latest_wear_product>0)
                                                 {
                                                     while($latest_wear_product_list=  mysql_fetch_array($latest_wear_product))
                                                     {
                                                ?> 
     
                                                        <li class="item col-md-3 col-sm-6 col-sms-6 col-smb-12 ">
                                                            <div class="item-inner">
                                                                <div class="box-images">
                                                                    <a class="product-image" title="Product Title 02" href="#">
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
                                                                    <h2 class="product-name"><a title="Product Title 02" href="#"> <?php echo $latest_wear_product_list['product_name']; ?></a></h2>



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
<?php
    }else if(isset($_GET['hoodiessorting']))
    { ?>
        <ul class="products-grid row even">
                                                        
                                                        
                                                         <?php
                                                 $latest_wear_product=sortingHoodiesProductList($sortingtype,$noofitem);
                                                 if($latest_wear_product>0)
                                                 {
                                                     while($latest_wear_product_list=  mysql_fetch_array($latest_wear_product))
                                                     {
                                                ?> 
     
                                                        <li class="item col-md-3 col-sm-6 col-sms-6 col-smb-12 ">
                                                            <div class="item-inner">
                                                                <div class="box-images">
                                                                    <a class="product-image" title="Product Title 02" href="#">
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
                                                                    <h2 class="product-name"><a title="Product Title 02" href="#"> <?php echo $latest_wear_product_list['product_name']; ?></a></h2>



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
<?php
    }else if(isset($_GET['tuxedosorting']))
    { ?>
        <ul class="products-grid row even">
                                                        
                                                        
                                                         <?php
                                                 $latest_wear_product=sortingTuxedoProductList($sortingtype,$noofitem);
                                                 if($latest_wear_product>0)
                                                 {
                                                     while($latest_wear_product_list=  mysql_fetch_array($latest_wear_product))
                                                     {
                                                ?> 
     
                                                        <li class="item col-md-3 col-sm-6 col-sms-6 col-smb-12 ">
                                                            <div class="item-inner">
                                                                <div class="box-images">
                                                                    <a class="product-image" title="Product Title 02" href="#">
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
                                                                    <h2 class="product-name"><a title="Product Title 02" href="#"> <?php echo $latest_wear_product_list['product_name']; ?></a></h2>



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
<?php
    }else if(isset($_GET['jacketsorting']))
    { ?>
        <ul class="products-grid row even">
                                                        
                                                        
                                                         <?php
                                                 $latest_wear_product=sortingJacketsProductList($sortingtype,$noofitem);
                                                 if($latest_wear_product>0)
                                                 {
                                                     while($latest_wear_product_list=  mysql_fetch_array($latest_wear_product))
                                                     {
                                                ?> 
     
                                                        <li class="item col-md-3 col-sm-6 col-sms-6 col-smb-12 ">
                                                            <div class="item-inner">
                                                                <div class="box-images">
                                                                    <a class="product-image" title="Product Title 02" href="#">
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
                                                                    <h2 class="product-name"><a title="Product Title 02" href="#"> <?php echo $latest_wear_product_list['product_name']; ?></a></h2>



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
<?php
    }
?>