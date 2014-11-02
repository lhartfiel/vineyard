<?php /*Template Name: Wine Page*/ ?>

<?php get_header();  ?>

<div class="main clearfix">
  <div class="container wine-types">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <?php get_attached_media( $type, $post_id ) ?> 

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php //get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>