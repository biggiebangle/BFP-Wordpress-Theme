 <?php
/*
Template Name: Search Page
*/
?>
<?php get_header('blog'); ?>


 

 
 <!-- pages page in wp --> 
 <!-- home page is our posts aka blog aka news page in wp --> 
  <div class="container" id="main">
    <div class="row">
      <div class="col-sm-8">    
     
  
<?php
$s=get_search_query();
$args = array(
                's' =>$s
            );
    // The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
        _e("<h2 style='color:#000;'>Search Results for: ".get_query_var('s')."</h2>");
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
                    <div class="article">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            
                        <?php the_excerpt(); ?>            
                        <a href="<?php echo get_permalink(); ?>"> Read More...</a>
                        <p><em><?php the_time('l, F jS, Y'); ?></em></p>
                        
                         <?php if ( has_post_thumbnail() ) : ?>
                            
                                <a href="<?php echo get_permalink(); ?>"><img class="img-responsive img-circle" src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title_attribute(); ?>" /></a>
                            <br/>                
                        <?php endif; ?>
                        
                        <hr>
                    </div>
                 <?php
        }
    }else{
?>
        <h2 style='color:#000;'>Nothing Found</h2>
        <div class="alert alert-warning">
          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
        </div>
<?php } ?>




        
         <nav class="infinitescroll">
            <ul class="pager">
              <li><?php previous_posts_link('&laquo; Previous Entries'); ?></li>
              <li class="next"><?php next_posts_link('Next Entries &raquo;',''); ?></li>
            </ul>
          </nav>
          
		
		

    
      </div>
        
       <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          	<div class="sidebar-module sidebar-module-inset">
          	<?php get_sidebar(); ?> 
			 </div><!-- /.blog-sidebar -->
    
      </div><!-- /col-sm-3 -->
    </div><!-- /row -->
   </div><!-- /container -->
 
 
<?php get_footer(); ?>