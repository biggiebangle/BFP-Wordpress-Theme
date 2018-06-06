  <?php 
 /* Template Name: Shop Home Page */ 
 ?>
 <?php get_header('store'); ?>


 
 <!-- shop page in wp --> 
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
           
	<div class="container" ng-app="shop"> 
  

        <div class="row">
        	<div class="col-sm-3">
             <h2><a class="btn-home" href="/bfp-shop">Shop</a></h2>
             
             		<menu-categories></menu-categories>

        	</div>
        	<div class="col-sm-9">

            
 
                   <!-- Carousel
                ================================================== -->
                <div id="myShopCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myShopCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myShopCarousel" data-slide-to="1"></li>
                        <li data-target="#myShopCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img class="first-slide" src="/wp-content/themes/bfp/img/shop/shopCarousel-spread-the-word.jpg" alt="Spread the word">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>Spread the word!</h1>
                                    <p class="description">Find items that help you to educate the world about animal testing and BFP's mission.
                                    </p>
                                    <a class="btn btn-lg btn-primary" href="../shop/#!/Spread-the-Word/c/20496010" role="button">Spread the word!</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="second-slide" src="/wp-content/themes/bfp/img/shop/shopCarousel-apparel.jpg" alt="Apparel">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>Apparel</h1>
                                    <p class="description">Let the world know that you are against animal testing with our Beagle Freedom Project apparel.
                                    </p>
                                    <p><a class="btn btn-lg btn-primary" href="../shop/#!/Apparel/c/20496005" role="button">Browse Apparel</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="third-slide" src="/wp-content/themes/bfp/img/shop/shopCarousel-gifts.jpg" alt="Gifts">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>Gifts</h1>
                                    <p class="description">Give someone a compassionate gift to show your support for Beagle Freedom Project.
                                    </p>
                                    <p><a class="btn btn-lg btn-primary" href="../shop/#!/Gifts/c/20496006" role="button">Browse Gifts</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myShopCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myShopCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- /.carousel -->
                <div id="myShopHighlights" class="row shop-highlights overflow-img">
                    <div class="col-sm-4 highlight overflow-img">
                        <a class="highlight-link inverse-text overflow-img" href="../shop/#!/Donation-Card-$50/p/58005139/category=20496008">
                        <span class="image-hover"></span>
                        <img class="img-responsive" src="/wp-content/themes/bfp/img/shop/shopHighlight-dedicated-donation-card.jpg" alt="Dedicated Donation Cards">
                        <span class="highlight-text">Dedicated Donation card</span>
                        </a>
                    </div>
                    <div class="col-sm-4 highlight ">
                        <a class="highlight-link inverse-text" href="../shop/#!/T-Shirt-Animal-Testing-Sucks/p/65427186/category=20496005">
                        <span class="image-hover"></span>
                        <img class="img-responsive" src="/wp-content/themes/bfp/img/shop/shopHighlight-animal-testing-shirt.jpg" alt="Animal Testing Sucks">
                        <span class="highlight-text">Animal Testing Sucks T-shirt</span>
                        </a>
                    </div>
                    <div class="col-sm-4 highlight">
                        <a class="highlight-link inverse-text" href="../shop/#!/Beach-Towel-Green-Apple/p/56993825/category=20496006">
                       
                        <span class="image-hover"></span>
                        <img class="img-responsive" src="/wp-content/themes/bfp/img/shop/shopHighlight-green-towel.jpg" alt="Green Towel">
                         <span class="highlight-text">Green Beach Towel</span>
                        </a>
                    </div>
                </div>  
                  
                                             
                 </div>


               
			 <?php endwhile; else: ?>
                    <p><?php _e('Sorry, this page does not exist.'); ?></p>
                <?php endif; ?>

        	</div>
		</div>


      </div><!-- /.container -->
 
<?php get_footer(); ?>