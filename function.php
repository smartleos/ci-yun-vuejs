<?php
	$project_name = "ci-yun";

	// 本機 MAMP 使用
	$siteUrl = "http://localhost/" . $project_name;
	$rootDir = __DIR__;

    // 網址
	function site_url() {
		$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
		$domainName = $_SERVER['HTTP_HOST'].'/';
		echo $protocol.$domainName;
	}

    // 圖片網址
	function image_dir() {
		echo site_url() .'assets/imgs/';
	}

    // 引入SVG檔案
    function get_svg($filename) {
        $svg = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/assets/imgs/icons/' . $filename . '.svg');
        echo $svg;
    }
	
?>