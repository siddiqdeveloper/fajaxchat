<div id="menuToggle" class="navbar-toggler">
    <input type="checkbox" />
    <span></span>
    <span class="span2"></span>
    <span></span>
</div>
<?php

use App\Option;

$checkmusic =  Option::getvalue('music');
?>


<div class="zeynep">
    <div style="background:#f6f7f8;">
    
        <img src="/assets/images/mk-logo.png" width="50px">
        <form style="display:inline-block;" class="menusearch" action="/search">
              <input type="text" name="productname" class="menuproductname"  placeholder="Search"> 
        </form>

       
    </div>
   
   <div class="mob-menu-div">
    <div class="mob-menu-div-column">
        <i class="fa fa-home" aria-hidden="true"></i>

         <a   class="onepage" href="/">Home</a>
    </div>
    <?php if(!$checkmusic != ''): ?>
     <div class="mob-menu-div-column">
        <i class="fa fa-music" aria-hidden="true"></i>

           <a class="onepage" href="/music">Music</a>
    </div>
    <?php endif; ?>

   </div>

    <a href="javascript:;" class="close-icon">
    <!-- <img src="/images/close.png"> -->
    <i class="fa fa-search searchpro" ></i>
    </a>
    <ul>
        <li>
           
        </li>

                 <li class="has-submenu">
                        <a  data-submenu="Bedframes">Bed Room</a>
                        <div id="Bedframes" class="submenu">
                            <div class="submenu-header" data-submenu-close="Bedframes">
                                <a href="#" >Categories</a>
                            </div>
                          
                            <ul>
                                <?php

                                            $links = DB::table('category')->where('status','active')->where('parentcategory','198')->get();



                                            ?>
                                            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="/category/<?php echo e($link->categoryname); ?>" class="onepage"> <span class="span">  <?php echo e($link->categoryname); ?> </span></a></li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                            </ul>
                        </div>
                    </li>
                    <li class="has-submenu">
                        <a href="#" data-submenu="Living">Living Room</a>
                        <div id="Living" class="submenu">
                            <div class="submenu-header" data-submenu-close="Living">
                                <a href="#">Categories</a>
                            </div>
                       
                            <ul>
                                           <?php

                                            $links = DB::table('category')->where('status','active')->where('parentcategory','199')->get();



                                            ?>
                                            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="/category/<?php echo e($link->categoryname); ?>" class="onepage"> <span class="span">  <?php echo e($link->categoryname); ?> </span></a></li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                            </ul>
                        </div>
                    </li>
                    <li class="has-submenu">
                        <a href="#" data-submenu="Dining">Dining Room</a>
                        <div id="Dining" class="submenu">
                            <div class="submenu-header" data-submenu-close="Dining">
                                <a href="#">Categories</a>
                            </div>
                       
                            <ul>
                                  <?php

                                            $links = DB::table('category')->where('status','active')->where('parentcategory','200')->get();



                                            ?>
                                            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="/category/<?php echo e($link->categoryname); ?>" class="onepage"> <span class="span">  <?php echo e($link->categoryname); ?> </span></a></li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                            </ul>
                        </div>
                    </li>
                    <li class="has-submenu">
                        <a href="#" data-submenu="Bedroom">Flooring</a>
                        <div id="Bedroom" class="submenu">
                            <div class="submenu-header" data-submenu-close="Bedroom">
                                <a href="#">Categories</a>
                            </div>
                           
                            <ul>
                                 <?php

                                            $links = DB::table('category')->where('status','active')->where('parentcategory','201')->get();



                                            ?>
                                            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="/category/<?php echo e($link->categoryname); ?>" class="onepage"> <span class="span">  <?php echo e($link->categoryname); ?> </span></a></li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                            </ul>
                        </div>
                    </li>



                      <li class="has-submenu">
                        <a href="#" data-submenu="Bespoke">Bespoke</a>
                        <div id="Bespoke" class="submenu">
                            <div class="submenu-header" data-submenu-close="Bespoke">
                                <a href="#">Categories</a>
                            </div>



                            <ul>
                           <?php

                                            $links = DB::table('category')->where('status','active')->where('parentcategory','195')->get();



                                            ?>
                                            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="/category/<?php echo e($link->categoryname); ?>" class="onepage"> <span class="span">  <?php echo e($link->categoryname); ?> </span></a></li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                            </ul>
                        </div>
                    </li>

                    <li class="has-submenu">
                        <a href="#" data-submenu="Floors">Lighting</a>
                        <div id="Floors" class="submenu">
                            <div class="submenu-header" data-submenu-close="Floors">
                                <a href="#">Categories</a>
                            </div>
                            <ul>
                               <?php

                                            $links = DB::table('category')->where('status','active')->where('parentcategory','202')->get();



                                            ?>
                                            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="/category/<?php echo e($link->categoryname); ?>" class="onepage"> <span class="span">  <?php echo e($link->categoryname); ?> </span></a></li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                            </ul>
                        </div>
                    </li>
                    <li class="has-submenu">
                        <a href="#" data-submenu="Rugs">Mirrors</a>
                        <div id="Rugs" class="submenu">
                            <div class="submenu-header" data-submenu-close="Rugs">
                                <a href="#">Categories</a>
                            </div>
                         
                            <ul>
                                <?php

                                            $links = DB::table('category')->where('status','active')->where('parentcategory','203')->get();



                                            ?>
                                            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="/category/<?php echo e($link->categoryname); ?>" class="onepage"> <span class="span">  <?php echo e($link->categoryname); ?> </span></a></li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                            </ul>
                        </div>
                    </li>
                    <li class="has-submenu">
                        <a href="#" data-submenu="Accessories">Accessories & Giftwares</a>
                        <div id="Accessories" class="submenu">
                            <div class="submenu-header" data-submenu-close="Accessories">
                                <a href="#">Categories</a>
                            </div>
                                                        <ul>
                       <?php

                                            $links = DB::table('category')->where('status','active')->where('parentcategory','188')->get();



                                            ?>
                                            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="/category/<?php echo e($link->categoryname); ?>" class="onepage"> <span class="span">  <?php echo e($link->categoryname); ?> </span></a></li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

                            </ul>
                        </div>
                    </li>

                    

<!-- 
                      <li>
 
</li>
 -->

        <li>
            <a class="onepage" href="/room-inspiration">Room Inspiration</a>
        </li>

      
         <li>
            <a class="onepage" href="/blog">Magazine</a>
        </li>
    
        <li>
            <a class="onepage" href="/offers">Offers</a>
        </li>
          <li>
            <a class="onepage" href="/Spin&Win">Spin & win </a>
        </li>
        <li>
            <a class="onepage" href="/contact">Contact</a>
        </li>
          <li>
            <a class="onepage" href="/contact">Support</a>
        </li>

    </ul>

    <div class="socialicons">
        <h4>Connect With Us</h4>
       <div class="flex-center">
            <a href="https://mobile.twitter.com/dubmkelly" target="_blank"> <i class="fa fa-twitter fa-4x icon-3d"></i> </a>
            <a href="https://m.facebook.com/mkelly.interiors/"  target="_blank" > <i class="fa fa-facebook fa-4x icon-3d"></i> </a>
            <a href="https://www.instagram.com/mkellyinteriors/"  target="_blank" > <i class="fa fa-instagram fa-4x icon-3d"></i> </a>
            <a href="#"  target="_blank" style="display:none"> <i class="fa fa-whatsapp fa-4x icon-3d"></i> </a>
              <a href="https://www.linkedin.com/company/m-kelly-interiors-30"  target="_blank" > <i class="fa fa-linkedin fa-4x icon-3d"></i> </a>
    <a href="https://www.pinterest.ie/MKelly_Interiors/"  target="_blank" > <i class="fa fa-pinterest fa-4x icon-3d"></i> </a>
</div>
    </div>
</div>
<div class="zeynep-overlay"></div>
<!-- Header Section Start -->
<div class="header-section section">
    <!-- Header Bottom Start -->
    <div class="header-bottom header-bottom-one">
        <div class="container">
            <div class="row align-items-center justify-content-between mt-12">
                <div class="col  mb-15">
                    <!-- Logo Start -->
                    <div class="header-logo">
                        <a class="onepage" href="/">
                        <img src="/assets/images/logo.png" class="logo">
                        </a>
                    </div>
                    <!-- Logo End -->
                </div>
                <div class="col order-12 order-lg-2  order-xl-2 d-none d-lg-block">
                    <!-- Main Menu Start -->
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li class="">
                                    <a href="/" class="onepage">
                                        <div class="cube flip-to-top">
                                            <div class="default-state">
                                                <span>Home</span>
                                            </div>
                                            <div class="active-state">
                                                <span>Home</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                 <li class="">
                                    <a href="/room-inspiration" class="onepage">
                                        <div class="cube flip-to-top">
                                            <div class="default-state">
                                                <span> Room Inspiration</span>
                                            </div>
                                            <div class="active-state">
                                                <span> Room Inspiration</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="mega-menu three-column">
                                        <li>
                                            <a href="/main/bedroom" class="onepage"> <span class="bt-line"> Bedroom </span> </a>
                                            <ul>

                                            <?php

                                            $links = DB::table('category')->where('status','active')->where('parentcategory','198')->get();



                                            ?>
                                            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="/category/<?php echo e($link->categoryname); ?>" class="onepage"> <span class="span">  <?php echo e($link->categoryname); ?> </span></a></li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                                               
                                            </ul>
                                        </li>
                                        <li>

                                            <a href="/main/living-room" class="onepage"> <span class="bt-line">Living Room </span></a>
                                            <ul>
                                               <?php

                                            $links = DB::table('category')->where('status','active')->where('parentcategory','199')->get();



                                            ?>
                                            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="/category/<?php echo e($link->categoryname); ?>" class="onepage"> <span class="span">  <?php echo e($link->categoryname); ?> </span></a></li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/main/dining-room" class="center-menu onepage"><span class="bt-line">Dining room</span></a>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul>
                                                      <?php

                                            $links = DB::table('category')->where('status','active')->where('parentcategory','200')->get();



                                            ?>
                                            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="/category/<?php echo e($link->categoryname); ?>" class="onepage"> <span class="span">  <?php echo e($link->categoryname); ?> </span></a></li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                                    </ul>
                                                </div>
                                                <div class="col-md-12">
                                                    <a href="/offers" class="center-menu onepage"> <span class="bt-line blink" style="color:#e91e1e"> OFFERS </span> </a>
                                                </div>
                                                <!-- <div class="col-md-12">
                                                    <a href="/room-inspiration" class="center-menu onepage"> <span class="bt-line blink" style="color:#C19A6B">  Room-Inspiration </span> </a>
                                                </div> -->
                                            </div>
                                        </li>
                                        <li>
                                            <a href="/main/flooring" class="onepage"> <span class="bt-line"> Flooring </span> </a>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul>
                                                          <?php

                                            $links = DB::table('category')->where('status','active')->where('parentcategory','201')->get();



                                            ?>
                                            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="/category/<?php echo e($link->categoryname); ?>" class="onepage"> <span class="span">  <?php echo e($link->categoryname); ?> </span></a></li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                                    </ul>
                                                </div>
                                                <div class="col-md-12 hoverli">
                                                    <a href="/Spin&Win" class="center-menu onepage"> <span class="bt-line blink" style="color:#e91e1e"> Spin & win </span> </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-md-12 hoverli">
                                                    <a href="/main/bespoke" class="center-menu onepage"> <span class="bt-line"> BESPOKE </span> </a>
                                                    <ul>
                                                             <?php

                                            $links = DB::table('category')->where('status','active')->where('parentcategory','195')->get();



                                            ?>
                                            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="/category/<?php echo e($link->categoryname); ?>" class="onepage"> <span class="span">  <?php echo e($link->categoryname); ?> </span></a></li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                                    </ul>
                                                </div>
                                                <div class="col-md-12 hoverli">
                                                    <a href="/main/giftwares" class="center-menu onepage"> <span class="bt-line"> Giftwares </span> </a>
                                                    <ul>
                                                          <?php

                                            $links = DB::table('category')->where('status','active')->where('parentcategory','188')->get();



                                            ?>
                                            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="/category/<?php echo e($link->categoryname); ?>" class="onepage"> <span class="span">  <?php echo e($link->categoryname); ?> </span></a></li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                              
                                                <div class="col-md-12 hoverli">
                                                    <a href="/main/lighting" class="center-menu onepage"> <span class="bt-line"> LIGHTING </span> </a>
                                                    <ul>
                                                       


                                                        <?php

                                            $links = DB::table('category')->where('status','active')->where('parentcategory','202')->get();



                                            ?>
                                            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="/category/<?php echo e($link->categoryname); ?>" class="onepage"> <span class="span">  <?php echo e($link->categoryname); ?> </span></a></li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 


                                                    </ul>
                                                </div>
                                                  <div class="col-md-12 hoverli">
                                                    <a href="/main/mirrors"  class="center-menu onepage"> <span class="bt-line"> Mirrors </span> </a>
                                                    <ul>
                                                       

                                                        <?php

                                            $links = DB::table('category')->where('status','active')->where('parentcategory','203')->get();



                                            ?>
                                            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="/category/<?php echo e($link->categoryname); ?>" class="onepage"> <span class="span">  <?php echo e($link->categoryname); ?> </span></a></li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                               <!--  <a href="/room-inspiration" class="onepage"> Room-Inspiration  </a> -->




                                <li class="menu-item-has-children" style="display:none;">
                                    <a href="#">CATEGORY</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children"><a href="">Living Room</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="single-product.html">Dining room</a>
                                            <ul class="sub-menu">
                                                <?php

                                            $links = DB::table('category')->where('status','active')->where('parentcategory','200')->get();



                                            ?>
                                            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="/category/<?php echo e($link->categoryname); ?>" class="onepage"> <span class="span">  <?php echo e($link->categoryname); ?> </span></a></li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="single-product.html">Bedroom</a>
                                            <ul class="sub-menu">
                                               <?php

                                            $links = DB::table('category')->where('status','active')->where('parentcategory','200')->get();



                                            ?>
                                            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="/category/<?php echo e($link->categoryname); ?>" class="onepage"> <span class="span">  <?php echo e($link->categoryname); ?> </span></a></li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="single-product.html">Floors</a>
                                            <ul class="sub-menu">
                                                <li><a href=""> Carpets </a></li>
                                                <li><a href=""> Vinyl </a></li>
                                                <li><a href=""> LVT</a></li>
                                                <li><a href=""> Laminates</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="single-product.html">Lighting</a>
                                            <ul class="sub-menu">
                                                <li><a href=""> Table lamps </a></li>
                                                <li><a href=""> Floor Lamps </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                 <?php if(!$checkmusic != ''): ?>
                                <li>
                                    <a href="/music" class="onepage">
                                        <!--  <div class="cube flip-to-top">
                                            <div class="default-state">
                                                  <span>Be Cool</span>
                                            </div> -->
                                        <!--  <div class="active-state">--  -->
                                        <!--  </div>
                                            </div> -->
                                        <div class="cube flip-to-top">
                                            <div class="default-state">
                                                <span><i class="fa fa-play music-icon red" aria-hidden="true"></i>Music</span>
                                            </div>
                                            <div class="active-state">
                                                <span><i class="fa fa-play music-icon red" aria-hidden="true"></i>Music</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <li>
                                    <a href="/blog" class="onepage">
                                        <div class="cube flip-to-top">
                                            <div class="default-state">
                                                <span>Magazine</span>
                                            </div>
                                            <div class="active-state">
                                                <span>Magazine</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/contact" class="onepage">
                                        <div class="cube flip-to-top">
                                            <div class="default-state">
                                                <span>Contact</span>
                                            </div>
                                            <div class="active-state">
                                                <span>Contact</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Main Menu End -->
                </div>
                <div class="col order-2 order-lg-12 mt-10 order-xl-12">
                    <!-- Header Shop Links Start -->
                    <div class="header-shop-links">
                         <?php if(!$checkmusic != ''): ?>
                        <a href="javascript:;"  title="Play & Pause" id='musicwave' class="header-wishlist tooltip2">
                            <div  class="">  
                                <span></span>  
                                <span></span>  
                                <span></span>  
                                <span></span>  
                                <span></span>  
                            </div>
                        </a>
                        <?php endif; ?>
                        <!-- Compare -->
                        <a href="javascript:void(0)" class="header-wishlist search-btn"
                            onclick="openSearch()"
                            >
                        <i class="ti-search"></i></a>
                        <a href="/login" class="onepage">
                        <i class="ti-user"></i>
                        </a>
                        <!-- Wishlist -->
                        <a href="javascipt:;" id="header-wishlist" class="header-wishlist open-wish-list">
                        <?php if(Auth::check()): ?>
                        <i class="ti-heart"></i><span class="number wishlistcount">
                        <?php 
                            $count = DB::table("wishlist")->where("userId", Auth::User()->id)->count();
                            echo $count;
                            ?>
                        </span>
                        <?php else: ?>
                        <i class="ti-heart"></i>
                        <?php endif; ?>
                        </a>
                        <!-- Cart -->
                        <a href="javascript:;" id="header-cart" class="header-cart"><i class="ti-shopping-cart"></i> <?php if(session()->has('cart_session')): ?><span class="number"><?php echo count(session()->get('cart_session')); ?></span><?php endif; ?></a>
                    </div>
                    <!-- Header Shop Links End -->
                </div>
                <!-- Mobile Menu -->
                <div class="mobile-menu order-12 d-block d-lg-none col"></div>
            </div>
        </div>
    </div>
    <!-- Header Bottom End -->
</div>
<!-- Header Section End -->
<!-- Mini Cart Wrap Start -->                      
<div class="mini-cart-wrap mini-fa-wrap-cat">
    <!-- Mini Cart Top -->
    <div class="mini-cart-top">    
        <button class="close-cart"> Close Cart<i class="icofont icofont-close"></i></button>
    </div>
    <!-- Mini Cart Products -->
    <div id="mini_cart_div_holder" class="mCustomScrollbar">
    </div>
</div>
<!-- Mini Cart Wrap End --> 
<div class="mini-cart-wrap mini-cart-wrap-music mini-cart-wrap2">
    <!-- Mini Cart Top -->
    <div class="mini-cart-top">    
        <button class="close-cart"> WishList<i class="icofont icofont-close"></i></button>
    </div>
    <div id="mini_cart_div_holder2">
    </div>
</div>
<!-- Mini Cart Wrap End --> 
<!-- Cart Overlay -->
<div class="cart-overlay"></div><?php /**PATH C:\wamp64\www\example-app\resources\views/nav.blade.php ENDPATH**/ ?>