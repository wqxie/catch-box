<?php
/**
 * @package Catch Themes
 * Template Name: faq
 * @subpackage Catch_Box
 */

get_header(); ?>            	
<div class="left-blog-panel">
	<div id="tagdiv">
		<span style="float:left;">FAQ Search:</span><input id="tags"placeholder="Search"/>
	</div>

	 	<div class="faq-list faq">
		<div class="faq-title"><p>FAQ</p></div>
		<div class="faq-block">
			<div class="faq1"><p>Require Meetings</p></div>
        	<div class="faq2" id="slide1">
            	<div class="faq3" id="slide11"><p>1.Lorem ipsum dolor sit amet, consectetur adipiscing first?</p></div><div class="faq4"><p><strong>Answer:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            	<div class="faq3" id="slide12"><p>2.Lorem ipsum dolor sit amet, consectetur adipiscing second?</p></div><div class="faq4"><p><strong>Answer:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            	<div class="faq3" id="slide13"><p>3.Lorem ipsum dolor sit amet, consectetur adipiscing third?</p></div><div class="faq4"><p><strong>Answer:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
    		</div>
    		<div class="faq1" ><p>Require Information</p></div>
    		<div class="faq2" id="slide2">
        		<div class="faq3"id="slide21"><p>1.Lorem ipsum dolor sit amet, consectetur adipiscing first?</p></div><div class="faq4"><p><strong>Answer:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
        		<div class="faq3"id="slide22"><p>2.Lorem ipsum dolor sit amet, consectetur adipiscing second?</p></div><div class="faq4"><p><strong>Answer:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
        		<div class="faq3"id="slide23"><p>3.Lorem ipsum dolor sit amet, consectetur adipiscing third?</p></div><div class="faq4"><p><strong>Answer:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
			</div>
		</div>	<!-- .blog-block -->
    </div><!-- #post-<?php the_ID(); ?> -->

    <div class="faq-list askd3">
		<div class="faq-title"><p>Data Request</p></div>
		<div class="faq-block">
			<form enctype="multipart/form-data" action="/ask/#usermessagea" method="post" class="cform" id="cformsform">
		<ol class="cf-ol">
			<li id="li--1" class=""><label for="cf_field_1"><span>Name:</span></label><input type="text" name="cf_field_1" id="cf_field_1" class="input-field" value=""/><span class="reqtxt">(required)</span></li>
			<li id="li--2" class=""><label for="cf_field_2"><span>Email:</span></label><input type="text" name="cf_field_2" id="cf_field_2" class="input-field" value=""/><span class="emailreqtxt">(valid email required)</span></li>
			<li id="li--3" class=""><label for="cf_field_3"><span>Organization:</span></label><input type="text" name="cf_field_3" id="cf_field_3" class="input-field" value=""/></li>
			<li id="li--4" class=""><label for="cf_field_4"><span>Position:</span></label><input type="text" name="cf_field_4" id="cf_field_4" class="input-field" value=""/></li>
			<li id="li--5" class=""><label for="cf_field_5"><span>Type:</span></label><select name="cf_field_5" id="cf_field_5" class="cformselect" >
				<option value="Data Request">Data Request</option>
				<option value="Meeting Request">Meeting Request</option>
				<option value="Other">Other</option>
			</select></li>
			<li id="li--6" class=""><label for="cf_field_6"><span>Topic:</span></label><select name="cf_field_6" id="cf_field_6" class="cformselect" >
				<option value="Amenities">Amenities</option>
				<option value="Business">Business</option>
				<option value="Census">Census</option>
				<option value="Education">Education</option>
				<option value="Employment">Employment</option>
				<option value="Environment">Environment</option>
				<option value="Health">Health</option>
				<option value="Housing">Housing</option>
				<option value="Public Safety">Public Safety</option>
				<option value="Transportation">Transportation</option>
				<option value="Youth">Youth</option>
				<option value="Other">Other</option>
			</select></li>
			<li id="li--7" class=""><label for="cf_field_7"><span>Subject:</span></label><input type="text" name="cf_field_7" id="cf_field_7" class="input-field" value=""/><span class="reqtxt">(required)</span></li>
			<li id="li--8" class=""><label for="cf_field_8"><span>Question:</span></label><textarea cols="30" rows="8" name="cf_field_8" id="cf_field_8" class="area fldrequired"></textarea><span class="reqtxt">(required)</span></li>
		</ol>
		<fieldset class="cf_hidden">
			<legend>&nbsp;</legend>
			<input type="hidden" name="cf_working" id="cf_working" value="One%20moment%20please..."/>
			<input type="hidden" name="cf_failure" id="cf_failure" value="Please%20fill%20in%20all%20the%20required%20fields."/>
			<input type="hidden" name="cf_codeerr" id="cf_codeerr" value="Please%20double-check%20your%20verification%20code."/>
			<input type="hidden" name="cf_customerr" id="cf_customerr" value="yyn"/>
			<input type="hidden" name="cf_popup" id="cf_popup" value="nn"/>
		</fieldset>
		<p class="cf-sb"><input type="submit" name="sendbutton" id="sendbutton" class="sendbutton" value="Submit" onclick="return cforms_validate('', false)"/></p></form>

	

		<p class="form-text"><a href="http://visitor.constantcontact.com/d.jsp?m=1102546529374&amp;p=oi">Join our mailing list</a></p>
		<p class="form-text">For our location and individual staff contacts, see <a href="http://datadrivendetroit.org/about-us/contact/">Contact Us</a>.</p>
		</div>	<!-- .blog-block -->
    </div><!-- #post-<?php the_ID(); ?> -->
    
    

</div>

<div class="right-blog-panel">
				
				<div class="faq-list commonissue">
					<div class="faq-title"><p>Common Issues</p></div>
					<div class="faq-block">
					<div class="faq2">
	                	<div class="faq3"><p>1.Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p></div><div class="faq4"><p><strong>Answer:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
	                	<div class="faq3"><p>2.Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p></div><div class="faq4"><p><strong>Answer:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
	                	<div class="faq3"><p>3.Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p></div><div class="faq4"><p><strong>Answer:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
	                	<div class="faq3"><p>4.Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p></div><div class="faq4"><p><strong>Answer:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
	                </div>
	            	</div>
				</div>
</div><!-- right blog panel -->
            
	</div><!-- #primary -->
    
	<?php 
    /** 
     * catchbox_after_primary hook
     *
     */
    do_action( 'catchbox_after_primary' ); ?>    			

<?php get_footer(); ?>