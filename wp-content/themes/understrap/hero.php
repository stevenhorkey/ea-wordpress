<?php
/**
 * The template for displaying the hero.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
// var_dump(wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false )[0]);
$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false )[0];
if(!$src) $src = "https://source.unsplash.com/collection/1242150/2000x1200";

?>

<section class="site-hero" style="
            background: linear-gradient(#00000080, #00000080), url('<?php echo $src ?>')
        ">
    <div class="container h-100">
        <div class="row h-100 d-flex align-items-center justify-content-center flex-column text-uppercase" >
            <h1 class="text-light"><?php the_title(); ?></h1>
            <h3 class="text-light"><?php the_subtitle(); ?></h3>
        </div>
    </div>
</section>

<!-- <header class="masthead site-hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.8)), url(&quot;https://api.everythinginall.com/wp-content/uploads/2019/01/goggins.jpg&quot;); height: 100vh;">
    <div class="container h-100">
        <div class="d-flex h-100 align-items-center text-center">
            <div class="row w-100 mx-auto">
                <div class="mx-auto text-uppercase aos-init aos-animate" data-aos="zoom-out-down">
                    <h1><?php the_title(); ?></h1>
                    <h2><?php the_subtitle(); ?></h2></div>
                </div>
            <br>
        </div>
    </div>
</header> -->
