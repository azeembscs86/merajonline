<div class="header-toplinks">
                                        <span class="icon-account"><i class="fa fa-key"></i></span>
                                        <ul class="links">
                                            
                                            <?php
                                                if(isset($_SESSION['user_loged_id'])){
                                            ?>
                                            <li class="first"><a href="user-profile" title="Account">Account</a>
                                            </li>
                                                <?php } ?>
                                            
                                            <li><a href="cart_page" title="My Cart" class="top-link-cart">Shopping Cart</a>
                                            </li>
                                            
                                            
                                            <?php
                                                if(isset($_SESSION['user_loged_id'])){
                                            ?>
                                            <li><a href="shipping-address" title="Checkout" class="top-link-checkout">Checkout</a>
                                            </li>
                                            
                                             <?php }else{ ?>
                                            <li><a href="user-login" title="Checkout" class="top-link-checkout">Checkout</a>
                                            </li>
                                             <?php } ?>
                                           
                                            <?php
                                                if(!isset($_SESSION['user_loged_id'])){
                                            ?>
                                            <li class=" last"><a href="user-login" title="Login">Login</a>
                                            </li>
                                            <li class="login-register">
                                                <a href="register-new-user" title="Customer Register">Register</a>

                                            </li>
                                                <?php } ?>
                                        </ul>
                                    </div>