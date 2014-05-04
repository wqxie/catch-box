<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Template Name: Blog Template
 * Description: A Page Template that disables a blog
 *
 * @package Catch Themes
 * @subpackage Catch_Box
 * @since Catch Box 2.3.1
 */

get_header(); ?>

			<?php 
			global $more, $wp_query, $post, $paged;
			$more = 0;
				
			if ( get_query_var( 'paged' ) ) {
				
				$paged = get_query_var( 'paged' );
				
			}
			elseif ( get_query_var( 'page' ) ) {
				
				$paged = get_query_var( 'page' );
				
			}
			else {
				
				$paged = 1;
				
			}
			
			$blog_query = new WP_Query( array( 'post_type' => 'post', 'paged' => $paged ) );
			$temp_query = $wp_query;
			$wp_query = null;
			$wp_query = $blog_query;
			?>



			<div class="left-blog-panel">
			<?php
			if ( $blog_query->have_posts() ) : ?>

				
				<?php $count = 0; ?>
				<?php while ( $blog_query->have_posts() && $count<=2) : $blog_query->the_post();  ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
						$count ++; 
					?>

				<?php endwhile; ?>
			</div><!-- end of left blog panel-->
			<div class="right-blog-panel">
				<div class="search-bar">
					<div class="search-title"><p>Search</p></div>
					<?php get_search_form(); ?>
				</div>
				<div class="cate-list">
					<div class="cate-title"><p>Categories</p></div>
					<?php wp_list_categories("style=none"); ?> 
				</div>
                <?php
                	$popular_query = new WP_Query( array( 'meta_key' => 'post_views_count', 'orderby' => 'meta_value_num', "order" => 'DESC','ignore_sticky_posts' => '1'));
					if ($popular_query->have_posts()) : $popular_query->the_post(); ?>
					<article id="post-<?php the_ID(); ?>" class="blog-page-popular">
					<header class="title-popular"><p>POPULAR</p></header>
					<div class="popular-block">
						<?php if( has_post_thumbnail() ):?>
			            	<div class="popular-pic">
			           		<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'catchbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
								<?php the_post_thumbnail('featured-slider'); ?>
			               	</a>
			               </div><!-- .featured-pic -->
			            <?php endif; ?>
			            <div class="post-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'catchbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></div>
						<div class="tag-block">
						<?php the_tags('<div class="blog-tag">','</div><div class="blog-tag">','</div>') ?> 
						</div>	<!-- .tag-block -->
						<div class="text-block"><?php the_excerpt(); ?></div><!-- .text-block -->	
			       	 </div>	<!-- .blog-block -->
			    </article><!-- #post-popular -->
					<?php
					 endif;
					wp_reset_query();
				?>
			</div><!-- right blog panel -->
                <?php catchbox_content_query_nav( 'nav-below' ); ?>
                
			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'catchbox' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'catchbox' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>                

		</div><!-- #content -->
        
		<?php 
        /** 
         * catchbox_after_content hook
         *
         */
        do_action( 'catchbox_after_content' ); ?>
            
	<?php 
    /** 
     * catchbox_after_primary hook
     *
     */
    do_action( 'catchbox_after_primary' ); ?>    


<?php get_footer(); ?>