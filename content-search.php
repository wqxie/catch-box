<?php
/**
 * The default template for displaying search content
 *
 * @package Catch Themes
 * @subpackage Catch_Box
 * @since Catch Box 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" class="blog-page-normal">
		<div class="left-block">
			<?php if( has_post_thumbnail() ):?>
				<div class="post-time"><?php the_time("m.d.Y");?></div>
            	<div class="featured-pic">
           		<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'catchbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
					<?php the_post_thumbnail('featured-slider'); ?>
               	</a>
               </div><!-- .featured-pic -->
            <?php endif; ?>
            </div>	<!-- .left-block -->
        <div class="right-block">
            <div class="post-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'catchbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></div>
			<div class="tag-block">
			<?php the_tags('<div class="blog-tag">','</div><div class="blog-tag">','</div>') ?> 
			</div>	<!-- .tag-block -->
			<div class="text-block"><?php the_excerpt(); ?></div><!-- .text-block -->	
       	</div>
    </article><!-- #post-<?php the_ID(); ?> -->
			
		

		
	

