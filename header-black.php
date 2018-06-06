<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Beagle Freedom Project is a non-profit national research animal rescue and advocacy organization.">
    <meta name="author" content="Beagle Freedom Project">    
    <link rel="icon" href="/wp-content/themes/bfp/img/favicon.png">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><?php if (is_singular()) : ?>
    <meta property="og:type" content="website" />
	<meta property="og:site_name" content="Beagle Freedom Project" />
	<meta property="og:image" content="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url('medium');} else {_e('/wp-content/themes/bfp/img/action-beagle.jpg');}?>" />
	<meta property="og:url" content="<?php echo get_permalink(); ?>" />
	<meta property="og:title" content="<?php the_title(); ?>" />
	<meta property="og:description" content="Beagle Freedom Project is a non-profit national research animal rescue and advocacy organization." />

	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="Beagle Freedom Project">
	<meta name="twitter:image" content="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url('medium');} else {_e('/wp-content/themes/bfp/img/action-beagle.jpg');}?>" />
	<meta name="twitter:description" content="Beagle Freedom Project is a non-profit national research animal rescue and advocacy organization.">
	<meta name="twitter:title" content="<?php the_title(); ?>">
	<meta name="twitter:url" content="<?php echo get_permalink(); ?>">
    <?php endif; ?><?php endwhile; else: ?><?php endif; ?>

    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
       
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
    
  </head>

  <body>
	<div class="wrapper black-background">
     <!-- Navigation -->
     <div id="navbar-wrapper" class="navbar-wrapper stick">
       <nav class="navbar yamm navbar-inverse">
          <?php include("inc/common-nav.php"); ?> 
        </nav>
     </div><!--/.nav-wrapper -->
     <a class="page_anchor" id="content"></a>