<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
get_hero();
$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="container">
	<div class="row mt-3 font-italic">
		<span class="col-md-8"><?php the_title(); ?></span>
		<span class="col-md-4 text-right">Published <?php the_time('l, F jS, Y'); ?></span>
	</div>
</div>
<hr class="w-100"/>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			
			<main class="site-main single-post w-100" id="main">
			<!-- toolbar -->
			<div class="post-btns bg-light">
				<ion-icon id="create-pdf"  name="document"></ion-icon>
				<!-- <img onclick="downloadJSON()" src={downloadSVG} />
				<img data-toggle="modal" data-target="#uploadJSONmodal" src={uploadSVG} /> -->
				<!-- <div><ion-icon data-toggle="modal" data-target="#uploadJSONmodal" name="document"></ion-icon></div> -->
				<div class="addthis_inline_share_toolbox"></div>
			</div>

			<!-- Modal -->
			<div class="modal fade" id="uploadJSONmodal" tab-index="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Upload Your JSON File to Continue Your Work</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body d-flex align-items-center justify-content-center">
                    <input type="file" class="" id="jsonUpload" onChange={(event) => this.uploadJSON(event)}/>
                  </div>
                </div>
              </div>
						</div>
						
						

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<script defer src="http://ea.local/wp-content/themes/understrap/js/post_form.js"></script>
<script defer src="http://ea.local/wp-content/themes/understrap/js/pdfmake/pdfmake.min.js"></script>
<script defer src="http://ea.local/wp-content/themes/understrap/js/pdfmake/vfs_fonts.js"></script>
<script defer>
	var post = <?php echo json_encode($post); ?>
</script>

<?php 


get_footer(); 

?>
