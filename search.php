<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Catch Themes
 * @subpackage Catch_Box
 * @since Catch Box 1.0
 */

get_header(); ?>

			<?php if ( have_posts() ) : ?>

				<div class="category-page-left">
				<header class="category-header">
					<h1 class="category-title"><?php printf( __( 'Search Results for: %s', 'catchbox' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header>

				<?php catchbox_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', 'search' );
					?>

				<?php endwhile; ?>


				<?php catchbox_content_nav( 'nav-below' ); ?>

			<?php else : ?>
				<div class="category-page-left">
					<header class="category-header">
						<h1 class="category-title"><?php _e( 'Nothing Found', 'catchbox' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="error-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'catchbox' ); ?></p>
					</div><!-- .entry-content -->

			<?php endif; ?>
			</div><!-- .category-page-left -->
			<div class="category-page-right">
        	<div class="search-bar">
					<div class="search-title"><p>Search</p></div>
					<?php get_search_form(); ?>
				</div>
			<div class="cate-list">
				<div class="cate-title"><p>Categories</p></div>
				<?php wp_list_categories("style=none"); ?> 
			</div>
        </div>
        
            
	</div><!-- #primary -->
    
	<?php 
    /** 
     * catchbox_after_primary hook
     *
     */
    do_action( 'catchbox_after_primary' ); ?>    


<?php get_footer(); ?>