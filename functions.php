<?php

/**
 * [MangUI]	Theme functions
 *
 * @package     mangopear-core
 * @category    setup
 * @since       1.0.0
 * @version     1.0.0
 * @author      Andi North <andi@mangopear.co.uk>
 * @link        https://mangopear.co.uk/
 * @license     GNU General Public License <http://opensource.org/licenses/gpl-license.php>
 */


/**
 * CHANGELOG
 *
 * @version 1.0.0
 *          Init
 */
 

/**
 * CONTENTS
 *
 * [1]  Include MangUI class
 * [2]	Add SVG sprites
 * [3]	Define various theme variables
 */


/**
 * [1]	Include MangUI class
 *
 * 		Set up the MangUI helper class and functions.
 *
 * 		@since 1.0.0
 */

require_once get_template_directory() . '/includes/class.mangui.php';





/**
 * [2]	Add SVG sprites
 *
 * 		Set definitions for sprite URLs.
 *
 * 		@since 1.0.0
 */


function mangopear_return_sprite() {
	return get_site_url() . '/sprites/mangopear-core.svg';
}


function mangopear_output_sprite() {
	echo mangopear_return_sprite();
}





/**
 * [4]	Image sizes
 *
 * 		Custom image sizes for the WordPress theme
 *
 * 		@since 1.0.0
 */

function mangopear_add_image_sizes() {
	add_image_size('title--s',   500, 325, true);		// [a]
	add_image_size('title--m',  1000, 375, true);		// [a]
	add_image_size('title--l',  1500, 400, true);		// [a]
	add_image_size('title--xl', 2000, 500, true);		// [a]

	add_image_size('blog-lister', 600, 350, true);		// [a]
}


add_action('after_setup_theme', 'mangopear_add_image_sizes');





/**
 * [5]	Register ACF blocks
 *
 * 		@since 1.0.0
 */

require_once('includes/blocks/block.testimonial.php');





/**
 * [6]	Declare support for wide alignment
 *
 * 		@since 1.0.0
 */

add_theme_support('align-wide');





/**
 * [6]	Declare support for title tag
 *
 * 		@since 1.0.0
 */

add_theme_support('title-tag');