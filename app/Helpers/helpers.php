<?php
/**
 * Created by PhpStorm.
 * User: genes
 * Date: 2018/3/24
 * Time: 14:17
 */

if (! function_exists('getIP')){
	/*获取客户端IP*/
	function getIP()
	{
		if (@$_SERVER["HTTP_X_FORWARDED_FOR"])
			$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
		else if (@$_SERVER["HTTP_CLIENT_IP"])
			$ip = $_SERVER["HTTP_CLIENT_IP"];
		else if (@$_SERVER["REMOTE_ADDR"])
			$ip = $_SERVER["REMOTE_ADDR"];
		else
			$ip = "Unknown";
		return $ip;
	}
}

if (! function_exists('html_css')){
	/**
	 * 加载样式
	 *
	 * @param String $css
	 * @return String $css
	 */

	function html_css($css){
		if (is_file(asset($css)))
			return '<link rel="stylesheet" type="text/css" href="' . asset($css) . '" />';
		else
			return '<link rel="stylesheet" type="text/css" href="' . $css . '" />';
	}
}

if (! function_exists('html_js')){
	/**
	 * 加载JS
	 *
	 * @param String $js
	 * @return String $js
	 */

	function html_js($js){
		if (is_file(asset($js)))
			return '<script src="' . asset($js) . '"></script>';
		else
			return '<script src="' . $js . '"></script>';
	}
}

if (! function_exists('media')){
	/**
	 * 加载媒体
	 *
	 * @param String $media
	 * @return String $media
	 */

	function media($media){
		return '/storage/' . $media;
	}
}

if (! function_exists('nb')){
	/**
	 * 文章起头空行
	 *
	 * @return String $js
	 */

	function nb(){
		return str_repeat('&nbsp;', 6);
	}
}