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

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			
			<main class="site-main single-post w-100" id="main">

			<!-- toolbar -->
			<div class="post-btns bg-light">
				<!-- <img onClick={this.createPDF} src={documentSVG} /> -->
				<!-- <img onClick={this.downloadJSON} src={downloadSVG} />
				<img data-toggle="modal" data-target="#uploadJSONmodal" src={uploadSVG} />
				<div><ion-icon data-toggle="modal" data-target="#uploadJSONmodal" name="log-in"></ion-icon></div> -->
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

<?php get_footer(); ?>
