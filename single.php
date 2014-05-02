<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Catch Themes
 * @subpackage Catch_Box
 * @since Catch Box 1.0
 */

get_header(); ?>

				<?php while ( have_posts() ) : the_post(); ?>
				<div class="single-page">
					

					<?php get_template_part( 'content', 'single' ); ?>


				<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
		<nav id="nav-blog">
						<h3 class="assistive-text"><?php _e( 'Post navigation', 'catchbox' ); ?></h3>
						<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'catchbox' ) ); ?></span>
						<?php echo '<span class="nav-blog-home"><a href="' .get_page_uri(get_page_by_title( 'BLOG' )->ID).'"">Blog Home</a></span>' ?>
						<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'catchbox' ) ); ?></span>
		</nav><!-- #nav-single -->
        </div> 
		<?php 
        /** 
         * catchbox_after_content hook
         *
         */
        do_action( 'catchbox_after_content' ); ?>
            
	</div><!-- #primary -->
    
	<?php 
    /** 
     * catchbox_after_primary hook
     *
     */
    do_action( 'catchbox_after_primary' ); ?>    


<?php get_footer(); ?>