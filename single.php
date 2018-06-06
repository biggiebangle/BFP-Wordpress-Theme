 <?php get_header('blog'); ?>
 <!-- single blog article page --> 
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
<div id="main">
<div class="article">
    <div class="masthead cover">
      <div class="cover-img" style="background-image:URL('<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url('large');} ?>  '); background-position: 50% 50%;">
         
      </div>
      <h1 class="blog-post-title black-alpha-background"><?php the_title(); ?></h1>
    </div>
    <div class="container">
    	<div class="row text-center">
        
	
        	<div class="col-sm-4">
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank" >
                <div class="fb-share-button black-background share" data-href="<?php echo get_permalink(); ?>"><h4>Share on Facebook</h4></div></a>
            </div>
           <!-- <div class="col-sm-1 col-xs-hidden"></div>-->
            <div class="col-sm-4">
                <a href="https://twitter.com/intent/tweet?url=<?php echo get_permalink(); ?>&text=<?php the_title(); ?>">
                <div class="black-background share"><h4>Share on Twitter</h4></div></a>
            </div>
          <!--  <div class="col-sm-1 col-xs-hidden"></div>-->
			<div class="col-sm-4">
            	<a href="https://www.facebook.com/beaglefreedom" target="_blank">
                <div class="black-background share"><h4>Like Us on Facebook</h4></div></a>
             </div>
             
          </div>
    </div>
	
    <div class="container">

      <div class="row">

        <div class="col-md-8 blog-main">

          <div class="blog-post">
         
            <p class="blog-post-meta"><em><?php the_time('l, F jS, Y'); ?></em></p>
         

   			 <?php the_content(); ?>
    
          </div><!-- /.blog-post -->

              <hr>
           
    
        <?php endwhile; else: ?>
            <p><?php _e('Sorry, this page does not exist.'); ?></p>
        <?php endif; ?>

     

        </div><!-- /.blog-main -->

        <div class="col-md-3 col-md-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
          <?php get_sidebar(); ?>
           
          </div>
        
          
           
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->
     </div>
         <nav class="infinitescroll">
            <ul class="pager">
              <li class="next"><?php previous_post_link(); ?></li>
              <li><?php /*next_post_link();*/ ?></li>
            </ul>
          </nav>
   
</div>
    <footer class="blog-footer">
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


<?php get_footer(); ?>