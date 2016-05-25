<!DOCTYPE html>

<html itemscope itemtype="http://schema.org/" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
    
    <title><?php
    wp_title('|', true, 'right');
    bloginfo('name'); ?></title>

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png" type="image/png">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="">

    <!-- BEGIN Facebook Open Graph -->
    <meta property="og:title" content="<?php
    wp_title('|', true, 'right');
    bloginfo('name'); ?>">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?php echo home_url(); ?>">
    <meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/img/meta-image.jpg">
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <!-- END Facebook Open Graph -->

    <!-- BEGIN Google Plus -->
    <meta itemprop="name" content="<?php
    wp_title('|', true, 'right');
    bloginfo('name'); ?>">
    <meta itemprop="description" content="<?php bloginfo('description'); ?>">
    <meta itemprop="image" content="<?php echo get_stylesheet_directory_uri(); ?>/img/meta-image.jpg">
    <!-- END Google Plus -->
  
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
  </head>
  <body <?php body_class(); ?>>
    <header id="header">
      <div class="container">
        <h1 id="site-logo"><a href="<?php bloginfo('siteurl'); ?>"><?php bloginfo('name'); ?></a></h1>
      </div>
    </header>