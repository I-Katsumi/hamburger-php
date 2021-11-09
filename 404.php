<?php get_header(); ?>
<main class="l-grid--main">
  <div class="l-outer--404">
    <article class="p-404">
      <img class="p-404__image" src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/404.png" alt="">
      <?php
        if( have_posts() ) :
          while( have_posts() ) :
            the_post(); ?>
          <?php endwhile;
        else :
      ?>
      <h2 class="p-404__title">ページが見つかりません。</h2>
      <p class="p-404__text">お探しのページが見つかりません。<br>一時的にアクセスできない状況にあるか、<br>移動または削除された可能性があります。</p>
      <button class="c-button--btn c-button"><a href="/">トップページへ</a></button>
      <?php
        endif;
      ?>
    </article>
  </div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
