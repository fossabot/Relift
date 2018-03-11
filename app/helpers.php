<?php
/**
 * Created by PhpStorm.
 * User: genes
 * Date: 2018/2/6
 * Time: 19:41
 */
use App\Models\Config;

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

if (! function_exists('conf')){
	/*读取配置*/
	function conf($name){
		 $conf = Config::all()->toArray();
		 $arr = [];
		 foreach ($conf as $k => $v){
		 	$arr[$v['name']] = $v['value'];
		 }
		 return $arr[$name];
	}
}

if (! function_exists('post_img')){
	/*文章图片显示*/
	function post_img($img){
		return asset('storage/uploads/' . $img);
	}
}