  <?php 
 /* Template Name: Shop Page */ 
 ?>
 <?php get_header('store'); ?>

<script>
ecwidMessages = {
"ProductBrowser.ModernButton.add_to_bag":"Buy"
}
</script>
 
 <!-- shop page in wp --> 
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


           
	<div class="container">
   


        <div class="row">
        	<div class="col-sm-3">
            <h2><a class="btn-home" href="/bfp-shop">Shop</a></h2>
            
            <div id="my-search-2100043"></div>
            <div>
            <script type="text/javascript" src="https://app.ecwid.com/script.js?2100043&data_platform=code&data_date=2016-08-08" charset="utf-8"></script>
            <script type="text/javascript"> xSearch("id=my-search-2100043"); </script>
            </div>
            
            <div id="my-vCategories-2100043"></div>
            <div>
            <script type="text/javascript" src="https://app.ecwid.com/script.js?2100043&data_platform=code&data_date=2016-08-08" charset="utf-8"></script>
            <script type="text/javascript"> xVCategories("id=my-vCategories-2100043"); </script>
            </div>


        	</div>
        	<div class="col-sm-9">
            
            <div id="my-categories-2100043"></div>
            <div>
            <script type="text/javascript" src="https://app.ecwid.com/script.js?2100043&data_platform=code&data_date=2016-08-08" charset="utf-8"></script>
            <script type="text/javascript"> xCategoriesV2("id=my-categories-2100043"); </script>
            </div>
            
 
                     
                     <div id="my-store-2100043">
                     
                     
                     </div>
                        <div>
                        <script type="text/javascript" src="https://app.ecwid.com/script.js?2100043&data_platform=code&data_date=2016-08-08" charset="utf-8"></script><script type="text/javascript"> xProductBrowser("categoriesPerRow=3","views=grid(3,3) list(10) table(20)","categoryView=grid","searchView=list","id=my-store-2100043");</script>
                        </div>
                                             
                 </div>


               
			 <?php endwhile; else: ?>
                    <p><?php _e('Sorry, this page does not exist.'); ?></p>
                <?php endif; ?>

        	</div>
		</div>


      </div><!-- /.container -->
 
<?php get_footer(); ?>