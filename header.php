<!DOCTYPE html>

<html itemscope itemtype="http://schema.org/" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">

    <title><?php wp_title('|', true, 'right'); ?></title>

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>?v=2018.12.03.1">

    <!-- WP HEAD -->
    <?php wp_head(); ?>
    <!-- end WP HEAD -->
  </head>

  <body <?php body_class(); ?>>
    <header id="header">
      <div class="container">
        <h1 id="site-logo"><a href="<?php bloginfo('siteurl'); ?>"><?php bloginfo('name'); ?></a></h1>
      </div>
    </header>
