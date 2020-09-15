<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fv
 */


function show_sm ($sm_name, $sm_address) {
  $image_address = get_template_directory_uri();
  if($sm_address) {
    return <<<HTML
      <div  class="footer__sm-box">
        <a class="footer__sm-link" href="{$sm_address}">
          <img class="footer__sm-image" src="{$image_address}/dist/img/icons/{$sm_name}.svg">
        </a>
      </div>
    HTML;
  }
}


?>
<footer id="colophon" class="site-footer">
  <div class="footer flex-column d-flex align-items-center">
  <div class="page-scroll page-scroll--footer">
    <button id="scroll-top" class="page-scroll__button">
        <img class="page-scroll__image" src="<?= images()?>icons/down.svg" alt="arrow down">
    </button>
  </div>
    <div class="footer__container">
      <div class="footer__wrap">
        <h2 class="footer__name"><?php echo get_field('designer_name', 'options'); ?></h2>
        <a class="footer__text" href="<?php echo get_field('designer_mail', 'options'); ?>"><?= get_field('designer_mail', 'options'); ?></a>
        <p class="footer__text"><?php echo get_field('designer_phone', 'options'); ?></p>
        <div class="footer__sm d-flex justify-content-center">
          <?php
            echo show_sm('instagram', get_field('designer_instagram', 'options'));
            echo show_sm('facebook', get_field('designer_facebook', 'options'));
            echo show_sm('linkedin', get_field('designer_linkedin', 'options'));
          ?>
        </div>
        <p class="footer__text footer__text--final">Designer portfolio © <span id="footer-date">2020</span></p>
      </div>
    </div>
  </div>
</footer><!-- #colophon -->
</div><!-- #content -->

</div><!-- #page -->
<?php wp_footer(); ?>

</body>

</html>
