<?php get_header(); ?>
<main class="l-grid--main">
  <div class="p-headline">
    <img class="p-headline__image p-headline__image--sp" src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/headline_image--sp.png" alt="">
    <img class="p-headline__image p-headline__image--pc" src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/headline_image--pc.png" alt="">
    <h1 class="p-headline__item">Search:
      <span class="p-headline__title"><?php the_search_query(); ?></span>
    </h1>
  </div>
  <div class="l-outer--archive">
    <?php echo category_description(); ?>

  <?php get_template_part("components/archive"); ?>

  </div>
  <?php wp_pagenavi(); ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
