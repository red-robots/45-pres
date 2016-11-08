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
					<h3>"The 45 Presidents" Song</h3>
					A toe-tapping, contemporary version of “Yankee Doodle” and “Hail to the Chief” performed by the Emmy Award-winning Raggs Band from the “Raggs” TV series. Each president is named and interesting facts are interspersed through out the 3:00’ song. 
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
					<h3>"The 45 Presidents" Music Video</h3>
					Featuring the character Raggs, 30 children, parents, one Labrador retriever, one break dancing Uncle Sam and one big yellow school bus!  Each president is represented by illustrator Jeff Mangum’s fun caricatures!
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
					<h3>"The 45 Presidents" Activity Book</h3>
					This is the FIRST activity book to feature all 45 presidents from Washington thru the recent election! Key facts are included on each page. In addition to feature pages about each president, there are 40 pages of activities including fun facts, First Lady matching, fill-in-the blanks, a format to write the President a letter and coloring sheets of The White House, Air Force One and Mt. Rushmore and much more!
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
