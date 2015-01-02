<?php
/*
Plugin Name: WBI Projects
Plugin URI: http://www.dlnr.org/plugins/wbi-projects
Description: WBI Plugin to add and maintain projects
Version: 0.1
Author: DLNR
Author URI: http://dlnr.org/
*/

defined('ABSPATH') or die("http://www.webuildindia.com");

if ( ! function_exists('projects') ) {
// Register Custom Post Type
  function projects() {

    $labels = array(
    'name'                => _x( 'Projects', 'Post Type General Name', 'text_domain' ),
    'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'           => __( 'Projects', 'text_domain' ),
    'parent_item_colon'   => __( 'Parent Project:', 'text_domain' ),
    'all_items'           => __( 'All Projects', 'text_domain' ),
    'view_item'           => __( 'View Project', 'text_domain' ),
    'add_new_item'        => __( 'Add New Project', 'text_domain' ),
    'add_new'             => __( 'Add New', 'text_domain' ),
    'edit_item'           => __( 'Edit Project', 'text_domain' ),
    'update_item'         => __( 'Update Project', 'text_domain' ),
    'search_items'        => __( 'Search Project', 'text_domain' ),
    'not_found'           => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $rewrite = array(
    'slug'                => 'project',
    'with_front'          => true,
    'pages'               => true,
    'feeds'               => true,
    );
    $args = array(
    'label'               => __( 'post_type', 'text_domain' ),
    'description'         => __( 'Projects for webuildindia', 'text_domain' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', ),
    'taxonomies'          => array( 'category', 'post_tag' ),
    'hierarchical'        => true,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 20,
    'menu_icon'           => 'dashicons-location-alt',
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'rewrite'             => $rewrite,
    'capability_type'     => 'post',
    );
    register_post_type( 'project', $args );

  }

  // Hook into the 'init' action
  add_action( 'init', 'projects', 0 );

}

?>
