<?php
/**
 * Homepage
 *
 * @package Catch Themes
 * @subpackage Catch_Box
 */

get_header(); ?>            	
<div class="homepage-block">
	<?php echo '<div id="home-div"><img id="home-pic" src="'.get_template_directory_uri() .'/images/2.jpg" onload="fade(this)"/></div>'?>
	<div class="grey-panel"></div>
	<?php echo '<img id="home-intro" src="'.get_template_directory_uri() .'/images/home-intro.png"/>'?>
	<div class="intro">
		<div class="intro-box">
			<div class="intro-header">Recent Project Posts</div>
			<div class="intro-content">
				<div class="intro-project">
					<div class="calendar">
						<div class="calendar-month">June</div>
						<div class="calendar-date">21</div>
					</div>
					<div class="intro-project-info">
						<div class="intro-project-title">Project 1</div>
						<div class="intro-project-summary">Firmisul icatus? Irtementim pra noteris? Egit virmil hostem publin nos pubi ta vivivas convestratum in Etreo et pul vita.</div>
					</div>
				</div>
				<div class="intro-project">
					<div class="calendar">
						<div class="calendar-month">June</div>
						<div class="calendar-date">20</div>
					</div>
					<div class="intro-project-info">
						<div class="intro-project-title">Project 2</div>
						<div class="intro-project-summary">Firmisul icatus? Irtementim pra noteris? Egit virmil hostem publin nos pubi ta vivivas convestratum in Etreo et pul vita.</div>
					</div>
				</div>
			</div>
		</div>
		<div class="intro-box">
			<div class="intro-header">Our Services</div>
			<div class="intro-content">
				<div class="intro-service intro-dark">
					<?php echo '<div class="intro-service-pic"><img src="'.get_template_directory_uri().'/images/services_02.png"></div>' ?>
					<div class="intro-service-content">Data Collection and Management</div>
				</div>
				<div class="intro-service intro-white">
					<?php echo '<div class="intro-service-pic"><img src="'.get_template_directory_uri().'/images/services_04.png"></div>' ?>
					<div class="intro-service-content">Visualization and Analysis</div>
				</div>
				<div class="intro-service intro-dark">
					<?php echo '<div class="intro-service-pic"><img src="'.get_template_directory_uri().'/images/services_06.png"></div>' ?>
					<div class="intro-service-content">Accessibility and Outreach</div>
				</div>
				<div class="intro-service intro-white">
					<?php echo '<div class="intro-service-pic"><img src="'.get_template_directory_uri().'/images/services_08.png"></div>' ?>
					<div class="intro-service-content">Research and Interpretation</div>
				</div>
			</div>
		</div>
		<div class="intro-box">
			<div class="intro-header">Recent Blog Posts</div>
			<div class="intro-content">
				<div class="intro-blog">
					<div class="intro-blog-left">
						<?php echo '<div class="intro-blog-pic"><img src="'.get_template_directory_uri().'/images/blog1.jpg"></div>' ?>
						<div class="calendar">
							<div class="calendar-month">June</div>
							<div class="calendar-date">21</div>
						</div>
					</div>
					<div class="intro-blog-right">
						<div class="intro-blog-title">Blog 1</div>
						<div class="intro-blog-summary">Firmisul icatus? Irtementim pra noteris? Egit virmil hostem publF irmisul icatus? Irtementim pra noteris? Egit virmil hostem publ</div>
					</div>
				</div>
				<div class="intro-blog">
					<div class="intro-blog-left">
						<?php echo '<div class="intro-blog-pic"><img src="'.get_template_directory_uri().'/images/blog1.jpg"></div>' ?>
						<div class="calendar">
							<div class="calendar-month">June</div>
							<div class="calendar-date">20</div>
						</div>
					</div>
					<div class="intro-blog-right">
						<div class="intro-blog-title">Blog 2</div>
						<div class="intro-blog-summary">Firmisul icatus? Irtementim pra noteris? Egit virmil hostem publF irmisul icatus? Irtementim pra noteris? Egit virmil hostem publ</div>
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
					</div>
				</div>
			</div>
		</div>
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