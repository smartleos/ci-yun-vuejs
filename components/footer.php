<footer class="footer">
        <div class="foot__bottom">
            <p>© 2021 by ES Design</p>
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