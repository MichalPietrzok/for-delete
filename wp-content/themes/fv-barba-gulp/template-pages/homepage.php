<?php /* Template Name: Homepage */
get_header();
?>

<div class="home" data-barba="container"  data-barba-namespace="homepage">
<div id="scroll-button" class="page-scroll page-scroll--banner">
  <button  class="page-scroll__button">
      <img class="page-scroll__image" src="<?= images()?>icons/down.svg" alt="arrow down">
  </button>
</div>
  <?php
    $posts = get_posts( array(
      'numberposts' => 1,
      'category'    => 0,
      'orderby'     => 'date',
      'order'       => 'DESC',
      'include'     => array(),
      'exclude'     => array(),
      'meta_key'    => '',
      'meta_value'  =>'',
      'post_type'   => 'post',
      'suppress_filters' => true
    ) );
  ?>

<?php
  foreach( $posts as $post ) :
    setup_postdata($post); 
    $i = 1;
    while (has_sub_field('content_section')) : ?>
      <section class="page-image <?= $i == 1 ? 'page-image--banner' : ''?>" <?= $i == 1 ? 'style="background-image: url('.get_sub_field('content_image').');"' : '' ?> >
          <img class="page-image__item <?= $i == 1 ? 'page-image__item--banner' : ''?> " src="<?= get_sub_field('content_image'); ?>" alt="">
      </section>

      <?php if (get_sub_field('content_title') || get_sub_field('content_text')) : ?> 
    
      <section class="about about--first" style="background-color: <?= get_sub_field('content_background');?>">
        <div class="about-container container container--medium">
          <div class="about-wrap row justify-content-between <?= get_sub_field('content_center') ? 'about-wrap--center' : '' ?>">
            <div class="about__title__wrap <?= get_sub_field('content_column') ? 'col-lg-12' : 'col-lg-5' ?>">
              <h2 class="about__title" style="color: <?= get_sub_field('content_color');?>"><?= get_sub_field('content_title'); ?></h2>
            </div>
            <div class="about-info <?= get_sub_field('content_column') ? 'col-lg-12' : 'col-lg-5' ?>">
              <p class="about-info__text" style="color: <?= get_sub_field('content_color');?>"><?= get_sub_field('content_text'); ?></p>
            </div>
          </div>
        </div>
      </section>

  <?php 
          endif;
          $i++;
        endwhile;
      wp_reset_postdata(); 
    endforeach;
  ?>
</div>

<?php get_footer(); ?>









