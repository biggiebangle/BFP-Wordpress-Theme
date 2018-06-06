 <?php get_header(); ?>
 
 <!-- pages page in wp --> 
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

   

   <!-- Main jumbotron for call to action -->
   	 <div class="jumbotron-short">
        <div class="full-width-donate"><a class="btn-block btn-primary" href="/donate" role="button">Donate</a></div>
     	<img src="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url('large');} else {_e('/wp-content/themes/bfp/img/hero1.jpg');}?>" alt="Beagle Freedom Project" />
		<!--<h2 class="subpage-title black-alpha-background hidden-xs"><?php the_title(); ?></h2>-->
     </div>
           
	<div class="container">
    

      <div id="about" class="featurette">
       <h2 class="subpage-featurette-heading text-center text-muted"><?php the_title(); ?></h2>
        <div class="row">
        	<div class="col-xs-12">
 <?php the_content(); ?>
     <?php endwhile; else: ?>
            <p><?php _e('Sorry, this page does not exist.'); ?></p>
        <?php endif; ?>

        	</div>
		</div>
      </div><!-- /.featurette -->

      </div><!-- /.container -->
 
<?php get_footer(); ?>