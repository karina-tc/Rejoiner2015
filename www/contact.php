<?php
	$pageTitle = "";
	$metaDescription = "";
	include("header.php");
?>

<section style="max-width: 980px; margin: auto;">
 <h2 style="margin-bottom: 0;">Contact Us</h2>
  <p style="text-align: center;	font-family: 'Ideal Sans SSm A';">Great support is a click or call away</p>

  <section class="contactus clearfix">

  	<form name="contactform" id="contactform" action="https://app.rejoiner.com/signup/contact" class="clearfix">
  		<label for="name">Your Name</label>
  		<input type="text" required="required" placeholder="First &amp; Last Name" name="name" />

  		<label for="email">Email Address</label>
  		<input type="email" required="required" placeholder="contactme@email.com" name="email" id="email" />

  		<label for="website">Website</label>
  		<input type="url" placeholder="businesssite.com" name="website" />

  		<label for="company">Company</label>
  		<input type="text" placeholder="My Business Name" name="company" />

  		<label for="comments">Comments</label>
  		<textarea name="comments" id="comments" placeholder="Hi guys!"></textarea>
		<div class="clear"></div>
  		<a href="#" class="btn">Send Request</a>		
  	</form>
	<div id="contacttext">
	  	<h5>Need help?</h5>
	  	<p>Fill out the form to the left or <a href="/cdn-cgi/l/email-protection#9deee8ededf2efe9ddeff8f7f2f4f3f8efb3fef2f0">email us directly.</a></p>
  	
	  	<h5>Have a question?</h5>
	  	<p>Our <a href="docs/faq">FAQs</a> cover most common questions.</p>

	    <h5>Prefer to talk with a person?</h5>
	    <p>Call us at (800) 284-4603 from 8-6 EST.</p>
	</div>

  </section>
</section>

			
<?php include("footer.php"); ?>