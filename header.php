<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title>
    <?php wp_title(); ?>
  </title>
  <meta name="description" content="Red Wine, Responsive Multi Purpose Wordpress Theme" />
  <meta name="keywords" content="red wine, wordpress, free, free theme, wordpress theme, free wordpress theme, sidebar, off-canvas, menu, navigation, effect, inspiration, css transition, SVG, morphing, animation" />
  <meta name="author" content="Shivam Pandya" />
  <!-- <link rel="shortcut icon" href="favicon.png"> -->
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri('template_url')); ?>/assets/css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri('template_url')); ?>/assets/css/demo.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri('template_url')); ?>/assets/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri('template_url')); ?>/assets/css/menu_topside.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri('template_url')); ?>/assets/css/custom.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri('template_url')); ?>/style.css" />
  <!--    <link rel="stylesheet" type="text/css" href="css/font.css" />-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
  
      <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
      <?php wp_head(); ?> 
    </head>