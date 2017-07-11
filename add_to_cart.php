<?php
session_start();
include("dbconnection.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $web_title; ?></title>
        <meta name="description" content="Default Description" />
        <meta name="keywords" content="Magento, Varien, E-commerce" />
        <meta name="robots" content="INDEX,FOLLOW" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

            <!-- ================= Favicon ================== -->
            <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
            <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
            <!--[if lt IE 7]>
            <script type="text/javascript">
            //<![CDATA[
                var BLANK_URL = 'js/blank.html';
                var BLANK_IMG = 'js/spacer.gif';
            //]]>
            </script>
            <![endif]-->
            <!-- ================= Style Sheets ================== -->
            <!-- fancybox CSS -->
            <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="all" />
            <!-- Bx Slider CSS -->
            <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="all" />
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css" media="all" />
            <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" media="all" />
            <!-- Font Awesome CSS -->
            <link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all" />
            <!-- Animate CSS -->
            <link rel="stylesheet" type="text/css" href="css/animate.css" media="all" />
            <!-- Ajaxcart CSS -->
            <link rel="stylesheet" type="text/css" href="css/ajaxcart.css" media="all" />
            <!-- Megamenu CSS -->
            <link rel="stylesheet" type="text/css" href="css/megamenu.css" media="all" />
            <!-- Vmegamenu CSS -->
            <link rel="stylesheet" type="text/css" href="css/vmegamenu.css" media="all" />
            <!-- Testimonial CSS -->
            <link rel="stylesheet" type="text/css" href="css/testimonial.css" media="all" />
            <!-- Imageslider CSS -->
            <link rel="stylesheet" type="text/css" href="css/imageslider.css" media="all" />
            <!-- Style CSS -->
            <link rel="stylesheet" type="text/css" href="css/styles.css" media="all" />
            <!-- Mobileresponsive CSS -->
            <link rel="stylesheet" type="text/css" href="css/mobileresponsive.css" media="all" />

            <script>



                function NoOfItemslist(nooflist)
                {
                    xhr = new XMLHttpRequest();
                    xhr.open('GET', 'no_of_item_display.php?girlsitemshow=' + nooflist, true);
                    xhr.send();

                    xhr.onreadystatechange = function ()
                    {
                        if (xhr.readyState == 4 && xhr.status == 200)
                        {
                            document.getElementById("changedynamicitems").innerHTML = xhr.responseText;
                        }
                    }
                }

                function Sorting(sortingtype)
                {
                    var totaldisplayitemnum = document.getElementById("nolistcount").value;
                    xhr = new XMLHttpRequest();
                    xhr.open('GET', 'sorting-item-page.php?sortingtypeval=' + sortingtype + '&totalitemdisplay=' + totaldisplayitemnum + '&girlsproduct=boyproduct', true);
                    xhr.send();

                    xhr.onreadystatechange = function ()
                    {
                        if (xhr.readyState == 4 && xhr.status == 200)
                        {
                            document.getElementById("changedynamicitems").innerHTML = xhr.responseText;
                        }
                    }
                }


                // Change Quantity
                function change_quantity_function(quantityvalue, quantitykey, productcurrentprice, spanid)
                {
                    xhr = new XMLHttpRequest();
                    xhr.open('GET', 'change_quantity.php?quantity_value=' + quantityvalue + '&quantity_key=' + quantitykey + '&product_current_price=' + productcurrentprice, true);
                    xhr.send();

                    xhr.onreadystatechange = function ()
                    {
                        if (xhr.readyState == 4 && xhr.status == 200)
                        {
                            document.getElementById("change_quantity" + spanid).innerHTML = xhr.responseText;
                        }
                    }

                    setTimeout(function () {
                        update_total_cart_amount();
                    }, 1000);
                    setTimeout(function () {
                        update_total_cart2();
                    }, 2000);
                }


                // Change Size
                function change_size_function(sizevalue, sizekey)
                {
                    xhr = new XMLHttpRequest();
                    xhr.open('GET', 'change_size.php?size_value=' + sizevalue + '&size_key=' + sizekey, true);
                    xhr.send();

                    xhr.onreadystatechange = function ()
                    {
                        if (xhr.readyState == 4 && xhr.status == 200)
                        {

                        }
                    }
                }

                // Change Color
                function change_color_function(colorvalue, colorkey)
                {

                    xhr = new XMLHttpRequest();
                    xhr.open('GET', 'change_color.php?color_value=' + colorvalue + '&color_key=' + colorkey, true);
                    xhr.send();

                    xhr.onreadystatechange = function ()
                    {
                        if (xhr.readyState == 4 && xhr.status == 200)
                        {

                        }
                    }
                }









            </script>

    </head>

    <body class=" cms-index-index cms-homepage2">
        <!-- ================= Main Wrapper ================== -->
        <div class="wrapper">
            <!-- ================= No Script ================== -->
            <noscript>
                <div class="global-site-notice noscript">
                    <div class="notice-inner">
                        <p>
                            <strong>JavaScript seems to be disabled in your browser.</strong>
                            <br /> You must have JavaScript enabled in your browser to utilize the functionality of this website. </p>
                    </div>
                </div>
            </noscript>
            <div class="page">
                <!-- ================= Header Wrapper ================== -->
                <header class="header-wrapper">
                    <!-- ================= Header ================== -->
                    <?php include("includes/header.php"); ?>
                    <div class="header-menu-bar">
                        <div class="container">
                            <div class="container-inner">
                                <!-- ================= Menu Toolbar ================== -->
                                <div class="menu-toolbar">
                                    <div class="search-cart-top">
                                        <!-- ================= Header Top Links ================== -->
                                        <?php
                                        include("includes/user-settings.php");
                                        ?>
                                        <!-- ================= Header Cart Mini================== -->
                                        <?php include("includes/maincart.php"); ?>

                                    </div>
                                    <!-- ================= Nav Container ================== -->
                                    <nav class="nav-container">
                                        <!-- ================= Menu Mobile ================== -->
                                        <div class="nav-mobilemenu-container visible-xs">
                                            <?php
                                            include("includes/mainnav.php");
                                            ?>
                                        </div>
                                        <!-- ================= Nav Megamenus ================== -->
                                        <?php include("includes/topmenu.php") ?>

                                    </nav>
                                    <div class="nav-vcontainer hidden-xs hidden-sm">
                                        <div class="nav-inner">
                                            <div class="vmegamenu-title">
                                                <h2><i class="fa fa-bars"></i></h2>
                                            </div>
                                            <?php
                                            include("includes/leftcatogries.php");
                                            ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>


                        function update_total_cart2()
                        {



                            xhr = new XMLHttpRequest();
                            xhr.open('GET', 'update-total-amount', true);
                            xhr.send();

                            xhr.onreadystatechange = function ()
                            {
                                if (xhr.readyState == 4 && xhr.status == 200)
                                {
                                    document.getElementById("newidupdate2").innerHTML = xhr.responseText;

                                }
                            }


                        }


                        // setInterval(function(){ update_total_cart(); }, 1000);
                        //  setInterval(function(){ update_total_cart2(); }, 1000);
                    </script>
                </header>
                <!-- ================= Main Section ================== -->
                <?php
                if (sizeof($_SESSION['cartproductid']) != 0) {
                    ?>
                    <section class="main-wrapper">
                        <div class="container">
                            <div class="container-inner">
                                <div class="main-page">
                                    <div class="main-container col1-layout">
                                        <div class="main">
                                            <div class="col-main">
                                                <div class="cart display-single-price">
                                                    <div class="page-title title-buttons">
                                                        <h1>Shopping Cart</h1>
                                                    </div>
                                                    <form action="#" method="post">
                                                        <input name="form_key" type="hidden" value="CBXOugxLEgfTTFve" />
                                                        <table id="shopping-cart-table" class="cart-table data-table">
                                                            <thead>
                                                                <tr>
                                                                    <th rowspan="1"><span class="nobr">Images</span>
                                                                    </th>

                                                                    <th rowspan="1">Product name</th>

                                                                    <th class="a-center cart-price-head" colspan="1">
                                                                        <!--                            <div class="cart-price-placeholder">-->
                                                                        <span class="nobr">Price</span>
                                                                        <!--                            </div>-->
                                                                    </th>

                                                                    <th rowspan="1" class="a-center">
                                                                        Qty

                                                                    </th>
                                                                    

                                                                    <th class="a-center cart-total-head" colspan="1">
                                                                        <!--                            <div class="cart-total-placeholder">-->
                                                                        Subtotal
                                                                        <!--                            </div>-->
                                                                    </th>

                                                                    <th class="a-center" rowspan="1">&nbsp;</th>

                                                                </tr>
                                                            </thead>
                                                            <tfoot>
                                                                <tr>
                                                                    <td class="a-right cart-footer-actions">

                                                                        <!-- Make this button the first responder rather than empty cart -->
                                                                        <button type="submit" style="visibility:hidden;" name="update_cart_action" value="update_qty" title="Update Shopping Cart" class="button btn-update"><span><span>Update Shopping Cart</span></span>
                                                                        </button>

                                                                        <a href="emplty_cart.php"> <button type="button" name="update_cart_action" value="empty_cart" title="Empty Cart" class="button btn-empty" id="empty_cart_button"><span><span>Empty Cart</span></span>
                                                                            </button> </a>


                                                                    </td>
                                                                </tr>

                                                            </tfoot>
                                                            <tbody>

                                                                <!-------- Show Cart Items -------->

                                                                <?php
                                                                $counter = 0;
                                                                while (list ($key, $val) = each($_SESSION['cartproductid'])) {
                                                                    $counter++;
                                                                    $get_product_details = getProductDetail($val);
                                                                    $get_product = mysql_fetch_array($get_product_details);
                                                                    ?>

                                                                    <tr>
                                                                        <td class="product-cart-image">
                                                                            <a  title="Product Title 02" class="product-image">
                                                                                <img width="50px" height="50px" src="products/product_color/<?php echo $get_product['product_image']; ?>" alt="Product Title 02" />
                                                                            </a>

                                                                            <ul class="cart-links">
                                                                                <li>
                                                                                    <a href="#" title="Edit item parameters">Edit</a>
                                                                                </li>

                                                                            </ul>
                                                                        </td>

                                                                        <td class="product-cart-info">

                                                                            <a href="#" title="Remove Item" class="btn-remove btn-remove2">Remove Item</a>

                                                                            <h2 class="product-name">
                                                                                <a href="#"><?php echo $get_product['product_name']; ?></a>
                                                                            </h2>






                                                                        </td>


                                                                        <td class="product-cart-price" data-rwd-label="Price" data-rwd-tax-label="Excl. Tax">

                                                                            <span class="cart-price">
                                                                                <span class="price"><?php echo $get_product['product_price']; ?> PKR</span>
                                                                            </span>

                                                                        </td>
                                                                        <!-- inclusive price starts here -->
                                                                        <td class="product-cart-actions" data-rwd-label="Qty">
                                                                            <input type="text" pattern="\d*" onkeyup="change_quantity_function(this.value,<?php echo $key ?>,<?php echo $get_product['product_price']; ?>,<?php echo $counter; ?>)" name="cart[576][qty]" value="<?php echo $_SESSION['cartproductquantity'][$key]; ?>" size="4" title="Qty" class="input-text qty" maxlength="12" />

                                                                            <button type="submit" name="update_cart_action" value="update_qty" title="Update" class="button btn-update"><span><span>Update</span></span>
                                                                            </button>



                                                                        </td>

                                                                        <!-- Product Size -->
                                                                        

                                                                        <!-- Product Color -->
                                                                        

                                                                        <!--Sub total starts here -->
                                                                        <td class="product-cart-total" data-rwd-label="Subtotal">
                                                                            <span class="cart-price" id="change_quantity<?php echo $counter; ?>">

                                                                                <span class="price" ><?php echo $get_product['product_price'] * $_SESSION['cartproductquantity'][$key] ?> PKR</span>
                                                                            </span>
                                                                        </td>

                                                                        <td >

                                                                            <a href="remove_single_item.php?removeitemnum=<?php echo $key ?>" title="Remove Item" >Remove</a>

                                                                        </td>
                                                                    </tr>

        <?php
    }
    ?>

                                                            </tbody>
                                                        </table>
                                                        <script type="text/javascript">
                                                            decorateTable('shopping-cart-table')
                                                        </script>
                                                    </form>

                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4">
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4">
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4">
                                                            <div class="totals">
                                                                <div class="totals-title">Total Cart</div>
                                                                <table id="shopping-cart-totals-table">
                                                                    <tfoot>

                                                                    </tfoot>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="" class="a-right" colspan="1">
                                                                                Total Price </td>
                                                                            <td style="" class="a-right">
                                                                                <span class="price"><span id="newidupdate2">
    <?php
    if (isset($_SESSION['totalamountproduct'])) {
        echo $_SESSION['totalamountproduct'] . " PKR";
    } else {
        echo " 0.00 PKR";
    }
    ?>
                                                                                    </span></span> </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <ul class="checkout-types bottom">
                                                                    <li class="method-checkout-cart-methods-onepage">
                                                                        <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout btn-checkout" onclick="window.location = '<?php if (!isset($_SESSION['user_loged_id'])) {
        echo "user-login";
    } else {
        echo "shipping-address";
    } ?>';"><span><span>Proceed to Checkout</span></span>
                                                                        </button>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
<?php } else { ?>
                    <section class="main-wrapper">
                        <div class="container">
                            <div class="container-inner">
                                <div class="main-page">
                                    <div class="main-container col1-layout">
                                        <div class="main">
                                            <div class="col-main">
                                                <div class="cart display-single-price">
                                                    <div class="page-title title-buttons">
                                                        <center><h1>Your shopping cart is empty</h1></center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
<?php } ?>
                <!-- ================= Footer Static ================== -->

                <!-- ================= Footer ================== -->
                <?php include("includes/footer.php"); ?>
            </div>
        </div>


    </body>

</html>