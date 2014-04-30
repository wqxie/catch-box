<?php
/**
 * @package Catch Themes
 * Template Name: faq
 * @subpackage Catch_Box
 */

get_header(); ?>            	
<div class="faq-block">
	 	<h2>Ask D3 & FAQ</h2>
						<div class="faq">
		                	<div class="faqtitle">
		                		FAQ
		                		<div id="tagdiv">
		                			Search:<input id="tags"/>
		                		</div>
		                	</div>
		                	<div class="faq1"><p>Require Meetings</p></div>
		                	<div class="faq2" id="slide1">
		                	<div class="faq3" id="slide11"><p>1.Lorem ipsum dolor sit amet, consectetur adipiscing first?</p></div><div class="faq4"><p><strong>Answer:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
		                	<div class="faq3" id="slide12"><p>2.Lorem ipsum dolor sit amet, consectetur adipiscing second?</p></div><div class="faq4"><p><strong>Answer:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
		                	<div class="faq3" id="slide13"><p>3.Lorem ipsum dolor sit amet, consectetur adipiscing third?</p></div><div class="faq4"><p><strong>Answer:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
	                		</div>
	                		<div class="faq1" >
	                		<p>Require Information</p></div>
	                		<div class="faq2" id="slide2">
		                		<div class="faq3"id="slide21"><p>1.Lorem ipsum dolor sit amet, consectetur adipiscing first?</p></div><div class="faq4"><p><strong>Answer:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
		                		<div class="faq3"id="slide22"><p>2.Lorem ipsum dolor sit amet, consectetur adipiscing second?</p></div><div class="faq4"><p><strong>Answer:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
		                		<div class="faq3"id="slide23"><p>3.Lorem ipsum dolor sit amet, consectetur adipiscing third?</p></div><div class="faq4"><p><strong>Answer:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
                			</div>
                		</div>
	                	<div class="commonissue">
	                		<h3 style="text-align: center;border-bottom:1px solid #eeeeee">Common Issues</h3>
	                		<div class="faq2">
	                			<div class="faq3"><p>1.Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p></div><div class="faq4"><p><strong>Answer:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
	                			<div class="faq3"><p>2.Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p></div><div class="faq4"><p><strong>Answer:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
	                			<div class="faq3"><p>3.Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p></div><div class="faq4"><p><strong>Answer:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
	                			<div class="faq3"><p>4.Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p></div><div class="faq4"><p><strong>Answer:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
	                		</div>
	                	</div>
	    <div class="askd3">
        <h3>Ask D3 &#8211; Data Requests</h3>

		<div id="usermessagea" class="cf_info "></div>
		<form enctype="multipart/form-data" action="/ask/#usermessagea" method="post" class="cform" id="cformsform">
		<ol class="cf-ol">
			<li id="li--1" class=""><label for="cf_field_1"><span>Name:</span></label><input type="text" name="cf_field_1" id="cf_field_1" class="single fldrequired" value=""/><span class="reqtxt">(required)</span></li>
			<li id="li--2" class=""><label for="cf_field_2"><span>Email:</span></label><input type="text" name="cf_field_2" id="cf_field_2" class="single fldemail fldrequired" value=""/><span class="emailreqtxt">(valid email required)</span></li>
			<li id="li--3" class=""><label for="cf_field_3"><span>Organization:</span></label><input type="text" name="cf_field_3" id="cf_field_3" class="single" value=""/></li>
			<li id="li--4" class=""><label for="cf_field_4"><span>Position:</span></label><input type="text" name="cf_field_4" id="cf_field_4" class="single" value=""/></li>
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
			<li id="li--7" class=""><label for="cf_field_7"><span>Subject:</span></label><input type="text" name="cf_field_7" id="cf_field_7" class="single fldrequired" value=""/><span class="reqtxt">(required)</span></li>
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

		<p class="linklove" id="ll"><a href="http://www.deliciousdays.com/cforms-plugin"><em>cforms</em> contact form by delicious:days</a></p>		<div id="usermessageb" class="cf_info " ></div>
	

		<p><a href="http://visitor.constantcontact.com/d.jsp?m=1102546529374&amp;p=oi">Join our mailing list</a></p>
		<p>For our location and individual staff contacts, see <a href="http://datadrivendetroit.org/about-us/contact/">Contact Us</a>.</p>
		<p>&nbsp;</p>
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