 <?php 
 /* Template Name: Rescue Page */ 
 ?>
 <?php 
	
	$_rescue_text  = get_post_meta($post->ID, "rescue_text", true); 
		
?>
 
 <?php get_header(); ?>
 
  <!-- Main jumbotron for a primary marketing message or call to action -->
   	 <div class="jumbotron" id="rescue-cover-img">
      <div class="container-fluid">
      	<div class="row">
          	<div class="col-sm-10 col-sm-offset-1">
            <h2>The greatest gift you can give to a rescued 
    laboratory animal is to foster or adopt.</h2>
        	</div>
        </div>
		<div class="row">
        	<div class="col-sm-5 col-sm-offset-1 lead-description blue-alpha-background inverse-text">
           	 <div>
       		 	<p>BFP maintains a very serious process for the fostering and adoption of these animals because they are special needs. While it may be challenging at times, it will be one of the most rewarding things you ever do.</p>
       		</div>
            </div>
        </div>
      </div>
     </div>
	 <!-- Foster or Adoption Actions and Process -->
  	  <div class="container adoption-action">
      <!-- row one -->
          <div class="row text-center">
            <div class="col-sm-3">
                 <a class="thin-circle-link" href="/adopt-dog">            		
                  	<img class="img-circle thin-border img-responsive center-block" src="/wp-content/themes/bfp/img/adopt-dog1.jpg" />              
                 </a>                
                <h2>Adopt a Dog</h2>          
            </div>
            <div class="col-sm-3">
            	<a class="thin-circle-link" href="/foster-dog">  
                	<img class="img-circle thin-border img-responsive center-block" src="/wp-content/themes/bfp/img/adopt-dog2.jpg" />
                </a> 
                <h2>Foster a Dog</h2>
           </div>
            <div class="col-sm-3">
            	<a class="thin-circle-link" href="/adopt-cat">  
                	<img class="img-circle thin-border img-responsive center-block" src="/wp-content/themes/bfp/img/adopt-cat.jpg" />
                </a> 
                <h2>Adopt a Cat</h2>
            </div>
            <div class="col-sm-3">
            	<a class="thin-circle-link" href="/foster-cat">  
                	<img class="img-responsive center-block img-circle thin-border" src="/wp-content/themes/bfp/img/adopt-cat2.jpg" />
                </a> 
                <h2>Foster a Cat</h2>
            </div>
          </div>
          
          <!-- row two -->
          <div class="row text-center">
            <div class="col-sm-3">
            	<a class="thin-circle-link" href="/adopt-small">  
                	<img class="img-responsive center-block img-circle thin-border" src="/wp-content/themes/bfp/img/adopt-others.jpg" />
                </a> 	
                <h2 >Foster a Small Animal</h2>
           </div>
            <div class="col-sm-3">
            	<a class="thin-circle-link" href="/foster-small">  
                	<img class="img-responsive center-block img-circle thin-border" src="/wp-content/themes/bfp/img/adopt-others.jpg" />	
                </a> 
                <h2>Adopt a Small Animal</h2>
            </div>
             <div class="col-sm-3">
            	<a class="thin-circle-link" href="/adopt-farm">  
                	<img class="img-responsive center-block img-circle thin-border" src="/wp-content/themes/bfp/img/adopt-others.jpg" />
                </a> 	
                <h2 >Foster a Farm Animal</h2>
           </div>
            <div class="col-sm-3">
            	<a class="thin-circle-link" href="/foster-farm">  
                	<img class="img-responsive center-block img-circle thin-border" src="/wp-content/themes/bfp/img/adopt-others.jpg" />	
                </a> 
                <h2>Adopt a Farm Animal</h2>
            </div>
           </div>
       
       </div><!-- /.container -->
    <div class="rescue-separator separator blue-background"></div> 
    <!-- Process -->   
	<div class="container">
      <div class="featurette">
          <div class="row">
            <div class="col-md-7">
              <h2 class="subpage-featurette-heading text-muted">The Process</h2>
              <ul class="paw-list">
                <li>Fill out a foster or pre-adoption application</li>
                <li>BFP staff review the application</li>
                <li>If the application is complete and satisfactory, BFP will contact you and conduct a phone interview</li>
                <li>BFP will perform a reference check</li>
                <li>BFP will do a "home check" - this will either be done in person or over Skype or Facetime</li>
                <li>BFP will go through the process and procedures which will include a light training on welcoming and caring for your new animal</li>
               </ul>
            </div>
            <div class="col-md-5">
              <img class="img-responsive center-block img-circle no-border" src="/wp-content/themes/bfp/img/adopt-boomer-process.jpg" alt="Boomer">
            </div>
          </div>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
          <div class="row">
            <div class="col-md-7 col-md-push-5">
              <h2 class="subpage-featurette-heading text-muted">Requirements</h2>
              <ul class="paw-list">
                <li>You must be cruelty-free, meaning you do not use products tested on animals (pharmaceutical excluded)</li>
                <li>If you are not yet cruelty-free, you are willing to learn and go cruelty-free</li>
                <li>Your new animal is an ambassador for the cause, so you must be willing to participate in ways to educate the public
                    about animal testing</li>
                <li>In most cases, when you are fostering or adopting a dog, you must have at least 1 other dog (subject to personality assessment)</li>
               </ul>
            </div>
            <div class="col-md-5 col-md-pull-7">
              <img class="img-responsive center-block img-circle no-border" src="/wp-content/themes/bfp/img/adopt-cat-require.jpg" alt="Cat">
            </div>
          </div>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
          <div class="row">
            <div class="col-md-7">
              <h2 class="subpage-featurette-heading text-muted">Fostering</h2>
                
                <p>As a foster, you are one of the most important steps in their rehabilitation and successful re-homing.</p>
                
                <p>We like them to stay with their fosters until they have overcome their initial shock of being out of the lab so that the foster
                can properly assess their personality in order to assist us in pairing them up with the perfect home.</p>
                
                <p>Please fill out the foster application, and a member of our team will be in touch!</p>
                
              <h2 class="subpage-featurette-heading text-muted">Adoption</h2>
                
                <p>As an adopter, you will be required to have a lot of patience and understanding because they have had a traumatic past.</p>
                
                <p>They may have severe fear issues among other things.</p>
                
                <p>In our experience, they do best when in a home with other animals of their species to learn from.</p>
                
                <p>Please note that we do an interview, home-check, check references, have a formal adoption application and there is an adoption fee of between $100-$400.</p>
                
                <p>Please fill out the adoption application, and a member of our team will be in touch and discuss our adoptable animals.</p>
            </div>
            <div class="col-md-5">
              <img class="img-responsive center-block img-circle no-border" src="/wp-content/themes/bfp/img/adopt-others-adoptorfoster.jpg" alt="Generic placeholder image">
            </div>
          </div>
      </div>

      </div><!-- /.container-fluid -->
     <div class="separator blue-background"></div> 
	 <!-- Rescue Stories -->
     <a class="page_anchor" id="rescue_stories"></a>
     <div class="container"> 
        
            <div id="home-page-news" class="featurette inverse-text">
            <h1 class="text-center text-muted featurette-heading">Rescue Stories</h1>
            <div class="row">
            <?php                                
                $args = array( 'posts_per_page' => 2, 'offset'=> 0, 'category_name' => 'Rescue Stories' );
                
                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <div class="highlight-art col-sm-6"> 
                    <a class="highlight-link inverse-text" href="<?php the_permalink(); ?>">
                        <span class="image-hover"></span>
                        <img class="img-responsive" src="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url('large');} else { echo '/wp-content/themes/bfp/img/Paiselyontop-large.jpg';} ?>" alt="Beagle"> 
                        <span class="highlight-text"><?php the_title(); ?></span>
                     </a>
                </div> 
 
                <?php endforeach; 
                wp_reset_postdata();?>
            
  
            </div>        
            <div class="row">        	 
                <div>
                    <div class="highlight-twitter col-sm-6" >
                        <a class="twitter-timeline" data-theme="dark" href="https://twitter.com/beaglefreedom" height="300">Tweets by beaglefreedom</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
            
            <?php                                
                $args = array( 'posts_per_page' => 2, 'offset'=> 2, 'category_name' => 'Rescue Stories' );
                
                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <div class="highlight-art col-sm-6"> 
                    <a class="highlight-link inverse-text" href="<?php the_permalink(); ?>">
                        <span class="image-hover"></span>
                        <img class="img-responsive" src="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url('large');} else { echo '/wp-content/themes/bfp/img/Paiselyontop-large.jpg';} ?>" alt="Beagle"> 
                        <span class="highlight-text"><?php the_title(); ?></span>
                     </a>
                </div> 
 
                <?php endforeach; 
                wp_reset_postdata();?>
               </div>           
            </div>        
          </div>
    
        </div><!-- /.container -->
 
 
  <div class="container">
    <div class="row">
          <?php /*?> <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
    		<h2> Rescue page: </h2>

            <p> Rescue page metaboxes </p>
                   <?php echo $_rescue_text; ?>
        <?php endwhile; else: ?>
            <p><?php _e('Sorry, this page does not exist.'); ?></p>
        <?php endif; ?><?php */?>
    </div>
  </div> <!-- /container -->
 
<?php get_footer(); ?>