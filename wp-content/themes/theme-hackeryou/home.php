<?php get_header(); ?>

<div class="main clearfix blog-home-page">
	<div class="generalPgHeader">
	    <img src="<?php header_image(); ?>" alt="" />
	  </div> <!-- .generalPgHeader -->
	<div class="container">

	<div class="content blogIndex" >
		<?php get_template_part( 'loop', 'index' ); ?>

		</div><!-- end #category-name -->

		<!-- The Loop -->
			

	</div> <!--/.content -->

	<?php get_sidebar(); ?>

	</div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>