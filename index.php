<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); 



$post = get_post(2); 
setup_postdata( $post );
 
	$songLink = get_field('');
	$videoLink = get_field('');
	$bookLink = get_field('');
 
wp_reset_postdata();
	

?>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

		<section class="main-content">
			
			<div class="item">
				<div class="arrow-right"></div>
				<a href="<?php echo $songLink; ?>">Download the song</a>
				<div class="icon">
				<div class="action">Download</div>
					<img src="<?php bloginfo('template_url'); ?>/images/45pres_itunes.jpg">
				</div>
				<div class="desc">
					"The 45 Presidents" Song
				</div>
			</div><!-- item -->

			<div class="item">
				<div class="arrow-right"></div>
				<a href="<?php echo $videoLink; ?>">Download the song</a>
				<div class="icon">
				<div class="action">Watch</div>
					<img src="<?php bloginfo('template_url'); ?>/images/45Pres_Youtube.jpg">
				</div>
				<div class="desc">
					"The 45 Presidents" Music Video
				</div>
			</div><!-- item -->

			<div class="item">
				<div class="arrow-right"></div>
				<a href="<?php echo $bookLink; ?>">Download the song</a>
				<div class="icon">
				<div class="action">Order</div>
					<img src="<?php bloginfo('template_url'); ?>/images/45pres_itunes.jpg">
				</div>
				<div class="desc">
					"The 45 Presidents" Activity Book
				</div>
			</div><!-- item -->

		</section>	

		<section class="cta">
			<div class="subject">
				BookStores, Schools, &amp; Retailers
			</div>
			<div class="click">
				<a href="<?php bloginfo('url'); ?>/ABA">
					click here
				</a>
			</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
