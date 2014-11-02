<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Oops! Sorry, you must've had a little too much wine. No results were found.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>
<div class="newsContainer">
<?php while ( have_posts() ) : the_post(); ?>
	<section class="entry-content">
		<div class="blogSynopsis">
			<h2 class=newsDate> <?php the_time('d M Y') ?> </h2>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h4 class="entry-title">
				<!-- The code below limits the title to 18 characters -->
		        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
		            	<?php if (strlen($post->post_title) > 32) {
		            	echo substr(the_title($before = '', $after = '', FALSE), 0, 32) . '...'; } else {
		            	the_title();
		            	} ?>
		            	</a>
	      	</h4>
	      	<div class="postExcerpt"> 
	      		<?php the_excerpt(); ?>
			</div>
		</div>	
		<div class="postImage">
			<?php if ( has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail('large'); ?>
				</a>

			<?php endif; ?>
		</div>		
				
			
			<footer>
       
			</footer>

		</article><!-- #post-## -->

		<?php comments_template( '', true ); ?>
	</section><!-- .entry-content -->		


<?php endwhile; // End the loop. Whew. ?>
</div> <!-- .newsContainer -->

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>

<?php //if ( function_exists( 'soliloquy' ) ) { soliloquy( '69' ); }; ?>
