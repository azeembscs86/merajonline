<div class="footer-static-block"> 
        <div class="container">
                <div class="container-inner">     
                        <div class="row">
                                <br />
                        </div>
                </div>
        </div>
</div>
<footer class="footer-wrapper">
                <div class="footer-information">
                    <div class="container">
                        <div class="container-inner">
                            
                            <!-- ================= Footer Number ================== -->
                            <div class="footer-info-2">
                                <div class="f-col f-col1 col-sm-6 col-md-6 col-sms-6 col-smb-12">
                                    <!-- ================= Footer Col1 ================== -->
                                    <ul class="listft">
									<li><a href="index.php"><span>Home</span></a></li>
                                    <li><a href="clothes"><span>Clothes</span></a></li>
                                    <li><a href="jewellery"><span>Jewellery</span></a></li>
                                    <li><a href="hand-bags"><span>Handbags </span></a></li>
                                    <li><a href="watches"><span>Watches</span></a></li>	
									</ul>
                                    
                                </div>
                                <!-- ================= Footer Social ================== -->
                                <div class="position-right">
                                    <h3>connect with us</h3>
                                    <ul class="link-follow ">
                                        <li class="first"><a class="facebook fa fa-facebook" href="#"><span>facebook</span></a>
                                        </li>
                                        <li><a class="twitter fa fa-twitter" href="#"><span>twitter</span></a>
                                        </li>
                                        <li><a class="rss fa fa-rss" href="#"><span>rss</span></a>
                                        </li>
                                        <li><a class="google fa fa-google-plus" href="#"><span>google+</span></a>
                                        </li>
                                        <li><a class="instagram fa fa-instagram" href="#"><span>instagram</span></a>
                                        </li>
                                        <li class="last"><a class="pinterest fa fa-pinterest-p" href="#"><span>pinterest</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-container">
                    <div class="container">
                        <div class="container-inner">
                            <div class="footer">
                                <div class="row">
                                    <!-- ================= Copyright ================== -->
                                    <div class="col-xs-12 col-sm-6">
                                        <address class="copyright">Copyright &copy; 2015 by <a href="#">Meraj online</a>. powered by golive.</address>
                                    </div>
                                    
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="back-top" class="hidden-xs"><i class="fa fa-angle-up"></i>
                </div>
            </footer>
            <div id="add_to_cart" class="wrapper_inboxCart" style="display: none;">
            <div class="ajaxcartReponse">
            <p class="info">Item was added to your cart</p>
            </div>
            </div>
<!-- ================= Java Scripts ================== -->
    <!-- Prototype JS -->
    <script type="text/javascript" src="js/prototype/prototype.js"></script>
    <!-- Effects JS -->
    <script type="text/javascript" src="js/scriptaculous/effects.js"></script>
    <!-- Controls JS -->
    <script type="text/javascript" src="js/scriptaculous/controls.js"></script>
    <!-- Js JS -->
    <script type="text/javascript" src="js/varien/js.js"></script>
    <!-- Cookies JS -->
    <script type="text/javascript" src="js/mage/cookies.js"></script>
    <!-- JQurey JS -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Noconflict JS -->
    <script type="text/javascript" src="js/noconflict.js"></script>
    <!-- Fancybox JS -->
    <script type="text/javascript" src="js/plugin/jquery.fancybox.pack.js"></script>
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>
    <!-- Bootstrap ToolTips JS -->
    <script type="text/javascript" src="js/bootstrap/bootstrap-tooltip.js"></script>
    <!-- Themevast JS -->
    <script type="text/javascript" src="js/themevast.js"></script>
    <!-- Bxslider JS -->
    <script type="text/javascript" src="js/plugin/jquery.bxslider.js"></script>
    <!-- Megamenu JS -->
    <script type="text/javascript" src="js/megamenu.js"></script>
    <!-- Jssor JS -->
    <script type="text/javascript" src="js/plugin/jssor.js"></script>
    <!-- jssor slider JS -->
    <script type="text/javascript" src="js/plugin/jssor.slider.js"></script>
    <!--  Custom JS  -->
    <script type="text/javascript" src="js/custom.js"></script>
    <script>
           
   // Add To Cart 
    
   function addtocart(prodid,prodprice)
   {            
            xhr =  new XMLHttpRequest();
			xhr.open('GET','addtocartpage.php?productid='+prodid+'&productprice='+prodprice,true);
			xhr.send();
			document.getElementById('add_to_cart').style.display='block';
			
			xhr.onreadystatechange=function()
			{
				if(xhr.readyState == 4 && xhr.status == 200)
				{
					
				}
			}
			
			setTimeout(function(){ update_total_cart_amount(); }, 1000);
                        setTimeout(function(){ update_total_cart2(); }, 2000);
                        setTimeout(function () {document.getElementById('add_to_cart').style.display='none'}, 2000); return false
   }
   
     
    </script>
    
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="css/styles-ie.css" media="all" />
    <script type="text/javascript" src="js/html5shiv.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->
    <!--[if lt IE 7]>
    <script type="text/javascript" src="js/ds-sleight.js"></script>
    <script type="text/javascript" src="js/ie6.js"></script>
    <![endif]-->
   