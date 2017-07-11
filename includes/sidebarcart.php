<div class="mscCart">
    <div class="title">
        <span class="fa fa-fw fa-shopping-cart"></span>
        <span class="txtCartMyOrder">My order (<?php echo sizeof($_SESSION['cartproductid']); ?>)</span>
    </div>
    <div class="content">
        <table class="ms_cart_grid">
            <thead class="fsn fwn">
            <tr>
                <th class="pas fss">Products in Cart</th>
                <th class="pas fss">Qty</th>
                <th class="pas fss txtRight">Price</th>
            </tr>
            </thead>
            <tbody class="cartItems">
                    
                
                
                <?php
                    while (list ($key, $val) = each ($_SESSION['cartproductid'])) { 
                    $get_products_det = getProductDetail($val);
                    $get_products=  mysql_fetch_array($get_products_det);
                ?>
                <tr class="ms_cart_border_top">
                    <td class="article pas txtLeft vMid">
                        <div class="lfloat ms_cart-txt">
                            <div><b></b></div>
                                                        <div class="txtGray cart-brand"> <?php echo $get_products['product_name']; ?></div>
                                                        <div>
                                                            <div class="txtGray cart-unique" style="display: none;">Size: <?php echo $_SESSION['cart_product_size'][$key] ?></div>
                                                            </div>
                        </div>
                    </td>
                    <td class="amount fss txtCenter pas"><?php echo $_SESSION['cartproductquantity'][$key] ?></td>
                    <td class="total fss pas txtRight">
                        <div class="price">
                        <span>Rs.</span>
                            <span>&nbsp;<?php echo $get_products['product_price']; ?></span>
                         
                                                </div>
                        
                        
                    </td>
                </tr>
                <tr>
                    <td align="right" colspan="3" class="total fss pas txtRight"><a class="" href="remove_single_item.php?removeitemnum=<?php echo $key ?>" title="Remove Item">Remove</a></td>
                    
                </tr>
                    <?php } ?>
                
                
                
                
                                        </tbody>
        </table>
    </div>
    </div>
        <div class="box mscSummary">
            <div class="mscCart">
            <div class="title hasLink">
                <span class="lfloat txt">Shipping Address</span>
                            </div>
            <div id="shipping_address_summary" class="content">
                <div class="address">
    <p>
        <span class="address-name"><?php echo $shipping_user_result['firstname']." ".$shipping_user_result['lastname']; ?></span><br>
        <span class="address-address1"></span><br>
        <span class="address-city"><?php echo $shipping_city_result['city_name'] ?></span><br>
        <span class="address-postcode"></span><br>
    </p>
    <p class="mbs">
        <span class="address-phone"><?php echo $shipping_user_result['mobile_number'] ?></span><br>
                    <span class="address-additional-phone"></span><br>
            </p>
</div>

            </div>
        </div>
    
    
    </div>
        <div class="box mscTotal mtm mscCart">
    <div class="content  fsm">
        <table class="ui-grid ui-gridFull" id="checkoutCartSummary">
            <tbody class="cartSummary txtLeft">
            


                            <tr class="grandTotal fsml strong">
                    <td class="txtLeft ms_grand_total">TOTAL</td>
                    <td class="ms_grand_total txtRight"><span data-currency-iso="PKR">Rs.</span> <span data-price="3698" dir="ltr">&nbsp;<?php echo $_SESSION['totalamountproduct'] ?></span> </td>
                </tr>
            
            </tbody>
        </table>
    </div>
</div>