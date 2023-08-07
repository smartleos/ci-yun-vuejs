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
                        <img src="<?php image_dir() ?>logo.svg" alt="慈雲寶塔">
                    </a>
                </div>
                <div class="col-1-2-mobile col-7-13-tablet header__membcart">
                    <a href="/member/account" class="header__member">
                        <?php get_svg('person_outline') ?>
                        <span>會員</span>
                    </a>
                    <a href="/cart/confirm" class="header__cart">
                        <?php get_svg('shopping_cart') ?>
                        <span>購物車</span>
                    </a>
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
                            <a href="/about">客服資訊</a>
                        </li>
                        <li>
                            <a href="/about">常用表單</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    