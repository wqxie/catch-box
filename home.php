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
		<div class="intro-box"></div>
		<div class="intro-box"></div>
		<div class="intro-box"></div>
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