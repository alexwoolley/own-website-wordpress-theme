<?php get_header(); ?>
	<?php if (is_category()): ?>
		<p class="category-header standard-bottom-border">
			<?php 
				if (category_description()): 
					echo category_description();
				else:
			?>
			Articles I've written for 
			<?php 
				$category = get_the_category();
				$category_name = $category[0]->cat_name;
				echo $category_name;
			?>:
			<?php endif; ?>
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
							echo " | " . get_the_date();
						?>
					</h4>
				<?php endif; ?>
				<h1>
					<?php if (is_home() || is_single()): ?>
						<a href="<?php echo get_post_meta( get_the_ID(), 'Publication URL', true ); ?>" target="_blank">
							<?php the_title();?>
						</a>
					<?php else:
						the_title();
					endif; ?>
				</h1>
				<?php the_content();
				if ( !is_page() ): ?>
					<?php $publication_url = get_post_meta( get_the_ID(), 'Publication URL', true ); 
						if ($publication_url):?>
							<p>
								<em>
									Read the rest on
									<a href="<?php echo $publication_url; ?>" target="_blank">
									<?php //This is the same code as we use to get the category name without the link on the category pages. It probably shouldn't be but mehh.
										$category = get_the_category();
										$category_name = $category[0]->cat_name;
										echo " " . $category_name; 
									?>'s website</a>.
								</em>
							</p>
						<?php endif;
				endif; ?>
				<p><em><?php edit_post_link(); ?></em></p>
			</div>
			<?php // End the loop.
		endwhile;
		pagination_nav(); //Get pagination
	endif;
	?>

<?php get_footer(); ?>