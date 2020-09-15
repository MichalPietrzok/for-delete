<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fv
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <link rel="stylesheet" href="https://use.typekit.net/oks2llw.css">
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet"> 
  <link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body data-barba="wrapper">
	<div id="page" class="site">

    <?php    

      if(get_field('designer_header_transparent', 'options')) {
        $header_background = 'transparent';
        $button_background = get_field('designer_background', 'options');
        $button_modification = 'header__button--circle';
      } else {
        $button_modification = '';
        $button_background = 'transparent';
        $header_background = get_field('designer_background', 'options');
      }
      ?>
    <header id="main-header" class="header site-header " style=" background-color: <?= $header_background ?>">
      <?php 
        if(get_field('designer_header_transparent', 'options')) {
          echo '<div class="header__bg" style=" background: '.$button_background.'"></div>';
        }
      ?>
      <div class="header__container container container--big"> 
        <div class="header__wrapper  d-flex justify-content-between align-items-center">
          <a class="header__name" style="color: <?= get_field('designer_color', 'options')?>;"   href="/"><?php echo get_field('designer_name', 'options'); ?></a>
          <button id="header-button" class="header__button <?= $button_modification ?>" style="background-color: <?= $button_background ?>;"> 
            <div class="header__button-wrap">
              <span class="header__button-line header__button-line--first" style="background: <?= get_field('designer_color', 'options')?>;" ></span>
              <span class="header__button-line header__button-line--second" style="background: <?= get_field('designer_color', 'options')?>;" ></span>
              <span class="header__button-line header__button-line--third" style="background: <?= get_field('designer_color', 'options')?>;" ></span>
            </div>
          </button>
        </div>
      </div>
      <div class="header__panel <?= $panel_modification?>" style=" background-color: <?php echo get_field('designer_background', 'options'); ?>;">
        <div class="header__panel-container container container--medium">
          <div class="header__panel-wrap row justify-content-between flex-column-reverse flex-lg-row">
            <div class="header__info col-lg-5">
              <h1 class="header__title" style="color: <?= get_field('designer_color', 'options')?>;"><?php echo get_field('designer_name', 'options'); ?></h1>
              <p class="header__text" style=" color: <?= get_field('designer_color', 'options')?>;"><?php echo get_field('designer_info', 'options') ?></p>
            </div>
            <nav class="header__navigation col-lg-5">
              <?php
                $posts = get_posts( array(
                  'post_status' => 'publish',
                  'posts_per_page' => -1,
                  'post_type'   => 'post',
                  'suppress_filters' => true
                ) );
              ?>
              
              <ul class="header__list">
                <li>
                  <a style="color: <?= get_field('designer_color', 'options')?>;" href="/">Home</a>
                </li>
                <?php
                  $i = 1;
                  foreach( $posts as $post ) :
                    setup_postdata($post); 
                ?>
                  <li class="<?= $i == 1 ? 'd-none' : '' ;?>">
                    <a  style="color: <?= get_field('designer_color', 'options')?>;" href="<?= the_permalink(); ?>">
                      <?= the_title(); ?> 
                    </a>
                  </li>
                <?php
                  $i++;
                  wp_reset_postdata(); 
                  endforeach;
                ?>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <div class="page-loader"></div>
    <div id="content" class="site-content">