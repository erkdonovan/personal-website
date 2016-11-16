<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title><?php  wp_title( '| ', true, 'right' );  ?></title>
  
  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css"  href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/mq.css">


  <!-- FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

  <!-- FAV ICON -->

  <link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.css" media="screen">
  <link href='http://cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
  
  <!-- FACEBOOK TAGS -->
  <meta property="og:title" content="Erika Donovan">
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://www.erikadonovan.com">
  <meta property="og:image" content="<?php echo get_site_url();?>/wp-content/themes/erika-donovan-2016/screenshot.png">
  <meta property="og:site_name" content="Erika Donovan">
  <meta property="og:description" content="I like making websites work for YOU!">
  
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

  <script src="https://use.fontawesome.com/5ea7e68365.js"></script>

</head>


<body <?php body_class(); ?>>
<div class="overlayform"></div>
<div class="modal">
  <div class="form">
    <iframe src="https://docs.google.com/a/erikadonovan.com/forms/d/e/1FAIpQLSdoTjbX_vEzaoaN04gg2jrgdDZzaPnNPm3PZlyWv9XSJ0CIJQ/viewform?embedded=true" width="760" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
  </div>
</div>

<div class="header">
  <div class="header__menu" role="navigation">
    <div class="header__menu--logo">
       <?php 
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
             ?> 
       <a href="<?php bloginfo('url'); ?>"><img src="<?php echo $image[0]; ?>" alt="<?php bloginfo('name'); ?>"></a>
    </div>
    <div class="header__menu--list">
      <div class="display__desktop">
        <?php
              wp_nav_menu( array('theme_location' => 'primary') ); ?>
      </div>
      <div class="display__mobile">
        <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
        <div class="display__mobile--menu">
          <?php
                wp_nav_menu( array('theme_location' => 'primary') ); ?>
        </div>
      </div>
    </div>
  </div>
  <?php $heroImage = get_field('main_hero_image'); ?>
  <?php $imagePosition = get_field('hero_image_position'); ?>
  <div class="header__heroimage" style="background-image: url(<?php echo $heroImage['url'] ?>); background-position: <?php echo $imagePosition ?>;">
  <div class="overlay"></div>
    <div class="header__heroimage--content">
      <?php $namelogo = get_field('name_logo'); ?>
      <?php if( $namelogo ): ?>
        <img src="<?php echo $namelogo['url']; ?>" alt="<?php echo $namelogo['alt']; ?>">
      <?php else: ?>
        <h1><?php the_title(); ?></h1>
        <h1><?php echo $tag ?></h1>
      <?php endif; ?>

      <h2><?php the_field('hero_text'); ?></h2>
    </div>
  </div>
</div><!--/.header-->

