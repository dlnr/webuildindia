<?php
/*
Plugin Name: WBI Companies
Plugin URI: http://www.dlnr.org/plugins/wbi-companies
Description: WBI Plugin to add and maintain companies
Version: 0.1
Author: DLNR
Author URI: http://dlnr.org/
*/

defined('ABSPATH') or die("http://www.webuildindia.com");

if ( ! function_exists('companies') ) {
  // Register Custom Post Type
  function companies() {

    $wbi_labels = array(
      'name'                => _x( 'Companies', 'Post Type General Name', 'text_domain' ),
      'singular_name'       => _x( 'Company', 'Post Type Singular Name', 'text_domain' ),
      'menu_name'           => __( 'Companies', 'text_domain' ),
      'parent_item_colon'   => __( 'Parent Company:', 'text_domain' ),
      'all_items'           => __( 'All Companies', 'text_domain' ),
      'view_item'           => __( 'View Company', 'text_domain' ),
      'add_new_item'        => __( 'Add New Company', 'text_domain' ),
      'add_new'             => __( 'Add New', 'text_domain' ),
      'edit_item'           => __( 'Edit Item', 'text_domain' ),
      'update_item'         => __( 'Update Item', 'text_domain' ),
      'search_items'        => __( 'Search Item', 'text_domain' ),
      'not_found'           => __( 'Not found', 'text_domain' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $wbi_rewrite = array(
      'slug'                => 'company',
      'with_front'          => true,
      'pages'               => true,
      'feeds'               => true,
    );
    $wbi_args = array(
      'label'               => __( 'post_type', 'text_domain' ),
      'description'         => __( 'Companies for webuildindia', 'text_domain' ),
      'labels'              => $wbi_labels,
      'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', ),
      'taxonomies'          => array( 'category', 'post_tag' ),
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 21,
      'menu_icon'           => 'dashicons-businessman',
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'rewrite'             => $wbi_rewrite,
      'capability_type'     => 'post',
    );
    register_post_type( 'company', $wbi_args );

  }

  // Hook into the 'init' action
  add_action( 'init', 'companies', 0 );
}

?>
