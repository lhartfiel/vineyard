<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>
<div class="generalPgHeader">
  <img src="<?php header_image(); ?>" alt="" />
</div>

<div class="main clearfix">
  <div class="container singleBody">
  	

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>