<footer class="footer container">
    <div class="footer__logo">
        <?php get_svg('logo_verticle') ?>
    </div>
    <div class="footer__middle grid">
        <ul class="footer__middle-info col-2-6-medium">
            <li>電話｜05-2892336</li>
            <li>住址｜嘉義縣水上鄉南鄉村牛稠埔54號之4</li>
            <li>信箱｜ciyun303@gmail.com</li>
        </ul>
        <div class="footer__middle-social col-6-8-medium">
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
        <div class="footer__middle-map col-10-12-medium">
            <div class="grid -cols-2-medium">
                <a class="col-1-2-medium">關於慈雲</a>
                <a class="col-2-3-medium">慈善公益</a>
                <a class="col-1-2-medium">最新消息</a>
                <a class="col-2-3-medium">客服資訊</a>
                <a class="col-1-2-medium">產品介紹</a>
                <a class="col-2-3-medium">常用表單</a>
            </div>
        </div>
    </div>
    <div class="footer__bottom grid">
        <p class="col-2-4-medium">© 2023 Copyright</p>
        <a class="col-10-12-medium" href="/">隱私權條款</a>
    </div>
    <div class="footer__back">
        <?php get_svg('arrow_up') ?>
        <p>回到首頁</p>
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