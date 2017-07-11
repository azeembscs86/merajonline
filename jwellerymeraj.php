<?php
include('dbconnection.php');
//   Boys Dynamic Diplay Item
if(isset($_GET['boysitemshow']))
    {  ?>
<ul class="products-grid row even">
<?php
    $boys_wear_product=changeJwelleryProductList($_GET['boysitemshow']);
    if($boys_wear_product>0)
    {
      while($boys_wear_product_list=  mysql_fetch_array($boys_wear_product))
      {
 ?> 
    <li class="item col-md-3 col-sm-6 col-sms-6 col-smb-12 ">
                    <div class="item-inner">
                        <div class="box-images">
                            <a class="product-image" title="Product Title 02" href="#">
                                <img alt="Product Title 02" src="products/product_color/<?php echo $boys_wear_product_list['product_image']; ?>">
                            </a>
                            <ul class="add-to-links">


                                <li><a href="product-details?productid=<?php echo $boys_wear_product_list['product_id']; ?>" class="view-detail" data-original-title="Quick View" data-tip="left"><i class="fa fa-search"></i></a>
                                </li>

                                <li>
                                    <button onclick="addtocart(<?php echo $boys_wear_product_list['product_id']; ?>,<?php echo $boys_wear_product_list['product_price']; ?>)" class="button btn-cart" type="button" data-original-title="Add to Bag" data-tip="left"><span><span><i class="fa fa-shopping-cart"></i></span></span>
                                    </button>
                                </li>

                            </ul>

                            <div class="product-shop">
                                <h2 class="product-name"><a title="Product Title 02" href="#"> <?php echo $boys_wear_product_list['product_name']; ?></a></h2>



                                <div class="price-box">



                                    <p class="special-price">
                                        <span class="price-label">Special Price</span>
                                        <span class="price">
                                            <?php echo $boys_wear_product_list['product_price']; ?> PKR               </span>
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
  <?php  }
  
  if(isset($_GET['girlsitemshow']))
    {  ?>
<ul class="products-grid row even">
                                                        
                                                        
                                                         <?php
                                                 $girls_wear_product=changegirlsProductList($_GET['girlsitemshow']);
                                                 if($girls_wear_product>0)
                                                 {
                                                     while($girls_wear_product_list=  mysql_fetch_array($girls_wear_product))
                                                     {
                                                ?> 
     
    <li class="item col-md-3 col-sm-6 col-sms-6 col-smb-12 ">
                    <div class="item-inner">
                        <div class="box-images">
                            <a class="product-image" title="Product Title 02" href="#">
                                <img alt="Product Title 02" src="products/product_color/<?php echo $girls_wear_product_list['product_image']; ?>">
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
    <?php }
    
    
    
    if(isset($_GET['kidsitemshow']))
    {  ?>
<ul class="products-grid row even">
                                                        
                                                        
                                                         <?php
                                                 $kids_wear_product=changeKidsProductList($_GET['kidsitemshow']);
                                                 if($kids_wear_product>0)
                                                 {
                                                     while($kids_wear_product_list=  mysql_fetch_array($kids_wear_product))
                                                     {
                                                ?> 
     
    <li class="item col-md-3 col-sm-6 col-sms-6 col-smb-12 ">
                    <div class="item-inner">
                        <div class="box-images">
                            <a class="product-image" title="Product Title 02" href="#">
                                <img alt="Product Title 02" src="products/product_color/<?php echo $kids_wear_product_list['product_image']; ?>">
                            </a>
                            <ul class="add-to-links">

                                <li><a href="product-details?productid=<?php echo $kids_wear_product_list['product_id']; ?>" class="view-detail" data-original-title="Quick View" data-tip="left"><i class="fa fa-search"></i></a>
                                </li>

                                <li>
                                    <button onclick="addtocart(<?php echo $kids_wear_product_list['product_id']; ?>,<?php echo $kids_wear_product_list['product_price']; ?>)" class="button btn-cart" type="button" data-original-title="Add to Bag" data-tip="left"><span><span><i class="fa fa-shopping-cart"></i></span></span>
                                    </button>
                                </li>

                            </ul>

                            <div class="product-shop">
                                <h2 class="product-name"><a title="Product Title 02" href="#"> <?php echo $kids_wear_product_list['product_name']; ?></a></h2>



                                <div class="price-box">



                                    <p class="special-price">
                                        <span class="price-label">Special Price</span>
                                        <span class="price">
                                            <?php echo $kids_wear_product_list['product_price']; ?> PKR               </span>
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


    <?php }
  
      if(isset($_GET['allitemshow']))
    {  ?>
<ul class="products-grid row even">
                                                        
                                                        
                                                         <?php
                                                 $latest_wear_product=changeLatestProductList($_GET['allitemshow']);
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


    <?php }
    
    if(isset($_GET['frocklist']))
    {  ?>
<ul class="products-grid row even">
                                                        
                                                        
                                                         <?php
                                                 $latest_wear_product=changeFrocksProductlist($_GET['frocklist']);
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


    <?php }
    
    
    if(isset($_GET['romperlist']))
    {  ?>
<ul class="products-grid row even">
                                                        
                                                        
                                                         <?php
                                                 $latest_wear_product=changeRompersProductlist($_GET['romperlist']);
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


    <?php }
    
    if(isset($_GET['tshirtlist']))
    {  ?>
<ul class="products-grid row even">
                                                        
                                                        
                                                         <?php
                                                 $latest_wear_product=changeTshirtProductlist($_GET['tshirtlist']);
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


    <?php }
    
    if(isset($_GET['shortsknickerlist']))
    {  ?>
<ul class="products-grid row even">
                                                        
                                                        
                                                         <?php
                                                 $latest_wear_product=changeShortsKnickerProductlist($_GET['shortsknickerlist']);
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


    <?php }
    
    
    if(isset($_GET['hoodieslist']))
    {  ?>
<ul class="products-grid row even">
                                                        
                                                        
                                                         <?php
                                                 $latest_wear_product=changeHoodiesProductlist($_GET['hoodieslist']);
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


    <?php }
    
    
    if(isset($_GET['tuxedolist']))
    {  ?>
<ul class="products-grid row even">
                                                        
                                                        
                                                         <?php
                                                 $latest_wear_product=changeTuxedoProductlist($_GET['tuxedolist']);
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


    <?php }
    
    
    if(isset($_GET['jacketlist']))
    {  ?>
<ul class="products-grid row even">
                                                        
                                                        
                                                         <?php
                                                 $latest_wear_product=changeJacketsProductlist($_GET['jacketlist']);
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


    <?php }
  

?>

