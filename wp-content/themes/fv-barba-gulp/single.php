<?php
  get_header();
?>

<div class="products" data-barba="container"  data-barba-namespace="products">
  <?php
    $i = 1;
    while (has_sub_field('content_section')) :
  ?>
  <section class="page-image <?= $i == 1 ? 'page-image--banner' : ''?>" <?= $i == 1 ? 'style="background-image: url('.get_sub_field('content_image').');"' : '' ?> >
      <img class="page-image__item <?= $i == 1 ? 'page-image__item--banner' : ''?> " src="<?= get_sub_field('content_image'); ?>" alt="">
  </section>
  <?php if (get_sub_field('content_title') || get_sub_field('content_text')) : ?> 
    <section class="about about--first" style="background-color: <?= get_sub_field('content_background');?>">
      <div class="about-container container container--medium">
        <div class="about-wrap row justify-content-between flex-column <?= get_sub_field('content_center') ? 'about-wrap--center' : '' ?>  <?= !get_sub_field('content_column') ? 'flex-lg-row' : '' ?>">
          <div class="about__title__wrap <?= get_sub_field('content_column') ? 'col-12' : 'col-lg-5' ?>">
            <h2 class="about__title" style="color: <?= get_sub_field('content_color');?>"><?= get_sub_field('content_title'); ?></h2>
          </div>
          <div class="about-info <?= get_sub_field('content_column') ? 'col-12' : 'col-lg-5' ?>">
            <p class="about-info__text" style="color: <?= get_sub_field('content_color');?>"><?= get_sub_field('content_text'); ?></p>
          </div>
        </div>
      </div>
    </section>
  <?php 
    endif;
    $i++;
    endwhile;
  ?>
</div>

<?php get_footer(); ?>