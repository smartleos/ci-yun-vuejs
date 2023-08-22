<footer class="footer container">
    <div class="footer__logo">
        <?php get_svg('logo_verticle') ?>
    </div>
    <div class="footer__middle grid">
        <ul class="footer__middle-info col-2-6-medium col-1-5-mobile">
            <li>電話｜05-2892336</li>
            <li>住址｜嘉義縣水上鄉南鄉村牛稠埔54號之4</li>
            <li>信箱｜ciyun303@gmail.com</li>
        </ul>
        <div class="footer__middle-social col-6-8-medium col-4-6-tablet col-1-5-mobile">
            <a href="/">
                <?php get_svg('facebook') ?>
            </a>
            <a href="/">
                <?php get_svg('line') ?>
            </a>
            <a href="/">
                <?php get_svg('twitter') ?>
            </a>
        </div>
        <div class="footer__middle-map col-10-12-medium col-5-9-tablet col-1-5-mobile">
            <div class="grid -cols-2-medium -cols-4-mobile">
                <a href="/about" class="col-1-2-medium col-3-4-tablet col-1-1-mobile">關於慈雲</a>
                <a href="/charity" class="col-2-3-medium col-4-5-mobile">慈善公益</a>
                <a href="/news" class="col-1-2-medium col-3-4-tablet col-1-1-mobile">最新消息</a>
                <a href="/service" class="col-2-3-medium col-4-5-mobile">客服資訊</a>
                <a href="/products" class="col-1-2-medium col-3-4-tablet col-1-1-mobile">產品介紹</a>
                <a href="/download" class="col-2-3-medium col-4-5-mobile">常用表單</a>
            </div>
        </div>
    </div>
    <div class="footer__back">
        <?php get_svg('arrow_up') ?>
        <p>回到首頁</p>
        <img src="<?php image_dir() ?>page/deco_cloud.png" alt="">
    </div>
    <div class="footer__bottom grid">
        <p class="col-2-4-tablet">© 2023 Copyright</p>
        <a class="col-10-12-tablet" href="/member/privacy">隱私權條款</a>
    </div>
    <figure class="footer__deco">
        <img src="<?php image_dir() ?>page/deco_cloud.png" alt="">
    </figure>
    <figure class="footer__deco">
        <img src="<?php image_dir() ?>page/deco_cloud.png" alt="">
    </figure>
</footer>


	<?php
		//引入 js
		$dir = '/assets/js/';
		$files = glob($_SERVER['DOCUMENT_ROOT'].$dir.'*.js');

		foreach ($files as $file) {
			$file = str_replace($_SERVER['DOCUMENT_ROOT'], '', $file);
            echo '<script src="' . $file . '" type="text/javascript"></script>';
		}
	?>
    
</body>
</html>