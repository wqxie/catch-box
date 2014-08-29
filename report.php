<?php
/**
 * @package Catch Themes
 * Template Name: Report
 * @subpackage Catch_Box
 */

get_header(); ?>            	
<div class="product">
	<div class="grey-search">
		<form method="get" id="searchform">
       		<input id="project-search" type="text" class="field" placeholder="What are you searching for?">
    	</form>
	</div>
	<div class="project-panel">
		<div class="project-item">
			<div class="report-box">
				<div class="report-title">Publication 1</div>
				<div class="calendar">
					<div class="calendar-month">JUN</div>
					<div class="calendar-date">30</div>
				</div>
			</div>
			<div class="report-tag-panel">
				<div class="project-tag geography-tag">GEOGRAPHY TAG</div>
				<div class="project-tag topic-tag">TOPIC TAG</div>
				<div class="project-tag topic-tag">TOPIC TAG</div>
				<div class="project-tag partner-tag">PARTNER TAG</div>
			</div>
		</div>
		<div class="project-item">
			<div class="report-box">
				<div class="report-title">Publication 2</div>
				<div class="calendar">
					<div class="calendar-month">JUN</div>
					<div class="calendar-date">30</div>
				</div>
			</div>
			<div class="report-tag-panel">
				<div class="project-tag geography-tag">GEOGRAPHY TAG</div>
				<div class="project-tag topic-tag">TOPIC TAG</div>
				<div class="project-tag topic-tag">TOPIC TAG</div>
				<div class="project-tag partner-tag">PARTNER TAG</div>
			</div>
		</div>
		<div class="project-item">
			<div class="report-box">
				<div class="report-title">Publication 3</div>
				<div class="calendar">
					<div class="calendar-month">JUN</div>
					<div class="calendar-date">30</div>
				</div>
			</div>
			<div class="report-tag-panel">
				<div class="project-tag geography-tag">GEOGRAPHY TAG</div>
				<div class="project-tag topic-tag">TOPIC TAG</div>
				<div class="project-tag topic-tag">TOPIC TAG</div>
				<div class="project-tag partner-tag">PARTNER TAG</div>
			</div>
		</div>
		
		
	</div>
	<div class="projects-filter">
		<div class="project-filter-title">Filter
			<?php echo '<img src="'.get_template_directory_uri() .'/images/filter.png"/>'?>
		</div>
		<div class="tag-filter">
			<div class="filter-item">Geography<span class="filter-count"></span></div>
			<ul class="filter-block">
				<li class="filter-block-item">Test</li>
				<li class="filter-block-item">Test</li>
			</ul>
		</div>
		<div class="tag-filter">
			<div class="filter-item">Topic<span class="filter-count"></span></div>
			<ul class="filter-block">
				<li class="filter-block-item">Schools</li>
				<li class="filter-block-item">TRANSPORTATION</li>
				<li class="filter-block-item">HOUSING</li>
				<li class="filter-block-item">GOVERNMENT</li>
				<li class="filter-block-item">COMMUNITY</li>
				<li class="filter-block-item">BUSINESS</li>
				<li class="filter-block-item">DEVELOPMENT</li>
			</ul>
		</div>
		<div class="tag-filter">
			<div class="filter-item">Partners<span class="filter-count"></span></div>
			<ul class="filter-block">
				<li class="filter-block-item">FORD FOUNDATION</li>
				<li class="filter-block-item">JOHN S. & JAMES L. KNIGHT FOUNDATION</li>
				<li class="filter-block-item">KELLOGG FOUNDATION</li>
				<li class="filter-block-item">SKILLMAN FOUNDATION</li>
			</ul>
		</div>
		<div class="clear-filter">Clear all filter</div>
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