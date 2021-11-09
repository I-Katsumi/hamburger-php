<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <?php if( is_search() || is_archive() ) : ?>
        <div class="l-fixed p-archive l-grid">
    <?php else : ?>
        <div class="l-fixed l-grid">
    <?php endif; ?>
        <div class="l-fixed__background">メニューをクリックしたら背景を暗くする</div>
            <header class="p-header l-grid--header">
                <div class="p-header__inner">
                    <h1 class="p-header__logo"><a href="<?php echo esc_url(home_url('/')); ?>">Hamburger</a></h1>
                    <?php get_search_form(); ?>
                </div>
                <button class="p-slideIn-Out">
                    <span class="c-logo p-slideIn-Out__button p-slideIn-Out__button--In">Menu</span>
                </button>
            </header>
