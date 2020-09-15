<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package fv
 */

get_header();
?>
<section class="error" data-barba="container"  data-barba-namespace="error">
  <div class="error__info">
    <h1 class="error__info-title">404</h1>
    <p class="error__info-text"> Podana podstrona nie istnieje. </p>
    <a class="error__info-link" href="<?= get_home_url() ?>">Strona Głowna</a>
  </div>
</section>
<?php
get_footer();
