<?php get_header();  ?>

<div class="main">
  <div class="headerImg">
  
    <!-- Pulls images from Soliloquy plugin -->
    <?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '69' ); }; ?>

    <div class="textOverlay">
           <h2><?php the_field('header_image_subhead'); ?></h2>
           <h3 class="headerSubhead"><?php the_field('header_image_tagline'); ?></h3>
           <button class="headBtn"><?php the_field('header_button'); ?></button>
    </div> <!-- .textOverlay -->       
  </div> <!-- .headerImg -->


  <div class="container">

    <div class="mainBody clearfix">
      <div class="homeIntro">
        <?php if (have_posts()) : ?> 
          <?php while (have_posts()) : the_post(); ?>
          <h2><?php the_title(); ?></h2> 
          <?php the_content(); ?>
          <?php endwhile; ?>
        <?php endif; ?>   
      </div><!-- /.homeIntro -->
    
      <div class="homeImages clearfix">
        <div class="homeTour">
          <div class="homeImgWrap"> 
            <img src="<?php the_field('featured_img1'); ?>" alt="">
            <h3><?php the_field('image_tagline'); ?></h3>
          </div> <!-- .homeImgWrap -->
          <?php the_field('bottom_link'); ?>
        </div><!-- /.homeTour -->

        <div class="homeHistory">
          <div class="homeImgWrap"> 
            <img src="<?php the_field('featured_img2'); ?>" alt="">
            <h3><?php the_field('image_tagline2'); ?></h3>
          </div> <!-- .homeImgWrap -->
          <?php the_field('bottom_link2'); ?>
        </div><!-- /.homeTour -->

        <div class="homeWines">
          <div class="homeImgWrap"> 
            <img src="<?php the_field('featured_img3'); ?>" alt="">
            <h3><?php the_field('image_tagline3'); ?></h3>
          </div> <!-- .homeImgWrap -->
          <?php the_field('bottom_link3'); ?>
        </div><!-- /.homeTour -->
      </div> <!-- .homeImages -->

    </div> <!-- mainBody -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>