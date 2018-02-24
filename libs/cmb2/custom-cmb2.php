<?php 


require_once('init.php');


add_action('cmb2_admin_init', 'comet_custom_metabox');

function comet_custom_metabox(){


	/**
	*
	* post formats
	*
	*
	*/
	$post = new_cmb2_box(array(
		'id'	=> 'comet-posts',
		'title'	=> 'Extra Post Info ',
		'object_types'	=> array('post')
	));


	// video
	$post->add_field(array(
		'name'	=> 'Youtube Video Link',
		'desc'	=> 'You can add any youtube video here',
		'id'	=> 'video-link',
		'type'	=> 'oembed'
	));

	// audio
	$post->add_field(array(
		'name'	=> 'Audio Link',
		'desc'	=> 'You can add any audio here',
		'id'	=> 'audio-link',
		'type'	=> 'oembed'
	));

	// quote
	$post->add_field( array(
		'name'	=> 'Quote Text',
		'desc'	=> 'Add you quote here',
		'id'	=> 'quote-text',
		'type'	=> 'textarea'
	));

	// gallery
	$post->add_field( array(
		'name'	=> 'Gallery Images',
		'desc'	=> 'Add gallery images here',
		'id'	=> 'gallery_images',
		'type'	=> 'file_list'
	));



	/**
	*
	* slides
	*
	*
	*/
	$slide_info = new_cmb2_box(array(
		'id'	=> 'comet-slides',
		'title'	=> 'Extra Info Slide',
		'object_types'	=> array('comet-slider')
	));


	$slide_info->add_field( array(
		'name'		=> 'Client Name',
		'desc'		=> 'You can add Client Name from here',
		'id'		=> 'client-name',
		'type'		=> 'text'
	));








	/**
	*
	* freature products
	*
	*
	*/
	$product_info = new_cmb2_box(array(
		'id'	=> 'comet-features',
		'title'	=> 'Featuare Product Info',
		'object_types'	=> array('comet-features')
	));


	$product_info->add_field( array(
		'name'		=> 'Product Name ',
		'desc'		=> 'You can add Product Name from here',
		'id'		=> 'f-product-name',
		'type'		=> 'text'
	));


	$product_info->add_field( array(
		'name'		=> 'Product Price',
		'desc'		=> 'You can add product price from here',
		'id'		=> 'f-product-price',
		'type'		=> 'text'
	));


	$product_info->add_field( array(
		'name'		=> 'Money Text',
		'desc'		=> 'You can change money text form from here',
		'id'		=> 'money-text',
		'type'		=> 'text'
	));

	// $product_info->add_field( array(
	// 	'name'		=> 'Button URL',
	// 	'desc'		=> 'You can add button url from here',
	// 	'id'		=> 'btn-url',
	// 	'type'		=> 'text'
	// ));



	/**
	*
	* Purification Section
	*
	*
	*/
	$purefication = new_cmb2_box(array(
		'id'	=> 'comet-purification',
		'title'	=> 'Purification Technology Info',
		'object_types'	=> array('comet-purification')
	));


	$purefication->add_field( array(
		'name'		=> 'Title',
		'desc'		=> 'You can add Title from here',
		'id'		=> 'pure-title',
		'type'		=> 'text',
		// 'default'	=> 'RO'
	));


	$purefication->add_field( array(
		'name'		=> 'Subtitle',
		'desc'		=> 'You can add subtitle from here',
		'id'		=> 'pure-subtitle',
		'type'		=> 'text',
		// 'default'	=> 'Technology of Reverse Osmosis'
	));


	$purefication->add_field( array(
		'name'		=> 'Description',
		'desc'		=> 'You can description text form from here',
		'id'		=> 'pure-desc',
		'type'		=> 'wysiwyg',
		// 'default'	=> 'Multiple Purification stages bring down excessive TDS level removing all impurities and making the water 100% pure',
		'options' => array(
		    'wpautop' => true, // use wpautop?
		    'media_buttons' => true, // show insert/upload button(s)
		    'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
		    'textarea_rows' => get_option('default_post_edit_rows', 7), // rows="..."
		    'tabindex' => '',
		    'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the `<style>` tags, can use "scoped".
		    'editor_class' => '', // add extra class(es) to the editor textarea
		    'teeny' => false, // output the minimal editor config used in Press This
		    'dfw' => false, // replace the default fullscreen with DFW (needs specific css)
		    'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
		    'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()
		),
	));





	/**
	*
	* Why Choose us Section
	*
	*
	*/
	$reason = new_cmb2_box(array(
		'id'	=> 'comet-reasons',
		'title'	=> 'Why Choose us Info',
		'object_types'	=> array('comet-why')
	));


	$reason->add_field( array(
		'name'		=> 'Title',
		'desc'		=> 'You can add Title from here',
		'id'		=> 'reason-title',
		'type'		=> 'text'
	));


	$reason->add_field( array(
		'name'		=> 'Icon',
		'desc'		=> 'You can add subtitle from here',
		'id'		=> 'reason-icon',
		'type'		=> 'text'
	));


	$reason->add_field( array(
		'name'		=> 'Description',
		'desc'		=> 'You can description text form from here',
		'id'		=> 'reason-desc',
		'type'		=> 'wysiwyg',
		// 'default'	=> 'Multiple Purification stages bring down excessive TDS level removing all impurities and making the water 100% pure',
		'options' => array(
		    'wpautop' => true, // use wpautop?
		    'media_buttons' => true, // show insert/upload button(s)
		    'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
		    'textarea_rows' => get_option('default_post_edit_rows', 7), // rows="..."
		    'tabindex' => '',
		    'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the `<style>` tags, can use "scoped".
		    'editor_class' => '', // add extra class(es) to the editor textarea
		    'teeny' => false, // output the minimal editor config used in Press This
		    'dfw' => false, // replace the default fullscreen with DFW (needs specific css)
		    'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
		    'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()
		),
	));




	/**
	*
	* Testimonials Section
	*
	*
	*/
	$reason = new_cmb2_box(array(
		'id'	=> 'comet-testimonial',
		'title'	=> 'Why Choose us Info',
		'object_types'	=> array('comet-testi')
	));


	$reason->add_field( array(
		'name'		=> 'Name',
		'desc'		=> 'You can add Name from here',
		'id'		=> 't-name',
		'type'		=> 'text'
	));


	$reason->add_field( array(
		'name'		=> 'Job Status',
		'desc'		=> 'You can add job status from here',
		'id'		=> 't-job-status',
		'type'		=> 'text'
	));

	$reason->add_field( array(
		'name'		=> 'Company Name',
		'desc'		=> 'You can add company name from here',
		'id'		=> 't-company-name',
		'type'		=> 'text'
	));


	$reason->add_field( array(
		'name'		=> 'Description',
		'desc'		=> 'You can description text form from here',
		'id'		=> 't-desc',
		'type'		=> 'wysiwyg',
		// 'default'	=> 'Multiple Purification stages bring down excessive TDS level removing all impurities and making the water 100% pure',
		'options' => array(
		    'wpautop' => true, // use wpautop?
		    'media_buttons' => true, // show insert/upload button(s)
		    'textarea_name' => $editor_id, // set the textarea name to something different, square brackets [] can be used here
		    'textarea_rows' => get_option('default_post_edit_rows', 7), // rows="..."
		    'tabindex' => '',
		    'editor_css' => '', // intended for extra styles for both visual and HTML editors buttons, needs to include the `<style>` tags, can use "scoped".
		    'editor_class' => '', // add extra class(es) to the editor textarea
		    'teeny' => false, // output the minimal editor config used in Press This
		    'dfw' => false, // replace the default fullscreen with DFW (needs specific css)
		    'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
		    'quicktags' => true // load Quicktags, can be used to pass settings directly to Quicktags using an array()
		),
	));






}