<?php
/**
 * Template Name: Home Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

get_hero();

?>

<section class="bg-dark">
	<div class="container">
		<div class="row pb-5 d-flex align-items-center bg-black">
			<div class="col-lg-6 pt-5 text-justify">
				<?php if( have_posts() ) {
					while( have_posts() ) {
					the_post();
						the_content();
					}
				} ?>
			</div>
			<div class="col-lg-6 pt-5">
				<?php get_subscribe() ?>
			</div>
		</div>
	</div>
</section>

<section class="">
	<div class="container">
		<div class="row py-4 d-flex align-items-center">
			<div class="col-12">
				<h3 class="float-left text-uppercase">Recent Courses</h3>
				<a href="/courses">
					<button class="btn btn-primary float-right text-light text-uppercase">View all Courses</button>
				</a>
			</div>
		</div>
		<div class="row row-eq-height pb-5">
			<?php 
			// the query
			$the_query = new WP_Query( array(
				'posts_per_page' => 8,
			)); 
			$the_query->the_post(); 
				$slug = basename( get_permalink() );
				$src = wp_get_attachment_image_src( get_post_thumbnail_id( $the_query->ID ), 'large', false )[0];
				if(!$src) $src = "https://source.unsplash.com/collection/1242150/2000x1200";
			?>

			<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
			$slug = basename( get_permalink() );
			$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large', false )[0];
					if(!$src) $src = "https://source.unsplash.com/collection/1242150/2000x1200";
			?>

				<div class="col-md-6 my-3 scale-item">
					<a href="<?php echo get_site_url().'/'.$slug ?>">
						<div class="h-100 post-card d-flex align-items-center justify-content-center text-center text-uppercase flex-column" style="
							background-image: linear-gradient(#00000033, #00000033), url('<?php echo $src ?>');
						">
							<h3 class="text-light"><?php the_title(); ?></h3>
							<h5 class="text-light"><?php the_subtitle(); ?></h5>
						</div>
					</a>
				</div>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

			
			<?php endif; ?>
		</div>
	</div>
</section>

<?php

// while ( have_posts() ) :
// 	the_post();
// 	get_template_part( 'loop-templates/content', 'empty' );
// endwhile;

get_footer();
