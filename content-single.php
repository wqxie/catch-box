<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package Catch Themes
 * @subpackage Catch_Box
 * @since Catch Box 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" >
	<div class="single-page-content">
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php the_tags('<div class="single-blog-tag">','</div><div class="single-blog-tag">','</div>') ?> 
		<?php if ( 'post' == get_post_type() ) : ?>
            <div class="entry-meta">
                <?php catchbox_posted_on(); ?>
            </div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 
			'before'		=> '<div class="page-link"><span class="pages">' . __( 'Pages:', 'catchbox' ) . '</span>',
			'after'			=> '</div>',
			'link_before' 	=> '<span>',
			'link_after'   	=> '</span>',
		) ); 
		?>
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->


