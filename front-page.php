 <?php get_header(); ?>
 
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div id="cover" class="cover">   
      <div class="full-width-donate"><a class="btn-block btn-primary" href="/donate" role="button">Donate</a></div>
      <div id="home-cover-img" class="cover-img"></div>    
      <div class="hero-logo span6"> <img alt="Beagle Freedom Project Logo" src="wp-content/themes/bfp/img/bfp-logo.png"/></div>  
      <div class="container-fluid">
                   
        <!-- Carousel
        ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="item active">
               <div class="container">
                <div class="carousel-caption">
                
                  <?php $slide1_button_type = bfp_return_get_option('slide1_radio');
					    $slide1_button_link = bfp_return_get_option('slide1_link','#');?>
                  <h1><?php bfp_get_option('slide1_title','Summer of Freedom.'); ?></h1>
                  <p><?php bfp_get_option('slide1_textarea','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet magna ut enim bibendum sagittis. Nulla volutpat rutrum fringilla.'); ?></p>
                  <p> <a class="btn btn-lg btn-primary play" href="<?php echo $slide1_button_link ?>" role="button" >
                  <?php 			  	
                  	
                        bfp_get_option('slide1_link_title','Learn more.');
                      
                 ?>
                  </a></p>                 
                </div><!-- /.carousel-caption -->
                
              </div>
            </div>
            <div class="item">      
              <div class="container">
                <div class="carousel-caption">
                
                <?php $slide2_button_type = bfp_return_get_option('slide2_radio');
					  $slide2_button_link = bfp_return_get_option('slide2_link','#');?>
                  <h1><?php bfp_get_option('slide2_title','Summer of Freedom.'); ?></h1>
                  <p><?php bfp_get_option('slide2_textarea','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet magna ut enim bibendum sagittis. Nulla volutpat rutrum fringilla.'); ?></p>
                  <p> <a class="btn btn-lg btn-primary play" href="<?php echo $slide2_button_link ?>" role="button" >
                  <?php 			  	
                  	
                        bfp_get_option('slide2_link_title','Learn more.');
                    
                 ?>
                  </a></p>                  
                </div>
              </div>
            </div>
            <div class="item">
              <div class="container">
                <div class="carousel-caption">                
                  <?php $slide3_button_type = bfp_return_get_option('slide3_radio');
					    $slide3_button_link = bfp_return_get_option('slide3_link','#');?>
                  <h1><?php bfp_get_option('slide3_title','Summer of Freedom.'); ?></h1>
                  <p><?php bfp_get_option('slide3_textarea','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet magna ut enim bibendum sagittis. Nulla volutpat rutrum fringilla.'); ?></p>
                  <p> <a class="btn btn-lg btn-primary play" href="<?php echo $slide3_button_link ?>" role="button" >
                  <?php 
	
                        bfp_get_option('slide3_link_title','Learn more.');
                  
                 ?>
                  </a></p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.carousel -->
    
    </div><!-- /.container-fluid -->
               
      </div><!-- /.cover full-window -->
          
    <div class="container">
	  
      <div id="home-page-signup" class="form-group">
        <p class="lead text-center"><img src="wp-content/themes/bfp/img/heart-paw-blue-tiny.png">Yes! I want to receive updates on BRP's important work!</p>
        <div id="signup-messages" class="text-center control-label"></div>
        <form id="signup-form" action="https://host.armeteam.org/bfp/signup.php" method="get">
        	<div class="row">        
        		<div class="col-md-6 col-md-offset-3">
           			<fieldset> 
            			<input type="email" name="email" class="form-control form" id="email" placeholder="name@email.com" required>
            		</fieldset>            
          		</div>          
           </div>           
          <button type="submit" class="btn btn-primary center-block">SUBMIT</button>       
        </form>     
      </div>
    
    </div><!-- /.container -->
    
    <div class="container"> 
     <a class="page_anchor" id="latest-video"></a>
    	<div id="home-page-latest" class="featurette">             
           <h1 class="featurette-heading text-center text-muted" ><?php bfp_get_option('bfp_summary_title','Summer of Freedom.'); ?></h1>
           <div class="row">
                <div class="col-md-5 col-md-push-7">
                    
                      <img data-animation="fadeIn" data-animation-delay="0s" class="featurette-image img-responsive img-circle center-block" src="<?php  $bfp_img = bfp_return_get_option('summary_image','wp-content/themes/bfp/img/_MG_0167.jpg'); echo $bfp_img; ?>" alt="Beagle">                    
                  </div>
                  <div class="col-md-1"></div>
                  <div class="col-md-6 col-md-pull-6">                    
                      <p data-animation="fadeIn" data-animation-delay=".3s" class="lead" ><?php bfp_get_option('bfp_summary_textarea','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet magna ut enim bibendum sagittis. Nulla volutpat rutrum fringilla. Suspendisse non hendrerit neque, sed dictum nisl. Vestibulum congue, eros id eleifend vulputate, eros sapien euismod neque, a porttitor neque lacus vitae urna. Proin vel ornare velit. Aenean justo arcu, iaculis ut orci vitae, tempus ultrices urna. Mauris tellus lectus, mattis nec enim et, malesuada eleifend sapien. '); ?></p>
                    
                      <a data-animation="fadeIn" data-animation-delay=".4s" class="btn btn-lg btn-primary center-block"  data-featherlight="#fl3" href="#" role="button"><?php $summary_button_link = bfp_return_get_option('bfp_summary_link_title','Watch Our Latest Video'); echo $summary_button_link; ?></a>
                   
                      <iframe class="lightbox" id="fl3" src="<?php $summary_video = bfp_return_get_option('bfp_summary_link','https://www.youtube.com/embed/NEO27QS-rOI'); echo $summary_video; ?>" frameborder="0" style="border:none;" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>                      
                  </div>    
            </div>
      </div>

    </div><!-- /.container -->
    
    <div class="container-fluid"> 
    
    	<div id="home-page-actions" class="featurette home-page-actions">
        	<h1 class="featurette-heading text-center">Make a Difference</h1>       
            <div class="row">
                <div class="actionrow col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                <?php  	$action1_target_type = bfp_return_get_option('action1_browser_window');
                    	$action1_target;
						if($action1_target_type == 'same'){
                        	$action1_target = '_self';
                        }else if ($action1_target_type == 'new') {
                        	$action1_target = '_blank';
                        } else {
							$action1_target = '_self';
						}?>
                    <a class="action-link inverse-text" target="<?php echo $action1_target ?>" href="<?php $act1_link = bfp_return_get_option('action1_link','#'); echo $act1_link; ?>">
                        <span class="image-hover"></span>
                        <div class="col-sm-4">
					  <?php 
                              $action1_image_type = bfp_return_get_option('action1_image');
                              $action1_image;
                              $action1_image_alt =  bfp_return_get_option('action1_title','Give Monthly');
                              if($action1_image_type == 'political'){
                                  $action1_image = 'wp-content/themes/bfp/img/petition-image.png';
                                }else if($action1_image_type == 'add_own'){
                                  $action1_image = bfp_return_get_option('action1_image_custom','wp-content/themes/bfp/img/heart-paw-white.png');
                              }else {
                                  $action1_image = 'wp-content/themes/bfp/img/heart-paw-white.png';
                              }
                            ?>
                          <img class="featurette-image center-block img-responsive" src="<?php echo $action1_image ?>" alt="<?php echo $action1_image_alt ?>">                       
                        </div>
                        <div class="col-sm-8">
                            <h3><?php bfp_get_option('action1_title','Give Monthly'); ?></h3>
                               <p><?php bfp_get_option('action1_textarea','Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.'); ?></p>
                        </div>
                    </a>
                </div>
             </div>
             <div class="row">
                 <div class="actionrow col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                  <?php  	$action2_target_type = bfp_return_get_option('action2_browser_window');
                    	$action2_target;
						if($action2_target_type == 'same'){
                        	$action2_target = '_self';
                        }else if ($action2_target_type == 'new') {
                        	$action2_target = '_blank';
                        } else {
							$action2_target = '_self';
						}?>
                     <a class="action-link inverse-text" target="<?php echo $action2_target ?>" href="<?php $act2_link = bfp_return_get_option('action2_link','#'); echo $act2_link; ?>">
                        <span class="image-hover"></span>
                        <div class="col-sm-4">
						  <?php 
                              $action2_image_type = bfp_return_get_option('action2_image');
                              $action2_image;
                              $action2_image_alt =  bfp_return_get_option('action2_title','Sign Our Petition');
                              if($action2_image_type == 'political'){
                                  $action2_image = 'wp-content/themes/bfp/img/petition-image.png';
                                }else if($action2_image_type == 'add_own'){
                                  $action2_image = bfp_return_get_option('action2_image_custom','wp-content/themes/bfp/img/heart-paw-white.png');
                              }else {
                                  $action2_image = 'wp-content/themes/bfp/img/heart-paw-white.png';
                              }
                            ?>
                           <img class="featurette-image center-block img-responsive" src="<?php echo $action2_image ?>" alt="<?php echo $action2_image_alt ?>">
                        </div>
                        <div class="col-sm-8">
                            <h3><?php bfp_get_option('action2_title','Sign Our Petition'); ?></h3>
                               <p><?php bfp_get_option('action2_textarea','Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.'); ?></p>
                        </div>
                    </a>                    
                </div> 
            </div>
             <div class="row">           
                 <div class="actionrow col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                 <?php  	$action3_target_type = bfp_return_get_option('action3_browser_window');
                    	$action3_target;
						if($action3_target_type == 'same'){
                        	$action3_target = '_self';
                        }else if ($action3_target_type == 'new') {
                        	$action3_target = '_blank';
                        } else {
							$action3_target = '_self';
						}?>
                     <a class="action-link inverse-text" target="<?php echo $action3_target ?>" href="<?php $act3_link = bfp_return_get_option('action3_link','#'); echo $act3_link; ?>">
                        <span class="image-hover"></span>
                        <div class="col-sm-4">
						  <?php 
                              $action3_image_type = bfp_return_get_option('action3_image');
                              $action3_image;
                              $action3_image_alt =  bfp_return_get_option('action3_title','Download Our App');
                              if($action3_image_type == 'political'){
                                  $action3_image = 'wp-content/themes/bfp/img/petition-image.png';
                                }else if($action3_image_type == 'add_own'){
                                  $action3_image = bfp_return_get_option('action3_image_custom','wp-content/themes/bfp/img/heart-paw-white.png');
                              }else {
                                  $action3_image = 'wp-content/themes/bfp/img/heart-paw-white.png';
                              }
                           ?>
                                  <img class="featurette-image center-block img-responsive" src="<?php echo $action3_image ?>" alt="<?php echo $action3_image_alt ?>">
                        </div>
                        <div class="col-sm-8">
                            <h3><?php bfp_get_option('action3_title','Download Our App'); ?></h3>
                               <p><?php bfp_get_option('action3_textarea','Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.'); ?></p>
                        </div>
                    </a>
                </div>
            </div>                    
      </div>

    </div><!-- /.container-fluid -->
     <!-- highlight category -->
     <div class="container"> 
        
            <div id="home-page-news" class="featurette">
            <h1 class="text-center text-muted featurette-heading">Highlights</h1>
            <div class="row">
            <?php                                
                $args = array( 'posts_per_page' => 2, 'offset'=> 0, 'category_name' => 'Highlights' );
                
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
                        <a class="twitter-timeline" data-theme="dark" href="https://twitter.com/beaglefreedom" 
  height="300">Tweets by beaglefreedom</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script> 
                    </div>

            <?php                                
                $args = array( 'posts_per_page' => 2, 'offset'=> 2, 'category_name' => 'Highlights' );
                
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
        <!-- highlight category end -->

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>