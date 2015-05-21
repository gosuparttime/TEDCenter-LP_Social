<?php
/* Bones Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a seperate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

Developed by: Eddie Machado
URL: http://themble.com/bones/
*/


// let's create the function for the custom type
function custom_post_example() { 
	// creating (registering) the custom type 
	register_post_type( 'custom_type', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Page Tabs', 'post type general name'), /* This is the Title of the Group */
			'singular_name' => __('Custom Page Tab', 'post type singular name'), /* This is the individual type */
			'add_new' => __('Add New', 'custom post type item'), /* The add new menu item */
			'add_new_item' => __('Add New Page Tab'), /* Add New Display Title */
			'edit' => __( 'Edit' ), /* Edit Dialog */
			'edit_item' => __('Edit Page Tabs'), /* Edit Display Title */
			'new_item' => __('New Page Tab'), /* New Display Title */
			'view_item' => __('View Page Tab'), /* View Display Title */
			'search_items' => __('Search Page Tabs'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This section is to create and manage the in-page tabs for this theme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title')
	 	) /* end of options */
	); /* end of register post type */
} 
// adding the function to the Wordpress init
add_action( 'init', 'custom_post_example');

/**
 *  Install Add-ons
 *  
 *  The following code will include all 4 premium Add-Ons in your theme.
 *  Please do not attempt to include a file which does not exist. This will produce an error.
 *  
 *  All fields must be included during the 'acf/register_fields' action.
 *  Other types of Add-ons (like the options page) can be included outside of this action.
 *  
 *  The following code assumes you have a folder 'add-ons' inside your theme.
 *
 *  IMPORTANT
 *  Add-ons may be included in a premium theme as outlined in the terms and conditions.
 *  However, they are NOT to be included in a premium / free plugin.
 *  For more information, please read http://www.advancedcustomfields.com/terms-conditions/
 */ 

// Fields 
add_action('acf/register_fields', 'my_register_fields');

function my_register_fields()
{
	//include_once('add-ons/acf-repeater/repeater.php');
	//include_once('add-ons/acf-gallery/gallery.php');
	//include_once('add-ons/acf-flexible-content/flexible-content.php');
	include_once('/wp-content/plugins/acf-date_time_picker/acf-date_time_picker.php');
	include_once('/wp-content/plugins/acf-location/acf-location.php');
}

// Options Page 
	include_once( 'wp-content/plugins/acf-options-page/acf-options-page.php' );


/**
 *  Register Field Groups
 *
 *  The register_field_group function accepts 1 array which holds the relevant data to register a field group
 *  You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 */

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_page-tabs',
		'title' => 'Page Tabs',
		'fields' => array (
			array (
				'key' => 'field_5166de56397b9',
				'label' => 'Additional Details',
				'name' => 'add_detail',
				'type' => 'text',
				'instructions' => 'Provide a short line of text to accompany the title on the tab buttons',
				'default_value' => '',
				'formatting' => 'none',
			),
			array (
				'key' => 'field_5166ddbd22f7e',
				'label' => 'Left Column',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5166ddcc22f7f',
				'label' => 'Column Content',
				'name' => 'l_content',
				'type' => 'wysiwyg',
				'instructions' => 'Provide written information for this column of text',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_5166de0122f80',
				'label' => 'Right Column',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5166de1122f81',
				'label' => 'Column Content',
				'name' => 'r_content',
				'type' => 'wysiwyg',
				'instructions' => 'Provide written information for this column of text',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_51682864ca830',
				'label' => 'Footer',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_51682873ca831',
				'label' => 'Footer Content',
				'name' => 'f_content',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
		),
		'location' => array (
			'rules' => array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'custom_type',
					'order_no' => 0,
				),
			),
			'allorany' => 'all',
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

?>
