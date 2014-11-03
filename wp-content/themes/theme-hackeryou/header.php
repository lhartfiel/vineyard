<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link href='http://fonts.googleapis.com/css?family=News+Cycle:400,700|Cinzel:400,700|Noto+Sans:400,700,400italic|PT+Serif:400,700,400italic|Tangerine:400,700|Italiana' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="headContain">
    <img src="http://localhost:8888/vineyard/wp-content/uploads/2014/11/grapesIllustration.png" alt="">
    <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>

    <nav>
      <div class="navBar">
       <!--  <h2 class="responsiveMenu"><a href="">Menu</a></h2> -->
        <?php wp_nav_menu( array(
          'container' => false,
          'theme_locations' => 'primary'
        )); ?>
      </div>
    </nav>
  
  </div> <!-- /.headContain -->
</header><!--/.header-->

