<?php
/**
 * Plugin Name: Imagify | Prevent tags replacemet when displaying images in webp format on the site.
 * Description: To prevent the replacement of tags when Imagify's WebP feature is enabled. 
 * 				This is because, when Creating the webp versions of images, the display images in webp format on the site 
 * 				option can result in a the tags replacements.
 * Plugin URI:  {GitHub repo URL of this plugin}
 * Author:      Gedeon Nibango and Imagify Support Team
 * Author URI:  http://imagify.io/
 * License:     GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright SAS WP MEDIA 2020
 */

// Namespaces must be declared before any other declaration.
namespace ImagifyPlugin\Helpers\optimization\replacement;

// Standard plugin security, keep this line in place.
defined( 'ABSPATH' ) or die();


//hook = imagify_allow_picture_tags_for_webp , callable $function_to_add = no_replace_img_picture
add_filter( 'imagify_allow_picture_tags_for_webp', 'no_replace_img_picture' );
/**
 * @param bool $allow True to allow the use of <picture> tags (default). False to prevent their use.
 *
 * @author Gedeon Nibango
 * 
 */
//$allow = apply_filters( 'imagify_allow_picture_tags_for_webp', false ); 

//$allow is passed to the callback, modified, then returned:

//

function no_replace_img_picture($allow) {

	if ( ! $allow ) {
		return $allow;
	}

}

