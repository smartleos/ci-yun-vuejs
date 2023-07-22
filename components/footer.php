<footer class="footer">
        <div class="foot_top">
            <div class="footnav">
                <ul>
                    <li><a href="<?php site_url() ?>/about">關於我們</i></a></li>
                    <li><a href="<?php site_url() ?>/shop">購物說明</a></li>
                    <li><a href="<?php site_url() ?>/qa">客服資訊</a></li>
                </ul>
            </div>
            <div class="backtop">
                <ul>
                    <li><a><i class="icon-icon_arrow_top"></i></a></li>
                </ul>
            </div>
            <div class="foot_social">
                <ul>
                    <li><a href="https://www.facebook.com/" target="_blank"><i class="icon-icon_fb"></i></a></li>
                    <li><a href="https://line.me/zh-hant/" target="_blank"><i class="icon-icon_line"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="foot_bottom">
            <p>© 2021 by 立暢股份有限公司</p>
        </div>
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