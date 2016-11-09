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

$who_won = get_field('who_won');
$bookLink = get_bloginfo('url') . 'ABA';

if( $who_won == 'Clinton' ) {
	$song_link = get_field('clinton_song_link');
	$video_link = get_field('clinton_video_link');
	$activity_book = get_field('clinton_activity_book');
	$book = 'book-hillary';
} else {
	$song_link = get_field('trump_song_link');
	$video_link = get_field('trump_video_link');
	$activity_book = get_field('trump_activity_book');
	$book = 'book-trump';
}
 
	
 
wp_reset_postdata();
	

?>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

		<section class="main-content">

			<div class="pricing-grid">
			    <div class="plan plan1">
				    <div class="top js-blocks-four">
				    	<h3 class="js-blocks">iTunes</h3>
				    	<div class="icon js-blocks-two">
							<!-- <div class="action">Download</div> -->
							<img src="<?php bloginfo('template_url'); ?>/images/45pres_itunes.jpg">
						</div>
						<div class="contents js-blocks-three">
							<p>A rockin’ version of “Yankee Doodle” and “Hail to the Chief” by the Emmy Award-winning Raggs Band. Each president is named with interesting facts interspersed. 3:00’</p>
						</div>
				    	
				    	<div class="price">$0.99</div>
			    	</div><!-- top -->
			    	<a class="cta" href="<?php echo $song_link; ?>">
			    		DOWNLOAD
			    	</a>
			    	<div class="last-div"></div>
			    </div>
			    <div class="plan plan2">
			    	<div class="top js-blocks-four">
				    	<h3 class="js-blocks">Activity Book</h3>
				    	<div class="icon js-blocks-two">
							<!-- <div class="action">Watch</div> -->
							<img src="<?php bloginfo('template_url'); ?>/images/<?php echo $book; ?>.png">
						</div>
						<div class="contents js-blocks-three">
				    		<p>The FIRST activity book to feature all 45 presidents from Washington through the recent election!</p>
				    		<ul>
					    		<li>84-pages w/laminated cover </li>
					    		<li>Large format 8-1/2 x 11</li>
					    		<li>Caricatures of each president, facts, fill-in-the blanks, matching and info about The White House, Air Force One and Mt. Rushmore</li>
					    		<li>Ages K-8</li>
							</ul>
				    	</div>
				    	<!-- <h4>Features:</h4> -->
				    	
				    	<div class="price">$8.99</div>
			    	</div><!-- top -->
			    	<a class="cta" href="<?php echo $activity_book; ?>">
			    		ORDER
			    	</a>
			    	<div class="others">
			    		<!-- <div class="call">Bookstores, retailers & schools</div> -->
			    		<div class="blue-butt"><a class="blue-butt" href="<?php echo $bookLink; ?>">Bookstores, retailers & schools CLICK HERE</a></div>
			    		
			    	</div>
			    	<div class="last-div"></div>
			    </div>
			    <div class="plan plan3">
			    	<div class="top js-blocks-four">
				    	<h3 class="js-blocks">Music Video</h3>
				    	<div class="icon js-blocks-two">
							<!-- <div class="action">Order</div> -->
							<img src="<?php bloginfo('template_url'); ?>/images/45Pres_Youtube.jpg">
							<div class="spacer-image"><img src="<?php bloginfo('template_url'); ?>/images/dance.jpg"></div>
						</div>

						<div class="contents js-blocks-three">
				    	<p>Starring Raggs, 30 children, parents, one Labrador Retriever, one break dancing Uncle Sam and one big yellow school bus! Each president is represented by fun caricatures! 3:00’</p>
				    	</div>
				    	<div class="price">Free!</div>
			    	</div><!-- top -->
			    	<a class="cta" href="<?php echo $video_link; ?>">
			    		WATCH
			    	</a>
			    	<div class="last-div"></div>
			    	
			    </div>
			</div>

		</section>	

		<section class="cta">
			<div class="subject">
				Presented by Blue Socks Media, home of the Raggs TV series. More info: <a href="http://raggs.com">Raggs.com</a>. 
			</div>
			<!-- <div class="click">
				<a href="<?php bloginfo('url'); ?>/ABA">
					click here
				</a>
			</div> -->
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
