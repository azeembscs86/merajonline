<script>
      function update_total_cart_amount()
   {            
                     
                        xhr =  new XMLHttpRequest();
			xhr.open('GET','update-total-amount',true);
			xhr.send();
			
			xhr.onreadystatechange=function()
			{
				if(xhr.readyState == 4 && xhr.status == 200)
				{
					document.getElementById("update_amount_cart").innerHTML = xhr.responseText;
                                        
				}
			}
                        
                        xhrr =  new XMLHttpRequest();
			xhrr.open('GET','update-total-item-added',true);
			xhrr.send();
			
			xhrr.onreadystatechange=function()
			{
				if(xhrr.readyState == 4 && xhrr.status == 200)
				{
					document.getElementById("update_total_item_added").innerHTML = xhrr.responseText;
                                        
				}
			}
   }
   
   
  // setInterval(function(){ update_total_cart_amount(); }, 1000);
</script>

<?php

      // Declaring session array For Add Product And Quantity
        if(!isset($_SESSION['cartproductid']))
            {
                $_SESSION['cartproductid']=array();
                $_SESSION['cartproductquantity']=array();
                $_SESSION['cart_product_color']=array();
                $_SESSION['cart_product_size']=array();
                $_SESSION['totalprice']=0;
                
               
            }
?>


<div class="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="page-header-content">
                       <img src="images/logo.png" alt="Incredibles" width="150" />

                                </div>
                            </div>
                            <div class="col-md-5 col-sm-6">
                                <!-- ================= Header Mini Serach ================== -->
                                <form id="search_mini_form" action="#" method="get"  style="display:none;">
                                    <div class="form-search">
                                        <label for="search">Search:</label>
                                        <input id="search" type="text" name="q" value="" class="input-text" maxlength="128" />
                                        <button type="submit" title="Search" class="button"><span><span><i class="fa fa-search"></i></span></span>
                                        </button>
                                        <div id="search_autocomplete" class="search-autocomplete"></div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4 col-sm-3">
                                <div class="position-right">
                                        <ul class="loginnav">
                                            <?php
        
                                                if(!isset($_SESSION['user_loged_id'])){
                                            ?>
                                        <li><a href="user-login"><i class="fa fa-sign-in"></i> Login</a> |</li>
                                        <li><a href="register-new-user"><i class="fa fa-pencil"></i> Register</a></li>
                                                <?php }else{
                                                    $header_user_name = getUserDetails($_SESSION['user_loged_id']);
                                            $user_name_result = mysql_fetch_array($header_user_name);
                                                    ?>
                                        <li><a href="user-profile"> <?php echo $user_name_result['firstname']; ?></a> |</li>
                                        <li><a href="logout"><i class="fa fa-sign-in"></i> Logout</a></li>
                                                <?php } ?>
                                        </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>