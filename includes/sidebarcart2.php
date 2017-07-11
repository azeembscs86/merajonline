<div class="mscCart">
    
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