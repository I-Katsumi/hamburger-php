<?php get_header(); ?>
    <main class="l-grid--main">
        <div class="p-mainvisual--single p-mainvisual">
        <?php
            if (has_post_thumbnail() ) :
                the_post_thumbnail();
            else : ?>
            <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/main_mainvisual_image--tab.png." alt="noimage">
        <?php
            endif;
        ?>
            <h1 class="p-mainvisual__title p-mainvisual__title--single"><?php the_title(); ?></h1>
        </div>
        <?php
            if( have_posts() ) : //1.投稿データがあるかの条件分岐。
                while( have_posts() ) : // 2.表示する投稿データがあれば繰り返し処理開始
                    the_post(); ?>
        <div class="l-outer--single">
            <article id="post-<?php the_ID(); ?>"<?php post_class('p-post'); ?>>
                <?php the_content(); ?>


                <?php wp_link_pages(); // 記事内ページャー ?>

            </article>
            <?php endwhile; // 5.繰り返し処理ここまで。投稿データがまだあればwhileに戻る。なければ終了
            else : //6.投稿データがなければ
                ?><p>表示する記事がありません</p><?php //7.ない時の処理
            endif; ?>
        </div>
    </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
