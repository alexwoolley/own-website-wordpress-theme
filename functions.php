<?php
//Create a main menu
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

//Create a sidebar
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'theme-slug' ),
        'id' => 'sidebar-1',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
    ) );
}
//Add pagination. See https://www.elegantthemes.com/blog/tips-tricks/how-to-add-pagination-to-wordpress
function pagination_nav() {
	global $wp_query;
	if ( $wp_query->max_num_pages > 1 ): ?>
		<div class="row" id="pagination-row">
			<nav role="navigation">
				<div class="standard-bottom-border" id="pagination-wrapper">
					<div class="nav-next col-sm-6"><?php previous_posts_link( ' &larr; Newer' ); ?></div>
					<div class="nav-previous col-sm-6"><div class="pull-right"><?php next_posts_link( 'Older &rarr;' ); ?></div></div>
				</div>
			</nav>
		</div>
	<?php  endif;
}
?>