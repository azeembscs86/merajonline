
<div class="header-cart-mini">
                                        <div class="topcart-mini-container">
                                            <div id="mini_cart_block">
                                                <div class="block-cart mini_cart_ajax">

                                                    <div class="block-cart">
                                                        <div class="cart-mini-title">

                                                            <a class="shopping-cart" href="cart_page">

                                                                <!--<span class="cart-count"> <span class="asc"> - </span></span>
                   <span class="cart-qty">0</span>-->
                                                                <span class="icon"><i class="fa fa-shopping-cart"></i></span>
                                                            </a>
                                                        </div>
                                                        <div class="top-cart-content">
                                                         <p class="empty">You Total Product Amount .....</p>
                                                      <div class="top-subtotal">Subtotal: <span class="price"><span id="update_amount_cart">
                                                      <?php
                                                              if(isset($_SESSION['totalamountproduct']))
                                                                  {
                                                                  echo $_SESSION['totalamountproduct']." PKR";
                                                                  }else
                                                                      {
                                                                      echo " 0.00 PKR";
                                                                      }
                                                              ?>
                                                      </span></span>
                                                            </div>
                                                            
                                                            <?php
                                                            if(sizeof($_SESSION['cartproductid']) != 0)
                                                            {
                                                            ?>
                                                            <button style="float:right;" type="button" title="Proceed to Checkout" class="button btn-proceed-checkout btn-checkout" onclick="window.location='<?php if(!isset($_SESSION['user_loged_id'])){ echo "user-login"; }else{ echo "shipping-address"; } ?>';"><span><span>Checkout</span></span>
                                                                </button>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <p class="total-cart"><a href="cart_page"><span class="bag">ITEMS </span></a>
                                                        <span class="total-item">(<span id="update_total_item_added"><?php echo sizeof($_SESSION['cartproductid']); ?></span>)</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>