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
				<img class="post-signature" src="http://ea.local/wp-content/uploads/2019/01/signature.png"/>
			</div>
			<hr/>
			<!-- subscribe form -->
			<div>
				<?php get_subscribe(); ?>
			</div>
			<!-- comments -->
			<div class="w-100">
				<div id="disqus_thread"></div>
				<script defer>
				/**
				*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
				*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
				
				var disqus_config = function () {
					this.page.url = "<?php echo home_url( $wp->request ) ?>";  // Replace PAGE_URL with your page's canonical URL variable
					this.page.identifier = <?php echo $post->ID ?>; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
				};
				
				(function() { // DON'T EDIT BELOW THIS LINE
				var d = document, s = d.createElement('script');
				s.src = 'https://everything-in-all-1.disqus.com/embed.js';
				s.setAttribute('data-timestamp', +new Date());
				(d.head || d.body).appendChild(s);
				})();
				</script>
				<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			</div>
			
			<footer class="entry-footer">
			
				<!-- <?php understrap_entry_footer(); ?> -->
			
			</footer><!-- .entry-footer -->
		</div>
	</div>

</article><!-- #post-## -->
