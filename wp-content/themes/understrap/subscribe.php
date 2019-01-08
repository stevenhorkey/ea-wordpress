<?php
/**
 * The template for displaying the subscribe form.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );

$post = get_page_by_path( 'subscribe-form', OBJECT, 'subscribe' );
// echo json_encode($post);
?>


<!-- Begin Mailchimp Signup Form -->
<div id="mc_embed_signup">
<form action="https://everythinginall.us19.list-manage.com/subscribe/post?u=2e4399095ea5df2270bd7647d&amp;id=2ee3c1c90f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h3 class="subscribe-title"><?php echo $post->post_title?></h3>
	<div><?php echo $post->post_content?></div>

<div class="mc-field-group col-md-6 d-inline-block">
	<label for="mce-FNAME">First Name </label>
	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group col-md-6 d-inline-block">
	<label for="mce-LNAME">Last Name </label>
	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
<div class="mc-field-group col-12 d-flex justify-content-center flex-column">
	<label for="mce-EMAIL">Email Address 
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_2e4399095ea5df2270bd7647d_2ee3c1c90f" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Sign Me Up" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary text-light text-uppercase"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->