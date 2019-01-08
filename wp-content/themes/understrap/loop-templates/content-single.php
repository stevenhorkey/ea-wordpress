<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$post = get_post();

// var_dump(get_the_post_thumbnail_url($post->ID, 'thumbnail'));

?>

<article <?php post_class('post-section'); ?> id="post-<?php the_ID(); ?>">

	<div class="container text-center">
		<div class="row"></div>
		<div class="row">
			
			<div class="text-justify post-box pt-4">
				<div id="tempDiv" class="d-none"></div>
				<div class="entry-content written-copy">
				
					<?php the_content(); ?>
				
				</div><!-- .entry-content -->
			</div>
			<!-- signature -->
			<div class="row w-100 mx-auto py-5">
				<img class="post-signature col-12" src="http://ea.local/wp-content/uploads/2019/01/signature.png"/>
			</div>
			<hr/>
			<!-- subscribe form -->
			<div></div>
			<!-- comments -->
			<div></div>
			
			<footer class="entry-footer">
			
				<!-- <?php understrap_entry_footer(); ?> -->
			
			</footer><!-- .entry-footer -->
		</div>
	</div>

</article><!-- #post-## -->
