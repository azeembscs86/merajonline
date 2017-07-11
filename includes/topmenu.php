<!-- ================= Menu Mobile ================== -->
                                    <div class="nav-mobilemenu-container visible-xs">
                                        <div class="navbar">
                                            <div id="navbar-inner" class="navbar-inner navbar-inactive">
                                                <div class="menu-mobile">
                                                    <a class="btn btn-navbar navbar-toggle">
                                                        <i class="fa fa-bars"></i>
                                                    </a>
                                                    <span class="brand navbar-brand">Menu</span>
                                                </div>
                                                <ul id="nav-mobilemenu" class="mobilemenu nav-collapse collapse">
                                                    <li class="level0 nav-1 level-top first">
                                                        <a href="index.php" class="level-top">
                                                            <span>Home</span>
                                                        </a>
                                                        
                                                    </li>
                                                    <li class="level0 nav-2 level-top">
                                                        <a href="latest-products" class="level-top">
                                                            <span>Clothes</span>
                                                        </a>
                                                        
                                                    </li>
                                                    <li class="level0 nav-3 level-top">
                                                        <a href="jewellery" class="level-top">
                                                            <span>Jewellery</span>
                                                        </a>
                                                    </li>
                                                    <li class="level0 nav-4 level-top">
                                                        <a href="hand-bangs" class="level-top">
                                                            <span>Handbags</span>
                                                        </a>
                                                    </li>
                                                    <li class="level0 nav-5 level-top last">
                                                        <a href="watches" class="level-top">
                                                            <span>Watches</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ================= Nav Megamenus ================== -->
<div id="nav_megamenu" class="nav_megamenu visible-lg visible-md">
                                        <div id="megamenu_home" class="megamenu act">
                                            <div class="level-top"><a href="index.php"><span>Home</span></a>
                                            </div>
                                        </div>
    <div class="megamenu nav_product nav_newproduct">
                                            <div class="level-top"><a href="clothes"><span>Clothes</span><i class="fa fa-angle-down"></i></a><span class="new">Clothes</span>
                                            </div>
                                            <div class="dropdown">

                                                <div class="newproduct">

                                                    <ul class="products-grid">
                                                        <?php
                                                          $latest_products=getClothesProducts();
                                                          if($latest_products>0)
                                                          {
                                                              while($latest_product=  mysql_fetch_array($latest_products))
                                                                      {
                                                           ?>
                                                        <li class="item ">
                                                            <div class="item-inner">
                                                                <div class="box-images">
                                                                    <a href="product-details?productid=<?php echo $latest_product['product_id']; ?>" title="<?php echo $latest_product['product_name']; ?>" class="product-image"><img src="products/product_color/<?php echo $latest_product['product_image']; ?>" width="191" height="222" alt="<?php echo $latest_product['product_name']; ?>" />
                                                                    </a>
                                                                    <ul class="add-to-links">                                                                       

                                                                        <li><a class="view-detail" id='fancybox14' href="product-details?productid=<?php echo $latest_product['product_id']; ?>" title="Quick View"><i class="fa fa-search"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <button onclick="addtocart(<?php echo $latest_product['product_id']; ?>,<?php echo $latest_product['product_price']; ?>)" type="button" title="Add to Cart" class="button btn-cart"><span><span><i class="fa fa-shopping-cart"></i></span></span>
                                                                            </button>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-shop">
                                                                    <h2 class="product-name"><a href="product-details?productid=<?php echo $latest_product['product_id']; ?>" title="<?php echo $latest_product['product_name']; ?>"><?php echo $latest_product['product_name']; ?></a></h2>
                                                                    <div class="price-box">
                                                                        <span class="regular-price">
                                            <span class="price"><?php echo $latest_product['product_price']; ?> PKR</span> </span>

                                                                    </div>                                                                   
                                                                </div>
                                                            </div>
                                                        </li>
                                                         <?php         
                                                              }
                                                          }
                                                        ?>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="megamenu nav_product nav_bestsellerproduct">
                                            <div class="level-top"><a href="jewellery"><span>Jewellery</span><i class="fa fa-angle-down"></i></a><span class="hot">Jewellery</span>
                                            </div>
                                            <div class="dropdown">

                                                <div class="newproduct">

                                                    <ul class="products-grid">
                                                        <?php
                                                          $latest_products=getLatestJweleryProducts();
                                                          if($latest_products>0)
                                                          {
                                                              while($latest_product=  mysql_fetch_array($latest_products))
                                                                      {
                                                           ?>
                                                        <li class="item ">
                                                            <div class="item-inner">
                                                                <div class="box-images">
                                                                    <a href="product-details?productid=<?php echo $latest_product['product_id']; ?>" title="<?php echo $latest_product['product_name']; ?>" class="product-image"><img src="products/product_color/<?php echo $latest_product['product_image']; ?>" width="191" height="222" alt="<?php echo $latest_product['product_name']; ?>" />
                                                                    </a>
                                                                    <ul class="add-to-links">                                                                       

                                                                        <li><a class="view-detail" id='fancybox14' href="product-details?productid=<?php echo $latest_product['product_id']; ?>" title="Quick View"><i class="fa fa-search"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <button onclick="addtocart(<?php echo $latest_product['product_id']; ?>,<?php echo $latest_product['product_price']; ?>)" type="button" title="Add to Cart" class="button btn-cart"><span><span><i class="fa fa-shopping-cart"></i></span></span>
                                                                            </button>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-shop">
                                                                    <h2 class="product-name"><a href="product-details?productid=<?php echo $latest_product['product_id']; ?>" title="<?php echo $latest_product['product_name']; ?>"><?php echo $latest_product['product_name']; ?></a></h2>
                                                                    <div class="price-box">
                                                                        <span class="regular-price">
                                            <span class="price"><?php echo $latest_product['product_price']; ?>  PKR</span> </span>

                                                                    </div>                                                                   
                                                                </div>
                                                            </div>
                                                        </li>
                                                         <?php         
                                                              }
                                                          }
                                                        ?>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ================= Nav Product Megamenus ================== -->
                                        
                                        <div class="megamenu nav_product nav_saleproduct">
                                            <div class="level-top"><a href="hand-bags"><span>Handbags </span><i class="fa fa-angle-down"></i></a><span class="hot">Handbags </span>
                                            </div>
                                      <div class="dropdown">

                                                <div class="newproduct">

                                                    <ul class="products-grid">
                                                        <?php
                                                          $latest_products=getLatestHandbagsProducts();
                                                          if($latest_products>0)
                                                          {
                                                              while($latest_product=  mysql_fetch_array($latest_products))
                                                                      {
                                                           ?>
                                                        <li class="item ">
                                                            <div class="item-inner">
                                                                <div class="box-images">
                                                                    <a href="product-details?productid=<?php echo $latest_product['product_id']; ?>" title="<?php echo $latest_product['product_name']; ?>" class="product-image"><img src="products/product_color/<?php echo $latest_product['product_image']; ?>" width="191" height="222" alt="<?php echo $latest_product['product_name']; ?>" />
                                                                    </a>
                                                                    <ul class="add-to-links">                                                                       

                                                                        <li><a class="view-detail" id='fancybox14' href="product-details?productid=<?php echo $latest_product['product_id']; ?>" title="Quick View"><i class="fa fa-search"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <button onclick="addtocart(<?php echo $latest_product['product_id']; ?>,<?php echo $latest_product['product_price']; ?>)" type="button" title="Add to Cart" class="button btn-cart"><span><span><i class="fa fa-shopping-cart"></i></span></span>
                                                                            </button>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-shop">
                                                                    <h2 class="product-name"><a href="product-details?productid=<?php echo $latest_product['product_id']; ?>" title="<?php echo $latest_product['product_name']; ?>"><?php echo $latest_product['product_name']; ?></a></h2>
                                                                    <div class="price-box">
                                                                        <span class="regular-price">
                                            <span class="price"><?php echo $latest_product['product_price']; ?>  PKR</span> </span>

                                                                    </div>                                                                   
                                                                </div>
                                                            </div>
                                                        </li>
                                                         <?php         
                                                              }
                                                          }
                                                        ?>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>  
                                        
                                        <div class="megamenu nav_product nav_bestsellerproduct">
                                            <div class="level-top"><a href="watches"><span>Watches</span><i class="fa fa-angle-down"></i></a><span class="hot">Watches</span>
                                            </div>
                                             <div class="dropdown">

                                                <div class="newproduct">

                                                    <ul class="products-grid">
                                                        <?php
                                                          $latest_products=getLatestWatchesProducts();
                                                          if($latest_products>0)
                                                          {
                                                              while($latest_product=  mysql_fetch_array($latest_products))
                                                                      {
                                                           ?>
                                                        <li class="item ">
                                                            <div class="item-inner">
                                                                <div class="box-images">
                                                                    <a href="product-details?productid=<?php echo $latest_product['product_id']; ?>" title="<?php echo $latest_product['product_name']; ?>" class="product-image"><img src="products/product_color/<?php echo $latest_product['product_image']; ?>" width="191" height="222" alt="<?php echo $latest_product['product_name']; ?>" />
                                                                    </a>
                                                                    <ul class="add-to-links">                                                                       

                                                                        <li><a class="view-detail" id='fancybox14' href="product-details?productid=<?php echo $latest_product['product_id']; ?>" title="Quick View"><i class="fa fa-search"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <button onclick="addtocart(<?php echo $latest_product['product_id']; ?>,<?php echo $latest_product['product_price']; ?>)" type="button" title="Add to Cart" class="button btn-cart"><span><span><i class="fa fa-shopping-cart"></i></span></span>
                                                                            </button>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-shop">
                                                                    <h2 class="product-name"><a href="product-details?productid=<?php echo $latest_product['product_id']; ?>" title="<?php echo $latest_product['product_name']; ?>"><?php echo $latest_product['product_name']; ?></a></h2>
                                                                    <div class="price-box">
                                                                        <span class="regular-price">
                                            <span class="price"><?php echo $latest_product['product_price']; ?>  PKR</span> </span>

                                                                    </div>                                                                   
                                                                </div>
                                                            </div>
                                                        </li>
                                                         <?php         
                                                              }
                                                          }
                                                        ?>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div id="megamenu_home" class="megamenu">
                                            <div class="level-top"><a href="contact-us"><span>Contact Us</span></a>
                                            </div>
                                        </div>
                                    </div>