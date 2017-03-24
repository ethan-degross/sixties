<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Full Content Template
 *
Template Name:  sixties-feminism-gay-rights (no sidebar)
 *
 * @file           sixties-feminism-gay-rights.php
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
			Feminism & Gay Rights
			</div>
			<p>
				The emerging second-wave feminist movement focused on equality in several realms, including women’s reproductive rights, pay equity, access to child care, and equal opportunity in the workplace. Gay Liberation Front, founded in 1970, was the first such university-recognized student organization in the U.S.
			</p>
		</div>
		<div class="owl-carousel sixtiesImages">
		<?php
		echo do_shortcode('[pods name="slide" template="Slide (standard)" orderby="slide_sort_order" where="slidesyndication.slug=\'feminism-and-gay-rights\'"]');
		 ?>
		</div>
</div>


<?php get_footer(); ?>
