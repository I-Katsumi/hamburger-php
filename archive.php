<?php get_header(); ?>
  <main class="l-grid--main">
    <div class="p-headline">
      <img class="p-headline__image p-headline__image--sp" src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/headline_image--sp.png" alt="">
      <img class="p-headline__image p-headline__image--pc" src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/headline_image--pc.png" alt="">
      <h1 class="p-headline__item">Menu:
        <span class="p-headline__title"><?php echo esc_html( single_term_title('',false) ); ?></span>
      </h1>
    </div>
    <div class="l-outer--archive">
      <article class="p-content p-archive__description">
        <?php if (is_category() && !is_paged() && category_description()) {
          echo category_description(); } ?>
      </article>

      <?php get_template_part("components/archive"); ?>

    </div>
    <?php wp_pagenavi(); ?>
  </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
