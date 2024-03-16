<?php
/**
 * Template Name: No Title
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package justg
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

echo '<div class="container pt-4">';
    while ( have_posts() ) :
        the_post();
        get_template_part( 'loop-templates/content', 'empty' );
    endwhile;
echo '</div>';

get_footer();
