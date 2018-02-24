<?php 

add_action('after_setup_theme', 'torro_theme_setup');

function torro_theme_setup(){

	add_theme_support('title-tag');

	add_theme_support('post-thumbnails');


	/**
	*
	* slider
	*
	*/
	register_post_type('comet-slider', array(
		'label'		=> 'Slides',
		'labels'	=> array(
			'name'		=> 'Slides',
			'add_new'	=> 'Add New Slide',
			'add_new_item'	=> 'Add New Slide'
		),
		'public'	=> true,
		'supports'	=> array('title', 'editor', 'page-attributes', 'thumbnail')
	));


	add_image_size('slide_bg', 388, 579, true);



}






/**
*
* Redux Framework
*
*/

require_once('libs/redux/ReduxCore/framework.php');
require_once('libs/redux/sample/barebones-config.php');



/**
*
* cmb2
*
*/
require_once('libs/cmb2/custom-cmb2.php');