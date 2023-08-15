<!doctype html>
<html lang="zh_TW">
  
  
<head>
	<meta charset="utf-8">
	<meta name="theme-color" content="#9A7412">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>慈雲寶塔</title>
	<meta name="description" content="A simple HTML5 Template for new projects.">
	<meta name="author" content="SitePoint">
	<meta property="og:title" content="慈雲寶塔">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://www.sitepoint.com/a-basic-html5-template/">
	<meta property="og:description" content="A simple HTML5 Template for new projects.">
	<meta property="og:image" content="image.png">

	<!-- <link rel="icon" href="/favicon.svg" type="image/svg+xml"> -->
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
	<?php
		//引入編譯後的 css
		$dir = '/assets/css/';
		$files = glob($_SERVER['DOCUMENT_ROOT'].$dir.'*.css');

		foreach ($files as $file) {
			$file = str_replace($_SERVER['DOCUMENT_ROOT'], '', $file);
			echo '<link rel="stylesheet" type="text/css" href="' . $file . '">';
		}
	?>

</head>
<body>
    <header class="header">
        <div class="container">
            <div class="grid">
                <div class="col-2-4-mobile col-1-6-tablet header__logo">
                    <a href="<?php site_url() ?>" title="回到首頁">
                        <?php get_svg('logo') ?>
                    </a>
                </div>
                <div class="col-1-3-mobile col-9-13-tablet header__membcart">
                    <a href="/member/login" class="header__membcart-member">
                        <?php get_svg('person_outline') ?>
                        <p>會員</p>
                    </a>
                    <button href="/member/account" class="header__membcart-search">
                        <?php get_svg('search') ?>
                        <p>搜尋</p>
                    </button>
                    <a href="/cart/confirm" class="header__membcart-cart">
                        <?php get_svg('shopping_cart') ?>
                        <p>購物車</p>
                        <span>1</span>
                    </a>
                </div>
                <div class="header__mobile col-4-5-mobile">
                    <button href="/member/account" class="header__mobile-search">
                        <?php get_svg('search') ?>
                    </button>
                    <div class="header__mobile-hamburger">
                        <div class="header__mobile-hamburger-wrapper">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="header__nav">
                    <ul>
                        <li>
                            <a href="/about">關於慈雲</a>
                        </li>
                        <li>
                            <a href="/news">最新消息</a>
                        </li>
                        <li>
                            <a href="/products">產品介紹</a>
                        </li>
                        <li>
                            <a href="/charity">慈善公益</a>
                        </li>
                        <li>
                            <a href="/service">客服資訊</a>
                        </li>
                        <li>
                            <a href="/download">常用表單</a>
                        </li>
                    </ul>
                    <div class="header__nav-social container">
                        <a href="">
                            <?php get_svg('facebook') ?>
                        </a>
                        <a href="">
                            <?php get_svg('line') ?>
                        </a>
                        <a href="">
                            <?php get_svg('twitter') ?>
                        </a>
                    </div>
                    <div class="header__nav-bottom container">
                        <p>© 2023 Copyright</p>
                        <a href="/member/privacy">隱私權條款</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="header__search container grid">
        <form class="header__search-wrapper col-5-9-tablet col-1-5-mobile">
            <label for="seach">全站搜尋</label>
            <input type="text" id="seach" name="seach" placeholder="請輸入 ...">
            <div class="header__search-wrapper-btns">
                <div class="header__search-wrapper-btns-item" id="cancel_search">
                    <?php 
                        $tag="button";
                        $url="";
                        $target="";
                        $text="取消";
                        $style="-outline";
                        if (file_exists('./components/button.php')) {
                            include('./components/button.php');
                        } elseif (file_exists('../components/button.php')) {
                            include('../components/button.php');
                        } elseif (file_exists('../../components/button.php')) {
                            include('../../components/button.php');
                        }
                    ?>
                </div>
                <div class="header__search-wrapper-btns-item">
                    <?php 
                        $tag="a";
                        $url="/search";
                        $target="";
                        $text="送出";
                        $style="";
                        if (file_exists('./components/button.php')) {
                            include('./components/button.php');
                        } elseif (file_exists('../components/button.php')) {
                            include('../components/button.php');
                        } elseif (file_exists('../../components/button.php')) {
                            include('../../components/button.php');
                        }
                    ?>
                </div>
            </div>
        </form>
    </div>
    <div class="header__service">
        <div class="header__service-btn">
            <?php get_svg('service') ?>
            <p>智能客服</p>
        </div>
    </div>

    