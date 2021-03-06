<?php
/**
 * The template for displaying all single posts.
 *
 * @package spurs
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

while ( have_posts() ) : the_post();
	get_template_part( 'templates/loop/content', 'single' );
	spurs_post_nav();

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;

endwhile; // end of the loop.
