<article class="p-card <?php the_ID(); ?>"<?php post_class(); ?>>
  <ul class="p-card__list">
    <?php if( have_posts() ) :
      while( have_posts() ) :
        the_post(); ?>
          <li class="c-card">
            <figure  class="c-card__inner" >
              <?php
                if (has_post_thumbnail() ) :
                  the_post_thumbnail();
                else : ?>
                <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/noimage.png" alt="noimage">
              <?php endif; ?>
              <figcaption class="c-card__item">
                <h4><?php the_title(); ?></h4>
                <?php the_excerpt(); ?>
                <div class="c-card__item__button">
                  <a class="c-card__item__button__link" href="<?php the_permalink(); ?>">詳しく見る</a>
                </div>
              </figcaption>
            </figure>
          </li>
        <?php endwhile;
      else :
        ?><p>表示できる記事がありません</p><?php
      endif;
    ?>
  </ul>
</article>


