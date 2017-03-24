<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Full Content Template
 *
Template Name:  sixties-pop-culture (no sidebar)
 *
 * @file           sixties-pop-culture.php
 * @package        Responsive
 * @author         Ethan DeGross
 * @license        GNU General Public License v2 or later
 * @version        1.0.0
 * @filesource     wp-content/themes/responsive/full-width-page1.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>
	<div id="sixties-content">
		<div id="opening-text">
			<div class="custom-heading">
			Pop Culture
			</div>
			<p>
				Movies, books, TV, and rock and roll radio = a college student’s four food groups of popular culture in the 1960s. Before Saturday Night Live, there were late-night movies, and Action A-Go-Go was Channel 7’s answer to American Bandstand. Tune in and turn on!
		</div>
		<div class="owl-carousel sixtiesImages">
		<?php
		echo do_shortcode('[pods name="slide" template="Slide (standard)" orderby="slide_sort_order" where="slidesyndication.slug=\'popular-culture\'"]');
		 ?>
		</div>
</div>


<?php get_footer(); ?>
