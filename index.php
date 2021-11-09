<?php get_header(); ?>
  <main class="l-grid--main">
    <div class="p-mainvisual--front p-mainvisual">
      <img class="u-display--tab" src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/main_mainvisual_image--tab.png" alt="">
      <img class="u-display--sp" src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/main_mainvisual_image--sp2.png" alt="">
      <p class="p-mainvisual__title p-mainvisual__title--front">ダミーサイト</p>
    </div>
    <article class="l-outer--front">
      <ul class="l-grid--panel">
        <li class="c-panel">
          <?php
            $cat = get_category_by_slug('takeout');
            $cat_id = $cat->term_id;
          ?>
          <a href="<?php echo esc_url(get_category_link($cat_id)); ?>">
          <img class="c-panel__image" src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/main_panel--takeout.png" alt="">
            <div class="c-panel__item">
              <h2 class="c-panel__item__heading">Take Out</h2>
              <div class="c-panel__item__main c-inner-item--panel">
                <dl class="c-panel__item__main__list c-inner-item--panel__list">
                  <dt class="c-panel__item__main__list__title c-inner-item--panel__list__title">Take OUT</dt>
                  <dd class="c-panel__item__main__list__text c-inner-item--panel__list__text">当店のテイクアウトで利用できる商品を掲載しています</dd>
                </dl>
                <dl class="c-panel__item__main__list c-inner-item--panel__list">
                  <dt class="c-panel__item__main__list__title c-inner-item--panel__list__title">Take OUT</dt>
                  <dd class="c-panel__item__main__list__text c-inner-item--panel__list__text">当店のテイクアウトで利用できる商品を掲載しています</dd>
                </dl>
              </div>
            </div>
          </a>
        </li>
        <li class="c-panel">
          <?php
            $cat = get_category_by_slug('eatin');
            $cat_id = $cat->term_id;
          ?>
          <a href="<?php echo esc_url(get_category_link($cat_id)); ?>">
            <img class="c-panel__image" src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/main_panel--eatin.png" alt="">
            <div class="c-panel__item">
              <h2 class="c-panel__item__heading">Eat In</h2>
              <div class="c-panel__item__main c-inner-item--panel">
                <dl class="c-panel__item__main__list c-inner-item--panel__list">
                  <dt class="c-panel__item__main__list__title c-inner-item--panel__list__title">Eat In</dt>
                  <dd class="c-panel__item__main__list__text c-inner-item--panel__list__text">当店のテイクアウトで利用できる商品を掲載しています</dd>
                </dl>
                <dl class="c-panel__item__main__list c-inner-item--panel__list">
                  <dt class="c-panel__item__main__list__title c-inner-item--panel__list__title">Eat In</dt>
                  <dd class="c-panel__item__main__list__text c-inner-item--panel__list__text">当店のテイクアウトで利用できる商品を掲載しています</dd>
                </dl>
              </div>
            </div>
          </a>
        </li>
      </ul>
    </article>
    <div class="p-map">
      <iframe class="p-map__data" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12966.991898658345!2d139.7454329!3d35.6585805!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1633198147209!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <div class="p-map__description">
        <h4 class="p-map__description__title">見出しが入ります</h4>
        <p class="p-map__description__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
      </div>
  </main>
  <?php get_sidebar(); ?>
  <?php get_footer(); ?>
