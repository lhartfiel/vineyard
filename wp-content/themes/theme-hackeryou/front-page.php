<?php get_header();  ?>

<div class="main">
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
            <img src="http://localhost:8888/vineyard/wp-content/uploads/2014/10/grapes.jpg" alt="">
            <h3>Take a Tour</h3>
          </div> <!-- .homeImgWrap -->
          <h4>Book Today</h4>
        </div><!-- /.homeTour -->

        <div class="homeHistory">
          <div class="homeImgWrap"> 
            <img src="http://localhost:8888/vineyard/wp-content/uploads/2014/10/vineyardField.jpg" alt="">
            <h3>Our History</h3>
          </div> <!-- .homeImgWrap --> 
          <h4>Then & Now</h4> 
        </div><!-- /.homeHistory -->
          
        <div class="homeWines">
          <div class="homeImgWrap"> 
            <img src="http://localhost:8888/vineyard/wp-content/uploads/2014/10/wineBarrel.jpg" alt="">
            <h3>The Wines</h3>
          </div> <!-- .homeImgWrap -->
          <h4>Red & White</h4>  
        </div><!-- /.homeWines -->
      </div> <!-- .homeImages -->

    </div> <!-- mainBody -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>