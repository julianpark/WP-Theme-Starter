<?php
register_nav_menus();

add_theme_support( 'post-thumbnails' );

// Page Slug Body Class
function add_slug_body_class( $classes ) {
  global $post;
  if(isset($post)) {
    $classes[] = $post->post_type . '-' . $post->post_name;
  }
  return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

/*
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'app',
    array(
      'labels' => array(
        'name' => __( 'Apps' ),
        'singular_name' => __( 'App' )
      ),
    'public' => true,
    'has_archive' => false,
    'supports' => array('title', 'editor', 'author', 'thumbnail', 'post-formats'),
    'taxonomies' => array('post_tag', 'category')
    )
  );
}*/