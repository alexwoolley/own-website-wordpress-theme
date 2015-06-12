<?php 

if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<div id="sidebar">
			
		<div id="widget-area" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- .widget-area -->

	</div><!-- .sidebar -->

<?php endif; ?>