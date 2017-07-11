<div class="vmegamenu-contain">
                                            <ul id="nav_vmegamenu" class="nav_vmegamenu">

                                                <?php
                                                 $clothing_types=getClothingTypeCatogries();
                                                 if($clothing_types>0)
                                                 {
                                                 
                                                     while($clothing_type=  mysql_fetch_array($clothing_types))
                                                     {
                                                ?>   
                                                <li class="level0 nav-3">
                                                    <a href="left_categories_items.php?category_type=<?php echo $clothing_type['catogry_id'] ?>">
                                                        <span><?php echo $clothing_type['catogery_name']; ?></span>
                                                    </a>
                                                </li>
                                                <?php        
                                                
                                               
                                                     }
                                                 }
                                                ?>                                                
                                            </ul>
                                        </div>