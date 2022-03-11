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
Custom Post Type
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

/* ACF Options Page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}*/

function nl2span($copy) {
  // wrap new lines in desktop line breaking span
  $copy = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $copy); // remove style attribute
  $copy = wpautop($copy);
  $copy = str_replace('<p>', '<span class="d-lg-block">', $copy);
  $copy = str_replace('</p>', '</span>', $copy);
  return $copy;
}

function nl2br_strip_p($copy) {
  // wrap new lines in desktop line breaking span
  $copy = nl2br(trim($copy));
  $copy = str_replace('<p>', '', $copy);
  $copy = str_replace('</p>', '', $copy);
  return $copy;
}

function nl2li($copy) {
  // wrap new lines in desktop line breaking span
  $copy_trim = trim($copy);
  $str = explode("\r\n", $copy_trim);
  foreach($str as $key => $value) {
    $copy_new .= '<li>' . $value . '</li>';
  }
  return $copy_new;
}