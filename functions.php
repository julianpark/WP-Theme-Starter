<?php
register_nav_menus();

add_theme_support( 'post-thumbnails' );

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