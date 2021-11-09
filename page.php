<?php get_header(); ?>
    <main class="l-grid--main">
        <div class="p-mainvisual--page p-mainvisual">
        <?php
            if (has_post_thumbnail() ) :
                the_post_thumbnail();
            else : ?>
            <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/page_mainvisual_image.png" alt="noimage">
            <?php endif; ?>
                <h1 class="p-mainvisual__title p-mainvisual__title--page"><?php the_title(); ?></h1>
        </div>
        <div class="l-outer--page">
            <?php
                if( have_posts() ) : //1.投稿データがあるかの条件分岐。
                    while( have_posts() ) : // 2.表示する投稿データがあれば繰り返し処理開始
                        the_post(); ?>
                <div id="post-<?php the_ID(); ?>"<?php post_class('p-page'); ?>>
                    <?php the_content(); ?>
                </div>
                <?php endwhile; // 5.繰り返し処理ここまで。投稿データがまだあればwhileに戻る。なければ終了
                else : //6.投稿データがなければ
            ?><p>表示する記事がありません</p>
            <?php
                endif;
            ?>
        </div>
    </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
