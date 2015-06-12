<?php get_header(); ?>
	<?php if (is_category()): ?>
		<p class="category-header standard-bottom-border">Articles I've written for 
			<?php 
				$category = get_the_category(); 
				echo $category[0]->cat_name;
			?>:
		</p> 
	<?php endif; ?>	
	<?php if ( have_posts() ) :
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>
			<div class="post standard-bottom-border">
				<?php if (!is_page()): ?>
					<h4 class="post-category">
						<?php
							the_category(' / ');
							echo " | ";
							the_date();
						?>
					</h4>
				<?php endif; ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<p>
					<em>
						<?php 
							echo get_post_meta( get_queried_object_id(), "Publication URL", true ); 
							echo "|||||||||||";
						?>
						<a href="<?php echo get_post_meta( get_queried_object_id(), "Publication URL", true ); ?>" target="_blank">Read more</a><?php edit_post_link('Edit this entry', ' &bull; '); ?>
					</em>
				</p>
			</div>
			<?php // End the loop.
		endwhile;
		pagination_nav(); //Get pagination
	endif;
	?>

<?php get_footer(); ?>