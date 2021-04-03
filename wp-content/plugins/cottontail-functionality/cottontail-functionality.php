<?php
/**
 * Plugin Name: Cottontail Functionality
 * Description: Core functionality for Cottontail Creative. <strong>It should always be activated</strong>.
 * Version:     1.0.0
 * Author:      Aidan Weltner
 * Author URI: https://cottontailcreative.com
 *
 */

add_filter(
    'be_media_from_production_url',
    function () {
        return 'https://cottontailcreative.com';
    }
);

// Local JSON data from ACF

add_filter('acf/settings/save_json', 'ssb_acf_json_save_point');
function ssb_acf_json_save_point($path)
{
    // update path
    $path = plugin_dir_path(__FILE__) . '/acf-json';
    
    // return
    return $path;
}

add_filter('acf/settings/load_json', 'ssb_acf_json_load_point');

function ssb_acf_json_load_point($paths)
{
    // remove original path (optional)
    unset($paths[0]);
        
    // append path
    $paths[] = plugin_dir_path(__FILE__) . '/acf-json';
    
    
    // return
    return $paths;
}


/* Add Custom Post Types */
add_action('init', function () {

    /* Register Services Taxonomy */
    register_taxonomy('service', array( 'post', 'project', 'faq', 'testimonial' ), array(
      'hierarchical'      => true,
      'labels'            => array(
          'name'              => _x('Services', 'taxonomy general name'),
          'singular_name'     => _x('Service', 'taxonomy singular name'),
          'search_items'      =>  __('Search Services'),
          'all_items'         => __('All Services'),
          'parent_item'       => __('Parent Service'),
          'parent_item_colon' => __('Parent Service:'),
          'edit_item'         => __('Edit Service'),
          'update_item'       => __('Update Service'),
          'add_new_item'      => __('Add New Service'),
          'new_item_name'     => __('New Service Name'),
          'menu_name'         => __('Services'),
      ),
      'show_ui'           => true,
      'show_admin_column' => true,
      'show_in_rest'      => true,
      'rewrite'         => array(
          'slug'              => 'services', // This controls the base slug that will display before each term
          'with_front'        => false, // Don't display the category base before "/locations/"
          'hierarchical'      => true // This will allow URL's like "/locations/boston/cambridge/"
      ),
    ));

    /* Register Services Taxonomy */
    register_taxonomy('site-type', array( 'post', 'project', 'faq', 'testimonial' ), array(
      'hierarchical'      => true,
      'labels'            => array(
          'name'              => _x('Site Types', 'taxonomy general name'),
          'singular_name'     => _x('Site Type', 'taxonomy singular name'),
          'search_items'      =>  __('Search Site Types'),
          'all_items'         => __('All Site Types'),
          'parent_item'       => __('Parent Site Type'),
          'parent_item_colon' => __('Parent Site Type:'),
          'edit_item'         => __('Edit Site Type'),
          'update_item'       => __('Update Site Type'),
          'add_new_item'      => __('Add New Site Type'),
          'new_item_name'     => __('New Site Type Name'),
          'menu_name'         => __('Site Types'),
      ),
      'show_ui'           => true,
      'show_admin_column' => true,
      'show_in_rest'      => true,
      'rewrite'         => array(
          'slug'              => 'site-types', // This controls the base slug that will display before each term
          'with_front'        => false, // Don't display the category base before "/locations/"
          'hierarchical'      => true // This will allow URL's like "/locations/boston/cambridge/"
      ),
    ));

    /* Register Project Post Type */
    register_post_type('project', array(
      'labels'            => array(
          'name'          => __('Projects', 'mqa-functionality'),
          'singular_name' => __('Project', 'mqa-functionality'),

      ),
      'public'            => true,
      'menu_position'     => 5,
      'menu_icon'         => 'dashicons-category',
      'show_in_rest'      => true,
      'supports'          => array(
          'title',
          'editor',
          'author',
          'excerpt',
          'thumbnail',
      ),
      'taxonomies'        => array(
          'category',
          'post_tag',
          'service',
          'site-type',
      ),
      'has_archive'       => 'projects',
    ));

    /* Register Faq Post Type */
    register_post_type('faq', array(
      'labels'            => array(
          'name'          => __('Faqs', 'mqa-functionality'),
          'singular_name' => __('Faq', 'mqa-functionality'),

      ),
      'public'            => true,
      'menu_position'     => 5,
      'menu_icon'         => 'dashicons-format-status',
      'show_in_rest'      => true,
      'supports'          => array(
          'title',
          'editor',
          'author',
          'excerpt',
          'thumbnail',
      ),
      'taxonomies'        => array(
          'category',
          'post_tag',
          'service',
          'site-type',
      ),
      'has_archive'       => 'faqs',
    ));

    /* Register Testimonial Post Type */
    register_post_type('testimonial', array(
      'labels'            => array(
          'name'          => __('Testimonials', 'mqa-functionality'),
          'singular_name' => __('Testimonial', 'mqa-functionality'),

      ),
      'public'            => true,
      'menu_position'     => 5,
      'menu_icon'         => 'dashicons-format-quote',
      'show_in_rest'      => true,
      'supports'          => array(
          'title',
          'editor',
          'author',
          'excerpt',
          'thumbnail',
      ),
      'taxonomies'        => array(
          'category',
          'post_tag',
          'service',
          'site-type',
      ),
      'has_archive'       => 'testimonials',
    ));
});

/* Add Appropriate Theme Options Pages */
add_action('after_setup_theme', function () {
    /* Add ACF Options Sub Pages */
    if (function_exists('acf_add_options_page')) {
    
        /* Options Page for Project CPT */
        acf_add_options_sub_page(array(
            'page_title'        => 'Project Options',
            'parent_slug'       => 'edit.php?post_type=project',
            'capability'        => 'manage_options'
        ));
    }
});
