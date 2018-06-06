 <?php
/*
Template Name: Search Page
*/
?>

<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

if( strlen($query_string) > 0 ) {
	foreach($query_args as $key => $string) {
		$query_split = explode("=", $string);
		$search_query[$query_split[0]] = urldecode($query_split[1]);
	} // foreach
} //if

$search = new WP_Query($search_query);
?>

 
 <?php get_header('blog'); ?>
 
 <!-- pages page in wp --> 
      

  <p> ARE WE HERE?</p>

<!-- home page is our posts aka blog aka news page in wp --> 
  <div class="container" id="main">
    <div class="row">
      <div class="col-sm-8">    
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
        <?php endwhile; ?>
        
         <nav class="infinitescroll">
            <ul class="pager">
              <li><?php previous_posts_link('&laquo; Previous Entries'); ?></li>
              <li class="next"><?php next_posts_link('Next Entries &raquo;',''); ?></li>
            </ul>
          </nav>
          
		
		
		<?php else : ?>
            <p><?php _e('Sorry, there are no posts.'); ?></p>
        <?php endif; ?>
    
      </div>
        
       <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          	<div class="sidebar-module sidebar-module-inset">
          	<?php get_sidebar(); ?> 
			 </div><!-- /.blog-sidebar -->
    
      </div><!-- /col-sm-3 -->
    </div><!-- /row -->
   </div><!-- /container -->
 
 
<?php get_footer(); ?>