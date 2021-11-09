<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamburger</title>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body class="l-fixed">
    <div class="l-fixed__background">メニューをクリックしたら背景を暗くする</div>
    <div class="l-grid">
        <header class="p-header l-grid--header">
        <div class="p-header__inner">
            <p class="p-header__logo"><a href="index.html">Hamburger</a></p>
            <form class="p-header__search c-search" action="" method="get">
            <div class="c-search__box">
                <input class="c-search__box__keyword" type="" placeholder="チーズバーガー"/>
                <i class="c-search__box__icon fas fa-search"></i>
                <input class="c-search__box__submit" type="submit" value="検索"/>
            </div>
            </form>
        </div>
        <button class="p-slideIn-Out">
            <span class="c-logo p-slideIn-Out__button p-slideIn-Out__button--In">Menu</span>
        </button>
        </header>
        <main class="l-grid--main">
        <div class="p-headline">
            <img class="p-headline__image p-headline__image--sp" src="img/headline_image--sp.png" alt="">
            <img class="p-headline__image p-headline__image--pc" src="img/headline_image--pc.png" alt="">
            <h1 class="p-headline__item">Search:<span class="p-headline__title">チーズバーガー</span></h1>
        </div>
        <div class="l-outer--content">
            <article class="p-content">
                <!-- <h2 class="p-content__title">小見出しが入ります</h2>
                <p class="p-content__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p> -->
            </article>
            <section>
                <ul>
                    <li class="c-card">
                        <figure  class="c-card__inner" >
                            <img class="c-card__img" src="img/card_image.png" alt="">
                            <figcaption class="c-card__item">
                                <div class="c-card__item__inner">
                                    <h4 class="c-card__item__heading">チーズバーガー</h4>
                                    <div class="c-inner-item--card">
                                        <h5 class="c-inner-item--card__title">小見出しが入ります</h5>
                                        <p class="c-inner-item--card__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                    </div>
                                    <div class="c-card__item__button">
                                        <a class="c-card__item__button__link" href="single.html">詳しく見る</a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="c-card">
                        <figure  class="c-card__image c-card__inner" >
                            <img class="c-card__img" src="img/card_image.png" alt="">
                            <figcaption class="c-card__item">
                                <div class="c-card__item__inner">
                                    <h4 class="c-card__item__heading">ダブルチーズバーガー</h4>
                                    <div class="c-inner-item--card">
                                        <h5 class="c-inner-item--card__title">小見出しが入ります</h5>
                                        <p class="c-inner-item--card__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                    </div>
                                    <div class="c-card__item__button">
                                        <a class="c-card__item__button__link" href="single.html">詳しく見る</a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="c-card">
                        <figure  class="c-card__inner" >
                            <img class="c-card__img" src="img/card_image.png" alt="">
                            <figcaption class="c-card__item">
                                <div class="c-card__item__inner">
                                    <h4 class="c-card__item__heading">スペシャルチーズバーガー</h4>
                                    <div class="c-inner-item--card">
                                        <h5 class="c-inner-item--card__title">小見出しが入ります</h5>
                                        <p class="c-inner-item--card__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                    </div>
                                    <div class="c-card__item__button">
                                        <a class="c-card__item__button__link" href="single.html">詳しく見る</a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </section>
        </div>
        <ul class="c-pagination">
            <li class="c-pagination__title">page 1/10</li>
            <li class="c-pagination__pre"><a class="c-pagination__link" href="">
                <span><i class="fas fa-angle-double-left"></i></span></a></li>
            <li class="c-pagination__number c-pagination__current"><a class="c-pagination__link" href="">1</a></li>
            <li class="c-pagination__number"><a class="c-pagination__link" href="">2</a></li>
            <li class="c-pagination__number"><a class="c-pagination__link" href="">3</a></li>
            <li class="c-pagination__number"><a class="c-pagination__link" href="">4</a></li>
            <li class="c-pagination__number"><a class="c-pagination__link" href="">5</a></li>
            <li class="c-pagination__number"><a class="c-pagination__link" href="">6</a></li>
            <li class="c-pagination__number"><a class="c-pagination__link" href="">7</a></li>
            <li class="c-pagination__number"><a class="c-pagination__link" href="">8</a></li>
            <li class="c-pagination__number"><a class="c-pagination__link" href="">9</a></li>
            <li class="c-pagination__next"><a class="c-pagination__link" href="">
                <span><i class="fas fa-angle-double-right"></i></span></a></li>
        </ul>
        </main>
        <aside class="l-sidebar l-grid--sidebar">
            <button class="p-slideIn-Out">
                <span class="c-mark p-slideIn-Out__button p-slideIn-Out__button--Out"></span>
            </button>
            <div class="p-sidebarMenu">
                <div class="c-logo p-sidebarMenu__title">Menu</div>
                <ul  class="p-sidebarMenu__list">
                    <li class="p-sidebarMenu__list__item"><a href="arcive.html">バーガー</a>
                        <ul class="p-sidebarMenu__list__item__lv2">
                        <li class="p-sidebarMenu__list__item__lv2__item"><a href="single.html">ハンバーガー</a></li>
                        <li class="p-sidebarMenu__list__item__lv2__item"><a href="single.html">チーズバーガー</a></li>
                        <li class="p-sidebarMenu__list__item__lv2__item"><a href="single.html">テリヤキバーガー</a></li>
                        <li class="p-sidebarMenu__list__item__lv2__item"><a href="single.html">アボカドバーガー</a></li>
                        <li class="p-sidebarMenu__list__item__lv2__item"><a href="single.html">フィッシュバーガー</a></li>
                        <li class="p-sidebarMenu__list__item__lv2__item"><a href="single.html">ベーコンバーガー</a></li>
                        <li class="p-sidebarMenu__list__item__lv2__item"><a href="single.html">チキンバーガー</a></li>
                        </ul>
                    </li>
                    <li class="p-sidebarMenu__list__item"><a href="">サイド</a>
                        <ul class="p-sidebarMenu__list__item__lv2">
                        <li class="p-sidebarMenu__list__item__lv2__item"><a href="">ポテト</a></li>
                        <li class="p-sidebarMenu__list__item__lv2__item"><a href="">サラダ</a></li>
                        <li class="p-sidebarMenu__list__item__lv2__item"><a href="">ナゲット</a></li>
                        <li class="p-sidebarMenu__list__item__lv2__item"><a href="">コーン</a></li>
                        </ul>
                    </li>
                    <li class="p-sidebarMenu__list__item"><a href="">ドリンク</a>
                        <ul class="p-sidebarMenu__list__item__lv2">
                        <li class="p-sidebarMenu__list__item__lv2__item"><a href="">コーラ</a></li>
                        <li class="p-sidebarMenu__list__item__lv2__item"><a href="">ファンタ</a></li>
                        <li class="p-sidebarMenu__list__item__lv2__item"><a href="">オレンジ</a></li>
                        <li class="p-sidebarMenu__list__item__lv2__item"><a href="">アップル</a></li>
                        <li class="p-sidebarMenu__list__item__lv2__item"><a href="">紅茶（Ice/Hot）</a></li>
                        <li class="p-sidebarMenu__list__item__lv2__item"><a href="">コーヒー（Ice/Hot）</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
        <footer class="p-footer l-grid--footer">
            <ul class="p-footer__nav">
                <li class="p-footer__nav__item"><a href="">ショップ情報</a></li>
                <p class="p-footer__nav__partition">|</p>
                <li class="p-footer__nav__item"><a href="">ヒストリー</a></li>
            </ul>
            <small class="c-copyright">Copyright: RaiseTech</small>
        </footer>
    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="JavaScript/main.js"></script> -->
</body>
</html>