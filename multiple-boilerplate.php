<?php
/**
 * Plugin Name:       Multiple Boilerplate
 * Description:       Example block written with ESNext standard and JSX support – build step required.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       multiple-boilerplate
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
if(!defined('ABSPATH')) exit;
function multiple_boilerplate_block_init() {
	$blocks = array(
		array("block1/",array(
			"render_callback" => "thisrender"
		)),
		array("block2/", array()),
		array("block3/", array() )
	);
	foreach($blocks as $block){

			register_block_type( plugin_dir_path(__FILE__) . '/include/block-editor/blocks/'.$block[0], $block[1]);
				
	}
}
add_action( 'init', 'multiple_boilerplate_block_init' );

function thisrender(){
	return '<p>from rendercallback<p>';
}
